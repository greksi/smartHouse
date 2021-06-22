<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=$this->getMeta();?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 
    <link href=  '/css/style.css'" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="/css/calendar.css">
</head>
<body>
	<!-- sidebar -->
	 <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
        <i class='bx bx-home-heart' ></i>
        <div class="logo_name">Smart House</div>
      </div>
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav_list">
      <li>
        <a href="/main/dashboard">
          <i class='bx bx-grid-alt' ></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="/main/smartobjects">
          <i class='bx bx-coffee'></i>
          <span class="links_name">Smart Objects</span>
        </a>
		<span class="tooltip">Smart Objects</span>
      </li>
      <li>
        <a href="/main/history">
          <i class='bx bx-archive-in' ></i>
          <span class="links_name">History</span>
        </a>
		<span class="tooltip">History</span>
      </li>
      <li>
        <a href="/main/analytics">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="links_name">Analytics</span>
        </a>
		<span class="tooltip">Analytics</span>
      </li>
	  <li>
        <a href="/main/pictures">
          <i class='bx bx-photo-album'></i>
          <span class="links_name">Pictures</span>
        </a>
		<span class="tooltip">Pictures</span>
      </li>
    </ul>
      <div class="logout">
		<div>
	    <a href="logout.php">
        <i class='bx bx-log-out' id="log_out" ></i>
		</a>
		<span class="tooltip">Logout</span>
		</div>
      </div>
  </div>
	<!-- fim da sidebar -->
        
     <?=$content;?>    
  
	
	
	<script>
	//script para deixar a sidebar interativa
	
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
	
	<script>
	//tentativa de c?digo ajax mas fds n?o est? a funcionar
	$(document).ready(function(){
        setInterval(function() {
            $("#main").load("dashvalues.php");
        }, 2000);
    })
	</script>
	
	<script src="/js/calendar.js"></script>

    <!--SCRIPTS-->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>


