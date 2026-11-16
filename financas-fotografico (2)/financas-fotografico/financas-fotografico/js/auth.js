// Mostrar ou ocultar senhas.
document.querySelectorAll('[data-mostrar-senha]').forEach(function (botao) {
    botao.addEventListener('click', function () {
        const campo = document.getElementById(botao.dataset.mostrarSenha);
        const visivel = campo.type === 'password';
        campo.type = visivel ? 'text' : 'password';
        botao.setAttribute('aria-label', visivel ? 'Ocultar senha' : 'Mostrar senha');
        botao.textContent = visivel ? 'Ocultar' : 'Mostrar';
    });
});
// Avançar e voltar entre os seis dígitos.
const digitos = Array.from(document.querySelectorAll('.codigo-campos input'));
digitos.forEach(function (campo, indice) {
    campo.addEventListener('input', function () {
        campo.value = campo.value.replace(/\D/g, '').slice(0, 1);
        if (campo.value && indice < digitos.length - 1) digitos[indice + 1].focus();
    });
    campo.addEventListener('keydown', function (evento) {
        if (evento.key === 'Backspace' && !campo.value && indice > 0) digitos[indice - 1].focus();
    });
    campo.addEventListener('paste', function (evento) {
        const colado = evento.clipboardData.getData('text').replace(/\D/g, '').slice(0, 6);
        if (colado.length > 1) {
            evento.preventDefault();
            digitos.forEach(function (entrada, posicao) { entrada.value = colado[posicao] || ''; });
            digitos[Math.min(colado.length, 6) - 1].focus();
        }
    });
});
document.querySelectorAll('.formulario-auth').forEach(function (formulario) {
    formulario.addEventListener('submit', function (evento) {
        evento.preventDefault();
        if (formulario.reportValidity()) alert('Demonstração visual: conecte o formulário ao servidor para continuar.');
    });
});
