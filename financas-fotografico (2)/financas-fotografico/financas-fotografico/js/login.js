document.querySelectorAll('.mostrar-senha').forEach(function (botao) {
    botao.addEventListener('click', function () {
        const campo = document.getElementById(botao.dataset.alvo);
        const mostrar = campo.type === 'password';
        campo.type = mostrar ? 'text' : 'password';
        botao.setAttribute('aria-label', mostrar ? 'Ocultar senha' : 'Mostrar senha');
        botao.setAttribute('aria-pressed', String(mostrar));
    });
});
const digitos = Array.from(document.querySelectorAll('.campos-codigo input'));
digitos.forEach(function (campo, indice) {
    campo.addEventListener('input', function () {
        campo.value = campo.value.replace(/\D/g, '').slice(-1);
        if (campo.value && digitos[indice + 1]) digitos[indice + 1].focus();
    });
    campo.addEventListener('keydown', function (evento) {
        if (evento.key === 'Backspace' && !campo.value && digitos[indice - 1]) digitos[indice - 1].focus();
    });
    campo.addEventListener('paste', function (evento) {
        evento.preventDefault();
        const valor = evento.clipboardData.getData('text').replace(/\D/g, '').slice(0, 6);
        valor.split('').forEach(function (digito, posicao) { if (digitos[posicao]) digitos[posicao].value = digito; });
        if (valor.length) digitos[Math.min(valor.length, 5)].focus();
    });
});
