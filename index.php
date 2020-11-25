<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport"  content="device=width-device,initial-scale=1.0,maximum-scale=1.0">
		<meta name="author"  content="Bruno Moraes">
		<meta name="description" content="This is a project about spotify">
		<meta name="keyword" content="project, developer course, front-end">
		<title>Spotify Project</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="sidebar">
			<div class="sidebar-wraper">
				<div class="sidebar-logo">
					<img src="assets/images/logo.png">
				</div><!---sidebar-logo--->

				<div class="sidebar-menu">
					<a href="#" class="sidebar-menu-selecionado"><i class="fas fa-home"></i>Início</a>
					<a href="#"><i class="fas fa-search"></i> Buscar</a>
					<a href="#"><i class="fas fa-database"></i> Biblioteca</a>
				</div><!---sidebar-menu--->

				<div class="sidebar-menu">
					<p class="sidebar-menu-title">Playlists</p>
					<div class="sidebar-menu-item">
						<div class="sidebar-menu-item-componente">
							<span>+</span>
						</div><!--sidebar-menu-item-componente--->
						<span class="list">Criar Playlist</span>
					</div><!---sidebar-menu-item--->

					<div class="sidebar-menu-item">
						<img src="assets/images/musicas_curtidas.png">
						<span class="list">Músicas Curtidas</span>
					</div><!---sidebar-menu-item--->
				</div><!---sidebar-menu--->

				<div class="sidebar-playlist">
					<a class="sidebar-menu-selecionado" href="">Playlist</a>
					<a href="">Playlist</a>
					<a href="">Playlist</a>
					<a href="">Playlist</a>
					<a href="">Playlist</a>
				</div><!--sidebar-playlist--->

				<div class="sidebar-playlist">
					<a class="sidebar-menu-selecionado" href="">Playlist</a>
					<a href="">Playlist</a>
					<a href="">Playlist</a>
					<a href="">Playlist</a>
					<a href="">Playlist</a>
				</div><!--sidebar-playlist--->
			</div><!--sidebar-wraper-->
		</div><!---sidebar--->

		<div class="main">
			<div class="main-wraper">
				<div class="main-row">
					<div class="main-row-title"><h2>As Melhores das Melhores</h2></div>

					<div class="main-col">
						<img src="assets/images/img1.png">
						<h3>As 50 mais tocadas</h3>
						<p>Alguma descrição da minha música...</p>
					</div><!--main-col--->

					<div class="main-col">
						<img src="assets/images/img2.png">
						<h3>As 50 mais tocadas</h3>
						<p>Alguma descrição da minha música...</p>
					</div><!--main-col--->

					<div class="main-col">
						<img src="assets/images/img1.png">
						<h3>As 50 mais tocadas</h3>
						<p>Alguma descrição da minha música...</p>
					</div><!--main-col--->

					<div class="main-col">
						<img src="assets/images/img2.png">
						<h3>As 50 mais tocadas</h3>
						<p>Alguma descrição da minha música...</p>
					</div><!--main-col--->

					<div class="main-col">
						<img src="assets/images/img1.png">
						<h3>As 50 mais tocadas</h3>
						<p>Alguma descrição da minha música...</p>
					</div><!--main-col--->

					<div class="main-col">
						<img src="assets/images/img2.png">
						<h3>As 50 mais tocadas</h3>
						<p>Alguma descrição da minha música...</p>
					</div><!--main-col--->

					<div class="main-col">
						<img src="assets/images/img1.png">
						<h3>As 50 mais tocadas</h3>
						<p>Alguma descrição da minha música...</p>
					</div><!--main-col--->

					<div class="main-col">
						<img src="assets/images/img2.png">
						<h3>As 50 mais tocadas</h3>
						<p>Alguma descrição da minha música...</p>
					</div><!--main-col--->

				</div><!--main-row-->

				<div class="main-row">
					<div class="main-row-title"><h2>Minhas Músicas</h2></div>
					<div class="main-col">
						<img src="assets/images/gunsrools.png">
						<h3>Guns N'Roses</h3>
						<p>Sweet Child Of Mind</p>
					</div><!--main-col--->

					<div class="main-col">
						<img src="assets/images/rocky.png">
						<h3>Rocky Balboa</h3>
						<p>Eye Of The Tiger</p>
					</div><!--main-col--->
				</div><!---main-row-->
			</div><!---main-wraper-->
		</div><!---main---->

		<div class="player">
			<div class="player-artist"></div><!---player-list-->
			<div class="player-control">
				<div class="player-control-buttons">
					<a href=""><i class="fas fa-backward"></i></a>
					<a style="display:none;" id="pauseBtn" href="#"><i class="far fa-pause-circle"></i></a>
					<a id="playBtn" href="#"><i class="far fa-play-circle"></i></a>
					<a href=""><i class="fas fa-forward"></i></a>
				</div><!--player-control-buttons--->

				<div class="player-control-progress">
					<div style="width:0%" class="player-control-progress-2"></div>
				</div><!--player-control-progress-->
			</div><!---player-control--->
		</div><!--player--->

		<audio id="audioplayer" style="position: absolute;left: 0;
			top: 0;z-index: -999;opacity: 0;" controls="">
		</audio>
		<script src="assets/js/all.min.js"></script>

		<script>

			var audioPlayer = document.getElementById('audioplayer');
			var loaded = false;

			var playBtn = document.getElementById('playBtn');
			var pauseBtn = document.getElementById('pauseBtn');

			pauseBtn.addEventListener('click',(e)=>{
				e.preventDefault();

				playBtn.style.display = "inline";
				pauseBtn.style.display = "none";
				audioPlayer.pause();
				return false;
			});


			playBtn.addEventListener('click',(e)=>{
				e.preventDefault();

				playBtn.style.display = "none";
				pauseBtn.style.display = "inline";
				audioPlayer.play();
				return false;
			});

			const playSong = (file) => {


					if(loaded == false){
						audioPlayer.innerHTML = `<source src="`+file+`" type="audio/mp3" />`;
						loaded = true;
					}

					audioPlayer.load();



					playBtn.style.display = "none";
					pauseBtn.style.display = "inline";

			}

			document.querySelectorAll('.main-col').forEach(item =>{

				item.addEventListener('click',event=>{
					let image = item.getAttribute('data-image');
					let artist = item.getAttribute('data-artist');
					let song = item.getAttribute('data-song');
					let file = item.getAttribute('data-file');


					let playerArtistComponent = document.getElementsByClassName('player-artist');

					playerArtistComponent[0].innerHTML = `
						<img src="`+images+`" />
						<h3>`+artist+`<br/><span>`+song+`</span></h3>

					`;

					playSong(file);
				})

			});


			//Utilizar setinterval a cada segundo e atualizar a barra de progresso.

			audioPlayer.onloadstart = ()=>{
				alert('começou carregar.');
			}

			audioPlayer.oncanplaythrough = function() {
    			alert("Can start playing video");
    			audioPlayer.play();
    			alert(audioPlayer.duration);
			};

			//audioPlayer.play = function(){
				//alert('começou');
			//}

			audioPlayer.addEventListener('timeupdate',(e)=>{
				var currentTime = audioPlayer.currentTime;
				console.log(currentTime);
 		
			});
			//(segundo atual / segundo total) * 100
		</script>

	</body>
</html>