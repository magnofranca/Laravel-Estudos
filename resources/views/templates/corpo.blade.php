<section>
    <div class="container-fluid">

        <div class="row text-center  corpo">

            <div class="col-6 justfy-content-start">
                <h1>60 milhões de pedidos<br></h1>
                    <h1>pedidos em <br></h1>
                    <h1>apenas um mês<br></h1>
                    <p>Esse é o alcance das lojas parceiras do iFood.</p>
                    <p>Faça parte e alavanque suas vendas.</p>
            </div>
                
            <div class="col-6 justfy-content-end ">
                
               <div class="formcadastro"> <form action="index.php" method="POST">
                <h3 class="default-text py-3">Cadastre sua loja</h3>
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
                </form>   </div>
            </div> 

        </div>                   
                    
            
        
    </div>
</section>
@yield('corpo')