var goto_step;

goto_step = function(number) {
  var i, _i, _ref, _results;
  $('[data-step]').addClass('hidden');
  $('[data-step]').filter("[data-step=" + number + "]").removeClass('hidden');
  $('.progress-bar').width("" + ((number - 1) * 33) + "%");
  $("[data-progress_icons]").children().removeClass('glyph-progress-active').addClass('glyph-progress-inactive');
  _results = [];
  for (i = _i = 0, _ref = number - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
    _results.push($("[data-progress_icons] :nth(" + i + ")").removeClass('glyph-progress-inactive').addClass('glyph-progress-active'));
  }
  return _results;
};

$(document).ready(function() {
  var remove_image, youtube_embed, youtube_link_to_id;
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
  $('body').on('click', '.trash', remove_image);
  youtube_link_to_id = function(url) {
    var match, regExp;
    regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    match = url.match(regExp);
    if (match && match[2].length === 11) {
      return match[2];
    } else {
      return false;
    }
  };
  youtube_embed = function() {
    var youtube_html, youtube_id;
    youtube_id = youtube_link_to_id($('[data-video_link=true]').val());
    if (youtube_id) {
      youtube_html = _.template($('#video_template').html());
      $('[data-video_container=true]').html(youtube_html({
        video_id: youtube_id
      }));
      $('[name=video]').val("//www.youtube.com/embed/" + youtube_id);
    } else {
      $('[data-video_container=true]').html('');
      $('[name=video]').val("");
    }
    return true;
  };
  $('[data-video_load=true]').click(youtube_embed);
  return $('[data-form_entry=true]').submit(function(e) {
    var added_pictures, added_text, added_video;
    if (_.isEmpty($('[name=name]').val()) || _.isEmpty($('[name=email]').val()) || _.isEmpty($('[name=phone]').val())) {
      alert('Te rugam sa completezi datele tale personale ca sa te putem contacta');
      e.preventDefault();
      return false;
    }
    if (_.isEmpty($('[name=article]').val())) {
      added_text = false;
    } else {
      added_text = true;
    }
    if ($('[name="pictures[]"]').length === 0) {
      added_pictures = false;
    } else {
      added_pictures = true;
    }
    if (_.isEmpty($('[name=video]').val())) {
      added_video = false;
    } else {
      added_video = true;
    }
    if (!added_text && !added_pictures && !added_video) {
      alert('Te rugam sa adaugi un articol, poze sau un film pentru a participa la concurs');
      e.preventDefault();
      return false;
    }
    if (!$('[name=agree]').prop('checked')) {
      alert('Trebuie sa fii de acord cu regulile pentru a intra in concurs');
      e.preventDefault();
      return false;
    }
  });
});
