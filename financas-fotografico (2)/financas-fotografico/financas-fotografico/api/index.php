<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: *");

include_once("inc/config.php");

$tipo = $_GET["tipo"] ?? "";
$resposta = [];

if ($_SERVER["REQUEST_METHOD"] == "GET") {


    if ($tipo == "login") {
        include_once("inc/login.php");

    } else if ($tipo == "cadastrar") {
        include_once("inc/cadastrar.php");

    }
    else if ($tipo == "transacoes") {
        include_once("inc/transacoes.php");

    }

} else {



}

echo json_encode($resposta, JSON_UNESCAPED_UNICODE);


?>