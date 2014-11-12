var goto_step;

goto_step = function(number) {
  var i, _i, _ref;
  $('[data-step]').addClass('hidden');
  $('[data-step]').filter("[data-step=" + number + "]").removeClass('hidden');
  $('.progress-bar').width("" + ((number - 1) * 33) + "%");
  $("[data-progress_icons]").children().removeClass('glyph-progress-active').addClass('glyph-progress-inactive');
  for (i = _i = 0, _ref = number - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
    $("[data-progress_icons] :nth(" + i + ")").removeClass('glyph-progress-inactive').addClass('glyph-progress-active');
  }
  return console.log("Step " + number);
};

$(document).ready(function() {
  goto_step(1);
  return true;
});
