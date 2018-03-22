<?php
//get videos from channel by youtube data API

$configs      = include('config.php');
$API_key      = $configs['youtube_api'];

$channelID     = $_GET['channel'];
$maxResults   = 20;
$youtubeURL = 'https://www.googleapis.com/youtube/v3/search?order=viewCount&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.'';

$json = file_get_contents($youtubeURL);
$videoList = json_decode($json);

// Testing dumps. Lazyyyyy. Don't do this.
// var_dump($channelID);
// var_dump($youtubeURL);
// var_dump($json);
// var_dump($videoList);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- import bootstrap 4.0.0 then custom styles-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
  @import url('https://fonts.googleapis.com/css?family=Ubuntu');
  body{
    font-family: Ubuntu, sans-serif;
  }
  h1, h2, h3, h4, h5, h6 {
    margin:0px 0px 18px 0px;
    padding:0px;
  }
  <style type="text/css">
  .navbar-brand{
    font-weight:800;
  }
  .card{
    margin:20px 0px 0px;
  }
  </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><span style="color: #1155cc">sort by </span>
    <span style="color: #ff0000;">views</span></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>
      <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
        <input name="channel" class="form-control mr-sm-2" type="channel" placeholder="Channel ID" aria-label="channel">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Begin Search!</button>
      </form>
    </div>
  </nav>

  <div class="container">
    <div class="row">
        <?php

        if (!$videoList){
          ?>
          <div class="col-sm-12">Please search for a Channel ID.</div>
          <?php
        }else {

          $i = 1;
          foreach($videoList->items as $item)
          {
            //var_dump($item);?><br> <?php
            if(isset($item->id->videoId))
            { ?>
                <div class="col-sm-4">
                  <div class="card">
                    <img class="card-img-top" src="<?php echo $item->snippet->thumbnails->high->url; ?>" alt="<?php echo $item->snippet->title; ?>">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $i++; echo ": ".$item->snippet->title; ?></h5>
                      <p class="card-text"><?php echo $item->snippet->description; ?></p>
                      <a href="https://www.youtube.com/watch?v=<?php echo $item->id->videoId; ?>" class="btn btn-primary">Watch Now!</a>
                    </div>
                  </div>
                </div>

              <?php
            }
          }
        }
        ?>
    </div>
  </div>
    <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>