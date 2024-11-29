document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Lógica de autenticación
    if (username === 'admin' && password === '1234') {
        // Redirigir a otra página PHP
        window.location.href = 'hola.html'; // Cambia esto al archivo PHP al que quieres redirigir
    } else {
        const message = document.getElementById('message');
        message.style.color = 'red';
        message.textContent = 'Usuario o contraseña incorrectos.';
    }
});

if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('service-worker.js').then(function(registration) {
            console.log('ServiceWorker registrado con éxito:', registration);
        }, function(error) {
            console.log('Error al registrar el ServiceWorker:', error);
        });
    });
}
