<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Julia Jones</title>
    <?php require_once("lib/head-utils.php");?>
  </head>
  <body>

    <ul class="cb-slideshow">
        <li><span>Image 01</span><div><h3>Julia</h3></div></li>
        <li><span>Image 02</span><div><h3>Jones</h3></div></li>
        <li><span>Image 03</span><div><h3>consultant</h3></div></li>
        <li><span>Image 04</span><div><h3>friend</h3></div></li>
        <li><span>Image 05</span><div><h3>neighbor</h3></div></li>
        <li><span>Image 06</span><div><h3>innovator</h3></div></li>
    </ul>

    <div class="landing">

      <!-- <div>
        <h3 class="text-center juliatext animated bounceIn">Julia Jones</h3>
      </div> -->

      <div class="container">
        <div class="row centerAlign">
          <div class=" centerAlign col-md-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#aboutModal">
              about
            </button>          </div>
          <div class="col-md-4 centerAlign">
            <img class="img-responsive img-circle" style="margin:25px;"src="lib/images/juliaPic.jpg" alt="" />
          </div>
          <div class=" centerAlign col-md-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#servicesModal">
              services
            </button>
          </div>
        </div>

        <div class="row centerAlign">
          <div class="col-md-4 col-xs-4 centerAlign">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </div>
          <div class="col-md-4 col-xs-4 centerAlign">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
          <div class="col-md-4 col-xs-4 centerAlign">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>



    <!-- aboutModal -->
    <div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">about</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="servicesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">services</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>




    <!--Jquery CDN-->
    <script src="http://code.jquery.com/jquery-2.2.4.js"
      integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
      crossorigin="anonymous">
    </script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
      integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
      crossorigin="anonymous">
    </script>

    <!--  materialKit javascript  -->
    <script src="lib/js/material.min.js"></script>

    <!-- <script src="lib/js/slide.js"></script> -->
  </body>
</html>
