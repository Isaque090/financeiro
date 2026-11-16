// Preferências locais e interações demonstrativas.
(function () {
    const formularioAparencia = document.getElementById('formulario-aparencia');
    const tema = localStorage.getItem('finnova-tema') || 'claro';
    const formato = localStorage.getItem('finnova-formato-data') || 'br';
    function aplicarTema(valor) {
        const escuro = valor === 'escuro' || (valor === 'automatico' && window.matchMedia('(prefers-color-scheme: dark)').matches);
        document.body.classList.toggle('tema-escuro', escuro);
    }
    aplicarTema(tema);
    if (formularioAparencia) {
        document.getElementById('tema').value = tema;
        document.getElementById('formato-data').value = formato;
        formularioAparencia.addEventListener('submit', function (evento) {
            evento.preventDefault();
            localStorage.setItem('finnova-tema', document.getElementById('tema').value);
            localStorage.setItem('finnova-formato-data', document.getElementById('formato-data').value);
            aplicarTema(document.getElementById('tema').value);
            alert('Preferências salvas neste navegador.');
        });
    }
    document.querySelectorAll('.formulario-demonstracao').forEach(function (formulario) {
        formulario.addEventListener('submit', function (evento) {
            evento.preventDefault();
            if (!formulario.reportValidity()) return;
            alert('Esta é uma demonstração estática. Nenhum dado foi enviado.');
        });
    });
    document.querySelectorAll('.acao-excluir').forEach(function (botao) {
        botao.addEventListener('click', function () {
            if (confirm('Deseja excluir este item?')) alert('A exclusão depende da integração com o servidor.');
        });
    });
    const busca = document.getElementById('buscar-transacoes');
    if (busca) busca.addEventListener('input', function () {
        document.querySelectorAll('.tabela-transacoes tbody tr').forEach(function (linha) {
            linha.hidden = !linha.textContent.toLocaleLowerCase('pt-BR').includes(busca.value.toLocaleLowerCase('pt-BR'));
        });
    });
    const buscaCategorias = document.getElementById('buscar-categorias');
    const botoesFiltro = document.querySelectorAll('[data-filtro]');
    function filtrarCategorias() {
        const filtro = document.querySelector('[data-filtro].ativo')?.dataset.filtro || 'todas';
        document.querySelectorAll('.cartao-categoria').forEach(function (cartao) {
            const texto = cartao.textContent.toLocaleLowerCase('pt-BR');
            cartao.parentElement.hidden = (filtro !== 'todas' && !texto.includes(filtro)) || (buscaCategorias && !texto.includes(buscaCategorias.value.toLocaleLowerCase('pt-BR')));
        });
    }
    botoesFiltro.forEach(function (botao) {
        botao.addEventListener('click', function () {
            botoesFiltro.forEach(function (outro) { outro.classList.remove('ativo'); });
            botao.classList.add('ativo');
            filtrarCategorias();
        });
    });
    if (buscaCategorias) buscaCategorias.addEventListener('input', filtrarCategorias);
})();
