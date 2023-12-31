<?php 
require_once('../config.php');
require_once('../include/tvseries.php');
//$short = $_ocim->home_url() .'/?do=play&id='. $id ;
$short = seo_tv($id,$row['original_name']);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $row['original_name'];?><?php echo $desc_title;?></title>
	<meta name="description" content="<?php echo $_ocim->short($row['overview']);?>">
	<meta name="keywords" content="<?php echo $keywords;?>">

	<link rel="icon" type="image/png" href="/favicon.png">

        <link href="https://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		
	<link href="/include/css/mov.css" rel="stylesheet" type="text/css">
	<link href="/include/css/style.css" rel="stylesheet" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>
	<script src="/include/js/css3-mediaqueries.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
		<script src="https://oss.maxcdn.com/respond/1.3/respond.min.js"></script>
	<![endif]-->

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
				<a class="btn btn-success" href="/">Home</a>
				<a class="btn btn-primary active" href="./">Description</a>
			</div>

			<div class="row" style="margin-top:25px;">
			<div class="col-md-12">
			        <div class="row">
				<div class="col-sm-4 col-xs-12">
                                        <div class="text-center">
                                                <label>Big Images Random</label>
                                                <textarea class="form-control"><?php echo $images;?></textarea>
                                                <label>Small Images</label>
                                                <textarea class="form-control"><?php echo $images_small;?></textarea>
                                        </div>
					<table class="table table-striped">
						<thead><caption class="text-center">Seasons List</caption></thead>
                                                <tbody>	
							<tr>
								<td><ul><?php echo $season_desc;?></li></ul></td>
							</tr>
 			                        </tbody>
					</table>
				</div>
				<div class="col-sm-8 col-xs-12">
					<table class="table table-striped">
						<thead><caption class="text-center">Title Generate</caption></thead>
                                                <tbody>	
							<tr>
								<td><?php echo $row['name'];?><?php echo $desc_title;?></td>

							</tr>
 			                        </tbody>
					</table>
					<table class="table table-striped">
						<thead><caption class="text-center">Description Generate</caption></thead>
                                                <tbody>	
							<tr>
								<td onclick="selectText(this);">For Watching <?php echo $row['name'];?><?php echo $desc_title;?> Full Episode ! Click This Link: <?php echo $short;?> <br>Watch <?php echo $row['name'];?><?php echo $desc_title;?> full episodes 1080p Video HD<br><br>
                                                                <?php if ($_id[1] != null ):
                                                                $row2 = $tmdb->getTVSeason($_id[0], '/season/'.$_id[1]);?>
								List Of Episode Season <?php echo $row2['season_number'];?>:<br>
								<?php if ($row2['episodes']!=null) 
								{
								foreach($row2['episodes'] as $result) 
								{

								$json = $_ocim->home_url() .'/?do=play&id='. $_id[0] . '-' . $result['season_number'] . '-' . $result['episode_number'];
								?>
									<?php echo $row['name'];?> <?php echo 'Episode '.$result['episode_number'].' : '.$result['name'];?> @ <br><?php echo $json;?><br>
								<?php 
								}
								}
								?>
								<?php endif;?></td>
							</tr>
 			                        </tbody>
					</table>
					<table class="table table-striped">
                                                <tbody>
							<tr><th width="150">Title</th><td>:</td><td><?php echo $row['name'];?><?php echo $desc_title;?></td></tr>
							<tr><th>Original Title</th><td>:</td><td><?php echo $row['original_name'];?><?php echo $desc_title;?></td></tr>
							<tr><th>Target URL:</th><td>:</td><td> <?php echo $short;?></td></tr>
							<tr><th>Target short URL:</th><td>:</td><td> <?php echo $_ocim->home_url() .'/?do=play&id='. $id;?></td></tr>
 			                        </tbody>
					</table>
				</div>
				</div>
			</div>
			</div>
		</div>

        	<?php if (!$_id[2] AND $row2 != null ):?>
		<div class="col-md-12">
		<h3 class="text-center">Episodes List</h3>
			<?php
                  	if ($row2['episodes']!=null) {
                      		foreach( $row2['episodes'] as $episodes) {

                                        if ($episodes['still_path']!=null) {
                                           	$still_path = 'http://image.tmdb.org/t/p/w185'.$episodes['still_path'];
                                       	}else{
                                           	$still_path = '/include/images/no-backdrop.png';
                                        }	
                        	?>
				<div class="col-md-4 col-sm-6 col-xs-12 media">
						<h4 class="media-heading" style="font-size: 14px;font-weight: 700;"><a href="<?php echo $_ocim->home_url();?>/desc/play.php?id=<?php echo $id;?>-<?php echo $episodes['episode_number'];?>" title="<?php echo $episodes['name'];?>">Episode <?php echo $episodes['episode_number'];?> : <?php echo $episodes['name'];?></a></h4>
						<div style="font-size:12px;"><?php echo date('d F Y', strtotime($episodes['air_date']));?></div>
				</div>
				<?php 
                                }   
                        }
                        ?>
		</div>
        	<?php endif;?>
		</div>
	</div>
<?php include('footer.php');?>