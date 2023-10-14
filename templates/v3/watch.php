<?php require_once('include/movies.php');?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Watch <?php echo $row['title'];?> | <?php echo $config->title;?></title>
	<meta name="description" content="<?php echo $_ocim->short($row['overview']);?>">
	<meta name="keywords" content="<?php echo $row['title'];?>,<?php echo $keywords;?>">

	<link rel="icon" type="image/png" href="/favicon.png">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/include/css/dashicons.css" rel="stylesheet" type="text/css">
	<link href="/include/css/mov.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $homeurl;?>/templates/v3/style.css" rel="stylesheet" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>
	<script src="/include/js/css3-mediaqueries.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
		<script src="https://oss.maxcdn.com/respond/1.3/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $_ocim->home_url();?>/"><?php echo $config->title;?></a>
                </div><!-- navbar-header -->
                <div class="navbar-collapse collapse" id="searchbar">
                        <ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-film"></i> Movie <span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $_ocim->home_url();?>/"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/playing"><i class="fa fa-dot-circle-o"></i> Now Playing</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/toprated"><i class="fa fa-list-alt"></i> Top Rated</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/upcoming"><i class="fa fa-star-half-o"></i> Upcoming</a></li>
                                                </ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-file-video-o"></i> TV Show<span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $_ocim->home_url();?>/airing"><i class="fa fa-dot-circle-o"></i> TV shows Airing</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/ontheair"><i class="fa fa-list-alt"></i> On the Air</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/popular"><i class="fa fa-star-half-o"></i> Popular TV Series</a></li>
                                                </ul>
					</li>
                                <li>&nbsp;</li>
                        </ul>
                        <form class="navbar-form" method="get" action="/">
                                <div class="form-group" style="display:inline;">
                                        <div class="input-group" style="display:table;">
                                                <input name="do" type="hidden" value="search">
                                                <input class="form-control search-form" name="q" placeholder="Type Movie title here?" autocomplete="off" autofocus="autofocus" type="text">
                                                <span class="input-group-btn" style="width:1%;cursor: pointer;"><button type="submit" class="btn btn-primary"> Search</button></span>
                                        </div>
                                </div>
                        </form>
                </div><!-- nav-collapse -->
        </div><!-- container -->
</div>
		<center><div class="col-md-5 item">
                    <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
                </div>
                </div></center>
<div class="container box-container">
	<div class="row">
		<div class="col-md-12 col-xs-12">

        		<div id="player">
                		<div class="vcontainer">
                        		<div id="streaming">
                                		<img class="img-backdrop" src="<?php echo $images;?>" alt="<?php echo $row['original_name'];?>" width="720" height="524" itemprop="image">
                                		<span class="mpaa">hd</span>
                                		<div class="watermark"><?php echo $_ocim->get_domain($_ocim->home_url());?></div>
                                		<div class="inline play-button registration">
                                        		<span class="player-loader"></span>
                                        		<i class="fa fa-youtube-play"></i>
                                		</div>
                        		</div>
                                        <div class="progress progress-striped active">
                                		<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">45% Complete</span>
                                		</div>
                            		</div>
                        		<div id="controls">
                                		<div class="control-wrap">
                                                	<div class="cplay"></div>
                                                	<div class="cvolu">
                                                		<div class="cvol"></div>
                                                        	<div id="ivol" class="ui-slider-horizontal" aria-disabled="false"><div class="ui-widget-header"></div><a class="ui-slider-handle" href="#" style="left: 34.3434343434343%;"></a></div>
							</div>
							<div class="ctime">
								<span class="cmin" title="0">00:00:00</span> / <span class="cmax"><?php echo $runtime;?></span>
							</div>
                                                	<div class="progres">
								<span class="buffering"><span class="progressbar"></span></span>
							</div>
							<div class="cfull"></div>
							<div class="cset"><span class="chade"></span></div>
                                		</div>
                        		</div>
                		</div>
        		</div>
 <tr>
<center><div class="available-formats-wrapper">
                        <div class="available-formats">AVAILABLE FORMATS</div>
                        <div class="available-formats-img-mobile"><img src="http://i.imgur.com/mll670j.jpg" "="" alt="" class="img-responsive"> </div> </div></center>
                        <h1 class="text-center media-heading" style="margin-top: 20px;margin-bottom: 15px;">Watch <?php echo $row['title'];?> Full Movie Streaming</h1>

			<table class="table">
				<tbody>	
					<center>
                        <tr>
                            <td class="text-center"><div class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-watch"> <i class="fa fa-cloud-download"></i> Download</div> <a class="btn btn-danger btn-lg" target="" href="<?php echo $_ocim->home_url();?>/signup2.php"><i class="fa fa-youtube-play"></i> Watch Now </a></td>
                        </tr>
                    </center>
 				</tbody>
			</table>

			<table class="table table-danger" style="margin-bottom:0;">
				<tbody>
				<tr>
					<td width="485" style="border-top: 0px solid #ddd;"><i class="fa fa-youtube-play"></i>&nbsp; <a data-toggle="modal" data-target="#modal-watch" href="#" title="<?php echo $row['title'];?>" rel="nofollow">Free Download <?php echo $row['title'];?></a></td>
          				<td width="100" style="border-top: 0px solid #ddd;">720p</td>
          				<td width="85" style="border-top: 0px solid #ddd;">6,647 Kb/s</td>
        			</tr>
        			<tr>
          				<td><i class="fa fa-youtube-play"></i>&nbsp; <a data-toggle="modal" data-target="#modal-watch" href="#" title="Watch <?php echo $row['title'];?>" rel="nofollow">HD - <?php echo $row['title'];?></a></td>
          				<td>HD <i class="fa fa-thumbs-o-up"></i></td>
          				<td>4,184 Kb/s</td>
        			</tr>
        			<tr>
          				<td><i class="fa fa-youtube-play"></i>&nbsp; <a data-toggle="modal" data-target="#modal-watch" href="#" title="Watch <?php echo $row['title'];?>" rel="nofollow"><?php echo $row['title'];?> Full</a></td>
          				<td>Full HD</td>
          				<td>7,993 Kb/s</td>
        			</tr>
      				</tbody>
			</table>

			<div class="row" style="margin-top:25px;">
						<div class="col-sm-3 col-xs-12">
							<img src="<?php echo $images_small;?>" alt="<?php echo $row['title'];?>" class="img-responsive thumbnail" style="margin:0 auto;">
                                                	<div class="rating-stars text-center">
				                        <?php
				                        for($ki=1;$ki<=$index_rating;$ki++){?><i class="fa fa-star"></i><?php }?><?php for($ei=$empty_rating;$ei>=1;$ei--){?><i class="fa fa-star-o"></i><?php $ki++; }
                                                        ?>
                                                	</div> <!-- rating-stars -->
                                                	<div class="rating-vote text-center">
                                                        	<?php echo $vote_average;?>/10 by <?php echo $vote_count;?> users
                                                	</div> <!-- rating-vote -->
						</div>
						<div class="col-sm-9 col-xs-12">
							<table class="table table-striped">
                                                	<tbody>
								<tr><th width="150">Title</th><td>:</td><td><?php echo $row['title'];?></td></tr>
								<tr><th>Release</th><td>:</td><td> <?php echo $row['release_date'];?></td></tr>
								<tr><th>Runtime</th><td>:</td><td> <?php echo $row['runtime'];?> min.</td></tr>
								<tr><th>Genre</th><td>:</td><td> <?php echo $genre;?></td></tr>
								<tr><th>Stars</th><td>:</td><td> <?php echo $cast;?></td></tr>
								<tr><th>Overview</th><td>:</td><td> <?php echo $row['overview'];?></td></tr>
 			                        	</tbody>
							</table>
						</div>
			</div>
		</div>

		<div class="col-md-12 col-xs-12">
			<div class="text-center h3" style="margin-top: 0;font-size: 18px;">Similar Movies</div>
			<?php
			$SimilarMovie = $tmdb->getMovie($id,"append_to_response=similar_movies");

                  	if ($SimilarMovie['similar_movies'][results] != null) {
                        $i = 0;
                      		foreach($SimilarMovie['similar_movies'][results] as $sim) {

                                        if ($sim[backdrop_path]!=null) {
                                           	$image = 'http://image.tmdb.org/t/p/w185'.$sim[backdrop_path];
                                        }elseif ($sim[poster_path]!=null) {
                                        	$image = 'http://image.tmdb.org/t/p/w185'.$sim[poster_path];
                                       	}else{
                                           	$image = '/include/images/no-poster-w185.jpg';
                                        }	
                                ?>
			        <div class="col-md-2 col-xs-4">
				        <a href="<?php echo seo_movie($sim['id'],$sim['title']);?>" title="<?php echo $sim[title];?>" class="text-center">
					        <img src="<?php echo $image;?>" alt="<?php echo $sim[title];?>" class="gird-pic img-responsive" style="height:105px;width:100%;">
					        <span style="font-size: 12px;background-color: rgba(0, 0, 0, 0.77);text-shadow: 1px 1px 1px #000;color: #FFF;padding: 5px;" class="nowrap"><?php echo $sim[title];?></span>
				        </a>
			        </div>
			        <?php 
                                if ($i++ == 5) break;
                                }   
                        }
                        ?>
		</div>
	</div>
</div>
<!-- Movie information Modal -->
<div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" arialabel="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Trailer <?php echo $row['original_title'];?></h4>
      </div>
      <div class="modal-body">
        <div class="hide"><iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=1&amp;autohide=0&amp;showinfo=1&amp;controls=0" onload="this.scrolling='no';this.allowfullscreen='true';" style="overflow:hidden;border:0;" scrolling="no"></iframe></div> 
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showinfo=1&amp;controls=0"></iframe>
      </div>
      </div>
    </div>
    </div>
</div>
<div class="modal fade" id="modal-watch" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content clearfix">
                <div class="modal-header bg-info">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH FULL MOVIE!</h4>
                </div>
                <div class="modal-body clearfix">
                        <div class="row">
                                <div class="col-md-6" id="login">
                                        <img class="img-responsive" src="<?php echo $images;?>">
                                        <hr>
                                        <h5>Member Login</h5>
                                        <div class="form-group">
                                                <input type="text" class="form-control input-sm" id="userid" placeholder="username">
	                                </div>
                                        <div class="form-group">
                                                <input type="password" class="form-control input-sm" id="password" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                                <span class="onload label label-info" style="display: none;">Please wait...</span>
                                                <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span>
                                        </div>
                                        <input type="submit" id="submov" class="btn btn-success" value="Log me in">
                                </div>
		
                                <div class="col-md-6">
                                        <ul class="list-group">
						<li class="list-group-item">
							<h4 class="list-group-item-heading">High Quality Movies</h4>
							<p class="list-group-item-text">All of the Movies are available in the superior HD Quality or even higher!</p>
						</li>
						<li class="list-group-item">
							<h4 class="list-group-item-heading">Watch Without Limits</h4>
							<p class="list-group-item-text">You will get access to all of your favourite the Movies without any limits.</p>
						</li>
						<li class="list-group-item">
							<h4 class="list-group-item-heading">100% Free Advertising</h4>
							<p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p>
						</li>
						<li class="list-group-item">
							<h4 class="list-group-item-heading">Watch anytime, anywhere</h4>
							<p class="list-group-item-text">It works on your TV, PC, or MAC!</p>
						</li>							
					</ul>
                                </div>
                        </div>
                </div>
                <div class="modal-footer bg-info">
                        <a class="btn btn-danger" href="/signup.php">Sign Up For Free</a>
                </div>
        </div>
</div>

<?php include('footer.php');?>