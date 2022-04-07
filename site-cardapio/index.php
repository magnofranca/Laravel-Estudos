<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Estudos Bootstrap</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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

    <section id="parceiros">
        <div class="container-fluid text-center margin parceiros">
            <h3>Parceiros</h3>
            <div class="container">
                <div class="row" id="king">
                    <div class="col-lg-4 king">
                        <img src="img/king.png" width="30%"/>
                    </div>
                    <div class="col-lg-4 king">
                        <img src="img/king2.png" width="50%"/>
                    </div>
                    <div class="col-lg-4 king">
                        <img src="img/king.png" width="30%"/>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="quemsomos">
        <div class="container quem-somos text-center">
            <div class="row">
                <div class="corpo">
                

                    <div id="propaganda">
                            <div class="row">
                                <div class="col-md-6 textprincipal">
                                    <h1>60 milhões de pedidos em apenas um mês</h1>
                                        <p>Esse é o alcance das lojas parceiras do iFood.</p>
                                        <p>Faça parte e alavanque suas vendas.</p>
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

    

    <section id="servicos">
        <div class="container text-center margin servicos">
            <h3>SERVIÇOS</h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <img src="img/boteco.webp" width="100%" />
                    </div>
                    <div class="col-lg-6">
                        <p>What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <img src="img/boteco.webp" width="100%" />
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