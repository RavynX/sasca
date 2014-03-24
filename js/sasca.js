// For coloring alternating rows
$('table').each(function() {
    $('tr:odd',  this).addClass('odd').removeClass('even');
    $('tr:even', this).addClass('even').removeClass('odd');
});