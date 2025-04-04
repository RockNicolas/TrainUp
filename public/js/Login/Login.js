function togglePasswordVisibility(toggleBtnId, passwordFieldId) {
    const toggleBtn = document.getElementById(toggleBtnId);
    const passwordField = document.getElementById(passwordFieldId);

    toggleBtn.addEventListener('click', function () {
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;
        this.classList.toggle('fa-eye-slash');
    });
}

window.addEventListener('DOMContentLoaded', function () {
    const errorMessage = document.getElementById('error-message');
    if (errorMessage) {
        setTimeout(() => errorMessage.style.display = 'none', 5000);
    }

    togglePasswordVisibility('togglePassword', 'senha');
    togglePasswordVisibility('toggleRegisterPassword', 'password');

    const senhaInput = document.getElementById('senha');
    const capsWarning = document.getElementById('capsWarning');

    senhaInput.addEventListener('keydown', function (event) {
        capsWarning.classList.toggle('hidden', !event.getModifierState('CapsLock'));
    });
});

function toggleForm() {
    const container = document.getElementById('container');
    const formPanel = document.querySelector('.form-panel');
    const messagePanel = document.querySelector('.message-panel');

    const loginForm = document.querySelector('.login-form');
    const registerForm = document.querySelector('.register-form');
    const loginMessage = document.querySelector('.login-message');
    const registerMessage = document.querySelector('.register-message');

    formPanel.style.opacity = "0";
    messagePanel.style.opacity = "0";
    
    setTimeout(() => {
        container.classList.toggle('flex-row-reverse');
        loginForm.classList.toggle('hidden');
        registerForm.classList.toggle('hidden');
        loginMessage.classList.toggle('hidden');
        registerMessage.classList.toggle('hidden');
        formPanel.style.opacity = "1";
        messagePanel.style.opacity = "1";
    }, 350);
}
