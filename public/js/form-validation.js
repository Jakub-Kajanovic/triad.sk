document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');
    const cvInput = document.getElementById('cv');
    const consentInput = document.getElementById('check-2');
    const cvFilename = document.getElementById('cvFilename');
    const cvError = document.getElementById('cvError');
    cvInput.addEventListener('change', function() {
        const file = cvInput.files[0];
        if (file) {
            cvFilename.textContent = file.name;
            cvError.textContent = ''; 
        } else {
            cvFilename.textContent = ''; 
            cvError.textContent = 'Musíš nahrať svoje CV.';
        }
    });

    form.addEventListener('submit', function(event) {
        event.preventDefault(); 

        clearErrors();

        let hasErrors = false;

        if (nameInput.value.trim() === '') {
            showError(nameInput, 'Meno je povinné.');
            hasErrors = true;
        }

        if (!validateEmail(emailInput.value)) {
            showError(emailInput, 'Neplatná emailová adresa.');
            hasErrors = true;
        }

        if (messageInput.value.trim() === '') {
            showError(messageInput, 'Správa je povinná.');
            hasErrors = true;
        }

        if (!cvInput.files.length) {
            showError(cvInput, 'Musíš nahrať svoje CV.');
            hasErrors = true;
        } else {
            const file = cvInput.files[0];
            const validTypes = ['application/pdf', 'image/jpeg', 'image/png', 'application/msword'];
            if (!validTypes.includes(file.type)) {
                cvError.textContent = 'Podporované formáty sú: PDF, JPG, PNG, DOC.';
                hasErrors = true;
            }
        }


        if (!consentInput.checked) {
            showError(consentInput, 'Musíš súhlasiť so spracovaním osobných údajov.');
            hasErrors = true;
        }

        if (!hasErrors) {
            form.submit();
        }
    });

    function showError(input, message) {
        const errorElement = document.createElement('div');
        errorElement.className = 'text-red-500 text-xs italic mt-1';
        errorElement.innerText = message;
        input.closest('.space-y-4').appendChild(errorElement);
    }

    function clearErrors() {
        const errorElements = document.querySelectorAll('.text-red-500');
        errorElements.forEach(element => element.remove());
        cvError.textContent = ''; 
    }

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});