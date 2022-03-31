<?php

require_once("Pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Victor R. F de Roma");
$pessoa->setEndereco("Av Aguia de Haia");
$pessoa->setBairro("Jd São Nicolau");
$pessoa->setCep("12900-129");
$pessoa->setCidade("São Paulo");
$pessoa->setEstado("SP");
?>

<html>
    <head>
        <title>PhP</title>
    </head>
    <body> 
      <table style="border: 1px splid;">
        <tr>
            <td style="border: 1px solid; background-color: #9942bd"><?php echo $pessoa->getNome(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid; background-color: #cca1de"><?php echo $pessoa->getEndereco(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid; background-color: #9942bd"><?php echo $pessoa->getBairro(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid; background-color: #cca1de"><?php echo $pessoa->getCep(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid; background-color: #9942bd"><?php echo $pessoa->getCidade(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid; background-color: #cca1de"><?php echo $pessoa->getEstado(); ?></td>
        </tr>
      </table>
    </body>
</html>