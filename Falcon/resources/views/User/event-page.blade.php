<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Management</title>
  <link rel="shortcut icon" type="text/css" href="{{asset('images')}}/logo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css')}}/user.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="./owl.theme.default.min.css">
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
  </script>
  <script src="./owl.carousel.min.js"></script>
<body>
  
  <div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">
      @foreach($events as $event)
      <div class="carousel-item active">
        <img class="img-fluid" src="{{asset('images/uploads')}}/{{$event->image1}}" alt="Los Angeles" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{asset('images/uploads')}}/{{$event->image2}}" alt="Chicago" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{asset('images/uploads')}}/{{$event->image3}}" alt="New York" width="1100" height="500">
      </div>
    </div>
    
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="row">
          <div class="col-md-11 col-sm-12 contain">
            <h1>{{$event->heading1}}</h1>
            <p class="contain-item">{{$event->paragraph1}}
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-11 col-sm-12 contain">
            <h1>{{$event->heading2}}</h1>
            <p class="contain-item">{{$event->paragraph2}}
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-11 col-sm-12 contain">
            <h1>{{$event->heading3}}</h1>
            <p class="contain-item">{{$event->paragraph3}}
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-11 col-sm-12 contain">
            <h1>{{$event->heading4}}</h1>
            <p class="contain-item">{{$event->paragraph4}}
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-11 col-sm-12 contain">
            <h1>{{$event->heading5}}</h1>
            <p class="contain-item">{{$event->paragraph5}}
            </p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</body>
</html>
