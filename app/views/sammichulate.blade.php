@extends('layout')

@section('banner')
  <div class='jumbotron' style="background-color:#FFF;">
    <!-- <h1 style="height:220px;color:#333;font-family: 'Chango';text-shadow:2px 2px #ddd;text-align:center;-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;">You've been sammichulated.</h1> -->

    <?php
    $c = Sammich::all()->count();
    $x = rand(0,$c); $y = rand(0,$c);
    ?>
    <h1 style="height:220px;padding-top:50px;color:#333;font-family: 'Chango';text-shadow:2px 2px #ddd;text-align:center;-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;">
      @foreach($sammiches as $sammich)
        @if ($sammich->id == $x)
          {{$sammich->name1}}
        @endif
      @endforeach
      @foreach($sammiches as $sammich)
        @if ($sammich->id == $y)
          {{$sammich->name2}}
        @endif
      @endforeach
    </h1>
    <!-- <div style="text-align:center;">
      <a href="/sammichulate">
        <button type="button" class="btn btn-lg btn-primary" id="btnSammichulate" style="font-size:2em;margin-top:20px;">sammichulate</button>
      </a>
    </div> -->
  </div>
@stop

@section('content')
  <h2>Sammichulate your life.</h2>
  <h5></h5>

  <div class='row'>
    <div class='col-md-3'>
      <h2>Why Sammichulate?</h2>
      <p>You're a bona fide badass. Doesn't your lunch deserve a pickup name that's also certified devastating? Don't eat <em>Darren</em>'s lunch; eat a lunch made for <em>Renfield Thundersnow, Emissary of Valhalla</em>!</p>
    </div>
    <div class='col-md-3'>
      <h2>How Sammichulate?</h2>
      <p>Click the button, silly goose.</p>
    </div>
    <div class='col-md-3'>
      <h2>Where Sammichulate?</h2>
      <p>In a word? Everywhere. Your phone, your desktop, and your enchanted iPad of Lunch +1 are all ideal vehicles for sammichulation.</p>
    </div>
  </div>
@stop
