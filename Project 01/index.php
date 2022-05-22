	<?php
	include 'arena-php-master/arena.php';
	$arena = new Arena();
	$slug = 'archive_site';
	$channel = $arena->get_channel($slug);
	?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Stray Kids District 9 Unlock</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
	<link rel="icon" href="key.png" type='image/png' >
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class=info>
		<div class=header><marquee behavior="scroll" direction="right" scrollamount="10">Stray Kids District 9 Unlock</marquee></div>
		<div class=info-inner>
		<div class=heading><center style="font-size: 40px; color:#F7C700;">Dates/Locations</center></div>
		<div class=locations>
			<br>2020.01.29 NEW YORK
			<br>2020.01.31 ATLANTA
			<br>2020.02.02 DALLAS
			<br>2020.02.05 CHICAGO
			<br>2020.02.07 MIAMI
			<br>2020.02.09 PHOENIX
			<br>2020.02.13 SAN JOSE
			<br>2020.02.16 LOS ANGELES
			<br>[ALL OTHER CONCERTS CANCELLED DUE TO COVID-19]
			<br>
		</div>
					<br>
			<div style="font-size: 40px; color:#F7C700;">Track List</div>
		<div class=track-list>

			<div class=col>
			<br>District 9
			<br>Victory Song
			<br>Question
			<br>ROCK
			<br>Side Effects
			<br>M.I.A
			<br>Wow
			</div>
			<div class=col>
			<br>Mixtape #4
			<br>Get Cool
			<br>Awkward Silence
			<br>My Universe
			<br>3rd Eye
			<br>I am YOU
			<br>We Go
			<br>Road Not Taken
			</div>
			<div class=col>
			<br>My Pace
			<br>Double Knot
			<br>Boxer
			<br>Hellevator
			<br>MIROH
			<br>Grow Up
			<br>YAYAYA
			</div>
		</div>
		</div>
	</div>
	<div class=names><marquee behavior="scroll" direction="down" scrollamount="10" style="writing-mode: vertical-rl;white-space: nowrap; display:flex; align-items:center; height:100%;">Bang Chan | Lee Know | Changin | Hyunjin | Han | Felix | I.N</marquee></div>
	<div class=photos> 
		<?php $channel->each_item(function($item) {?>
        	<div class="<?= $item->css_class()?>">
          <div class="blog-content">			
			 <a class='img' href="<?= $item->image_url('original') ?>">
                <img src="<?= $item->image_url('display') ?>" />
              </a>
          </div>
        </div>    
       <?php }); ?>       
		</div>




</body>
</html>