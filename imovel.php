<!DOCTYPE html>
<html lang="en">

<?php
	include "header.php";
?>

<body>

    <!-- Navigation -->
    <?php
		include "nav.php";
	?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
        <!--
            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>
            -->
            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="img/apt/ap02.jpg" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right">R$24.99</h4>
                        <h4><a href="#">Prédio 1</a>
                        </h4>
                        <p>Detalhes sobre o imóvel</p>
                    </div>
                </div>
                <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/apt/ap02b.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/apt/ap02q.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/apt/ap02s.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
    <!-- /.container -->
    <div class="container">
        

    </div>
    
	</div>
    <!-- /.container -->
	<!-- Footer -->
        <?php
			include "footer.php";
		?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
