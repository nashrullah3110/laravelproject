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
        <li class="current-song"><a href="\englishsong\A year without rain.mp3" onclick="audioPlayer()">A year without rain</a></li>
        <div class="diff"></div>
        <li><a href="\englishsong\Arash Ft Helena - Broken Angel (Berim2Music.Com).mp3" onclick="audioPlayer()">Arash Ft Helena - Broken Angel</a></li>
        <div class="diff"></div>
        <li><a href="\englishsong\As Long As You Love Me feat Big Sean(AnyMaza.Com).mp3" onclick="audioPlayer()">As Long As You Love Me feat Big Sean</a></li>
        <div class="diff"></div>
        <li><a href="\englishsong\Closer - 128Kbps - (www.songspksongspk.audio).mp3" onclick="audioPlayer()">Closer</a></li>
        <div class="diff"></div>
        <li><a href="\englishsong\Dirty Dancer (ft. Usher & Enrique Iglesias).mp3" onclick="audioPlayer()">Dirty Dancer (ft. Usher & Enrique Iglesias)</a></li>
        <div class="diff"></div>
        <li><a href="\englishsong\Eminem_-_Ass_Like_That_(KuttyWeb.com).mp3" onclick="audioPlayer()">Eminem Ass Like That</a></li>
        <div class="diff"></div>
        <li><a href="\englishsong\Alexiane - A Million on My Soul (From _Valerian and the City of a Thousand Planets_) ( 160kbps ).mp3" onclick="audioPlayer()">Alexiane-A Million on My Soul(From Valerian and the City of a Thousand Planets)</a></li>
        <div class="diff"></div>
        <li><a href="\englishsong\Im a Freak Ft. Pitbull(www.krazywap.mobi).mp3" onclick="audioPlayer()">Im a Freak Ft. Pitbull</a></li>
        <div class="diff"></div>
         <li><a href="\englishsong\Im All Yours - Jay Sean feat.Pitbull (2012) [DM.mp3" onclick="audioPlayer()">Im All Yours - Jay Sean feat.Pitbull</a></li>
        <div class="diff"></div>
         <li><a href="\englishsong\justin bieber - baby_001.mp3" onclick="audioPlayer()">justin bieber - baby</a></li>
        <div class="diff"></div>
         <li><a href="\englishsong\Oh Cecilia (Breaking My Heart).mp3" onclick="audioPlayer()">Oh Cecilia (Breaking My Heart)</a></li>
        <div class="diff"></div>
         <li><a href="\englishsong\Pitbull - I Know You Want_Me(httpmp3xload.wapka.mp3" onclick="audioPlayer()">Pitbull - I Know You Want Me</a></li>
        <div class="diff"></div>
         <li><a href="\englishsong\Rain Over Me (Pitbull & Marc Anthony) (Video Song) [www.DJMaza.Com]_0.mp3" onclick="audioPlayer()">Rain Over Me (Pitbull)</a></li>
        <div class="diff"></div>
         <li><a href="\englishsong\Somebody To You.mp3" onclick="audioPlayer()">Somebody To You</a></li>
        <div class="diff"></div>
         <li><a href="\englishsong\Tokyo Drift.mp3" onclick="audioPlayer()">Tokyo Drift</a></li>
        <div class="diff"></div>
         <li><a href="\englishsong\Tonight (I m Lovin  You) - Enrique Iglesias.mp3" onclick="audioPlayer()">Tonight (I m Lovin  You) - Enrique Iglesias</a></li>
        <div class="diff"></div>
         <li><a href="\englishsong\We Own It (Fast and Furious).mp3" onclick="audioPlayer()">We Own It (Fast and Furious)</a></li>
        <div class="diff"></div>
         <li><a href="\englishsong\wiz khalifa see you again ft charlie puth velozes e furiosos 7 fast furiors .mp3" onclick="audioPlayer()">wiz khalifa see you again ft charlie puth velozes</a></li>
        <div class="diff"></div>

    </ul>
    <br>
   
</div>
<div class="right">
	<br><br>
	<center><img src="endlessmotion.jpg" height="300px" width="400px;"></center>
	 <center><audio src="" controls id="audioPlayer">
        Sorry, your browser doesn't support html5!
    </audio><center>
	<script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="\audioPlayer.js"></script>
    <script>
    </script>
</div>
<div class="footer2"></div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>