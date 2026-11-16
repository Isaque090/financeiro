<?php
session_start();

$erro = "";
if (isset($_POST['cadastrar'])) {

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $dt_nascimento = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['confirmarsenha'];

    $url = "http://localhost/financas-fotografico%20(2)/financas-fotografico/financas-fotografico/api/index.php?tipo=cadastrar&email=" . urlencode($email) . "&senha=" . urlencode($senha) . "&nome=" . urlencode($nome) . "&cpf=" . urlencode($cpf) . "&dt_nascimento=" . urlencode($dt_nascimento) . "&telefone=" . urlencode($telefone) . "&confirmarsenha=" . urlencode($confirmarsenha);

    $resposta = file_get_contents($url);

    $dados = json_decode($resposta, true);

    if ($dados['sucesso'] == false) {
        $erro = $dados['mensagem'];
    } else {
   $_SESSION['email']=$_POST['email'];
        header('location:login.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta | Finanças</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js" defer></script>
</head>

<body>
    <main class="painel-marca">
        <img class="foto-marca"
            src="https://images.pexels.com/photos/34147402/pexels-photo-34147402.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1400"
            alt="" loading="eager" fetchpriority="high">
        <div class="conteudo">
            <a class="logo" href="login.html" aria-label="Finanças, página inicial">Finanças<span
                    class="ponto-logo">.</span></a>
            <div class="mensagem-marca">
                <p class="identificador">FINANÇAS PESSOAIS</p>
                <h2>Organize sua vida financeira.</h2>
                <p>Mais clareza para os seus objetivos.</p>
            </div>
            <p class="rodape-marca">© 2026 Finanças</p>
        </div>
    </main>
    <section class="login" aria-labelledby="titulo-pagina">
        <div class="area-formulario">
            <div class="cabecalho-mobile">Finanças<span>.</span></div>
            <div class="cartao-formulario">
                <p class="identificador identificador-formulario">COMECE POR AQUI</p>
                <h1 id="titulo-pagina">Crie sua conta</h1>
                <p class="subtitulo">Leva menos de um minuto.</p>
                <form method="post" action="" class="formulario" novalidate>
                    <div class="grupo-campos">
                        <div class="grupo-campo"><label for="nome">Nome completo</label><input id="nome" name="nome"
                                type="text" placeholder="Seu nome" autocomplete="name" required></div>
                    </div>
                    <div class="grade-campos">
                        <div class="grupo-campo"><label for="cpf">CPF</label><input id="cpf" name="cpf" type="text"
                                placeholder="000.000.000-00" autocomplete="off" inputmode="numeric" required></div>
                        <div class="grupo-campo"><label for="nascimento">Data de nascimento</label>
                            <input type="date" placeholder="dd/mm/aaaa" name="nascimento" required>
                        </div>
                    </div>
                    <div class="grupo-campo"><label for="telefone">Telefone</label><input id="telefone" name="telefone"
                            type="tel" placeholder="(00) 00000-0000" autocomplete="tel" required></div>
                    <div class="grupo-campo"><label for="email">E-mail</label><input id="email" name="email"
                            type="email" placeholder="seu@email.com" autocomplete="email" required></div>
                    <div class="grade-campos">
                        <div class="grupo-campo"><label for="senha">Senha</label>
                            <div class="campo-senha"><input id="senha" name="senha" type="password"
                                    placeholder="Mínimo 8 caracteres" autocomplete="new-password" required><button
                                    class="mostrar-senha" type="button" aria-label="Mostrar senha" aria-pressed="false"
                                    data-alvo="senha"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.7" aria-hidden="true">
                                        <path d="M2 12s3.6-6 10-6 10 6 10 6-3.6 6-10 6S2 12 2 12Z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg></button></div>
                        </div>
                        <div class="grupo-campo"><label for="confirmar_senha">Confirmar senha</label>
                            <div class="campo-senha"><input id="confirmar_senha" name="confirmarsenha" type="password"
                                    placeholder="Repita a senha" autocomplete="new-password" required><button
                                    class="mostrar-senha" type="button" aria-label="Mostrar senha" aria-pressed="false"
                                    data-alvo="confirmar_senha"><svg viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                                        <path d="M2 12s3.6-6 10-6 10 6 10 6-3.6 6-10 6S2 12 2 12Z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg></button></div>
                        </div>
                    </div>
                    <button class="botao-principal" type="submit" name="cadastrar">Criar conta</button>
                    <p class="texto-alternativo">Já tem uma conta? <a href="login.html">Entrar</a></p>
                </form>
            </div>
            <p class="rodape-formulario">© 2026 Finanças. Todos os direitos reservados.</p>
        </div>
    </section>
</body>

</html>