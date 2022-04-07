
   @yield('menu')
    <div class="container-fluid menuprime">
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
   
   <nav class="navbar flex-column fle-md-row justfy-content-between navbar-expand-lg container-fluid">
        <a class="navbar-brand" href="index.html">
            <img src="{!! asset('assets/img/paomane.png') !!}" width="160" height="150">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('menu') }}"> Meu Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-dark" href="parceiros.php">Cadastrar Comércio /</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-dark" href="cardapio.php">Como Funciona  /</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-dark" href="carrinho.php">Ajuda /</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-dark" href="">Área do Cliente </a>
                </li>
            </ul>
        </div>
    </nav>
   
    
    