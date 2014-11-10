$(function() {
  var user_row_click;
  user_row_click = function() {
    var $user_content;
    $user_content = $(this).next();
    if ($user_content.is(':visible')) {
      $user_content.find('.bubble').hide();
      return $user_content.slideUp(400, function() {
        return true;
      });
    } else {
      return $user_content.slideDown(400, function() {
        return $user_content.find('.bubble').fadeIn();
      });
    }
  };
  $('[data-userrow=true]').click(user_row_click);
  return $('[data-entries=true]').find('.bubble').hide();
});
