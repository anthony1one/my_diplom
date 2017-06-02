<script src="js/recorder/audiodisplay.js"></script>
<script src="js/recorder/recorder.js"></script>
<script src="js/recorder/main.js"></script>
<style>
canvas { 
	display: inline-block; 
	background: #202020; 
	width: 100%;
	height: 10vh;
	box-shadow: 0px 0px 10px blue;
}
#controls {
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: space-around;
	height: 20%;
	width: 100%;
}
#record { height: 15vh; }
#record.recording { 
	background: red;
	background: -webkit-radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
	background: -moz-radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
	background: radial-gradient(center, ellipse cover, #ff0000 0%,lightgrey 75%,lightgrey 100%,#7db9e8 100%); 
}
#save, #save img { height: 10vh; }
#save { opacity: 0.25;}
#save[download] { opacity: 1;}
#viz {
	height: 80%;
	width: 100%;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	align-items: center;
}
@media (orientation: landscape) {
	#controls { flex-direction: column; height: 100%; width: 10%;}
	#viz { height: 100%; width: 90%;}
}

</style>
<div id="viz">
	<canvas id="analyser" width="100%" height="100%"></canvas>
	<canvas id="wavedisplay" width="100%" height="100%"></canvas>
</div>
<div id="controls" style="margin-top: 10px;">
	<img id="record" src="img/mic128.png" onclick="toggleRecording(this);">
	<a id="save" href="#"><img src="img/save.svg"></a>
</div>