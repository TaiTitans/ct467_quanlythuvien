
    document.getElementById('login-form').addEventListener('submit', async (event) => {
        event.preventDefault();
        const username = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        const response = await fetch('/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ username, password }),
        });

        const data = await response.json();

        if (response.status === 200) {
            window.location.href = '/homepage'; // Chuyển hướng đến trang "homepage.ejs"
        } else {
            const errorMessage = data.message || 'Đăng nhập thất bại. Vui lòng nhập lại.';
            document.getElementById('error-message').textContent = errorMessage;
        }
    });