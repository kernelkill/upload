<?php
/**
 * Created by PhpStorm.
 * User: kernelkill
 * Date: 06/10/19
 * Time: 16:13
 */


var_dump($_FILES);

$nome_arquivo = $_FILES['arquivo']["name"];
$extensao = strrchr($nome_arquivo, ".");
//$extensao = $_FILES['arquivo']['type'];
$extensoes = array(".png",".jpg");

if (!empty($nome_arquivo)){
    if (in_array($extensao, $extensoes)){
        echo "Extensão Valida, informações do Arquivo: ";
        echo "<br>";
        echo 'Nome do Arquivo: ' . $nome_arquivo;
        echo "<br>";
        echo 'Extensão: ' . $extensao;
        echo "<br>";

    }else{

        echo "Tipo de extensão não permiditda";
    }

}else{

    echo "Não existe um arquivo para subir!!!";

}




?>