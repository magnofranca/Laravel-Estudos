<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Estudos Bootstrap</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- CSS only -->
        <!-- JavaScript Bundle with Popper -->

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

<!--Carrinho de Compras-->
<section>
    <div class="container corpo-cardapio">
        <h1 class="text-center">Carrinho de Compras</h1>
        <hr>
        <ul class="list-group mb-3">
            <li class="list-group-item py-3">
                <div class="row g-3">
                    <div class="col-4 col-md-3 col-lg-2">
                        <a href="#">
                            <img class="microcheck" src="img/premium.jpg">
                        </a>
                    </div>
                    <div class="col-8 col-md-p col-lg-7 col-xl-8 text-left align-self-center">
                        <h4><b><a href="#" class="text-decoration-none text-danger">A moda da Casa</a></b></h4>
                        <h4><small>Melhor qualidade sul da ilha</small></h4>
                        <br><br> <h4><b><a href="#" class="text-decoration-none text-danger">Aicionais</a></b></h4>
                        <div class="col-8 col-md-p col-lg-7 col-xl-8 text-left align-self-center">
                            <h4><input type="radio" /><small class="opcionais">Beacon</small><span class="text-center">R$1,00</span></h4><hr>
                            <h4><input type="radio" /><small class="opcionais">Presunto</small></h4><hr>
                            <h4><input type="radio" /><small class="opcionais">Creme de Milho</small></h4><hr>
                            <h4><input type="radio" /><small class="opcionais">Queijo</small></h4><hr><br>
                            <h3 class="text-center">Alguma Observação?</h3>
                            <input type="text" class="form-control text-area"  />
                            
                        </div>
                    </div>
                    
                    <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-dark btn-sm">
                                <svg class="bi" width="16" height="16" fill="currentColor">
                                    <use xlink:href="glyphicon glyphicon-arrow-up" class="glyphicon glyphicon-arrow-up" />  
                                </svg>
                            </button>
                            <!--Contador em PHP-->
                            <form method="post">
                                <input type="hidden" name="contador" value="<?php echo isset($_POST['contador']) ? $_POST['contador'] : 1; ?>">
                                <input type="submit" name="Submit" value="Go!">
                            </form>
                            <?php
                                if(isset($_POST["Submit"])){
                                    $_POST['contador']+=1;
                                    echo $_POST['contador'];
                                }
                            ?>
                            <input type="text" class="form-control text-center border-dark" value="1">
                            <button type="button" onclick="aumentar()" class="btn btn-outline-dark btn-sm">
                                <svg class="bi" width="16" height="16" fill="currentColor">
                                    <use xlink:href="bi.svg#caret-up " />
                                </svg>
                            </button>
                            <button type="button" onclick="diminuir()" class="btn btn-outline-danger border-dark btn-sm">
                                <svg class="bi" width="16" height="16" fill="currentColor">
                                    <use xlink:href="bi.svg#trash" />
                                </svg>
                            </button>
                            <div class="text-right mt-2">
                                <small class="text-secondary">Valor Kg: R$ 3,99</small><br>
                                <span class="text-dark">Valor Item: R$ 7,98</span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
           
            <li class="list-group-item py-3">
                <div class="text-right">
                    <h4 class="text-dark mb-3">Valor Total: R$ 7,98</h4>
                    <a href="#" class="btn btn-outline-success btn-lg">Continuar Comprando</a>
                    <button class="btn btn-danger btn-lg">Finalizar Compra</button>
                </div>
            </li>
        </ul>

    </div>
</section>
<!--Fim Carrinho de Compras-->


    <footer class="text-center container margin bg-color">
      <p>Desenvolvido por @Magno Santos</p>  
    </footer>


    </div>
 </body>
</html>