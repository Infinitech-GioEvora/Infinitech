$(document).ready(function () {
    $('input[name="tab-group"]').click(function (e) {
        e.stopPropagation();
        var accordion = $(this).closest('.tab').find('.customization-checkboxes');
        var checkboxes = accordion.find('input[type=checkbox]');
        
        checkboxes.each(function () {
            this.checked = true;
            $(this).trigger('click'); 
        });
    });

    $('.service-list input[type=checkbox]').click(function () {
        updateTotal();
    });

    $("#basic-details").hide();
    $("#standard-details").hide();
    $("#advance-details").hide();
    $("#premium-details").hide();
    $("#vip-details").hide();

    $('#send-email-button').click(function() {
        const email = $('#user-email').val(); 
        if (!email) {
            alert('Please enter your email address');
            return;
        }

        const selectedServices = [];
        $('.service-list input[type=checkbox]:checked').each(function () {
            const serviceName = $(this).closest('tr').find('td.service-name').text(); 
            const servicePrice = $(this).closest('tr').find('td.service-price').text();
            selectedServices.push({ name: serviceName, price: servicePrice });
        });

        const totalPrice = $('.total-price').text();

        const payload = {
            email: email,
            services: selectedServices,
            total: totalPrice
        };

        fetch("/send-email", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(function(response) {
            return response.json(); 
            console.log(response)
        })
        .then(function(data) {
            if (data.message === 'Email sent successfully.') {
                alert("Email sent successfully!");
            } else {
                throw new Error(data.message || "Email sending failed.");
            }
        })
        .catch(function(error) {
            document.getElementById("error-message").textContent = error.message;
            document.getElementById("error-message").style.display = "block";
            console.log(response)
        })
        
        
    });
});

var total = 0;

function toggleBasicDetails(checkbox) {
    $("#basic-details").toggle(checkbox.checked);
    updateCheckboxes(".basic-checkbox", checkbox.checked);
}

function toggleStandardDetails(checkbox) {
    $("#standard-details").toggle(checkbox.checked);
    updateCheckboxes(".standard-checkbox", checkbox.checked);
}

function toggleAdvanceDetails(checkbox) {
    $("#advance-details").toggle(checkbox.checked);
    updateCheckboxes(".advance-checkbox", checkbox.checked);
}

function togglePremiumDetails(checkbox) {
    $("#premium-details").toggle(checkbox.checked);
    updateCheckboxes(".premium-checkbox", checkbox.checked);
}

function toggleVipDetails(checkbox) {
    $("#vip-details").toggle(checkbox.checked);
    updateCheckboxes(".vip-checkbox", checkbox.checked);
}

function updateCheckboxes(checkboxClass, isChecked) {
    $(checkboxClass).prop("checked", isChecked);
    updateTotal();
}

function updateTotal() {
    total = 0; 

    $('.service-list input[type=checkbox]:checked').each(function () {
        var td = $(this).closest('tr').children().eq(2);
        total += parseFloat($(td).text()) || 0;
    });

    $('.basic-checkbox:checked, .standard-checkbox:checked, .advance-checkbox:checked, .premium-checkbox:checked, .vip-checkbox:checked').each(function () {
        var td = $(this).closest('tr').children().eq(2);
        total += parseFloat($(td).text()) || 0;
    });

    $('.total-price').text(total.toFixed(2));
}

function openCity(evt, package) {
    $("#" + package).toggle();
    $(".tablinks").removeClass("active");

    if ($("#" + package).is(":visible")) {
        evt.currentTarget.className += " active"; 
    }
}
