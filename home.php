<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Meu commerce</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <script src="js/jquery-3.6.1.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="card mb-3"><img src="imagens/bannernatal.png?php echo $produtos['imagem']; ?>"
                        class="card-img-top" alt="" </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php include 'menu_horizontal.php'; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <?php include "menu_categorias.php";?>
                    </div>
                    <div class="col-9">
                        <?php
                        if(isset($_GET['pagina'])){
                            if($_GET['pagina']=='produtos'){
                                include 'produtos_home.php';
                            }
                            if($_GET['pagina']== 'produto'){
                                include 'produto_detalhe.php';
                            }
                            if($_GET['pagina']== 'sacola'){
                                include 'sacola.php';
                            }
                             if($_GET['pagina']== 'meus_pedidos'){
                                include 'meus_pedidos.php';
                            }
                            if($_GET['pagina']== 'realizar_pedido'){
                                if(!isset($_SESSION['autenticado'])){
                                    include 'login.php';
                                }else{
                                    include 'realizar_pedido.php';
                                }
                                
                            }
                        }else{
                            include 'produtos_destaque.php';
                        }
                        ?>
                    </div>
                </div>
                <div class="row" style="background-color: #ccc ;">
                    @MEU COMMERCE 2022
                    <br>
                    DEV- TI/ UNIDAVI
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
                crossorigin="anonymous">
            </script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
            </script>

    </body>

</html>