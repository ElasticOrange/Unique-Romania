$(document).ready(function() {
  setTimeout(function() {
    return FB.Canvas.setSize({
      height: 600
    });
  }, 500);
  return setInterval(function() {
    return FB.Canvas.setSize();
  }, 1000);
});
