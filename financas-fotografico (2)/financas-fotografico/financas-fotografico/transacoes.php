<?php
session_start();

?><!DOCTYPE html>
<html lang="pt-BR">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Transações | Finnova
  </title>
  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="css/dashboard.css" rel="stylesheet"/>
 </head>
 <body>
  <header class="cabecalho-mobile d-lg-none">
   <a class="marca" href="dashboard.html">
    Finnova
   </a>
   <button aria-controls="menu-mobile" aria-expanded="false" aria-label="Abrir menu" class="btn botao-menu" data-bs-target="#menu-mobile" data-bs-toggle="offcanvas" type="button">
    <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
    <a class="nav-link" href="dashboard.html">
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
    <a class="nav-link active" href="transacoes.html">
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
      <path d="M3 5h8v7H3zM13 5h8v7h-8zM3 14h8v7H3zM13 14h8v7h-8z">
      </path>
     </svg>
     <span>
      Categorias
     </span>
    </a>
    <a class="nav-link" href="orcamentos.html">
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
    <a class="nav-link" href="dashboard.html">
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
    <a class="nav-link active" href="transacoes.html">
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
      <path d="M3 5h8v7H3zM13 5h8v7h-8zM3 14h8v7H3zM13 14h8v7h-8z">
      </path>
     </svg>
     <span>
      Categorias
     </span>
    </a>
    <a class="nav-link" href="orcamentos.html">
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
     <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
    <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
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
      Transações
     </h1>
     <p>
      Consulte e organize suas movimentações
     </p>
    </div>
    <div class="dropdown">
     <button aria-expanded="false" class="botao-perfil dropdown-toggle" data-bs-toggle="dropdown" type="button">
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
       <hr class="dropdown-divider"/>
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
    <section class="painel">
     <h2>
      Movimentações
     </h2>
     <form class="row g-2 filtros" role="search">
      <div class="col-md-5">
       <label class="visually-hidden" for="buscar-transacoes">
        Buscar transações
       </label>
       <input class="form-control" id="buscar-transacoes" placeholder="Buscar transações"/>
      </div>
      <div class="col-md-3">
       <label class="visually-hidden" for="filtro-categoria">
        Categoria
       </label>
       <select class="form-select" id="filtro-categoria">
        <option>
         Todas as categorias
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
      <div class="col-md-2">
       <label class="visually-hidden" for="filtro-tipo">
        Tipo
       </label>
       <select class="form-select" id="filtro-tipo">
        <option>
         Todos os tipos
        </option>
        <option>
         Despesa
        </option>
        <option>
         Receita
        </option>
       </select>
      </div>
      <div class="col-md-2">
       <label class="visually-hidden" for="filtro-periodo">
        Período
       </label>
       <select class="form-select" id="filtro-periodo">
        <option>
         Este mês
        </option>
        <option>
         Últimos 3 meses
        </option>
        <option>
         Todo o período
        </option>
       </select>
      </div>
     </form>
     <div class="table-responsive">
        <?php 
 $id=$_SESSION['id'];
        $url = "http://localhost/financas-fotografico%20(2)/financas-fotografico/financas-fotografico/api/index.php?tipo=transacoes&id=". urlencode($id);

$resposta = file_get_contents($url);

$dados = json_decode($resposta, true);

if($dados['sucesso']==false){
    $erro= $dados['mensagem'];
} foreach{$dados}?>
      <table class="table tabela-transacoes">
       <thead>
        <tr>
         <th>
          Data
         </th>
         <th>
          Descrição
         </th>
         <th>
          Categoria
         </th>
         <th>
          Tipo
         </th>
         <th class="text-end">
          Valor
         </th>
         <th>
          <span class="visually-hidden">
           Ações
          </span>
         </th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td>
          05/11
         </td>
         <td>
          Supermercado
         </td>
         <td>
          Alimentação
         </td>
         <td>
          <span class="etiqueta etiqueta-despesa">
           Despesa
          </span>
         </td>
         <td class="valor-tabela texto-despesa">
          - R$ 312,00
         </td>
         <td>
          <div class="dropdown">
           <button aria-label="Ações de Supermercado" class="btn botao-opcoes" data-bs-toggle="dropdown" type="button">
            <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
             <circle cx="12" cy="5" r="1">
             </circle>
             <circle cx="12" cy="12" r="1">
             </circle>
             <circle cx="12" cy="19" r="1">
             </circle>
            </svg>
           </button>
           <ul class="dropdown-menu dropdown-menu-end">
            <li>
             <button class="dropdown-item" data-bs-target="#modal-transacao" data-bs-toggle="modal">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="m4 20 4.5-1 11-11a2 2 0 0 0-3-3l-11 11L4 20z">
               </path>
              </svg>
              Editar
             </button>
            </li>
            <li>
             <button class="dropdown-item text-danger acao-excluir" type="button">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="M4 7h16M10 4h4M6 7l1 13h10l1-13M10 11v6M14 11v6">
               </path>
              </svg>
              Excluir
             </button>
            </li>
           </ul>
          </div>
         </td>
        </tr>
        <tr>
         <td>
          05/11
         </td>
         <td>
          Uber
         </td>
         <td>
          Transporte
         </td>
         <td>
          <span class="etiqueta etiqueta-despesa">
           Despesa
          </span>
         </td>
         <td class="valor-tabela texto-despesa">
          - R$ 28,50
         </td>
         <td>
          <div class="dropdown">
           <button aria-label="Ações de Uber" class="btn botao-opcoes" data-bs-toggle="dropdown" type="button">
            <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
             <circle cx="12" cy="5" r="1">
             </circle>
             <circle cx="12" cy="12" r="1">
             </circle>
             <circle cx="12" cy="19" r="1">
             </circle>
            </svg>
           </button>
           <ul class="dropdown-menu dropdown-menu-end">
            <li>
             <button class="dropdown-item" data-bs-target="#modal-transacao" data-bs-toggle="modal">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="m4 20 4.5-1 11-11a2 2 0 0 0-3-3l-11 11L4 20z">
               </path>
              </svg>
              Editar
             </button>
            </li>
            <li>
             <button class="dropdown-item text-danger acao-excluir" type="button">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="M4 7h16M10 4h4M6 7l1 13h10l1-13M10 11v6M14 11v6">
               </path>
              </svg>
              Excluir
             </button>
            </li>
           </ul>
          </div>
         </td>
        </tr>
        <tr>
         <td>
          05/11
         </td>
         <td>
          Aluguel
         </td>
         <td>
          Moradia
         </td>
         <td>
          <span class="etiqueta etiqueta-despesa">
           Despesa
          </span>
         </td>
         <td class="valor-tabela texto-despesa">
          - R$ 1.200,00
         </td>
         <td>
          <div class="dropdown">
           <button aria-label="Ações de Aluguel" class="btn botao-opcoes" data-bs-toggle="dropdown" type="button">
            <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
             <circle cx="12" cy="5" r="1">
             </circle>
             <circle cx="12" cy="12" r="1">
             </circle>
             <circle cx="12" cy="19" r="1">
             </circle>
            </svg>
           </button>
           <ul class="dropdown-menu dropdown-menu-end">
            <li>
             <button class="dropdown-item" data-bs-target="#modal-transacao" data-bs-toggle="modal">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="m4 20 4.5-1 11-11a2 2 0 0 0-3-3l-11 11L4 20z">
               </path>
              </svg>
              Editar
             </button>
            </li>
            <li>
             <button class="dropdown-item text-danger acao-excluir" type="button">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="M4 7h16M10 4h4M6 7l1 13h10l1-13M10 11v6M14 11v6">
               </path>
              </svg>
              Excluir
             </button>
            </li>
           </ul>
          </div>
         </td>
        </tr>
        <tr>
         <td>
          05/11
         </td>
         <td>
          Salário
         </td>
         <td>
          Renda
         </td>
         <td>
          <span class="etiqueta etiqueta-receita">
           Receita
          </span>
         </td>
         <td class="valor-tabela texto-receita">
          + R$ 5.150,00
         </td>
         <td>
          <div class="dropdown">
           <button aria-label="Ações de Salário" class="btn botao-opcoes" data-bs-toggle="dropdown" type="button">
            <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
             <circle cx="12" cy="5" r="1">
             </circle>
             <circle cx="12" cy="12" r="1">
             </circle>
             <circle cx="12" cy="19" r="1">
             </circle>
            </svg>
           </button>
           <ul class="dropdown-menu dropdown-menu-end">
            <li>
             <button class="dropdown-item" data-bs-target="#modal-transacao" data-bs-toggle="modal">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="m4 20 4.5-1 11-11a2 2 0 0 0-3-3l-11 11L4 20z">
               </path>
              </svg>
              Editar
             </button>
            </li>
            <li>
             <button class="dropdown-item text-danger acao-excluir" type="button">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="M4 7h16M10 4h4M6 7l1 13h10l1-13M10 11v6M14 11v6">
               </path>
              </svg>
              Excluir
             </button>
            </li>
           </ul>
          </div>
         </td>
        </tr>
        <tr>
         <td>
          04/11
         </td>
         <td>
          Boleto da faculdade
         </td>
         <td>
          Educação
         </td>
         <td>
          <span class="etiqueta etiqueta-despesa">
           Despesa
          </span>
         </td>
         <td class="valor-tabela texto-despesa">
          - R$ 150,00
         </td>
         <td>
          <div class="dropdown">
           <button aria-label="Ações de Boleto da faculdade" class="btn botao-opcoes" data-bs-toggle="dropdown" type="button">
            <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
             <circle cx="12" cy="5" r="1">
             </circle>
             <circle cx="12" cy="12" r="1">
             </circle>
             <circle cx="12" cy="19" r="1">
             </circle>
            </svg>
           </button>
           <ul class="dropdown-menu dropdown-menu-end">
            <li>
             <button class="dropdown-item" data-bs-target="#modal-transacao" data-bs-toggle="modal">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="m4 20 4.5-1 11-11a2 2 0 0 0-3-3l-11 11L4 20z">
               </path>
              </svg>
              Editar
             </button>
            </li>
            <li>
             <button class="dropdown-item text-danger acao-excluir" type="button">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="M4 7h16M10 4h4M6 7l1 13h10l1-13M10 11v6M14 11v6">
               </path>
              </svg>
              Excluir
             </button>
            </li>
           </ul>
          </div>
         </td>
        </tr>
        <tr>
         <td>
          03/11
         </td>
         <td>
          Freelance
         </td>
         <td>
          Renda
         </td>
         <td>
          <span class="etiqueta etiqueta-receita">
           Receita
          </span>
         </td>
         <td class="valor-tabela texto-receita">
          + R$ 650,00
         </td>
         <td>
          <div class="dropdown">
           <button aria-label="Ações de Freelance" class="btn botao-opcoes" data-bs-toggle="dropdown" type="button">
            <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
             <circle cx="12" cy="5" r="1">
             </circle>
             <circle cx="12" cy="12" r="1">
             </circle>
             <circle cx="12" cy="19" r="1">
             </circle>
            </svg>
           </button>
           <ul class="dropdown-menu dropdown-menu-end">
            <li>
             <button class="dropdown-item" data-bs-target="#modal-transacao" data-bs-toggle="modal">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="m4 20 4.5-1 11-11a2 2 0 0 0-3-3l-11 11L4 20z">
               </path>
              </svg>
              Editar
             </button>
            </li>
            <li>
             <button class="dropdown-item text-danger acao-excluir" type="button">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="M4 7h16M10 4h4M6 7l1 13h10l1-13M10 11v6M14 11v6">
               </path>
              </svg>
              Excluir
             </button>
            </li>
           </ul>
          </div>
         </td>
        </tr>
        <tr>
         <td>
          02/11
         </td>
         <td>
          Combustível
         </td>
         <td>
          Transporte
         </td>
         <td>
          <span class="etiqueta etiqueta-despesa">
           Despesa
          </span>
         </td>
         <td class="valor-tabela texto-despesa">
          - R$ 152,30
         </td>
         <td>
          <div class="dropdown">
           <button aria-label="Ações de Combustível" class="btn botao-opcoes" data-bs-toggle="dropdown" type="button">
            <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
             <circle cx="12" cy="5" r="1">
             </circle>
             <circle cx="12" cy="12" r="1">
             </circle>
             <circle cx="12" cy="19" r="1">
             </circle>
            </svg>
           </button>
           <ul class="dropdown-menu dropdown-menu-end">
            <li>
             <button class="dropdown-item" data-bs-target="#modal-transacao" data-bs-toggle="modal">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="m4 20 4.5-1 11-11a2 2 0 0 0-3-3l-11 11L4 20z">
               </path>
              </svg>
              Editar
             </button>
            </li>
            <li>
             <button class="dropdown-item text-danger acao-excluir" type="button">
              <svg aria-hidden="true" class="icone-linha" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" viewbox="0 0 24 24">
               <path d="M4 7h16M10 4h4M6 7l1 13h10l1-13M10 11v6M14 11v6">
               </path>
              </svg>
              Excluir
             </button>
            </li>
           </ul>
          </div>
         </td>
        </tr>
       </tbody>
      </table>
     </div>
     <div class="rodape-tabela">
      <span>
       Mostrando 1 - 7 de 7
      </span>
      <nav aria-label="Paginação">
       <ul class="pagination mb-0">
        <li class="page-item active">
         <span class="page-link">
          1
         </span>
        </li>
       </ul>
      </nav>
     </div>
    </section>
   </main>
  </div>
  <div aria-hidden="true" aria-labelledby="titulo-modal-transacao" class="modal fade" id="modal-transacao" tabindex="-1">
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
        <input class="form-control" id="descricao-transacao" name="descricao-transacao" placeholder="Ex.: Supermercado" required="" type="text"/>
       </div>
       <div class="grupo-campo">
        <label for="valor-transacao">
         Valor
        </label>
        <input class="form-control" id="valor-transacao" min="0.01" name="valor-transacao" placeholder="0,00" required="" step="0.01" type="number"/>
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
        <input class="form-control" id="data-transacao" name="data-transacao" placeholder="" required="" type="date"/>
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
