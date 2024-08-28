document.getElementById('userForm').addEventListener('submit', function(event) {
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let senha = document.getElementById('senha').value;

    if (!nome || !email || !senha) {
        alert('Todos os campos são obrigatórios!');
        event.preventDefault();
    } else if (!validateEmail(email)) {
        alert('Por favor, insira um email válido!');
        event.preventDefault();
    } else if (senha.length < 8) {
        alert('A senha deve conter pelo menos 8 caracteres!');
        event.preventDefault();
    }
});

function validateEmail(email) {
    let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
