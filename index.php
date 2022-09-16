<?php
session_start();

if (isset($_GET['debug'])){
    $_SESSION['debug']= $_GET['debug'];
}
if (isset($_GET['pagina']) && $_GET['pagina'] == 'logout') {
    session_destroy();
    session_start();
    header('Location ?');
}

include_once 'conexao.php';
include_once 'sql.php';
include_once 'autenticar.php';

//limpar sacola
if(isset($_POST['limpar_sacola'])){
    unset ($_SESSION['sacola']);
} 
 //adicionar a sacola
if(isset($_POST['adicionar_sacola'])){
    $_SESSION['sacola'][]=$_GET['id'];
}
//remover da sacola
if(isset($_POST['remover_sacola'])){
    unset($_SESSION['sacola'][$_POST['produto']]);
}
  
include "home.php";
//         if(isset($_SESSION['autenticado'])){
//              if(isset($_GET['pagina])){
//  buscar no banco de dados se a pagina requisitada existe
//      $sql = " SELECT * FROM paginas WHERE id = :id";
//          $consulta = $conn->prepare($sql);
//          $consulta->execute(['id'=>$_GET['pagina']]);
//          if($consulta->rowCount()>0){
//              include 'menu.php';
//              include $linha['src'];
//              }else{
//               include 'menu.php';
//               include 'gome.php';
//                  }else {
//                       include 'login.php';
//              }
    if(isset($_SESSION['debug'])){
        if($_SESSION['debug']== true){
            include'debug.php';
        }
    }

?>