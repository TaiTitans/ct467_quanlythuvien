$(document).ready(function() {
    var passwordInput = $('#password');
    var confirmPasswordInput = $('#confirm-password');
    var passwordError = $('#password-error');
    var registerButton = $('#register-button');
    var registrationForm = $('#registration-form');

    registerButton.on('click', function(event) {
        event.preventDefault(); // Ngăn chặn gửi biểu mẫu mặc định

        if (passwordInput.val() !== confirmPasswordInput.val()) {
            passwordError.text("Mật khẩu bạn vừa nhập không khớp.");
        } else {
            passwordError.text("");
            registrationForm.submit(); // Gửi biểu mẫu nếu mật khẩu khớp
        }
    });
});