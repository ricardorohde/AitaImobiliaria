<!-- Header Carousel -->
		<div class="col-md-12">

			<!-- Page Content -->
		<div class="container">

			<div class="row">
        
				<div class="col-md-12">

					
					
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