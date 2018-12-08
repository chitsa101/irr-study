
$('#exampleCheck').click(function () {
    $(".check").toggleClass("u-opacity");
    if ($(this).is(':checked')) {
        $('.check').removeAttr('disabled');
    } else {
        $('.check').attr('disabled', 'disabled');
    }
  });