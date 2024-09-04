document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    var nome = document.getElementById('nome').value.trim();
    var email = document.getElementById('email').value.trim();
    var senha = document.getElementById('senha').value;

    if (nome === '' || email === '' || senha === '') {
        alert('Por favor, preencha todos os campos.');
        event.preventDefault();
        return;
    }

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Por favor, insira um email válido.');
        event.preventDefault();
        return;
    }

    if (senha.length < 8) {
        alert('A senha deve conter pelo menos 8 caracteres.');
        event.preventDefault();
        return;
    }
});
