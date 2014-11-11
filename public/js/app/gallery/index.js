$(document).ready(function() {
  var infinite_scroll, infinite_scroll_load, infinite_scroll_loading_hide, infinite_scroll_loading_show, user_row_click, user_row_close, user_row_close_all, user_row_open;
  user_row_close = function($user_row, $user_content) {
    $user_row.find('.btn-dropdown').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
    $user_content.find('.bubble').hide();
    return $user_content.slideUp(400, function() {
      $user_row.addClass('background-grey').removeClass('background-grey-dropdown');
      return true;
    });
  };
  user_row_open = function($user_row, $user_content) {
    $user_row.find('.btn-dropdown').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    $user_row.addClass('background-grey-dropdown').removeClass('background-grey');
    return $user_content.slideDown(400, function() {
      $.scrollTo($user_row, 400);
      return $user_content.find('.bubble').fadeIn();
    });
  };
  user_row_close_all = function(except) {
    var $duc, $dur, duc, _i, _len, _ref, _results;
    _ref = $('[data-user_content]:visible');
    _results = [];
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      duc = _ref[_i];
      $duc = $(duc);
      if ($duc.attr('data-user_content') === except) {
        continue;
      }
      $dur = $("[data-user_row=" + ($duc.attr('data-user_content')) + "]");
      _results.push(user_row_close($dur, $duc));
    }
    return _results;
  };
  user_row_click = function() {
    var $user_content, $user_row;
    $user_row = $(this);
    $user_content = $("[data-user_content=" + ($(this).attr('data-user_row')) + "]");
    user_row_close_all($(this).attr('data-user_row'));
    if ($user_content.is(':visible')) {
      return user_row_close($user_row, $user_content);
    } else {
      return user_row_open($user_row, $user_content);
    }
  };
  $('body').on('click', '[data-user_row]', user_row_click);
  $('[data-entries=true]').find('.bubble').hide();
  $('.fancybox').fancybox({
    type: 'image'
  });

  /*
   * Infinite scroll
   */
  infinite_scroll = {
    finished: false,
    loading: false,
    page: 0
  };
  infinite_scroll_loading_show = function() {
    $('[data-loading]').show();
    return true;
  };
  infinite_scroll_loading_hide = function() {
    $('[data-loading]').hide();
    return true;
  };
  infinite_scroll_load = function() {
    if (infinite_scroll.loading) {
      console.log('Already loading, wait...');
      return false;
    }
    if (infinite_scroll.finished) {
      console.log('Finished loading all the data');
      return false;
    }
    infinite_scroll.loading = true;
    infinite_scroll.page++;
    infinite_scroll_loading_show();
    return $.get("/gallery/page/" + infinite_scroll.page, function(s, t) {
      infinite_scroll.loading = false;
      infinite_scroll_loading_hide();
      $('[data-entries=true]').append(s.html);
      if (s.html === '') {
        return infinite_scroll.finished = true;
      }
    }, 'json');
  };
  return $(window).scroll(function() {
    var enable, factor;
    factor = 300;
    enable = ($(window).scrollTop() + $(window).height()) > ($(document).height() - factor);
    if (enable) {
      return infinite_scroll_load();
    }
  });
});
