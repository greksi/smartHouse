<div class="home_content">
    <!-- comment  <div class="row">
		<div class="col-sm-12">
			<video autoplay loop>  
				<source src="imgs/header.mp4" type="video/mp4">
			</video>
		</div>
    </div>  -->
	<br><br>

    <div id="main" class="container">
        <div class="row">
			<div class="col-sm-4">
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/sunicon.png" alt="sun image" class="icons">
					<br><b>Luminosity: <?php echo $value_lumi; ?>%</b>
					</div>
                </div>
				<br><br>
                <div class="card text-center cardcolor">
                    <div class="card-body"><img src="imgs/tempicon.png" alt="temperature image" class="icons">
					<br><b>Temperature: <?php echo $value_temp; ?>º</b>
					</div>
					
                </div>	
			</div>
			<div class="col-sm-4">
                <div class="card text-center cardcolor">
                    <div id="main" class="card-body">
					<?php //fazer a mudan?a de imagem
						if($value_door == 1){
							echo '<img src="imgs/dooropenicon.png" alt="door image" class="icons">';
						}else if($value_door == 0){
							echo '<img src="imgs/doorcloseicon.png" alt="door image" class="icons">';
						}
					?>
					<br><b>Door: <?php //mudan?a de texto
									if($value_door == 0){
										echo "Closed";	
									}elseif($value_door == 1){
										echo "Open";
									}else{
										echo "Error";
									}
								 ?></b>
					</div>
                </div>
				<br><br>
                <div class="card text-center cardcolor">
                    <div class="card-body" id="div_refresh">
					<?php
						if($value_lamp == 1){
							echo '<img src="imgs/lamponicon.png" alt="lamp image" class="icons">';
						}else if($value_lamp == 0){
							echo '<img src="imgs/lampofficon.png" alt="lamp image" class="icons">';
						}
					?>
					<br><b>Lamp: <?php
									if($value_lamp == 0){
										echo "Off";	
									}elseif($value_lamp == 1){
										echo "On";
									}else{
										echo "Error";
									}
								 ?></b></b>
					</div>
                </div>
		
			</div>
			<!-- calend?rio -->
			<div class="col-sm-4">
			<div class="card text-center cardcolor">
					<div class="calendar">
						<div class="calendar-header">
							<span class="month-picker" id="month-picker">February</span>
							<div class="year-picker">
							<span id="year">2021</span>
							</div>
						</div>
					<div class="calendar-body">
						<div class="calendar-week-day">
							<div>Sun</div>
							<div>Mon</div>
							<div>Tue</div>
							<div>Wed</div>
							<div>Thu</div>
							<div>Fri</div>
							<div>Sat</div>
						</div>
						<div class="calendar-days"></div>
					</div>
						<div class="month-list"></div>
						<br>
					</div>
			</div>
			</div>
			<!-- fim de calend?rio -->
		</div>
	
    
        <br><br>
		<!-- tabela de sensores -->
		<!-- faltam 2 sensores -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card cardcolor">
                    <div class="card-header textcolor"><b>Sensor Table</b></div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr class="textcolor">
                                <th scope="col">IoT Device Type</th>
                                <th scope="col">Value</th>
                                <th scope="col">Update date</th>
                                <th scope="col">Warnings</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="textcolor">
                              <td>Temperature</td>
                                <td><?php echo $value_temp; ?>º</td>
                                <td><?php echo $date_temp; ?></td>
                                <td><span class="badge badge-pill badge-info"><?php echo $temp_warn ?></span></td>
                              </tr>
                              <tr class="textcolor">
                                <td>Humidity</td>
                                <td><?php echo $value_humi; ?>%</td>
                                <td><?php echo $date_humi; ?></td>
                                <td><span class="badge badge-pill badge-primary"><?php echo $humi_warn ?></span></td>
                              </tr>
                              <tr class="textcolor">
                                <td>Luminosity</td>
                                <td><?php echo $value_lumi; ?>%</td>
                                <td><?php echo $date_lumi; ?></td>
                                <td><span class="badge badge-pill badge-info"><?php echo $lumi_warn ?></span></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>
