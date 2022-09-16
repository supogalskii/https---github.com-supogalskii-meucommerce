<?php
$sql = "SELECT * FROM paginas
";
$consulta = $conn->prepare($sql);
$resultado = $consulta->execute();
while($linha_menu=$consuta->fetch()){
    echo"<a href=\"?pagina={$linha_menu['url']}\">{linha_menu['label']}</a> - ";

}
?>
<a href="?pagina=logout">SAIR</a>
<hr>