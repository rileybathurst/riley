// Tryptych

var first = document.getElementById('first');
if (first != null) {
  // for images Im going to go back to a triptych carousel thing thats smoother and more interesting

  var intElemOffsetWidth = document.getElementById('first').offsetWidth;

  console.log('width ' + intElemOffsetWidth);
  document.getElementById('snap-scroll-container-coordinates').scrollLeft += intElemOffsetWidth;

  var snap_scroll = document.getElementById("snap-scroll-container-coordinates");

  var th1 = document.getElementById("th1");
  var th2 = document.getElementById("th2");
  var th3 = document.getElementById("th3");

  th1.addEventListener("click", event => {
    document.getElementById('snap-scroll-container-coordinates').scrollLeft += - intElemOffsetWidth*2;
    // doubling the negative always pulls us to the far left
  });


  var target = document.getElementById("target");
  var rext = target.getBoundingClientRect();

  // this is the hard one as I dont know which way to scroll
  th2.addEventListener("click", event => {
    snap_scroll.scroll(intElemOffsetWidth,0);
  });

  th3.addEventListener("click", event => {
    document.getElementById('snap-scroll-container-coordinates').scrollLeft += intElemOffsetWidth*2;
    // doubling always pulls us to the far left
  });

  var left = document.getElementById("left");
  var right = document.getElementById("right");

  // almost the same as th1 but only a single movement
  left.addEventListener("click", event => {
    document.getElementById('snap-scroll-container-coordinates').scrollLeft += - intElemOffsetWidth;
  });

  right.addEventListener("click", event => {
    document.getElementById('snap-scroll-container-coordinates').scrollLeft += intElemOffsetWidth;
    // doubling always pulls us to the far left
  });

  function sideScroll(element,direction,speed,distance,step){
    scrollAmount = 0;
    var slideTimer = setInterval(function(){
        if(direction == 'left'){
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
    }, speed);
  }
} // tryptych

// menu border slider
// Wordpress doesnt let you add an hr to a menu so I'll do it with JS

var menu = document.getElementById('top-menu');
if (menu != null) {
  // drop in the hr
  let hr = document.createElement('hr');
  menu.appendChild(hr);

  if (document.body.classList.contains('single')) { // horizontal

    // when the menu is horizontal I need to know the width and push different amounts which currently has guess and check math
    // console.log(menu.children[0].offsetWidth);
    let clicks = menu.children[0];

    let clicksStyle = window.getComputedStyle(clicks);
    let clicksRem = clicksStyle.getPropertyValue('font-size');
    // console.log('clicksRem = ' + clicksRem); // this includes px

    let ClicksPx = clicksRem.replace('px', '');
    let clicksNum = parseInt(ClicksPx, 10); // The second argument is called the radix. This is the base number used in mathematical systems. For our use, it should always be 10.
    // console.log(ClicksPx); // I think I only need to do this once as its just pulling the font size

    // console.log(menu.children[1].offsetWidth);
    let code = menu.children[1];

    // console.log(menu.children[2].offsetWidth);
    let camera = menu.children[2];

    // on hover of element set the width of the hr to this and the margin to
    clicks.addEventListener("mouseenter", function( event ) {
      hr.style.width = clicks.offsetWidth + 'px';
      let ClicksPush = clicksNum/4 + 'px'; // Guess and Check
      // console.log('clicksPush ' + ClicksPush);

      hr.style.marginLeft = ClicksPush;
    }, false);

    code.addEventListener("mouseenter", function( event ) {
      hr.style.width = code.offsetWidth + 'px';
      let codePush = clicks.offsetWidth + clicksNum/1.25 + 'px'; // guess and check
      // console.log('codePush ' + codePush);

      hr.style.marginLeft = codePush;
      
    }, false);

    camera.addEventListener("mouseenter", function( event ) {
      hr.style.width = camera.offsetWidth + 'px';
      
      let cameraPush = clicks.offsetWidth + code.offsetWidth + clicksNum*1.4 + 'px'; // guess and check
      // console.log('codePush ' + cameraPush);

      hr.style.marginLeft = cameraPush;
    }, false);

    clicks.addEventListener("mouseleave", function( event ) {
      hr.style.marginLeft = '-33px';
    }, false);

    code.addEventListener("mouseleave", function( event ) {
      hr.style.marginLeft = '-33px';
    }, false);
    
    camera.addEventListener("mouseleave", function( event ) {
      hr.style.marginLeft = '-33px';
    }, false);
  } // if horizontal

} // menu


// folding laptops
// https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API
// console.log(document.title); // this seemed less reliable
if (document.getElementById('specific-title')) { // if a single page first

  let PriestCheck = document.getElementById('specific-title').textContent;

  if (PriestCheck === "Priest") { // super specific I can probably do something better with incorporating both of these if statements

    // console.log('the page');

    // check we have the ability in the browser
    if ('IntersectionObserver' in window &&
    'IntersectionObserverEntry' in window &&
    'intersectionRatio' in window.IntersectionObserverEntry.prototype) {

      // grab the screen
      let flatten = document.querySelector('.folding');
      // console.log(flatten.classList);
      // add a flatten class? why am I not just starting with this?
      flatten.classList.add('flatten');
      // console.log(flatten.classList[1]); // new

      // var numSteps = 20.0;

      var boxElement; // why am I defining this before its a thing?
      var prevRatio = 0.0; // starting point this makes sense
      var wkT = "rotateX(ratiodeg)"; // what we are transforming

      // wait till the page loads before creating the observer
      window.addEventListener("load", (event) => {

        // what am I transforming
        boxElement = document.querySelector(".folding").lastChild; // well not anymore as we actually now want the img not the picture element
        // console.log('boxElement ' + boxElement);
        // for (let i = 0; i < boxElement.children.length; i++) {
        //   console.log('tag names ' + boxElement.children[i].tagName);
        // }


        createObserver();
      }, false); // I cant work this out but I mostly use false here https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener

      // the actual function
      function createObserver() {
        var observer;

        var options = {
          root: null,
          rootMargin: "0px", // I think this is the start when its on the edge
          threshold: buildThresholdList()
        };

        observer = new IntersectionObserver(handleIntersect, options); // what are the specifics you do
        observer.observe(boxElement); // what we are altering
      }

      function buildThresholdList() {
        var thresholds = []; // make an empty array
        var numSteps = 20; // how many midpoints

        // add each step to the array
        for (var i=1.0; i<=numSteps; i++) {
          var ratio = i/numSteps;
          thresholds.push(ratio);
        }

        thresholds.push(0);
        return thresholds;
      }

      function handleIntersect(entries, observer) {
        entries.forEach(function(entry) { // why is this a foreach? isnt there only one?

          entry.target.style.webkitTransform = wkT.replace("ratio", (90-(entry.intersectionRatio*90))); // wierd backward math
          // console.log(entry.target.style.webkitTransform);
          
          prevRatio = entry.intersectionRatio;
        }); // entries.forEach
      } // handleIntersect()
    } // if has observer
  } // if title === priest
}

// Spine Border io
  // some variables have been used above in the laptop screen flipper so this should get updated
  var numSteps2 = 20.0;

  var spineElement;
  var prevRatio2 = 0.0;
  var mT = "ratio2em";

  // Set things up.

  window.addEventListener("load", function(event) {
    spineElement = document.querySelectorAll(".spine-border");

    createObserver2();
  }, false);

  function createObserver2() {
    var observer2;

    var options2 = {
      root: null,
      rootMargin: "0px",
      threshold: buildThresholdList2()
    };

    observer2 = new IntersectionObserver(handleIntersect2, options2);

    spineElement.forEach(spineElements => {
      observer2.observe(spineElements);
    });
  }

  function buildThresholdList2() {
    var thresholds2 = [];
    var numSteps2 = 100;

    for (var j=1.0; j<=numSteps2; j++) {
      var ratio2 = j/numSteps2;
      thresholds2.push(ratio2);
    }

    thresholds2.push(0);
    return thresholds2;
  }

  function handleIntersect2(entries, observer2) {
    entries.forEach(function(entry) {
      entry.target.style.marginTop = mT.replace("ratio2", (entry.intersectionRatio*5));
      prevRatio2 = entry.intersectionRatio;
    });
  }
// end of spine border

// Keep this here so I know were making the file
console.log('end of file');


DataTransferItemList

/*------------------------------------*\
  #changetext
\*------------------------------------*/

// on the front page there is a sort of spinner

var text = ["Person", "Photographer", "Videographer"];
var counter = 0;
var elem = document.getElementById("changeText");
var inst = setInterval(change, 1000);

function change() {
  elem.innerHTML = text[counter];
  counter++;
  if (counter >= text.length) {
  counter = 0;
  // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
  }
}