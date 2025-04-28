function validateForm() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    if (password !== confirmPassword) {
        var x= document.createElement('div');
        alert ("Passwords do not match")
        return false;
        
    } else {
        return true;
    }
}

function togglePasswordVisibility(inputId) {
  var passwordInput = document.getElementById(inputId);
  var toggleIcon = document.querySelector('.password-container.password-toggle');

  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    toggleIcon.classList.remove('fa-eye');
    toggleIcon.classList.add('fa-eye-slash');
  } else {
    passwordInput.type = 'password';
    toggleIcon.classList.remove('fa-eye-slash');
    toggleIcon.classList.add('fa-eye');
  }
}

// Show the toggle icon initially
document.addEventListener('DOMContentLoaded', function() {
  var passwordInput = document.getElementById(inputId);
  var toggleIcon = document.querySelector('.password-container.password-toggle');

  toggleIcon.classList.remove('fa-eye-slash');
  toggleIcon.classList.add('fa-eye');
});

