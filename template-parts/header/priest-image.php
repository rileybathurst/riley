<figure class="custom-header-media">
  <img src="<?php echo content_url(); ?>/uploads/2019/05/priest-macbook-white-2019-screen.png" alt="priest sheetmetal website design and development" class="folding" style="transform-origin: bottom; transition: 3s ease-in-out;">
  <img src="<?php echo content_url(); ?>/uploads/2019/05/priest-macbook-white-2019-base.png" alt="priest sheetmetal website design and development" class="base">
</figure>

  <script>
    if ('IntersectionObserver' in window &&
      'IntersectionObserverEntry' in window &&
      'intersectionRatio' in window.IntersectionObserverEntry.prototype) {

        let flatten = document.querySelector('.folding');
        console.log(flatten.classList);
        // ["cool", "new", "shades", value: "cool new shades"]
        console.log(flatten.classList[1]); // new
        flatten.classList.add('flatten');

        var numSteps = 20.0;

        var boxElement;
        var prevRatio = 0.0;
        var wkT = "rotateX(ratiodeg)";

        // Set things up.

        window.addEventListener("load", function(event) {
          boxElement = document.querySelector(".folding");

          createObserver();
        }, false);

        function createObserver() {
          var observer;

          var options = {
          root: null,
          rootMargin: "0px",
          threshold: buildThresholdList()
          };

          observer = new IntersectionObserver(handleIntersect, options);
          observer.observe(boxElement);
        }

        function buildThresholdList() {
          var thresholds = [];
          var numSteps = 100;

          for (var i=1.0; i<=numSteps; i++) {
          var ratio = i/numSteps;
          thresholds.push(ratio);
          }

          thresholds.push(0);
          return thresholds;
        }

        function handleIntersect(entries, observer) {
          entries.forEach(function(entry) {
            entry.target.style.webkitTransform = wkT.replace("ratio", (90-(entry.intersectionRatio*90)));
          prevRatio = entry.intersectionRatio;
          });
        }
      }

  </script>
