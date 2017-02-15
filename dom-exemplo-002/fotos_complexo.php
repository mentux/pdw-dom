<div>
	<h1>Fotos Cadastradas</h1>
    <table border='1'>
    <tr><td>Titulo</td><td>Imagem</td><td>Classificacao</td></tr>
<?php
// Criando variável (objeto) do tipo DOMDocument
$dom = new DOMDocument();
// Carregando xml externo
$dom->load("fotos.xml");
// Buscando todos os elementos com nome de tag foto (<foto>)
$listaTagFoto = $dom->getElementsByTagName("foto");
foreach( $listaTagFoto as $tagFoto ) {
    echo "<tr>";
    $title=$tagFoto->getAttribute('title');
    echo "<td>$title</td>";
    if($tagFoto->hasChildNodes()){
        $filhos = $tagFoto->childNodes;
        foreach($filhos as $item){
            if($item->nodeType == XML_ELEMENT_NODE){
                echo "<td>$item->nodeValue</td>";
            }
        }
    }
    echo "</tr>";
}
?>
    </table>
</div>
