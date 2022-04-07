<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Estudos Bootstrap</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/admin.css">
    </head>
<body class="bgcardapio">

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
        include_once('PDO/conexao.php');


    ?>

    

    <section>
        <div class="container">
            <!--Inicio Menu Cardapio-->
            <div class="row">
                <div class="menu-cardapio">
                    <nav class="nav-cardapio text-center">
                        <ul>
                            <li>
                                <a href="#">Burguers</a>
                            </li>
                            <li>
                                <a href="#">Porções</a>
                            </li>
                            <li>
                                <a href="#">Bebidas</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
            <!--Fim Menu Cardapio-->

            <!--Inicio Card Pedidos-->
            <div class="row corpo-cardapio text-center">
            
                <h2 class="title-cardapio text-center">Cardápio Pão Mané</h2>

                <div class="card-group">
                <?php
                $vsproduto = $conn->prepare("SELECT * FROM cad_produtos ORDER BY id DESC;");
                $vsproduto->execute();

                if($vsproduto->rowCount() > 0){}
                
                while($mostrar = $vsproduto->FETCH(PDO::FETCH_ASSOC)){
            ?>
                    <div class="col-md-3 card-principal">
                    
                        <div class="card cardnew" style="">
                            <img class="card-img-top" src="img/l1.webp" alt="Lanches" />
                            <div class="card-body">
                                <h5 class="card-body"><?php echo ''. $mostrar['nome_Prod']; ?></h5>
                                <p class="card-text">Venha saborear a melhor opção do Sul da Ilha</p>
                                
                                <a href="#" class="btn btn-danger">Adcionar ao Carrinho</a>
                            </div>
                        </div>
                        
                    </div><?php } ?>
             </div>
            </div>
        </div>
        
    </section>
<!--Fim Card Pedidos-->



    <footer class="text-center container margin bg-color">
      <p>Desenvolvido por @Magno Santos</p>  
    </footer>


    </div>
 </body>
</html>