document.addEventListener('DOMContentLoaded', function() {
    const countElement = document.querySelector('.count');
    let count = 0;

    const interval = setInterval(() => {
        if (count < 100) {
            count++;
            countElement.textContent = count + '%';
        } else {
            clearInterval(interval); 
        }
    }, 20); 

});