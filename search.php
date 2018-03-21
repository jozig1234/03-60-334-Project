<?php
//get videos from channel by youtube data API
$API_key = 'AIzaSyDDq9Qa3La6UZNMkDURslDkbc4hjzMJ0TY';
$channelID = 'UC9CuvdOVfMPvKCiwdGKL3cQ';

$maxResults = 10;
$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

?>
<!DOCTYPE html>
<html lang = "en">
<head>
  <title>Project</title>
  <meta charset = "utf-8">
  <meta name = "viewport" content = "width = device-witdh, intiale-scale = 1">
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type = "text/css">
  .container {
    padding: 15px;
  }
  .youtube-video h2 {
    font-size: 16px;
  }
  </style>

</head>
<style>
.div {
    text-align: center;
    heigth: 100%;
    margin: 0 auto;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}
</style>
<body>
<div class = "div">
  <form action = "/search.php" method = "GET" >
  <a href = "/index.php">
     <span style ="font-family: Ubuntu, sans-serif; text-align: center; font-weight: bold; font-size:200%">
     <span style = "color: #1155cc">sort by </span> 
     <span style = "color: #ff0000">views</span></span>
  </a> &nbsp
    <input name = "channel" type = "text" placeholder = "channel name here...." size = "25" style = "padding: 5px; border-radius: 4px; border: 3px solid #ccc;">
    <input name = "submit" type = "submit" value = "Begin Search!" size = "15">
  </form>  
</div>

<div class = "container">
    <div class = "row">
    <?php
      foreach($videoList->items as $item)
      {
        if(isset($item->id->videoId))
        {
          echo '<div class = "youtube-video">
              <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
               
              <h2>'. $item->snippet->title . '</h2>
              </div>';  
        }
      }
      ?>
    </div>
</div>
</body>
</html>