<?php
session_start();
    include_once('conexao.php');

    $nome_Prod = $_POST['nome_Prod'];
    $descri_Prod = $_POST['descri_Prod'];
    $imagem_Prod = $_POST['imagem_Prod'];
    $tamanho_Prod = $_POST['tamanho_Prod'];
    $qtd_Prod = $_POST['qtd_Prod'];
    $valor_Prod = $_POST['valor_Prod'];

     //Verificar a existencia da variavel $_POST['nome']
     if(isset($_POST['nome_Prod']) & isset($_POST['descri_Prod']) & isset($_POST['imagem_Prod']) & isset($_POST['tamanho_Prod']) & isset($_POST['qtd_Prod']) & isset($_POST['valor_Prod'])){
        
       
    }
    if(empty($nome_Prod) & empty($descri_Prod) & empty($imagem_Prod) & empty($tamanho_Prod) & empty($qtd_Prod) & empty($valor_Prod)){
        $_SESSION['Mensagem de erro'] = 'O camponão pode ficar em branco';
    }
    if(strlen($nome_Prod) < 3){ //strlen conta a quantidade de caracteres
        echo 'o nome deve ser maior que 3 caracteres';
        return;
    }

    if(strlen($nome_Prod) > 50 ){
        echo 'nome é muito extenso';
        return;
    }
    if(!is_string($nome_Prod)){
        echo 'isso nao é uma string';
    }
    
    $cad_produtos = $conn->prepare('INSERT INTO cad_produtos (nome_Prod, descri_Prod, imagem_Prod, tamanho_Prod, qtd_Prod, valor_Prod) VALUES (:nome_Prod, :descri_Prod, :imagem_Prod, :tamanho_Prod, :qtd_Prod, :valor_Prod)');
    $cad_produtos->bindValue(':nome_Prod', $nome_Prod);
    $cad_produtos->bindValue(':descri_Prod', $descri_Prod);
    $cad_produtos->bindValue(':imagem_Prod', $imagem_Prod);
    $cad_produtos->bindValue(':tamanho_Prod', $tamanho_Prod);
    $cad_produtos->bindValue(':qtd_Prod', $qtd_Prod);
    $cad_produtos-> bindValue(':valor_Prod', $valor_Prod);
    $cad_produtos->execute();

   
    ?>