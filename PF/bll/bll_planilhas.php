<?php

$path = !empty($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : dirname(dirname(__FILE__));
$acao = !empty($_POST['acao']) ? $_POST['acao'] : $_GET['acao'];

require_once($path . '/dao/dao_planilhas.php');
require_once($path . '/vo/vo_planilhas.php');
//require_once(__DIR__ . '/../connection.php');

$acao = $_POST['acao'] ?? '';

if ($acao === 'carrega_planilhas') {
    $dao_planilhas = new dao_planilhas();
    $vo_planilhas = $dao_planilhas->carrega_planilhas();

    $retorno = array();
    if ($vo_planilhas) {
        foreach ($vo_planilhas as $planilha) {
            array_push($retorno, array(
                'nome' => $planilha->get_nome()
            ));
        }
    }

    echo json_encode(['data' => $retorno]);
    exit;
}