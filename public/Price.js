$(document).ready(function () {
    $('.form-title').click(function (e) { 
       var accordion = $(this).closest('h2').next()
       var options = accordion.find('.service-list input[type=checkbox]')
       for (var option of options) {
        option.click()
       }
    });


   $('.service-list input[type=checkbox]').click(function (e) {
    var tr = $(this).closest('tr')
    var td = tr.children()[2]

    if ($(this).prop('checked')) {
        total += parseFloat($(td).text())
    }
    else {
        total -= parseFloat($(td).text())
    }

    $('.total-price').text(total.toFixed(2))
   });
   
})

var total = 0
