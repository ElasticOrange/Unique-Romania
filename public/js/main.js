$(document).ready(function() {
  var user_row_click, user_row_close, user_row_close_all, user_row_open;
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
  $('[data-user_row]').click(user_row_click);
  $('[data-entries=true]').find('.bubble').hide();
  return $('.fancybox').fancybox({
    type: 'image'
  });
});
