<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $nome = $dom->createElement("nome", $_POST['nome']);
    $ra_valor = $_POST['ra'];

    $ra = $dom->createElement("ra", $ra_valor);

    //$ra->appendChild($dom->createTextNode($_POST['ra']));

    //$ra->appendChild($dom->createTextNode($ra_valor));


    $sobrenome = $dom->createElement("sobrenome", $_POST['sobrenome']);

    $aluno->appendChild($ra);
    $aluno->appendChild($nome);
    $aluno->appendChild($sobrenome);
    $alunos->appendChild($aluno);
    $dom->appendChild($alunos);

    $dom->save("alunos.xml");
    header("Content-Type: text/xml");
    //imprime o xml na tela
    print $dom->saveXML();
    die();
}
?>


<form method="POST">
    RA: <input type="text" name="ra"/> <br/>
    Nome:<input type="text" name="nome"/> <br/>
    Sobrenome: <input type="text" name="sobrenome"/> <br/>
    <input type="submit">
</form>
