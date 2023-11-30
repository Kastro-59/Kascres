<!DOCTYPE html>
<html>
<head>
  <title>VTO</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="icon" href="https://u.cubeupload.com/BrunoT/l.png">
<style>
 body { margin: 0; }
 div {
	position: fixed;
	font-family: "Helvetica Neue","Helvetica","Arial",sans-serif;
 }

 .a {
	left: 0;
	top: 0;
	right: 50%;
	bottom: 50%;
	width:350px; 
	height:493px;
	background-size: cover;
	background-position: center;
                border-radius: 20px;
                box-shadow: 0 15px 30px 5px rgba(0, 0, 0, 0.3);
 }

  .data {
	position: absolute;
	font-family: 'Chela One', cursive;
	font-size: 12px;
	left: 210px;
	top: 7px;
	color: #9fddfa;
	width: 236px;
	height: 19px;
	z-index: 14;
	border: 1px;
 }
  #Clock {
	position: absolute;
	top: 30px;
	left: 265px;
	width: 43px;
	color: #9fddfa;
	font-family: 'Chela One', cursive;
	font-size: 12px;
 }
</style>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

/*-Imagen de Fondo*/
<div class="a" style="background-image:url(https://i.imgur.com/NOnto4Q.png);background-position: center;">
 <div id="player" style="width:350px; height:493px;background:transparent bottom / center / cover no-repeat;">loading...</div>	
</div>


</head>
<body>


<script src="js/lunaradio.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/popper.min.js" ></script>


</script>
&nbsp;&nbsp; <span id="Clock">12:57:05</span>


<script language="JavaScript">
<!--
var Elem = document.getElementById("Clock");
function Horario(){
var Hoje = new Date();
var Horas = Hoje.getHours();
if(Horas < 10){
Horas = "0"+Horas;
}
var Minutos = Hoje.getMinutes();
if(Minutos < 10){
Minutos = "0"+Minutos;
}
var Segundos = Hoje.getSeconds();
if(Segundos < 10){
Segundos = "0"+Segundos;
}
Elem.innerHTML = Horas+":"+Minutos+":"+Segundos;
}
window.setInterval("Horario()",1000);
//-->
</script>
<div id="data" class="data">
<script language="javascript">

var fecha=new Date();
var diames=fecha.getDate();
var diasemana=fecha.getDay();
var mes=fecha.getMonth() +1 ;
var ano=fecha.getFullYear();

var textosemana = new Array (7);
textosemana[0]="Dom";
textosemana[1]="Lun";
textosemana[2]="Mar";
textosemana[3]="Mie";
textosemana[4]="Jue";
textosemana[5]="Vie";
textosemana[6]="Sab";

var textomes = new Array (12);
textomes[1]="Ene";
textomes[2]="Feb";
textomes[3]="Mar";
textomes[4]="Abr";
textomes[5]="May";
textomes[6]="Jun";
textomes[7]="Jul";
textomes[8]="Ago";
textomes[9]="Sep";
textomes[10]="Oct";
textomes[11]="Nov";
textomes[12]="Dic";

document.write("" + textosemana[diasemana] + " " + diames + " de " + textomes[mes] + " de " + ano + "<br>");

</script>

<script>
$("#player").lunaradio({
	
	userinterface: "big",
	backgroundcolor: "transparent",
	fontcolor: "#ffffff",
	hightlightcolor: "#00b7ff",
	fontname: "Saira Condensed",
	googlefont: "Saira+Condensed:wght@100",
	fontratio: "0.4",
	radioname:"👑VTO👑",          /*-Nombre de tu Radio-*/
	scroll: "true",
	coverimage: "https://i.imgur.com/BijDsLf.png",  /*-Imagen que se Muestra cuando no encuentra la Caratula-*/
	usevisualizer: "real",
	coverstyle: "animated",
	visualizertype: "9",
	multicolorvisualizer: "true",
    color1: "#f6f6f6",
    color2: "#323edd",
    color3: "#fc5404",
    color4: "#fa225b",
	itunestoken: "1000lIPN",
	metadatatechnic: "https://fuendesing.000webhostapp.com/api.vto/js/stream-icy-meta.php",
	ownmetadataurl: "",
	streamurl: "https://stream.zeno.fm/vm2e36xf0k8uv",   /*-Stream de tu Radio-*/
	streamtype: "radiozeno",
	icecastmountpoint: "/radio.mp3",
	radionomyid: "",
	radionomyapikey: "",
	radiozenoid: "vm2e36xf0k8uv",   /*"stream ID" de tu Radio-*/
	radiojarid: "",
	radiocoid: "",
	shoutcastpath: "/stream",
	shoutcastid: "1",
	streamsuffix: "",
	metadatainterval: "12000",
	volume: "50",
	debug: "false",
	usestreamcorsproxy: "false", 
	corsproxy: "",
	autoplay:"true",
});
</script>					
</body>
</html>
