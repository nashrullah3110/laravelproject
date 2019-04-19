<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title>Songs</title>
	<style type="text/css">
		body
		{
			background: url(guitar_1245856_1920_A0_Rectangle_7_pattern.png);
			background-repeat: no-repeat;
		}
		.left
		{
			height: 400px;
			width: 800px;
			background-color:rgba(27,27,27,1);
			float: left;
			overflow: scroll;
			color: white;
			margin-top: 200px;
            opacity: 0.7;
		}
		.right
		{
			height: 400px;
			width: 500px;
			background: linear-gradient(to right, #16222a, #3a6073);
			float: left;
			margin-left:10px;
			margin-top: 200px;
            opacity: 0.8;
		}
        #playlist{
            list-style: none;
        }
        #playlist li a{
            color:white;
            text-decoration: none;
        }
        #playlist .current-song a{
            color:#3CD3AD;
        }
        a
        {
        	color: white;
        }
        .diff
        {
        	margin-top: 20px;
			margin-bottom: 20px;
			height: 2px;
			width: 350px;
			background: #FFE47A;
        }
        .footer
        {
        	height: 300px;
        	width: 1349px;
        	background-color:rgba(27,27,27,1);
        	margin-top: 20px;
        	float: left;
        }
        .art2
        {
        	margin-top: 50px;
        	height: 200px;
        	width: 200px;
        	margin-left: 350px;
        	background-color: white;
        	float: left;
        }
        .art3
        {
        	margin-top: 50px;
        	height: 200px;
        	width: 200px;
        	margin-left: 20px;
        	background-color: white;
        	float: left;
        }
        .art4
        {
        	margin-top: 50px;
        	height: 200px;
        	width: 200px;
        	margin-left: 20px;
        	background-color: white;
        	float: left;
        }
        .left::-webkit-scrollbar

		{
    		width: 1em;

		}
 
		.left::-webkit-scrollbar-track
		{
    	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);

		}
 
		.left::-webkit-scrollbar-thumb
		{
  		background-color: darkgrey;
  		outline: 1px solid slategrey;
		}
	</style>
</head>
<body>
<div class="left"><center><h2>Songs</h2></center><br>
	 <ul id="playlist">
        <li class="current-song"><a href="\zerosongs\Ann Bann - Zero.mp3" onclick="audioPlayer()">Ann Bann - Zero</a></li>
        <div class="diff"></div>
        <li><a href="\zerosongs\Duma Dam Mast Kalandar - Zero.mp3" onclick="audioPlayer()">Duma Dam Mast Kalandar - Zero</a></li>
        <div class="diff"></div>
        <li><a href="\zerosongs\Heer Badnaam - Zero.mp3" onclick="audioPlayer()">Heer Badnaam - Zero</a></li>
        <div class="diff"></div><br>
        <li><a href="\zerosongs\Husn Parcham - Zero.mp3" onclick="audioPlayer()">Husn Parcham - Zero</a></li>
        <div class="diff"></div><br>
        <li><a href="\zerosongs\Issaqbaazi -Zero.mp3" onclick="audioPlayer()">Issaqbaazi -Zero</a></li>
        <div class="diff"></div>
        <li><a href="\zerosongs\Mere Naam Tu - Zero.mp3" onclick="audioPlayer()">Mere Naam Tu - Zero</a></li>
        <div class="diff"></div>
        <li><a href="\zerosongs\Tanha Hua - Zero.mp3" onclick="audioPlayer()">Tanha Hua - Zero</a></li>
        <div class="diff"></div>
    </ul>
    <br>
   
</div>
<div class="right">
	<br><br>
	<center><img src="zero.jpg" height="300px" width="400px;"></center>
	 <center><audio src="" controls id="audioPlayer">
        Sorry, your browser doesn't support html5!
    </audio><center>
	<script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="\audioPlayer.js"></script>
    <script>
    </script>
</div>
<div class="footer">
	<div class="art2"><img src="kalank_A1_Rectangle_11_pattern.png" width="200px" height="200px"><span><center><a href="/kalank"><h4>Kalank</h4></a></center></span></div>
	<div class="art3"><img src="zero.jpg" width="200px" height="200px"><span><center><a href="/zero"><h4>Zero</h4></a></center></span></div>
	<div class="art4"><img src="67021741.jpg" width="200px" height="200px"><span><center><a href="/notebook"><h4>NoteBook</h4></a></center></span></div>
</div>
<div class="footer2"></div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>