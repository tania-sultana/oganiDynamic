
    setTimeout(function() {
        var alert = document.getElementById('success-alert');
        if(alert){
            alert.style.transition = "opacity 0.5s ease";
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }
    }, 2000);


    // -----------------password eye-------------
     document.addEventListener('DOMContentLoaded', function () {
      const togglePassword = document.querySelector('#togglePassword');
      const passwordInput = document.querySelector('#exampleInputPassword1');
      togglePassword.addEventListener('click', function () {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
      });
    });


