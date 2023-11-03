$(document).ready(function() {
    var passwordInput = $('#password');
    var confirmPasswordInput = $('#confirm-password');
    var passwordError = $('#password-error');
    var registerButton = $('#register-button');
    var registrationForm = $('#registration-form');

    registerButton.on('click', function(event) {
        event.preventDefault(); // Ngăn chặn gửi biểu mẫu mặc định
        
        // Kiểm tra các trường input
        var fullNameInput = $('#full-name');
        var usernameInput = $('#username');
        var birthdateInput = $('#birthdate');
        var phoneInput = $('#phone');
        var addressInput = $('#address');
        
        if (fullNameInput.val() === '' || usernameInput.val() === '' || birthdateInput.val() === '' || phoneInput.val() === '' || addressInput.val() === '') {
            alert("Vui lòng điền đầy đủ các trường.");
        } else if (passwordInput.val() !== confirmPasswordInput.val()) {
            passwordError.text("Mật khẩu bạn vừa nhập không khớp.");
        } else {
            passwordError.text("");
            registrationForm.submit(); // Gửi biểu mẫu nếu tất cả đều hợp lệ
        }
    });
});
