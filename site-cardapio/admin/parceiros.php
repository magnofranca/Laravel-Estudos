<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Administração - Investidor</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
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


    <?php
        include_once('PDO/conexao.php');
        
       

        $result = $conn->prepare("SELECT * FROM cad_fornecedores ORDER BY id DESC;");
        $result->execute();

        if($result->rowCount() > 0){}
        while($busca = $result->fetch(PDO::FETCH_ASSOC)){ 
        
    ?>
    

    <section id="tabela-clientes">
        <div class="container">
                <div class="row">
                   
                    <div class="col-md-12">
                        <table class="table table-borderless bg-black">
                            <thead class="title-table">
                                
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome do Cliente</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Opções</th>
                                </tr>
                            </thead>
                            <?php include_once('PDO/deletar.php');?>
                            <tbody class="title-cli">
                                <tr>
                                    <th scope="row"><?php echo ''. $busca['id']; ?></th>
                                    <td><?php  echo ''. $busca['nome']; ?></td>
                                    <td><?php  echo ''. $busca['email']; ?></td>
                                    <td><?php echo ''. $busca['telefone']; ?></td> 
                                    <td><a class="btn btn-danger" href="PDO/deletar.php?id=<?php echo $busca['id']; ?>">Deletar</a></td>
                                </tr>
                                
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            
            </div>
    </section>
<?php }?>
    <footer class="text-center container margin bg-color">
      <p>Desenvolvido por @Magno Santos</p>  
    </footer>


    </div>
 </body>
</html>