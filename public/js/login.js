// Basic Login Form Script
class BasicLoginForm {
    constructor() {
        this.form = document.getElementById('loginForm');
        this.usernameInput = document.getElementById('username');
        this.passwordInput = document.getElementById('password');
        this.passwordToggle = document.getElementById('passwordToggle');
        
        this.init();
    }
    
    init() {
        FormUtils.addSharedAnimations();
        FormUtils.setupFloatingLabels(this.form);
        FormUtils.setupPasswordToggle(this.passwordInput, this.passwordToggle);

        // Add event listeners
        this.form.addEventListener('submit', () => {
            const submitBtn = this.form.querySelector('.login-btn');
            submitBtn.classList.add('loading');
        });

        // Add entrance animation
        FormUtils.addEntranceAnimation(this.form.closest('.login-card'), 100);
    }
}


// Initialize the form when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new BasicLoginForm();
});