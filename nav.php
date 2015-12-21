<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="img/simboloaitaimoveis.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about.php">Sobre Nós</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Imóveis
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="aluguel.php">Aluguel</a></li>
                            <li><a href="alugueltemporada.php">Aluguel por temporada</a></li>
                            <li><a href="venda.php">Venda</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.php">Contato</a>
                    </li>
                </ul>
                  <form class="navbar-form navbar-right" role="search" method="post" action="login.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="usuario" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-default">Acessar</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav> 