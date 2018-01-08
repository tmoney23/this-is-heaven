<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Never One For Words</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
      <section class="hero is-success is-fullheight has-bg-img">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
          <header class="navbar">
            <div class="container">
              <div class="navbar-brand">
                <a href="/" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-plane"></i>
                  </span>
                  <span class="icon">
                    <i class="fa fa-trademark"></i>
                  </span>
                </a>
                <span class="navbar-burger burger" data-target="navbarMenuHeroC">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </div>
              <div id="navbarMenuHeroC" class="navbar-menu">
                <div class="navbar-end">
                  <a href="/nouns" class="navbar-item is-active">nouns</a>
                  <a href="/travels" class="navbar-item">travels</a>
                  <a href="/prints" class="navbar-item">prints</a>
                  <span class="navbar-item">
                    <a href="https://instagram.com/thomasdmoore" class="button is-success is-inverted">
                      <span class="icon">
                        <i class="fa fa-instagram"></i>
                      </span>
                      <span>thomasdmoore</span>
                    </a>
                  </span>
                </div>
              </div>
            </div>
          </header>
        </div>
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
          <svg viewBox="0 0 3387 1270">
            <path id="planePath" class="planePath" d="M-226 626c439,4 636,-213 934,-225 755,-31 602,769 1334,658 562,-86 668,-698 266,-908 -401,-210 -893,189 -632,630 260,441 747,121 1051,91 360,-36 889,179 889,179" />
            <g id="plane">
              <polygon class="fil1" points="-141,-10 199,0 -198,-72 -188,-61 -171,-57 -184,-57 " />
              <polygon class="fil2" points="199,0 -141,-10 -163,63 -123,9 " />
              <polygon class="fil3" points="-95,39 -113,32 -123,9 -163,63 -105,53 -108,45 -87,48 -90,45 -103,41 -94,41 " />
              <path class="fil4" d="M-87 48l-21 -3 3 8 19 -4 -1 -1zm-26 -16l18 7 -2 -1 32 -7 -29 1 11 -4 -24 -1 -16 -18 10 23zm10 9l13 4 -4 -4 -9 0z" />
              <polygon class="fil1" points="-83,28 -94,32 -65,31 -97,38 -86,49 -67,70 199,0 -123,9 -107,27 " />
            </g>
            <!-- Define the motion path animation -->
            <animateMotion xlink:href="#plane" dur="5s" repeatCount="indefinite" rotate="auto">
              <mpath xlink:href="#planePath" />
            </animateMotion>
          </svg>
        </div>


      </section>

        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                  Contact me, people.
                </div>
            </div>

        </div>
    </body>
</html>
