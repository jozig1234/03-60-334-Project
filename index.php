<!DOCTYPE html>
<html>
<head>
  <title> Project </title>
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
  .title{
    font-size:80px;
    font-weight:800;
  }
  </style>

</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <p><b>Developed by Matthew Morin & Joseph Jourekian</b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12" style="text-align:center;">
        <h1 class="title"><span style="color: #1155cc">sort by</span><span style="color: #ff0000"> views</span></h1>
        <h2>Easily find the stats of any YouTube channel</h2>
        <div style="text-align:center">
          <form class="form-inline justify-content-center" action="search.php" method="get" style="margin: 0px auto;">
            <label class="sr-only" for="channel">Channel Name</label>
            <input name="channel" type="text" class="form-control mb-2 mr-sm-2" id="channel" value="UC27Bqjp8c1cTHcJEnwypkjQ">
            <button type="submit" class="btn mb-2">Begin Search!</button>
          </form>
        </div>
      </div>
    </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>