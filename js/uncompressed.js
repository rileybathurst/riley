// The letters of CCC fade after a little while
function code() {
	var ghosts = document.getElementsByClassName('ghostly');
	// console.log(ghosts.length);
	for (var i=0; i<ghosts.length; i++) {
		ghosts[i].classList.remove('presence');
	}
}

// wait a while before we let the function run
if (document.getElementsByClassName('ghostly') !== null) {
	window.onload = function() {
		setTimeout(code, 3000);
	}
}

// front page title changer
if (document.getElementById('changeText') !== null) {
	var text = ["Person", "Photographer", "Videographer"];
	var counter = 0;
	var elem = document.getElementById("changeText");
	var inst = setInterval(change, 1000);

	function change() {
		elem.innerHTML = text[counter];
		counter++;
		if (counter >= text.length) {
			counter = 0;
		}
	}
}

// IntersectionObserver im not sure if this running properly
if (document.querySelectorAll('.spine-border') !== null) {
	// some variables have been used above in the laptop screen flipper
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
}

// IO for some fancy headers
// if (document.getElementsByClassName('.folding') !== null) {
// 	if ('IntersectionObserver' in window &&
// 	'IntersectionObserverEntry' in window &&
// 	'intersectionRatio' in window.IntersectionObserverEntry.prototype) {

// 		let flatten = document.querySelector('.folding');
// 		console.log(flatten.classList);
// 		// ["cool", "new", "shades", value: "cool new shades"]
// 		console.log(flatten.classList[1]); // new
// 		flatten.classList.add('flatten');

// 		var numSteps = 20.0;

// 		var boxElement;
// 		var prevRatio = 0.0;
// 		var wkT = "rotateX(ratiodeg)";

// 		// Set things up.

// 		window.addEventListener("load", function(event) {
// 		boxElement = document.querySelector(".folding");

// 		createObserver();
// 		}, false);

// 		function createObserver() {
// 		var observer;

// 		var options = {
// 		root: null,
// 		rootMargin: "0px",
// 		threshold: buildThresholdList()
// 		};

// 		observer = new IntersectionObserver(handleIntersect, options);
// 		observer.observe(boxElement);
// 		}

// 		function buildThresholdList() {
// 		var thresholds = [];
// 		var numSteps = 100;

// 		for (var i=1.0; i<=numSteps; i++) {
// 		var ratio = i/numSteps;
// 		thresholds.push(ratio);
// 		}

// 		thresholds.push(0);
// 		return thresholds;
// 		}

// 		function handleIntersect(entries, observer) {
// 		entries.forEach(function(entry) {
// 			entry.target.style.webkitTransform = wkT.replace("ratio", (90-(entry.intersectionRatio*90)));
// 		prevRatio = entry.intersectionRatio;
// 		});
// 		}
// 	}
// }
