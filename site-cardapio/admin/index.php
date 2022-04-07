<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Estudos Bootstrap</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/admin.css">
    </head>
<body class="bg-image" style="background-image: url('img/back-burguer.jpg');
height: 100vh">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 navprincipal">
                <ul>
                    <li>
                        <a href="#">Entrar /</a>
                    </li>
                    <li>
                        <a href="#">Cadastrar-se</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
    
    <?php
        require_once('view/menu.php');
    ?>

    <section id="quemsomos">
        <div class="container quem-somos text-center">
            <div class="row">
                <div class="corpo">
                

                    <div id="propaganda">
                            <div class="row">
                                <div class="col-md-6">
                                    teste
                                </div>

                                <?php
                                                                       
                                   $nome = $_POST['nome'];
                                   $email =$_POST['email'];
                                   $telefone = $_POST['telefone'];
                                    
                                   
                                    try{

                                        include_once('PDO/conexao.php');
                                        if(empty($nome) || $nome == null || $nome == "" && empty($email) || $email == null || $email = "" && empty($telefone) || $telefone == null || $telefone == ""){
                                            echo '';
                                            
                                       }
                                       if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone'])){
                                            echo '';
                                            
                                       }

                                    $stmt = $conn->prepare('INSERT INTO cad_fornecedores (nome, email, telefone) VALUES (:nome, :email, :telefone)');
                                    $stmt->bindValue(':nome',$nome);
                                    $stmt->bindValue(':email',$email);
                                    $stmt->bindValue('telefone',$telefone);
                                    $stmt->execute(
                                    );
                                    
                                    }catch(PDOException $err){
                                        echo 'erro verificar' .$err->getMessage();
                                    }

                                    

                                ?>

                                <div class="col-md-6 propaganda">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="default-text py-3">Cadastre sua loja</h3>
                                        <form action="index.php" method="POST">
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix grey-text"></i>
                                                <label for="defaultForm-nome" name="nome">Nome Completo</label>
                                                <input type="text" name="nome" id="defaultForm-nome" class="form-control">
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix grey-text"></i>
                                                <label for="defaultForm-nome" name="email">E-mail</label>
                                                <input type="text" name="email" id="defaultForm-nome" class="form-control">
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix grey-text"></i>
                                                <label for="defaultForm-nome" name="telefone">Celular (com DDD)</label>
                                                <input type="text" name="telefone" id="defaultForm-nome" class="form-control">
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-danger waves-effect waves-light cadastrarbutton">Cadastrar Agora</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center container margin bg-color">
      <p>Desenvolvido por @Magno Santos</p>  
    </footer>


    </div>
 </body>
</html>