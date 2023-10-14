<?php 
require_once('../config.php');
require_once('../include/movies.php');
//$short = $_ocim->home_url() .'/?do=watch&id='. $id ;
$short = seo_movie($id,$row['title']);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>)</title>
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

			<h1 class="text-center media-heading"><?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>)</h1>

			<div class="row" style="margin-top:25px;">
			<div class="col-md-12">
			        <div class="row">
				<div class="col-sm-4 col-xs-12">
					<img src="<?php echo $images_small;?>" alt="<?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>)" class="img-responsive thumbnail" style="margin:0 auto;">
                                        <div class="text-center">
                                                <label>Big Images Random</label>
                                                <textarea class="form-control"><?php echo $images;?></textarea>
                                                <label>Small Images</label>
                                                <textarea class="form-control"><?php echo $images_small;?></textarea>

                                        </div>

				</div>
				<div class="col-sm-8 col-xs-12">

					<table class="table table-striped">
						<thead><caption class="text-center">Title Generate</caption></thead>
                                                <tbody>	
							<tr>
								<td><?php echo $row['title'];?> Full Movie<br>
<?php echo $row['title'];?> Full"Movie<br>
Watch <?php echo $row['title'];?> <?php echo $omdbapi['Year'];?> Full Movie Online<br>
<?php echo $row['title'];?> <?php echo $omdbapi['Year'];?> Full Movie Streaming Online in HD-720p Video Quality<br>
<?php echo $row['title'];?> <?php echo $omdbapi['Year'];?> Full Movie<br>
Where to Download <?php echo $row['title'];?> <?php echo $omdbapi['Year'];?> Full Movie ?<br>
Watch <?php echo $row['title'];?> Full Movie<br>
Watch <?php echo $row['title'];?> Full Movie Online<br>
Watch <?php echo $row['title'];?> Full Movie HD 1080p<br>
<?php echo $row['title'];?> <?php echo $omdbapi['Year'];?> Full Movie</td>

							</tr>
 			                        </tbody>
					</table>
					<table class="table table-striped">
						<thead><caption class="text-center">Description Generate</caption></thead>
                                                <tbody>	
							<tr>
								<td onclick="selectText(this);">
Watch <?php echo $row['title'];?> Full Movies Online Free HD <br><?php echo $short;?><br><br>
<?php echo $row['title'];?> Official Teaser Trailer #1 (<?php echo $omdbapi['Year'];?>) - <?php echo $row['credits']['cast'][0]['name'];?> <?php echo $row[production_companies][0][name];?> Movie HD<br><br>
Movie Synopsis:<br>
<?php echo $row['overview'];?><br><br>
<?php echo $row['title'];?> in HD 1080p, Watch <?php echo $row['title'];?> in HD, Watch <?php echo $row['title'];?> Online, <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?> Full Movie Free Online Streaming </td>
							</tr>
 			                        </tbody>
					</table>
					<table class="table table-striped">
                                                <tbody>
							<tr><th width="150">Title</th><td>:</td><td><?php echo $row['title'];?></td></tr>
							<tr><th>Original Title</th><td>:</td><td><?php echo $row['original_title'];?></td></tr>
							<tr><th>Target URL:</th><td>:</td><td> <?php echo $short;?></td></tr>
							<tr><th>Target short URL:</th><td>:</td><td> <?php echo $_ocim->home_url() .'/?do=watch&id='. $id;?></td></tr>
 			                        </tbody>
					</table>
				</div>
				</div>
			</div>
			
			</div>
		</div>

		</div>
	</div>
<?php include('footer.php');?>