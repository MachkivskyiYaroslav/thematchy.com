
$(function() {
    $("#send-form").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            text: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Min length is 2"
            },
            email: {
                required: "Mail is required",
                email: "Please enter a valid email address",
            },
            text: {
                required: "Message is required",
                minlength: "Please say more, min length 10"
            }
        },
        submitHandler: function(form) {
            window.location.href = "successful.html";
          form.submit();

        }
    });
});
