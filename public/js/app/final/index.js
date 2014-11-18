$(document).ready(function() {
  return $('[data-share=true]').click(function(e) {
    e.preventDefault();
    window.open($(this).attr('href'), 'Share', 'height=200,width=500,toolbar=0,status=0');
    return window.location = '/gallery';
  });
});
