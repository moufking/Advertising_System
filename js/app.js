var tpl = 1;
console.log(tpl);
var pub1 = $("#list-example");
var pub2 = $("#pub1");
var pub3 = $("#pub3");
var pub4 = $("#pub4");
var tpl = parseInt($("#main").attr("data-tpl"), 10);
console.log({ tpl });

var lastScrollOffset = $(window).scrollTop();
var lastScrollTop = 0;

if (tpl === 0) {
  setupTemplate0();
} else if (tpl === 1) {
  setupTemplate1();
} else {
  setupTemplate2();
}

// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
// window.addEventListener(
//   "scroll",
//   function() {
//     // or window.addEventListener("scroll"....
//     var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
//     if (st > lastScrollTop) {
//       console.log("Vers le bas");
//       if (st >= 0 && st < 980) {
//         pub4.show();
//       } else {
//         pub4.hide();
//       }

//       if (st >= 0 && st < 624) {
//         pub3.show();
//       } else {
//         pub3.hide();
//       }
//       console.log(st);
//       // pub1.hide()
//       pub2.show();
//     } else {
//       pub1.show();
//       pub2.hide();
//       console.log("Vers le haut");
//       console.log(st);
//     }
//     lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
//   },
//   false
// );

let prevIsScrollUp = false;
function setupTemplate0() {
  window.addEventListener(
    "scroll",
    function() {
      function showTopAd() {
        console.log("Up");
        pub1.show();
        pub2.hide();
      }

      function showBottomAd() {
        console.log("Down");
        pub1.hide();
        pub2.show();
      }

      if (st == 0) {
        showTopAd();
        return;
      }

      if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        showBottomAd();
        return;
      }

      var st = window.pageYOffset || document.documentElement.scrollTop;
      var scrollUp = st < lastScrollTop;
      lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling

      if (scrollUp && prevIsScrollUp) {
        showTopAd();
      } else if (!scrollUp && !prevIsScrollUp) {
        showBottomAd();
      }
      prevIsScrollUp = scrollUp;
    },
    false
  );
}

function setupTemplate1() {
  var post = document.getElementById("post");
  window.addEventListener("scroll", function() {
    if (isPartiallyInViewport(post)) {
      pub3.show();
    } else {
      pub3.hide();
    }
  });
}

function setupTemplate2() {}

function isInViewport(element) {
  var rect = element.getBoundingClientRect();
  var html = document.documentElement;
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || html.clientHeight) &&
    rect.right <= (window.innerWidth || html.clientWidth)
  );
}

function isPartiallyInViewport(el) {
  if (typeof jQuery !== "undefined" && el instanceof jQuery) el = el[0];

  var rect = el.getBoundingClientRect();
  var windowHeight =
    window.innerHeight || document.documentElement.clientHeight;
  var windowWidth = window.innerWidth || document.documentElement.clientWidth;

  var vertInView = rect.top <= windowHeight && rect.top + rect.height >= 0;
  var horInView = rect.left <= windowWidth && rect.left + rect.width >= 0;

  return vertInView && horInView;
}
