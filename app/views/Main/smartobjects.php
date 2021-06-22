<div class="home_content">
	
	<!-- é aqui que o utilizador vai interagir com objetos do cisco
		 de maneira "automática" -->

		<div class="row">
			<div class="col-sm-12">
				<video autoplay loop>  
					<source src="imgs/header.mp4" type="video/mp4">
				</video>
			</div>
		</div>
		<br>
		<form method="POST">
		<div class="container">
        <div class="row">
			<div class="col-sm-4">
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/coffee.png" alt="coffee image" class="icons">
						<div>
						<?php
						/*consoante o dispositivo estiver ligado ou desligado
						 escolhe o botão mais indicado - vai ser igual para
						 os restantes botões */
						if($value_coffee == 0){
							echo '<button type="input" type="submit" name="coffee" class="btn btn-outline-danger">off</button>';	
						}else if($value_coffee == 1){
							echo '<button type="input" type="submit" name="coffee" class="btn btn-outline-success">on</button>';
						}
						?>
						</div>
					</div>
                </div>
				<br><br>
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/blinds.png" alt="blinds image" class="icons">
						<div>
						<?php
						if($value_blinds == 0){
							echo '<button type="input" type="submit" name="blinds" class="btn btn-outline-danger">off</button>';	
						}else if($value_blinds == 1){
							echo '<button type="input" type="submit" name="blinds" class="btn btn-outline-success">on</button>';
						}
						?>
						</div>
					</div>
                </div>
				<br><br>
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/outside.png" alt="outside lamp image" class="icons">
						<div>
						<?php
						if($value_outside == 0){
							echo '<button type="input" type="submit" name="outside" class="btn btn-outline-danger">off</button>';	
						}else if($value_outside == 1){
							echo '<button type="input" type="submit" name="outside" class="btn btn-outline-success">on</button>';
						}
						?>
						</div>
					</div>
                </div>				
			</div>
			<div class="col-sm-4">
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/ac.png" alt="ac image" class="icons">
						<div>
						<?php
						if($value_ac == 0){
							echo '<button type="input" type="submit" name="ac" class="btn btn-outline-danger">off</button>';	
						}else if($value_ac == 1){
							echo '<button type="input" type="submit" name="ac" class="btn btn-outline-success">on</button>';
						}
						?>
						</div>
					</div>
                </div>
				<br><br>
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/inside.png" alt="inside light image" class="icons">
						<div>
						<?php
						if($value_inside == 0){
							echo '<button type="input" type="submit" name="inside" class="btn btn-outline-danger">off</button>';	
						}else if($value_inside == 1){
							echo '<button type="input" type="submit" name="inside" class="btn btn-outline-success">on</button>';
						}
						?>
						</div>
					</div>
				</div>
				<br><br>
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/garagedoor.png" alt="garage door image" class="icons">
						<div>
						<?php
						if($value_garagedoor == 0){
							echo '<button type="input" type="submit" name="garagedoor" class="btn btn-outline-danger">off</button>';	
						}else if($value_garagedoor == 1){
							echo '<button type="input" type="submit" name="garagedoor" class="btn btn-outline-success">on</button>';
						}
						?>
						</div>
					</div>
                </div>
			</div>
			<div class="col-sm-4">
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/heater.png" alt="heater image" class="icons">
						<div>
						<?php
						if($value_heater == 0){
							echo '<button type="input" type="submit" name="heater" class="btn btn-outline-danger">off</button>';	
						}else if($value_heater == 1){
							echo '<button type="input" type="submit" name="heater" class="btn btn-outline-success">on</button>';
						}
						?>
						</div>
					</div>
                </div>
				<br><br>
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/speaker.png" alt="speaker image" class="icons">
						<div>
						<?php
						if($value_speaker == 0){
							echo '<button type="input" type="submit" name="speaker" class="btn btn-outline-danger">off</button>';	
						}else if($value_speaker == 1){
							echo '<button type="input" type="submit" name="speaker" class="btn btn-outline-success">on</button>';
						}
						?>
						</div>
					</div>
                </div>
				<br><br>
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/grass.png" alt="grass image" class="icons">
						<div>
						<?php
						if($value_grass == 0){
							echo '<button type="input" type="submit" name="grass" class="btn btn-outline-danger">off</button>';	
						}else if($value_grass == 1){
							echo '<button type="input" type="submit" name="grass" class="btn btn-outline-success">on</button>';
						}
						?>
						</div>
					</div>
                </div>
			</div>
			<div class="col-sm-12">
			<br><br><br>
				<div class="card text-center cardcolor">
					<p><br><i class='bx bx-coffee'></i>Let us do everything while you drink a coffee<i class='bx bx-coffee'></i></p>
				</div>
			</div>
		</div>
		</div>
		</form>
	
	</div>
	<script>
	//código js da sidebar
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
	<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>