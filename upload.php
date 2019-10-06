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
$tamanho_maximo = 200000;
//$extensao = $_FILES['arquivo']['type'];
$extensoes = array(".png",".jpg");
$tamanho_arquivo = $_FILES['arquivo']['size'];
$caminho_absoluto = "/var/www/html/upload/destino";

if (!empty($nome_arquivo)){

    if (!in_array($extensao, $extensoes))
        die ("Extensão invalida");

    if ($tamanho_arquivo > $tamanho_maximo)
        die("Arquivo muito Grande!");

    if (file_exists($caminho_absoluto."/".$nome_arquivo))
        die("Arquivo ja Existe");

    echo "Extensão Valida, informações do Arquivo: ";
    echo "<br>";
    echo 'Nome do Arquivo: ' . $nome_arquivo;
    echo "<br>";
    echo 'Extensão: ' . $extensao;
    echo "<br>";


}else{

    die ("Não existe um arquivo para subir!!!");

}




?>