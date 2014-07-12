<?php
session_start();
Session::put('open', 'true');
?>

<html>
  <head>
    <!-- include bootstrap css -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- include bootstrap optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <!-- title font -->
    <link href='http://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>
    <style>
      span.glyphicon-cog {font-size:1.5em;}
    </style>

    @section('page_title')
      <title>sammich davis jr.</title>
    @show
  </head>
  <body>
    <div id='div_session_write'> </div>

    <!-- navbar -->
    <div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">the sammichulator</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
              <ul class="dropdown-menu dropdown-menu-form">
                <li class="dropdown-header">Gender Select:</li>
                <li class="divider"></li>

                <li><a>
                  <label class="checkbox">
                    <input type="checkbox" id="cbMale" checked>
                    Male
                  </label>
                </a></li>
                <li><a>
                  <label class="checkbox">
                    <input type="checkbox" id="cbFemale" checked>
                    Female
                  </a></label>
                </li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class='container'>
      @yield('banner')

      <div style="text-align:center;">
        <a href="/sammichulate">
          <button type="button" class="btn btn-lg btn-primary" id="btnSammichulate" style="font-size:2em;margin-top:20px;">sammichulate</button>
        </a>
      </div>

      @yield('content')
    </div>

      <!-- include jQuery -->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- include bootstrap js  -->
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
      <script>
      $(document).ready(function(){
        $('.dropdown-menu').on('click', function(e){
          if($(this).hasClass('dropdown-menu-form')){
            e.stopPropagation();
          }
        });
        $('#btnSammichulate').click(function(){
          if($('#cbMale').prop('checked') && $('#cbFemale').prop('checked')){
            // window.gender = 'b';
            $('#div_session_write').load('../session_write.php?gender=b');
          } else if ($('#cbMale').prop('checked')){
            // window.gender = 'm';
            $('#div_session_write').load('../session_write.php?gender=m');
          } else {
            // window.gender = 'f';
            $('#div_session_write').load('../session_write.php?gender=f');
          }
          // alert();
        });
      });
      </script>
  </body>
</html>
