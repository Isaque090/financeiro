<?php
include_once('inc/verifica_login.php')

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Dashboard | Finnova
    </title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/dashboard.css" rel="stylesheet" />
</head>

<body>
    <header class="cabecalho-mobile d-lg-none">
        <a class="marca" href="dashboard.html">
            Finnova
        </a>
        <button aria-controls="menu-mobile" aria-expanded="false" aria-label="Abrir menu" class="btn botao-menu"
            data-bs-target="#menu-mobile" data-bs-toggle="offcanvas" type="button">
            <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </header>
    <div aria-labelledby="titulo-menu" class="offcanvas offcanvas-start" id="menu-mobile" tabindex="-1">
        <div class="offcanvas-header">
            <h2 class="h5 mb-0" id="titulo-menu">
                Finnova
            </h2>
            <button aria-label="Fechar menu" class="btn-close" data-bs-dismiss="offcanvas" type="button">
            </button>
        </div>
        <nav aria-label="Menu principal mobile" class="offcanvas-body menu-navegacao">
            <a class="nav-link active" href="dashboard.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <rect height="7" width="7" x="3" y="3">
                    </rect>
                    <rect height="7" width="7" x="14" y="3">
                    </rect>
                    <rect height="7" width="7" x="3" y="14">
                    </rect>
                    <rect height="7" width="7" x="14" y="14">
                    </rect>
                </svg>
                <span>
                    Dashboard
                </span>
            </a>
            <a class="nav-link" href="transacoes.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <path d="M4 7h16M4 12h16M4 17h16">
                    </path>
                    <path d="m16 4 4 3-4 3">
                    </path>
                </svg>
                <span>
                    Transações
                </span>
            </a>
            <a class="nav-link" href="categorias.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <path d="M3 5h8v7H3zM13 5h8v7h-8zM3 14h8v7H3zM13 14h8v7h-8z">
                    </path>
                </svg>
                <span>
                    Categorias
                </span>
            </a>
            <a class="nav-link" href="orcamentos.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <rect height="15" rx="2" width="18" x="3" y="5">
                    </rect>
                    <path d="M3 10h18M7 15h5">
                    </path>
                </svg>
                <span>
                    Orçamentos
                </span>
            </a>
            <a class="nav-link" href="metas.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <circle cx="12" cy="12" r="9">
                    </circle>
                    <circle cx="12" cy="12" r="5">
                    </circle>
                    <circle cx="12" cy="12" r="1">
                    </circle>
                </svg>
                <span>
                    Metas
                </span>
            </a>
            <a class="nav-link" href="cartoes.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <rect height="14" rx="2" width="20" x="2" y="5">
                    </rect>
                    <path d="M2 10h20">
                    </path>
                </svg>
                <span>
                    Cartões
                </span>
            </a>
            <a class="nav-link mt-4" href="login.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <path d="M10 4H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h5M14 8l4 4-4 4M9 12h9">
                    </path>
                </svg>
                <span>
                    Sair
                </span>
            </a>
        </nav>
    </div>
    <aside class="menu-lateral d-none d-lg-flex">
        <a class="marca" href="dashboard.html">
            Finnova
        </a>
        <nav aria-label="Menu principal" class="menu-navegacao">
            <a class="nav-link active" href="dashboard.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <rect height="7" width="7" x="3" y="3">
                    </rect>
                    <rect height="7" width="7" x="14" y="3">
                    </rect>
                    <rect height="7" width="7" x="3" y="14">
                    </rect>
                    <rect height="7" width="7" x="14" y="14">
                    </rect>
                </svg>
                <span>
                    Dashboard
                </span>
            </a>
            <a class="nav-link" href="transacoes.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <path d="M4 7h16M4 12h16M4 17h16">
                    </path>
                    <path d="m16 4 4 3-4 3">
                    </path>
                </svg>
                <span>
                    Transações
                </span>
            </a>
            <a class="nav-link" href="categorias.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <path d="M3 5h8v7H3zM13 5h8v7h-8zM3 14h8v7H3zM13 14h8v7h-8z">
                    </path>
                </svg>
                <span>
                    Categorias
                </span>
            </a>
            <a class="nav-link" href="orcamentos.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <rect height="15" rx="2" width="18" x="3" y="5">
                    </rect>
                    <path d="M3 10h18M7 15h5">
                    </path>
                </svg>
                <span>
                    Orçamentos
                </span>
            </a>
            <a class="nav-link" href="metas.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <circle cx="12" cy="12" r="9">
                    </circle>
                    <circle cx="12" cy="12" r="5">
                    </circle>
                    <circle cx="12" cy="12" r="1">
                    </circle>
                </svg>
                <span>
                    Metas
                </span>
            </a>
            <a class="nav-link" href="cartoes.html">
                <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                    <rect height="14" rx="2" width="20" x="2" y="5">
                    </rect>
                    <path d="M2 10h20">
                    </path>
                </svg>
                <span>
                    Cartões
                </span>
            </a>
        </nav>
        <a class="sair" href="login.html">
            <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
                <path d="M10 4H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h5M14 8l4 4-4 4M9 12h9">
                </path>
            </svg>
            Sair
        </a>
    </aside>
    <div class="area-principal">
        <header class="topo-pagina">
            <div>
                <h1>
                    Dashboard
                </h1>
                <p>
                    Novembro de 2026
                </p>
            </div>
            <div class="dropdown">
                <button aria-expanded="false" class="botao-perfil dropdown-toggle" data-bs-toggle="dropdown"
                    type="button">
                    <span class="avatar">
                        U
                    </span>
                    Minha conta
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <h2 class="dropdown-header">
                            Nome do usuário
                        </h2>
                    </li>
                    <li>
                        <a class="dropdown-item" href="perfil.html">
                            Perfil
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="editar-perfil.html">
                            Editar perfil
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="aparencia.html">
                            Aparência
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="login.html">
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <main class="conteudo-principal">
            <div class="acoes-pagina">
                <span>
                    Visão geral das suas finanças
                </span>
                <button class="btn botao-principal" data-bs-target="#modal-transacao" data-bs-toggle="modal">
                    Nova transação +
                </button>
            </div>
            <section aria-label="Resumo financeiro" class="row g-3 mb-3">
                <div class="col-md-4">
                    <article class="cartao-resumo">
                        <p>
                            Saldo atual
                        </p>
                        <strong>
                            R$ 3.457,20
                        </strong>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="cartao-resumo">
                        <p>
                            Receitas do mês
                        </p>
                        <strong class="texto-receita">
                            R$ 5.150,00
                        </strong>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="cartao-resumo">
                        <p>
                            Despesas do mês
                        </p>
                        <strong class="texto-despesa">
                            R$ 1.692,80
                        </strong>
                    </article>
                </div>
            </section>
            <section aria-label="Gráficos financeiros" class="row g-3">
                <div class="col-xl-7">
                    <article class="painel h-100">
                        <h2>
                            Receitas e despesas
                        </h2>
                        <p class="texto-apoio">
                            Valores demonstrativos dos últimos seis meses
                        </p>
                        <svg aria-label="Gráfico demonstrativo de receitas e despesas de junho a novembro"
                            class="grafico-svg" role="img" viewbox="0 0 620 275">
                            <line class="eixo" x1="48" x2="604" y1="50" y2="50">
                            </line>
                            <text x="6" y="54">
                                6,000
                            </text>
                            <line class="eixo" x1="48" x2="604" y1="100" y2="100">
                            </line>
                            <text x="6" y="104">
                                4,235
                            </text>
                            <line class="eixo" x1="48" x2="604" y1="150" y2="150">
                            </line>
                            <text x="6" y="154">
                                2,470
                            </text>
                            <line class="eixo" x1="48" x2="604" y1="200" y2="200">
                            </line>
                            <text x="6" y="204">
                                705
                            </text>
                            <rect class="barra-receita" height="128" rx="2" width="25" x="76" y="92">
                            </rect>
                            <rect class="barra-despesa" height="78" rx="2" width="25" x="105" y="142">
                            </rect>
                            <text x="93" y="248">
                                Jun
                            </text>
                            <rect class="barra-receita" height="148" rx="2" width="25" x="164" y="72">
                            </rect>
                            <rect class="barra-despesa" height="102" rx="2" width="25" x="193" y="118">
                            </rect>
                            <text x="181" y="248">
                                Jul
                            </text>
                            <rect class="barra-receita" height="96" rx="2" width="25" x="252" y="124">
                            </rect>
                            <rect class="barra-despesa" height="120" rx="2" width="25" x="281" y="100">
                            </rect>
                            <text x="269" y="248">
                                Ago
                            </text>
                            <rect class="barra-receita" height="138" rx="2" width="25" x="340" y="82">
                            </rect>
                            <rect class="barra-despesa" height="86" rx="2" width="25" x="369" y="134">
                            </rect>
                            <text x="357" y="248">
                                Set
                            </text>
                            <rect class="barra-receita" height="156" rx="2" width="25" x="428" y="64">
                            </rect>
                            <rect class="barra-despesa" height="108" rx="2" width="25" x="457" y="112">
                            </rect>
                            <text x="445" y="248">
                                Out
                            </text>
                            <rect class="barra-receita" height="110" rx="2" width="25" x="516" y="110">
                            </rect>
                            <rect class="barra-despesa" height="64" rx="2" width="25" x="545" y="156">
                            </rect>
                            <text x="533" y="248">
                                Nov
                            </text>
                        </svg>
                        <div class="legenda">
                            <span class="ponto receita">
                            </span>
                            Receitas
                            <span class="ponto despesa">
                            </span>
                            Despesas
                        </div>
                    </article>
                </div>
                <div class="col-xl-5">
                    <article class="painel h-100">
                        <h2>
                            Despesas por categoria
                        </h2>
                        <p class="texto-apoio">
                            Distribuição demonstrativa do mês
                        </p>
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <svg aria-label="Distribuição demonstrativa de despesas: Moradia 45%, Alimentação 30%, Transporte 15%, Outros 10%"
                                    class="grafico-svg" role="img" viewbox="0 0 230 230">
                                    <circle cx="115" cy="115" fill="none" r="74" stroke="#e1e9e1" stroke-width="28">
                                    </circle>
                                    <circle cx="115" cy="115" fill="none" r="74" stroke="#23764f"
                                        stroke-dasharray="209.23 465" stroke-width="28" transform="rotate(-90 115 115)">
                                    </circle>
                                    <circle cx="115" cy="115" fill="none" r="74" stroke="#7da68a"
                                        stroke-dasharray="139.49 465" stroke-dashoffset="-209.23" stroke-width="28"
                                        transform="rotate(-90 115 115)">
                                    </circle>
                                    <circle cx="115" cy="115" fill="none" r="74" stroke="#b6cbb9"
                                        stroke-dasharray="69.74 465" stroke-dashoffset="-348.72" stroke-width="28"
                                        transform="rotate(-90 115 115)">
                                    </circle>
                                    <text font-size="15" text-anchor="middle" x="115" y="119">
                                        Despesas
                                    </text>
                                </svg>
                            </div>
                            <div class="col-sm-5">
                                <ul class="lista-legenda">
                                    <li>
                                        Moradia
                                        <strong>
                                            45%
                                        </strong>
                                    </li>
                                    <li>
                                        Alimentação
                                        <strong>
                                            30%
                                        </strong>
                                    </li>
                                    <li>
                                        Transporte
                                        <strong>
                                            15%
                                        </strong>
                                    </li>
                                    <li>
                                        Outros
                                        <strong>
                                            10%
                                        </strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            <section aria-label="Acompanhamento financeiro" class="row g-3 mt-1">
                <div class="col-lg-4">
                    <article class="painel h-100">
                        <h2>
                            Alertas
                        </h2>
                        <ul class="lista-simples">
                            <li>
                                <span class="texto-despesa">
                                    Atenção
                                </span>
                                Conta de energia vence amanhã
                            </li>
                            <li>
                                <span class="texto-receita">
                                    Informação
                                </span>
                                Seu saldo está positivo
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="painel h-100">
                        <h2>
                            Próximas contas
                        </h2>
                        <ul class="lista-simples">
                            <li>
                                Aluguel
                                <span>
                                    15/11 · R$ 1.200,00
                                </span>
                            </li>
                            <li>
                                Internet
                                <span>
                                    20/11 · R$ 120,00
                                </span>
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="painel h-100">
                        <h2>
                            Últimas transações
                        </h2>
                        <ul class="lista-simples">
                            <li>
                                Salário
                                <span class="texto-receita">
                                    + R$ 5.150,00
                                </span>
                            </li>
                            <li>
                                Supermercado
                                <span class="texto-despesa">
                                    - R$ 312,00
                                </span>
                            </li>
                            <li>
                                Aluguel
                                <span class="texto-despesa">
                                    - R$ 1.200,00
                                </span>
                            </li>
                        </ul>
                    </article>
                </div>
            </section>
        </main>
    </div>
    <div aria-hidden="true" aria-labelledby="titulo-modal-transacao" class="modal fade" id="modal-transacao"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="titulo-modal-transacao">
                        Nova transação
                    </h2>
                    <button aria-label="Fechar" class="btn-close" data-bs-dismiss="modal" type="button">
                    </button>
                </div>
                <form class="formulario-demonstracao">
                    <div class="modal-body">
                        <div class="grupo-campo">
                            <label for="tipo-transacao">
                                Tipo
                            </label>
                            <select class="form-select" id="tipo-transacao" name="tipo-transacao" required="">
                                <option value="">
                                    Selecione
                                </option>
                                <option>
                                    Despesa
                                </option>
                                <option>
                                    Receita
                                </option>
                            </select>
                        </div>
                        <div class="grupo-campo">
                            <label for="descricao-transacao">
                                Descrição
                            </label>
                            <input class="form-control" id="descricao-transacao" name="descricao-transacao"
                                placeholder="Ex.: Supermercado" required="" type="text" />
                        </div>
                        <div class="grupo-campo">
                            <label for="valor-transacao">
                                Valor
                            </label>
                            <input class="form-control" id="valor-transacao" min="0.01" name="valor-transacao"
                                placeholder="0,00" required="" step="0.01" type="number" />
                        </div>
                        <div class="grupo-campo">
                            <label for="categoria-transacao">
                                Categoria
                            </label>
                            <select class="form-select" id="categoria-transacao" name="categoria-transacao" required="">
                                <option value="">
                                    Selecione
                                </option>
                                <option>
                                    Alimentação
                                </option>
                                <option>
                                    Moradia
                                </option>
                                <option>
                                    Transporte
                                </option>
                                <option>
                                    Renda
                                </option>
                            </select>
                        </div>
                        <div class="grupo-campo">
                            <label for="data-transacao">
                                Data
                            </label>
                            <input class="form-control" id="data-transacao" name="data-transacao" placeholder=""
                                required="" type="date" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary" data-bs-dismiss="modal" type="button">
                            Cancelar
                        </button>
                        <button class="btn botao-principal" type="submit">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="js/dashboard.js">
    </script>
</body>

</html>