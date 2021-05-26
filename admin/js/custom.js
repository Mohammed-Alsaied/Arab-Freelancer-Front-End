$(document).ready(function() {
    $('#find').keyup(function() {
        var key = $(this).val();
        if (key == '') {
            $('#result').hide();

        } else {
            $('#result').fadeIn().val(key);
        }
    });
    $('.message').animate({
        right: '50%'
    }, 2000, function() {
        $(this).delay(1000).fadeOut();
    })
});

function checkPassword() {
    var pass = document.getElementById("password").value,
        confirm = document.getElementById("confirm password").value;


    if (pass != confirm) {
        var msg = "Password and Confirm Password Dose not match.";
        document.getElementById("error").innerHTML = msg;
    }
}

function clearTxt() {
    var elements = document.getElementsByTagName('input');
    for (var el = 0; el < elements.length; el++) {
        if (elements[el].type == 'text' || elements[el].type == 'password' ||
            elements[el].type == 'email') {
            elements[el].value = '';
        }
    }

}

function validate() {
    var frName = document.getElementById('Frist_Name').value,
        laName = document.getElementById('Last_Name').value,
        errors = [];
    if (frName == '') {
        errors[0] = 'Fris Name Field Is required.';
        document.getElementById('fristName').innerHTML = errors[0];


    } else if (laName == '') {
        errors[1] = 'Last Name Field Is required.';
        document.getElementById('lastName').innerHTML = errors[1];

    } else {
        window.fristName.style.display = 'none';
        window.lastName.style.display = 'none';
        document.getElementById('fristName').style.display = 'none';
        document.getElementById('lastName').style.display = 'none';


    }


}
/*$(document).ready(function() {
    $('#create').click(function() {
        var email = $('#email').val();
        if (email == '') {
            $('#val_email').fadeIn(2000).html('Email is required').delay(1000).fadeOut(2000);
        }
    })
});*/