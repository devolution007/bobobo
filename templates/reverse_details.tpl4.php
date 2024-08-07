<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?> 
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Play YouTube or Vimeo Video in Modal - Bootstrap 4</title>
  <script src="https://bootstrapcreative.com/wp-bc/wp-content/themes/wp-bootstrap/codepen/bootstrapcreative.js"></script>
  
  <link rel='stylesheet' href='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.css'>

      <link rel="stylesheet" href="1/style.css">

  
</head>

<body><iframe width="660" height="334" src="https://www.youtube.com/embed/o2F2W1b6bSQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="790" height="444" src="https://www.youtube.com/embed/q4HE0zWptHQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>https://youtu.be/q4HE0zWptHQ
  <div class="container">
    <h1>Play YouTube or Vimeo Videos in Bootstrap 4 Modal</h1>
  
  
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/o2F2W1b6bSQ" data-target="#myModal">
  Play Video 1
</button>
  
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/watch?v=o2F2W1b6bSQ" data-target="#myModal">
  Play Video 2
</button>
  
  
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/watch?v=o2F2W1b6bSQ" data-target="#myModal">
  Play Video 3
</button>
  
  
     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#myModal">
  Play Vimeo Video
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      
      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
<iframe width="660" height="334" src="https://www.youtube.com/embed/o2F2W1b6bSQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
        
        
      </div>

    </div>
  </div>
</div> 
  
  
  
</div>
<script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>
<script src='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js'></script>
<script  src="1/index.js"></script>




</body>

</html>

 