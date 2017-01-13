(function ($) {
    $(function () {

        $(document).on('submit', '#user_reg', function () {
            return ValFields();
        });

        function ValFields()
        {
            console.log('ValFields');
            var checklogin = false;
            var checkpassword = false;
            // получение элемента login
            var ValueLogin = document.getElementById('name');
            // проверка того, что элемент login заполнен
            if (ValueLogin.value != '' && ValueLogin != undefined) {
                checklogin = true;

            } else {
                alert('Enter your name');
                return false;
            }
            // получение элемента last_name
            var ValueLastName = document.getElementById('last_name');
            // проверка того, что элемент Last name заполнен
            if (ValueLastName.value != '' && ValueLogin != undefined) {
                checklogin = true;

            } else {
                alert('Enter your Last name');
                return false;
            }
            // получение элемента email
            var ValueEmail = document.getElementById('email');
            // проверка того, что элемент email заполнен
            if (ValueEmail.value != '' && ValueLogin != undefined) {
                checklogin = true;

            } else {
                alert('Enter your email');
                return false;
            }

            // получение элемента password
            var ValuePassword = document.getElementById('password');
            // проверка того, что элемент password заполнен
            if (ValuePassword.value != '' && ValuePassword != undefined) {
                checkpassword = true;
                // submit должен выполняться только в случае заполнения всех полей
//                    document.forms["UserEnter"].submit();
            } else {
                alert('Enter your  password');
                return false;
            }
           
            var ValueConfirmPass = document.getElementById('confirm_pass');
            var ValuePassword = document.getElementById('password');
            // проверка того, что элемент password совпадает с confirm_pass
            var Password = ValuePassword.value;
            var ConfirmPass = ValueConfirmPass.value;
            if (Password != ConfirmPass) {
                alert("Passwords do not match.");
                return false;
            }

        }

    });


})(jQuery)





