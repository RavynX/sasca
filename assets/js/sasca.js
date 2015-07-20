// For coloring alternating rows
(function($) {
  $('#scheduleTabs a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });

  $('#scheduleTabs a:first').tab('show');

  $('table').each(function() {
      $('tr:odd',  this).addClass('odd').removeClass('even');
      $('tr:even', this).addClass('even').removeClass('odd');
  });

})(jQuery);
