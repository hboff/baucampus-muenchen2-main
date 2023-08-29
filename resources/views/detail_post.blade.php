<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Thu Jun 29 2023 21:31:35 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="648d0891096d52bfd9f271c4" data-wf-site="648d0891096d52bfd9f271dc" lang="fr">
<head>
  <meta charset="utf-8">
  <title>Baucampus Deutsch</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/baucampus-fr-3d2c130f2c9eb3bf5def5f18fb.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Great Vibes:400"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.webp" rel="apple-touch-icon"><!--  Finsweet Cookie Consent  -->
  <script async="" src="https://cdn.jsdelivr.net/npm/@finsweet/cookie-consent@1/fs-cc.js" fs-cc-mode="opt-in"></script>
  <script type="fs-cc" id="hs-script-loader" async="" defer="" src="https://js-eu1.hs-scripts.com/26454454.js" fs-cc-categories="marketing"></script>
</head>
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" data-w-id="9962d9cc-619f-1e92-7f2b-747f23a87122" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="container flex">
      <a href="/" class="brand w-nav-brand">
        <div class="logo-wrapper"><img src="images/logo.png" loading="lazy" width="49" sizes="49px" srcset="images/logo-p-500.png 500w, images/logo-p-800.png 800w, images/logo-p-1080.png 1080w, images/logo.png 1172w" alt="">
          <div class="text-logo-wrapper">
            <div class="logo-text">Baucampus<br></div>
            <div class="logo-text subtext">{{$domainort}}</div>
          </div>
        </div>
      </a>
      <nav role="navigation" class="nav-menu w-nav-menu">
        <a href="/" class="nav-link w-nav-link">Home</a>
        <div data-hover="true" data-delay="300" data-w-id="9962d9cc-619f-1e92-7f2b-747f23a8712f" class="navbar-menu-dropdown w-dropdown">
          <aside class="dropdown-toggle w-dropdown-toggle">
            <div class="dropdown-icon w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></div>
            <a href="leistungen" class="link-for-dropdown w-inline-block">
              <div>Dienstleistungen</div>
            </a>
          </aside>
          <nav class="dropdown-list w-dropdown-list">
            <div class="dropdown-link-list">
              <a href="/bauschaden" class="dropdown-link w-inline-block">
                <div>
                  <div>Beratung Bauschaden</div>
                </div>
              </a>
              <a href="/schimmelpilz" class="dropdown-link w-inline-block">
                <div>
                  <div>Beratung Schimmmelpilz</div>
                </div>
              </a>
              <a href="/hauskaufberatung" class="dropdown-link w-inline-block">
                <div>
                  <div>Kaufberatung</div>
                </div>
              </a>
              <a href="/baubegleitung" class="dropdown-link w-inline-block">
                <div>
                  <div>Baubegleitung</div>
                </div>
              </a>
              <a href="/energieberatung" class="dropdown-link w-inline-block">
                <div>
                  <div>Energieberatung</div>
                </div>
              </a>
              <a href="/immobilienbewertung" class="dropdown-link w-inline-block">
                <div id="w-node-c8909249-ed55-ded4-b3d1-381c167e4fbc-23a87122">
                  <div>Immobilienbewertung</div>
                </div>
              </a>
            </div>
          </nav>
        </div>
        <a href="https://baucampus.com" target="_blank" class="nav-link w-nav-link">Baucampus</a>
        <a href="preise" class="nav-link w-nav-link">Preise</a>
        <a href="kontakt" class="nav-link w-nav-link">Kontakt</a>
         @php
$p = 0;
@endphp

@foreach ($expert as $row)
    @if ($domainort == $row->stadt)
        @if ($p++ < 1)
            <a href="tel:{{$row->Phone}}" class="button-cta w-button">{{$row->Phone}}</a>
            @else
        @endif
    @endif
@endforeach

      </nav>
      <div class="menu-button w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div data-w-id="00a1a457-2d1f-fa86-e664-747df233a5d3" class="main-section news-page wf-section">
    <div class="container">
      <div>
        <div data-w-id="00a1a457-2d1f-fa86-e664-747df233a5d6" style="opacity:0" class="bread-crumbs-wrapper">
          <a href="/" class="bread-crumbs black">Home</a>
          <div class="bread-crumbs active"> / </div>
          <a href="landingpage" class="bread-crumbs black">News</a>
          <div class="bread-crumbs active"> / </div>
          <div class="bread-crumbs active"></div>
        </div>
        <h3 data-w-id="00a1a457-2d1f-fa86-e664-747df233a5dd" style="opacity:0" class="display-text">Latest News &amp; Updates</h3>
      </div>
    </div>
  </div>
  <div class="section wf-section">
    <div class="container">
      <div class="greed-wrapper-for-news">
        <div id="w-node-_03909bbf-ada0-d07a-5332-5c833c4097b1-d9f271c4" class="sticky-search-bar">
          <form action="/search" class="search w-form"><input type="search" class="search-input w-node-_03909bbf-ada0-d07a-5332-5c833c4097b3-d9f271c4 w-input" maxlength="256" name="query" placeholder="Search…" id="search" required=""><input type="submit" value="" class="search-button w-button"></form>
          <div class="card-name-text small1">Recent Posts</div>
          <div class="recent-posts w-dyn-list">
            <div role="list" class="side-bar-collection w-dyn-items">
              <div role="listitem" class="w-dyn-item">
                <a href="#" class="recent-posts-card w-inline-block"><img id="w-node-_03909bbf-ada0-d07a-5332-5c833c4097bb-d9f271c4" src="" alt="" class="recent-posts-prew">
                  <div id="w-node-_03909bbf-ada0-d07a-5332-5c833c4097bc-d9f271c4">
                    <div>
                      <div class="small-thin-text"></div>
                      <div class="small-thin-text"> / </div>
                      <div class="small-thin-text"></div>
                    </div>
                    <div class="card-name-text blog small"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="w-dyn-empty">
              <div>No items found.</div>
            </div>
          </div>
          <div class="w-dyn-list">
            <div role="list" class="collection-list w-dyn-items">
              <div role="listitem" class="collection-item w-clearfix w-dyn-item">
                <a href="#" class="tag-link w-button"></a>
              </div>
            </div>
            <div class="w-dyn-empty">
              <div>No items found.</div>
            </div>
          </div>
        </div>
        <div id="w-node-_03909bbf-ada0-d07a-5332-5c833c4097cd-d9f271c4"><img src="" alt="" class="main-news-img">
          <div>
            <div class="small-thin-text"></div>
            <div class="small-thin-text"> / </div>
            <div class="small-thin-text"></div>
          </div>
          <div class="w-richtext"></div>
          <div class="w-dyn-list">
            <div role="list" class="collection-list w-dyn-items">
              <div role="listitem" class="collection-item w-clearfix w-dyn-item">
                <a href="#" class="tag-link w-button"></a>
              </div>
            </div>
            <div class="w-dyn-empty">
              <div>No items found.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.footer')
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=648d0891096d52bfd9f271dc" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>