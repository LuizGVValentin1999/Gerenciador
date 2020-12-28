<?php
switch ($_POST['funcao']) {
    case 'cadastrar_medicao':
        cadastrar_medicao($_POST);
        break;
    case 'cadastrar_grupo':
        cadastrar_grupo($_POST);
        break;
        break;
    case 'cadastrar':
        cadastrar($_POST);
        break;
    default:
        echo "i equals 2";
        break;
}
    

    
function cadastrar_medicao($post){
    include('../../System/Checker/conection.php');
   
    $query = "INSERT INTO tipo_de_medicao (ABREVIACAO, NOME, TIPO_DE_MEDICAO, DESCRICAO) VALUES ('{$post['ABREVIACAO']}', '{$post['NOME']}', {$post['TIPO_DE_MEDICAO']}, '{$post['DESCRICAO']}');";
	$result_user = mysqli_query($con, $query);
	mysqli_fetch_assoc($result_user);
    header("Location: ../../Sistema/produto/cadastrarProduto");
    exit();
}

    
function cadastrar_grupo($post){
    include('../../System/Checker/conection.php');
  
    $query = "INSERT INTO produto_grupo (CODIGO, NOME, DESCRICAO) VALUES ('{$post['CODIGO']}', '{$post['NOME']}', '{$post['DESCRICAO']}');";
	$result_user = mysqli_query($con, $query);
	mysqli_fetch_assoc($result_user);
    header("Location: ../../Sistema/produto/cadastrarProduto");
    exit();
}

function cadastrar($post){
    @session_start();
    include('../../System/Checker/conection.php');

     
	$query = "SELECT * FROM produto where CODIGO = '{$post['CODIGO']}' ";

	$result_row = mysqli_query($con, $query);
    $row = mysqli_num_rows($result_row);
    
    if($row) {
    $_SESSION['msg'] = "codigo ja utilizado" ;
    header("Location: ../../Sistema/produto/cadastrarProduto");
    exit();
    }
    $datetime = date("Y-m-d H:i:s");
    $query = "INSERT INTO produto (CODIGO, NOME, GRUPO, TIPO_DE_MEDICAO, DESCRICAO, USUARIO_INCLUSAO, DATA_INCLUSAO)
             VALUES ('{$post['CODIGO']}', '{$post['NOME']}', '{$post['GRUPO']}', '{$post['TIPO_DE_MEDICAO']}', '{$post['DESCRICAO']}', '{$_SESSION['login']['ID']}', '{$datetime}');";
	$result_user = mysqli_query($con, $query);
	mysqli_fetch_assoc($result_user);
    header("Location: ../../Sistema/produto/cadastrarProduto");
    exit();

}