import $ from "jquery";

$(".post-item").slice(0, 9).show();

$("[data-vermas]").click(function (e) {
  e.preventDefault();

  $(".post-item:hidden").slice(0, 3).fadeIn("slow");

  if ($(".post-item:hidden").length == 0) {
    $("[data-vermas]").fadeOut("slow");
  }
});

