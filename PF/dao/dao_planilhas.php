<?php

$path = !empty($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : dirname(dirname(__FILE__));

include_once($path . '/vo/vo_planilhas.php');
include_once(__DIR__ . '/../dados.php');

class dao_planilhas{

    public $tabela = 'planilhas';

    function carrega_nome_planilhas(){

    }

    function carrega_planilhas(){
        $conn = Dados::conectar();
        $sql = "SELECT *
                FROM {$this->tabela}";
        $sql = $conn->prepare($sql);
        $sql->execute();
        $sql = $sql->fetchAll();

        $retorno = array();
        if($sql){
            foreach($sql as $temp){
                $vo_planilhas = new vo_planilhas();
                $vo_planilhas->construct_vo_planilhas($temp);
                array_push($retorno, $vo_planilhas);
            }
            return $retorno;
        }else{
            return false;
        }
    }

}