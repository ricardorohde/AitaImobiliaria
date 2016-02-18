<!DOCTYPE html>
<html lang="en">

	<?php
		include "header.php";
	?>

	<body>
		<?php
			include "nav.php";
		?>

		<!-- Header Carousel -->
		<div class="col-md-12">

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
                                    <img class="slide-image" src="img/slider/slider1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/slider/slider2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/slider/slider3.jpg" alt="">
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

                </div>
		</div>
			<!-- Page Content -->
		<div class="container">

			<div class="row">
        
				<div class="col-md-12">

					<!-- Page Header -->
					<!--<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">Aluguel</h1>
						</div>
					</div>-->
					
					<?php
						$count = 0;
						require "db-conection.php";
						$result = mysqli_query($conexao,"SELECT * FROM `imoveis` WHERE transacao = 'Locação' ORDER BY click DESC LIMIT 3 ") or die(mysql_error());
						$row_cnt = mysqli_num_rows($result);
						if($row_cnt>0 ){
							?>
							<!-- Page Header -->
							<div class="row">
								<div class="col-lg-12">
									<h1 class="page-header">Aluguel</h1>
								</div>
							</div>
							<?php
							while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$count++;
								if($count == 0 or $count % 3 == 0){
								?>
									<div class="row">
								<?php
								}
								?>
									<div class="col-md-4 portfolio-item">
									<a href="imovel.php?idimo=<?php echo $row["id"] ?>">
										<img class="img-responsive" src="<?php echo $row["dir"].'/0.jpg' ?>" alt="">
									</a>
									<h3>
										<a href="imovel.php?idimo=<?php echo $row["id"] ?>">
										<?php
											echo $row["id"].'-'.$row["nm_empr"]
										?>
										</a>
									</h3>
									<p><?php echo $row["texto"] ?></p>
								</div>
						<?php
						}
						?>
						</div>
					<?php
						}
					?>

					<!--<div class="row">
						<div class="col-lg-12">
						<h1 class="page-header">Aluguel Por Temporada</h1>
						</div>
					</div>-->

					<?php
						$count = 0;
						require "db-conection.php";
						$result = mysqli_query($conexao,"SELECT * FROM `imoveis` WHERE transacao = 'Locação Temporada' ORDER BY click DESC LIMIT 3 ") or die(mysql_error());
						$row_cnt = mysqli_num_rows($result);
						if($row_cnt>0 ){
							?>
							<div class="row">
								<div class="col-lg-12">
									<h1 class="page-header">Aluguel Por Temporada</h1>
								</div>
							</div>
							<?php
							while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$count++;
								if($count == 0 or $count % 3 == 0){
								?>
									<div class="row">
								<?php
								}
								?>
									<div class="col-md-4 portfolio-item">
									<a href="imovel.php?idimo=<?php echo $row["id"] ?>">
										<img class="img-responsive" src="<?php echo $row["dir"].'/00.jpg' ?>" alt="">
									</a>
									<h3>
										<a href="imovel.php?idimo=<?php echo $row["id"] ?>">
										<?php
											echo $row["id"].'-'.$row["nm_empr"]
										?>
										</a>
									</h3>
									<p><?php echo $row["texto"] ?></p>
								</div>
						<?php
						}
						?>
						</div>
					<?php
						}
					?>
					
					<?php
						$count = 0;
						require "db-conection.php";
						$result = mysqli_query($conexao,"SELECT * FROM `imoveis` WHERE transacao = 'Venda' ORDER BY click DESC LIMIT 3 ") or die(mysql_error());
						$row_cnt = mysqli_num_rows($result);
						if($row_cnt>0 ){
							?>
							<div class="row">
								<div class="col-lg-12">
									<h1 class="page-header">Venda</h1>
								</div>
							</div>
							<?php
							while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$count++;
								if($count == 0 or $count % 3 == 0){
								?>
									<div class="row">
								<?php
								}
								?>
									<div class="col-md-4 portfolio-item">
									<a href="imovel.php?idimo=<?php echo $row["id"] ?>">
										<img class="img-responsive" src="<?php echo $row["dir"].'/00.jpg' ?>" alt="">
									</a>
									<h3>
										<a href="imovel.php?idimo=<?php echo $row["id"] ?>">
										<?php
											echo $row["id"].'-'.$row["nm_empr"]
										?>
										</a>
									</h3>
									<p><?php echo $row["texto"] ?></p>
								</div>
						<?php
						}
						?>
						</div>
					<?php
						}
					?>       
				</div>
			</div>
        </div>
		<?php
			include "footer.php";
		?>
		<!-- Script to Activate the Carousel -->
		<script>
			$('.carousel').carousel({
				interval: 5000 //changes the speed
			})
		</script>
	</body>
</html>
