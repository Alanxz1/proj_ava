<?php
if(isset($_POST['login']) && isset($_POST['senha'])){
    $login = "22201302"; //declarando as senhas
    $senha = "a2005";

    if($_POST['login'] === $login && $_POST['senha'] === $senha){ //verificação dos dados
        header("Location: sucesso.php"); //redirecionamento das paginas
        exit();
    } else {
        header("Location: falha.php");
        exit();
    }
} else {
    header("Location: ex2.html");
    exit();
}
?>


