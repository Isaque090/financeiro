<?php
session_start();

$erro="";
if(isset($_POST['entrar'])){

$email=$_POST['email'];

$senha=$_POST['senha'];
$url = "http://localhost/financas-fotografico%20(2)/financas-fotografico/financas-fotografico/api/index.php?tipo=login&email=". urlencode($email)."&senha=".urlencode($senha);

$resposta = file_get_contents($url);

$dados = json_decode($resposta, true);

if($dados['sucesso']==false){
    $erro= $dados['mensagem'];
}else{
  $_SESSION['id']=$dados["id"];
  $_SESSION['nome']=$dados["nome"];  
  $_SESSION['email']=$dados["email"];
  $_SESSION['foto']=$dados["foto"];
  $_SESSION['conta']=$dados["conta"];  
  $_SESSION['login']=true;
  header('location:dashboard.php');

}
}

?><!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | Finanças</title>
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
                <p class="identificador identificador-formulario">ACESSO À CONTA</p>
                <h1 id="titulo-pagina">Bem-vindo de volta!</h1>
                <p class="subtitulo">Acesse sua conta para continuar gerenciando suas finanças.</p>
                <form method="post" action="login.php" class="formulario" novalidate>
             
                    <div class="grupo-campo"><label for="email">E-mail</label>
                    <input id="email" name="email" value="<?= htmlspecialchars($_SESSION['email'] ?? "")?>" type="text"
                            placeholder="seu@email.com" autocomplete="username" required aria-describedby="erro-email">
                    </div>
                    <div class="grupo-campo"><label for="senha">Senha</label>
                        <div class="campo-senha"><input id="senha" name="senha" type="password" placeholder="Sua senha"
                                autocomplete="current-password" required><button class="mostrar-senha" type="button"
                                aria-label="Mostrar senha" aria-pressed="false" data-alvo="senha"><svg
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                    aria-hidden="true">
                                    <path d="M2 12s3.6-6 10-6 10 6 10 6-3.6 6-10 6S2 12 2 12Z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg></button></div>
                    </div>
                    <div class="linha-auxiliar"><a href="recuperar_senha.html">Esqueceu sua senha?</a></div>
                      <?php if (!empty($erro)): ?>
                        <p class="mensagem-erro" role="alert" id="erro-login"><?= htmlspecialchars($erro) ?></p>
                    <?php endif; ?> 
                    <button class="botao-principal" type="submit" name="entrar">Entrar</button>
                    <p class="texto-alternativo">Não tem conta? <a href="cadastro.html">Criar conta</a></p>
                </form>
            </div>
            <p class="rodape-formulario">© 2026 Finanças. Todos os direitos reservados.</p>
        </div>
    </section>
</body>

</html>