<form method="post">
    <input class="btn btn-danger" type="submit" name="limpar_sacola" value="Limpar Sacola">
</form>
<hr>
<?php
if(isset($_SESSION['sacola'])){?>
<table class="table table-sm"">
    <thead class=" table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Descrição</th>
        <th scope="col">Valor</th>
        <th scope="col">Ações</th>
    </tr>

    </thead>
    <tbody>
        <?php 
        $chaves = array_keys($_SESSION['sacola']);
        foreach($chaves as $item){
            
     
        //select produto
        $sql_produto = "SELECT * from produtos where id = :id";
        $produto = $conn->prepare($sql_produto);
        $produto->execute(["id" => $_SESSION['sacola'] [$item]]);
        $produto = $produto->fetch();
        ?>
        <tr>
            <th scope="row"><?php echo $produto['id']?></th>
            <td><?php echo $produto['descricao']?></td>
            <td><?php echo $produto['valor']?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="produto" value="<?php echo $item; ?>">
                    <input class="btn btn-danger" type="submit" name="remover_sacola" value="Remover">

                </form>
            </td>
        </tr>
        <?php 
     
        }?>
    </tbody>
</table>

<a class="btn btn-primary" href="?pagina=realizar_pedido"> Realizar Pedido</a>

<?php }else {echo '<h3>Nenhum produto adicionado a Sacola!';}
    ?>