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
  var remove_image;
  goto_step(1);
  $('[data-goto_step]').click(function(e) {
    var step_to;
    e.preventDefault();
    step_to = $(this).attr('data-goto_step');
    return goto_step(step_to);
  });
  true;
  $('[data-upload_image=true]').click(function(e) {
    e.preventDefault();
    return $('#image_upload').click();
  });
  $('#image_upload').fileupload({
    dataType: 'json',
    done: function(e, data) {
      var picture_html, picture_template;
      picture_template = _.template($('#picture_template').html());
      picture_html = picture_template({
        picture_url: data.result.name
      });
      $('[data-picture_container=true]').append(picture_html);
      return true;
    }
  });
  remove_image = function(e) {
    if (confirm('Esti sigur ca vrei sa stergi poza?')) {
      e.preventDefault();
      return $(this).parent().remove();
    }
  };
  return $('body').on('click', '.trash', remove_image);
});
