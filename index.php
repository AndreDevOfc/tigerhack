<!DOCTYPE html>
<html>
<head>
	<title>Fortune Tiger - Hacker</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
	<!-- STYLES DA PAGINA !-->
<style type="text/css">
	body{
		background-color: #1e272e;
	}
   h1{
   	color: white;
   	font-family: Poppins;
   }p{
   	color: white;
   	margin-top: -18px;
   	font-family: Poppins;
   }iframe{
   	width: 100%;
   	height: 800px;
   	border:none;
   }#meio{
   	padding: 67px;
   }.card{
   	width: 60%;
   	background-color: black;
   	color: white;
   }button{
   	width: 60%;
   	margin-top: 5px;
   }
    

</style>
<body>
   <div id="topo">
   	<center>
   	<img src="tiger.png">
   	<h1>Fortune Tiger</h1>
   	<p>App Hacker</p>
   	</center>
   </div>
   <div id="sinais">
<center>
   	<div class="card">
  <div class="card-body1">
    <span id="valor1">...</span>
  </div>
   <div class="card-body2">
    <span id="valor2">...</span>
  </div>
   <div class="card-body3">
    <span id="valor3">...</span>
  </div>
</div>
 <button type="button" class="btn btn-warning" id="gerarValores">Identificar Sinais</button>
</center>
   </div>
   <div id="meio">
   	 <iframe src="https://m.pgsoft-games.com/126/index.html?bet_type=1&operator_token=8a529e613977d2ab2f558205b40b1c2a&operator_player_session=81d9d70c-236e-49ff-8852-fab773fa1a5a&__refer=m.pg-redirect.net&or=static.pgsoft-games.com">
   	 	
   	 </iframe>
   </div>
   <script>
  document.getElementById("gerarValores").addEventListener("click", function() {
  	document.getElementById("valor1").innerText = "Aguarde, Estamos Identificando o melhor Sinal...";
    document.getElementById("valor2").innerText = "Aguarde, Estamos Identificando o melhor Sinal...";
    document.getElementById("valor3").innerText = "Aguarde, Estamos Identificando o melhor Sinal...";
  	setTimeout(function(){
    document.getElementById("valor1").innerText = Math.floor(Math.random() * 10) +"x Turbo";
    document.getElementById("valor2").innerText = Math.floor(Math.random() * 10) +"x Normal";
    document.getElementById("valor3").innerText = "Alternado";
  }, 2000);
  });
</script>
</body>
</html>
