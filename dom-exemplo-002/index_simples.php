<?php
// Criando variavel (objeto) do tipo DOMDocument
$dom = new DOMDocument();
// Carregando xml externo
$dom->load("fotos_simples.xml");
// Buscando todos os elementos com nome de tag foto (<foto>)
$listaTagFoto = $dom->getElementsByTagName("foto");
?>
<div>
	<h1>Fotos Cadastradas</h1>
    <table border='1'>
    <tr><td>Titulo</td><td>Imagem</td></tr>
	<?php
	// Percorrendo os elementos (<foto>...</foto> ou <foto ... />)
	foreach( $listaTagFoto as $tagFoto ) {
        $src=$tagFoto->nodeValue;
        $title=$tagFoto->getAttribute('title');
        echo "<tr><td>".$title."</td><td>
        <img src='".$src."' /></td></tr>";
    } ?>
    </table>
</div>
