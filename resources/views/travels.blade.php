<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>thomas darnell moore</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <!-- Bulma Version 0.6.0 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
  <style type="text/css">
    html,body {
      font-family: 'Open Sans''black';
    }
  </style>
</head>
<body>
  <!--php stuff-->
  @php
    // PHP Code goes here.
    $thomas = 'I am the man.';
    $thomas = $thomas . ' So is Drew.';
    $title = 'da black church';
    $help_me = '<h1 class="subtitle is-4 is-stong is-left">im learning some php stuff</h1>';
    $geaux = '<h2 class="title is-4 is-left">geaux tigers, kick some ass</h2>';
    $coach_o = 'i hate coach o';
    $coach_o = $coach_o . ' we will rock you ';
    $php = '<h1 class="title is-4 is-stong is-left"> i got this!!!</h1>';

  @endphp
  <!-- HEADING -->
  <section class="hero is-fullheight is mobile is-multiline is-white is-bold">
  <div class="hero-head">
    <nav class="nav-has-shadow">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="../">
            <span>thomas darnell moore | photography<span> | {{ $thomas }}
          </a>
          <span class="navbar-burger burger" data-target="navbarMenu">
            <span>thomas darnell moore</span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenu" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-strong is-active">
              blogs
            </a>
            <a class="navbar-item">
              nouns
            </a>
            <a class="navbar-item">
              travels
            </a>
            <a class="navbar-item">
              prints
            </a>
            <a class="navbar-item">
              contact
            </a>
          </div>
        </div>
      </div>
    </nav>
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-5">
            <figure class="image is-4by3">
                <img src="/img/black-church.jpg" alt="hey">
              </figure>
            </div>
            <div class="column is-4 is-left-1">
              <h1 class="subtitle is-strong is-6">
              @php
              echo $php;
              @endphp
              @php
              echo $coach_o;
              @endphp
              </h1>
            <br>

              </a>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="columns is-vcentered">
        <div class="column is-5">
          <figure class="image is-4by3">
              <img src="/img/midwayhorses.jpg" alt="hey">
            </figure>
          </div>
          <div class="column is-4 is-left-1">
            <h1 class="subtitle is-4 is-strong">
               <strong>{{ $title }}</strong>
                 </h1>
              @php
              echo $help_me;
              @endphp
            <br>
            <h2 class="subtitle is-4 is-left-1">
              12.15.2017
            </h2>
            <br>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-5">
            <figure class="image is-4by3">
                <img src="/img/kotormontenegro.jpg" alt="hey">
              </figure>
            </div>
            <div class="column is-4 is-left-1">
              <h1 class="subtitle is-4">
                kotor montenegro
              </h1>
              <h2 class="subtitle is-4 is-left-1">
                12.15.2017
            <br>
    <div class="hero-foot">
      <div class="container">
        <div class="tabs is-centered">
          <ul>
            <li><a>And this at the bottom</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <script async type="text/javascript" src="../js/bulma.js"></script>
</body>
</html>
