(function($) {
  $('#scheduleTabs a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });

  $('#scheduleTabs a:first').tab('show');

})(jQuery);
