<?php
$sql_produto = 'SELECT * from produtos where id =:id';
$produto = $conn->prepare($sql_produto);
$produto->execute(['id'=> $_GET['id']]);
$produto_detalhe = $produto->fetch();
?>

<h1><?php echo $produto_detalhe['descricao'];?></h1>


<div class="card mb-3">
    <img src="<?php echo $produto_detalhe['imagem'];?>" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title"><?php echo $produto_detalhe['descricao'];?></h5>
        <p class="card-text"><?php echo $produto_detalhe['resumo'];?></p>
        <p class="card-text">
        <h3>R$<?php echo $produto_detalhe['valor'];?></h3>
        </p>
        <p class="card-text">
        <form method="POST">
            <input class="btn btn-primary" type="submit" name="adicionar_sacola" value="Adicionar a Sacola">
        </form>
        </p>
        <p class="card-text"><small class="text-muted"><?php echo $produto_detalhe['caracteristicas'];?></small></p>
    </div>
</div>