<html>
<head>
  <meta charset="UTF-8">
  <title>Mobile Phone Shopping</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- star -->
  <style>
    *{
      margin: 0;
      padding: 0;
      font-family: roboto;
    }

    .cont{
      text-align: center;
      margin: 1% auto;
      background: #111;
      color: #EEE;
      border-radius: 5px;
      border: thin solid #444;
      overflow: hidden;
    }

    button{
      margin: 2px;
    }

    hr{
      margin: 20px;
      border-bottom: thin solid rgba(255,255,255,.1);
    }

    div.title{
      font-size: 2em;
    }

    h1 span{
      font-weight: 300;
      color: #Fd4;
    }

    div.stars{
      width: 270px;
      display: inline-block;
    }

    input.star{
      display: none;
    }

    label.star {
      float: right;
      padding: 10px;
      font-size: 36px;
      color: #444;
      transition: all .2s;
    }

    input.star:checked ~ label.star:before {
      content:'\f005';
      color: #FD4;
      transition: all .25s;
    }


    input.star-5:checked ~ label.star:before {
      color:#FE7;
      text-shadow: 0 0 20px #952;
    }

    input.star-1:checked ~ label.star:before {
      color: #F62;
    }

    label.star:hover{
      transform: rotate(-15deg) scale(1.3);
    }

    label.star:before{
      content:'\f006';
      font-family: FontAwesome;
    }

    .rev-box{
      overflow: hidden;
      height: 0;
      width: 100%;
      transition: all .25s;
    }

    textarea.review{
      background: #222;
      border: none;
      width: 100%;
      max-width: 100%;
      height: 100px;
      padding: 10px;
      box-sizing: border-box;
      color: #EEE;
    }

    label.review{
      display: block;
      transition:opacity .25s;
    }



    input.star:checked ~ .rev-box{
      height: 125px;
      overflow: visible;
    }
  </style>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="page-top">
  @include('component.navbar')
  <br><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="container">
          @include('component.sidebar')
        </div>
      </div>
      <div class="col-md-8">
        @yield('content')
      </div>
    </div>
  </div>
    
  
  
  
  <footer id="footer" class="text-center">
    <p>Copyright 2018 &copy; Minh All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>



