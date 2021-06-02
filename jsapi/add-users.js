$(document).ready(function() {
 $(".submitBtn").click(function() {
console.log("hello");
$('#fullnameError').html('');
$('#contactError').html('');
$('#emailError').html('');
$('#addressEror').html('');
$('#passwordError').html('');


var fullname = $("#fullname").val();
var contact = $("#contact").val();
var email = $("#email").val();
var address = $("#address").val();
var password = $("#password").val();
var flag = true;

if (!fullname) {
    flag = false;
    $('#fullnameError').html('please enter fullname');
}
if (contact == "") {
    flag = false;
    $('#contactError').html('please enter contact number');
}

if (flag == true) {
    $.ajax({
        type: "POST",
        url: "./api/add-user.php",
        data: { 'fullname': fullname, 'contact': contact, 'email': email, 'address': address, 'password': password },
        dataType: "json",
        success: function(response) {
            if (response.status === 1) {
                $.notify({
                    // options
                    message: 'New user created'
                }, {
                    // settings
                    type: 'success',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    },
                    placement: {
                        from: "top",
                        align: "center"
                    },
                });
                
            }
            if (response.status === 3) {
                $.notify({
                    // options
                    message: 'User already exists!'
                }, {
                    // settings
                    type: 'danger',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    },
                    placement: {
                        from: "top",
                        align: "center"
                    },
                });
            }
        }

    });

}




})



})
