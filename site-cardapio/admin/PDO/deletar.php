<?php
  /*session_start();
    ob_start();
    include_once('conexao.php');

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    echo var_dump($id);




$query_usuario = "SELECT id FROM cad_fornecedores WHERE id = $id LIMIT 1";
$result_usuario = $conn->prepare($query_usuario);
$result_usuario->execute();

if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
    $query_del_usuario = "DELETE FROM cad_fornecedores WHERE id = $id";
    $apagar_usuario = $conn->prepare($query_del_usuario);

    if ($apagar_usuario->execute()) {
        $_SESSION['msg'] = "<p style='color: green;'>Usuário apagado com sucesso!</p>";
        
    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Usuário não apagado com sucesso!</p>";
        
    }
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    
}*/

/*include_once('conexao.php');

    try{
        $id = filter_input (INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $deletar=$conn->prepare ("DELETE FROM cad_fornecedores WHERE id = :id ");
    $deletar->execute();
    

    echo $deletar->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
       */
      
       include_once('conexao.php');

       if(isset($_GET['id'])){
            $user_id = $_GET['id'];

            $dadosCadFornecedores = "DELETE FROM cad_fornecedores WHERE id = $user_id ";
            $result = $conn->prepare($dadosCadFornecedores);
            $result->execute();
    
            if($result == TRUE){
                header("Location: http://localhost/site-cardapio/parceiros.php");
            }else{
                echo "Error: ". $sql . "<br>" .$conn->error;
            }
       }

?>