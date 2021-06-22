<div class="home_content">
		<div class="row">
		<div class="col-sm-12">
			<video autoplay loop>  
				<source src="imgs/header.mp4" type="video/mp4">
			</video>
		</div>
		</div>
		<br>
		
		<!-- Histórico apenas para os sensores (faltam 2 precisamos no mínimo 5)
		ainda vou mudar isto para meter mais bonito a apresentar a data
		separada do valor -->
		
		<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="card text-center cardcolor">
					<div class="card-header">
						<b>Temperature</b>
						<p>(date hour=>valueº)</p>
					</div>
					<div class="card-body">
					<?php echo nl2br($log_temp); ?> <!--apresenta linha a linha-->
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card text-center cardcolor">
					<div class="card-header">
						<b>Luminosity</b>
						<p>(date hour=>value%)</p>
					</div>
					<div class="card-body">
					<?php echo nl2br($log_lumi); ?>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card text-center cardcolor">
					<div class="card-header">
						<b>Humidity</b>
						<p>(date hour=>value%)</p>
					</div>
					<div class="card-body">
					<?php echo nl2br($log_humi); ?>
					</div>
				</div>
			</div>
		</div>
		
		</div>
		
		</div>
		<br><br>
    </div>
	
	
	<!-- script para a sidebar ficar interativa -->
	<script>
   let btn = document.querySelector("#btn");
   let sidebar = document.querySelector(".sidebar");

   btn.onclick = function() {
     sidebar.classList.toggle("active");
     if(btn.classList.contains("bx-menu")){
       btn.classList.replace("bx-menu" , "bx-menu-alt-right");
     }else{
       btn.classList.replace("bx-menu-alt-right", "bx-menu");
     }
   }

  </script>


    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>