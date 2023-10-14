<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('include/tmdb-api.php');
require_once('include/formatting.php');
require_once('include/function.php');
require_once('include/meta.php');

define('TOPPATH', $_SERVER['DOCUMENT_ROOT'] );
define('VERSION', '1.9' );

    /*
    |--------------------------------------------------------------------------
    | DO NOT MODIFY OPTIONS BELOW. UNTIL YOU KNOW WHAT ARE YOU DOING.
    |--------------------------------------------------------------------------
    */

    $_ocim   = new _Ocim;
    $config  = new stdClass();
    $config->prefix = 'ocim_';

    /*
    |--------------------------------------------------------------------------
    | Meta Seo Header
    |--------------------------------------------------------------------------
    */

    $config->title            = 'Movie & TV Shows Putlocker'; //Logo Title
    $config->meta_title       = 'Watch Movies and TV Shows Streaming'; //Meta Home Title
    $config->meta_description = 'Watch Movies and TV Shows Streaming full hd online for free';
    $config->meta_keywords    = 'watch movie online,watch movie online, watch full movie,tv series, watch movie free, tv show';

    $config->meta_playing     = 'Now Playing | Watch Movies and TV Shows Streaming'; //Meta playing Title
    $config->meta_toprated    = 'Toprated Movies | Watch Movies and TV Shows Streaming'; //Meta toprated Title
    $config->meta_upcoming    = 'Upcoming Movies | Watch Movies and TV Shows Streaming'; //Meta upcoming Title

    /*
    |--------------------------------------------------------------------------
    | Permalink
    |--------------------------------------------------------------------------
    */

    $config->seo              = 'true'; // true or false
    $config->url_movie        = 'movie'; // true or false
    $config->url_tv           = 'tv'; // true or false

    /*
    |--------------------------------------------------------------------------
    | Other
    |--------------------------------------------------------------------------
    */
    $config->templates        = 'v3'; 
    $config->email            = 'wongganteng@outlook.com';
    $config->dmca             = ''; 

    
    $config->tmdbapi = array(
            "540b052aae53f8cac15cb72c1d4792c6"
    ); 

    $apikey      = $config->tmdbapi[mt_rand(0, count($config->tmdbapi) - 1)];
    $language    = 'en';
    $tmdb        = new TMDB($apikey, $language, true);

    if($config->dmca != null){
            if($_ocim->strposa($_ocim->canonical(), preg_split('/\n|\r\n?/',$config->dmca) )) :
                    header("Location: /");
            endif;
    }