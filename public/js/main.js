$(document).ready(function() {
  var user_row_click;
  user_row_click = function() {
    var $user_content, $user_row;
    $user_row = $(this);
    $user_content = $(this).next();
    if ($user_content.is(':visible')) {
      $user_row.find('.btn-dropdown').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
      $user_content.find('.bubble').hide();
      return $user_content.slideUp(400, function() {
        return true;
      });
    } else {
      $user_row.find('.btn-dropdown').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
      return $user_content.slideDown(400, function() {
        return $user_content.find('.bubble').fadeIn();
      });
    }
  };
  $('[data-userrow=true]').click(user_row_click);
  $('[data-entries=true]').find('.bubble').hide();
  return $('.fancybox').fancybox({
    type: 'image'
  });
});
