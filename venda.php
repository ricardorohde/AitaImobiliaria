<!DOCTYPE html>
<html lang="en">

	<?php
		include "header.php";
	?>

	<body>

		<?php
			include "nav.php";
		?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Venda</h1>
            </div>
        </div>

        <?php
			$count = 0;
			require "db-conection.php";
			$result = mysqli_query($conexao,"SELECT * FROM imoveis WHERE transacao = 'Venda'") or die(mysql_error());
			$row_cnt = mysqli_num_rows($result);
			if($row_cnt>0 ){
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
			}else{
							echo "Não existem imóveis cadastrados para esta modalidade";
						}
		?>

        <hr>

        <!-- Pagination -->
        <!--<div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>-->
        <!-- /.row -->

    </div>
    <!-- /.container -->
        <?php
			include "footer.php";
		?>

	</body>

</html>
