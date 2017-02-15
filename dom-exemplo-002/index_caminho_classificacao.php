<?php
// Criando variavel (objeto) do tipo DOMDocument
$dom = new DOMDocument();
// Carregando xml externo
$dom->load("fotos.xml");
// Buscando todos os elementos com nome de tag foto (<foto>)
$listaTagFoto = $dom->getElementsByTagName("foto");
?>
<div>
	<h1>Fotos Cadastradas</h1>
    <table border='1'>
    <tr><td>Titulo</td><td>Imagem</td><td>Classificacao</td></tr>
	<?php
	foreach( $listaTagFoto as $tagFoto ) {

        $title=$tagFoto->getAttribute('title');

        $src=$tagFoto->
            getElementsByTagName("caminho")->item(0)->nodeValue;

        $classificacao=$tagFoto->
            getElementsByTagName("classificacao")->item(0)->nodeValue;

        echo "
        <tr>
            <td>".$title."</td>
            <td><img src='".$src."' /></td>
            <td align='center'>".$classificacao."</td>
        </tr>";
    } ?>
    </table>
</div>
