<?php

#versao do encoding xml
$dom = new DOMDocument("1.0", "UTF-8");

#retirar os espacos em branco
$dom->preserveWhiteSpace = false;

#gerar o codigo
$dom->formatOutput = true;

#criando o nó principal (root)
$alunos = $dom->createElement("alunos");

#nó filho
$aluno = $dom->createElement("aluno");

#setando nomes e atributos dos elementos xml (nós)
$nome = $dom->createElement("nome", "Juca");

$ra_valor = "01.23.45.67-89";
$ra1 = $dom->createElement("ra", $ra_valor);

$ra2 = $dom->createElement("ra2");
$ra2->appendChild($dom->createTextNode($ra_valor));

//$ra->appendChild($dom->createTextNode($ra_valor));


$sobrenome = $dom->createElement("sobrenome", "Bala");

$aluno->appendChild($ra1);
$aluno->appendChild($ra2);
$aluno->appendChild($nome);
$aluno->appendChild($sobrenome);
$alunos->appendChild($aluno);
$dom->appendChild($alunos);

$dom->save("alunos.xml");
header("Content-Type: text/xml");
//imprime o xml na tela
print $dom->saveXML();
die();
