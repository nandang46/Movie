<?php 
require_once('../config.php');
require_once('../include/movies.php');
//$short = $_ocim->home_url() .'/?do=watch&id='. $id ;
$short = seo_movie($id,$row['title']);
?>
<?php
$date = $row['release_date'];
$Y = date('Y',strtotime($date));
?>
<?php
//mengambil variable watch dr  alamat browser di simpan dalam variable var_judul
$var_judul=$_GET["id"];
$var_judul = str_replace("-"," ",$var_judul)

//tampilkan $var_judul;
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $row['title'];?> (<?php $x = $Y;if($x == 1969){echo " ";}else{echo "$Y";}?>)</title>
	<meta name="description" content="<?php echo $_ocim->short($row['overview']);?>">
	<meta name="keywords" content="<?php echo $keywords;?>">

	<link rel="icon" type="image/png" href="/favicon.png">

        <link href="//fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

	<link href="/include/css/dashicons.css" rel="stylesheet" type="text/css">
	<link href="/include/css/mov.css" rel="stylesheet" type="text/css">
	<link href="/include/css/style.css" rel="stylesheet" type="text/css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function selectText(obj) {      // adapted from Denis Sadowski (via StackOverflow.com)
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(obj);
                range.select();
            }
            else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(obj);
                window.getSelection().addRange(range);
            }
        }
    </script>
</head>
<body>
	<nav class="navbar navbar-custom navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle navbar-default" data-toggle="collapse" data-target="#togglenav">
					<span class="sr-only"></span>
					<i class="fa fa-align-justify"></i>
				</button>
				<a class="navbar-brand" href="<?php echo $_ocim->home_url();?>/"><i class="fa fa-film"></i> <?php echo $config->title;?></a>
			</div>
			<div class="collapse navbar-collapse" id="togglenav">
				<form class="navbar-form navbar-left hidden-sm" role="search" action="/desc/search.php" method="GET">
					<div class="form-group">
						<input type="text" name="q" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
				</form>
					
				<ul class="nav navbar-nav navbar-left navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-film"></i> Movie <span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $_ocim->home_url();?>/desc/"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/playing"><i class="fa fa-dot-circle-o"></i> Now Playing</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/toprated"><i class="fa fa-list-alt"></i> Top Rated</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/upcoming"><i class="fa fa-star-half-o"></i> Upcoming</a></li>
                                                </ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-file-video-o"></i> TV Show<span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $_ocim->home_url();?>/desc/tv"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/airing"><i class="fa fa-dot-circle-o"></i> TV shows Airing</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/ontheair"><i class="fa fa-list-alt"></i> On the Air</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/popular"><i class="fa fa-star-half-o"></i> Popular TV Series</a></li>
                                                </ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>		
		
	<div class="container box-container">

		<div class="row">

		<div class="col-md-12">

			<div class="choice-menu">
				<a class="btn btn-success" href="/">Homr</a>
				<a class="btn btn-primary active" href="./">Description</a>
			</div>

			<h1 class="text-center media-heading"><?php echo $row['title'];?> (<?php $x = $Y;if($x == 1969){echo " ";}else{echo "$Y";}?>)</h1>

			<div class="row" style="margin-top:25px;">
			<div class="col-md-12">
			        <div class="row">
				<div class="col-sm-4 col-xs-12">
					<img src="<?php echo $images;?>" alt="<?php echo $row['title'];?> (<?php $x = $Y;if($x == 1969){echo "HD";}else{echo "$Y";}?>)" class="img-responsive thumbnail" style="margin:0 auto;">
                                        <div class="text-center">
                                                <label>Big Images Random</label>
                                                <textarea class="form-control"><?php echo $images;?></textarea>
                                                <label>Small Images</label>
                                                <textarea class="form-control"><?php echo $images_small;?></textarea>

                                        </div>

				</div>
				
<div class="col-sm-8 col-xs-12">

 </tbody>			                        

					<table class="table table-striped">
						<thead><caption class="text-center">TITLE</caption></thead>
                                                <tbody>	
<tr>
<td class="gelar1"><?php echo $row['title'];?></td>
					</table>
					<table class="table table-striped">
<thead><caption class="text-center">TITLE</caption></thead>
                                                <tbody>	
<tr>
<td class="gelar2"><?php echo $row['title'];?> (<?php $x = $Y;if($x == 1969){echo " ";}else{echo "$Y";}?>)</td>
<table class="table table-striped">
						<thead><caption class="text-center">DESCRIPSI</caption></thead>
                                                <tbody>	
<tr>
<td class="wincikan">
29 mins ago - Here Option’s to Downloading or watching <?php echo $row['title'];?> the full movie online for free on 123movies, Reddit, Amazon Prime, Pea****, HBO Max or Netflix!.
<br>
➤ ► 🌍📺📱👉 [link]<br>
<br>
➤ ► 🌍📺📱👉 [link]<br>
<br>
Do you like movies? If so, then you’ll love New Romance Movie: <?php echo $row['title'];?> Full Movie. This movie is one of the best in its genre. #<?php echo $row['title'];?> Full Movie will be available to watch online on Netflix's very soo**
<br>
<?php echo $row['title'];?> Full Movie (Keanu Reeves) uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.
<br>
Now Is <?php echo $row['title'];?> Full Movie available to stream? Is watching <?php echo $row['title'];?> Full Movie on Disney Plus, HBO Max, Netflix, or Amazon Prime? Yes, we have found an authentic streaming option/service. A 1950s housewife living with her husband in a utopian experimental community begins to worry that his glamorous company could be hiding disturbing secrets.
<br>
Showcase Cinema Warwick you'll want to make sure you're one of the first people to see it! So mark your calendars and get ready for a <?php echo $row['title'];?> Full Movie experience like never before. of our other Marvel movies available to watch online. We're sure you'll find something to your liking. Thanks for reading, and we'll see you soon! <?php echo $row['title'];?> Full Movie is available on our website for free streaming. Details on how you can watch <?php echo $row['title'];?> Full Movie for free throughout the year are described
<br>
If you're a fan of the comics, you won't want to miss this one! The storyline follows <?php echo $row['title'];?> Full Movie as he tries to find his way home after being stranded on an alien <?php echo $row['title'];?> Full Moviet. <?php echo $row['title'];?> Full Movie is definitely a <?php echo $row['title'];?> Full Movie you don't want to miss with stunning visuals and an action-packed plot! Plus, <?php echo $row['title'];?> Full Movie online streaming is available on our website. <?php echo $row['title'];?> Full Movie online is free, which includes streaming options such as 123movies, Reddit, or TV shows from HBO Max or Netflix!
<br>
<?php echo $row['title'];?> Full Movie Release in the US
<br>
<?php echo $row['title'];?> Full Movie hits theaters on January 14, 2023. Tickets to see the film at your local movie theater are available online here. The film is being released in a wide release so you can watch it in person.
<br>
How to Watch <?php echo $row['title'];?> Full Movie for Free?release on a platform that offers a free trial. Our readers to always pay for the content they wish to consume online and refrain from using illegal means.
<br>
Where to Watch <?php echo $row['title'];?> Full Movie?
<br>
There are currently no platforms that have the rights to Watch <?php echo $row['title'];?> Full Movie Online.MAPPA has decided to <?php echo $row['title'];?> Full Movie the movie only in theaters because it has been a huge success.The studio , on the other hand, does not wish to divert revenue Streaming the movie would only slash the profits, not increase them.
<br>
As a result, no streaming services are authorized to offer <?php echo $row['title'];?> Full Movie for free. The film would, however, very definitely be acquired by services like Funimation , Netflix, and Crunchyroll. As a last consideration, which of these outlets will likely distribute the film worldwide?
<br>
Is <?php echo $row['title'];?> Full Movie on Netflix?
<br>
<br>
</td>
							</tr>
 			                        </tbody>
					</table>

				</div>
				</div>
			</div>
			
			</div>
		</div>

		</div>
	</div>

		</div>
	</div>
						
<?php include('footer.php');?>