$(function () {
  var video = $("#topvideo").get(0);
  $("#music").on("click", function () {
    if (video.muted) {
      $(this).addClass("off");
      video.muted = false;
      $(this).find("span").text("OFF");
    } else {
      $(this).removeClass("off");
      video.muted = true;
      $(this).find("span").text("ON");
    }
  });
  $("#play").click(function () {
    if ($("#topvideo")[0].paused) {
      $("#topvideo")[0].play();
      $(this).addClass("off");
    } else {
      $("#topvideo")[0].pause();
      $(this).removeClass("off");
    }
  });
});
