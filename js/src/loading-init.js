import $ from "jquery";

$(document).ready(function () {
  setTimeout(function () {
    var counter = 0;
    var interval = setInterval(function () {
      counter++;
      $("#counter").text(counter);
      if (counter >= 100) {
        clearInterval(interval);
        $("#loading__overlay").fadeOut("slow", function () {
          $(this).remove();
          $("#main-content").fadeIn();
        });
      }
    }, 20);
  }, 500);
});
