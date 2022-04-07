<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Estudos Bootstrap</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/admin.css">
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
<?php 
    include_once('PDO/conexao.php');
    include_once('PDO/cad_produtos.php');
    session_start();
?>
<section>
    <div class="container corpo-cardapio">
        <h1 class="text-center">Cadastro de Produtos</h1>
        <hr>
        <?php
            $mensagemDeErro = isset($_SESSION['Mensagem de Erro']) ? $_SESSION['mensagem de Erro'] : '' ;
            if(!empty($mensagemDeErro)){
                echo $mensagemDeErro;
            }
        ?>
        <ul class="list-group mb-3">
            <li class="list-group-item py-3">
                <div class="row g-3">  
                <form action="PDO/cad_produtos.php" method="post">
                    <div class="form-group">
                        <label form="nome_Prod">Nome do Produto</label>
                        <input type="nome" name="nome_Prod" class="form-control" placeholder=""></input>
                    </div><br>
                    <div class="form-group">
                        <label form="descri_Prod">Descrição</label>
                        <input type="text-area" name="descri_Prod" class="form-control" placeholder=""></input>
                    </div><br>
                    <div class="form-group">
                        <label form="imagem_Prod">Imagem do Produto</label>
                        <input type="file" name="imagem_Prod" class="form-control" placeholder=""></input>
                    </div><br>
                    <div class="form-group">
                        <label form="tamanho_Prod">Tamanho</label>
                        <select class="form-select" name="tamanho_Prod">
                            <option value="Pequeno">Pequeno</option>
                            <option value="Médio">Médio</option>
                        </select>
                        
                    </div><br>
                    <div class="form-group">
                        <label form="qtd_Prod">Quantidade</label>
                        <input type="number" name="qtd_Prod" class="form-control" placeholder=""></input>
                    </div><br>
                    
                    <div class="form-group">
                        <label form="valor_Prod">Valor</label>
                        <input type="number" name="valor_Prod" class="form-control" placeholder=""></input>
                    </div><br>
                    <button type="submit" class="btn btn-danger">Cadastrar Produto</button>
                </form> 
                    <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                           
                        </div>
                    </div>
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