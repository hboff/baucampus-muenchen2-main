<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Thu Jun 29 2023 21:31:35 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="648d0891096d52bfd9f271c2" data-wf-site="648d0891096d52bfd9f271dc" lang="fr">
<head>
  <meta charset="utf-8">
  <title>Health &amp; Safety</title>
  <meta content="Health &amp; Safety" property="og:title">
  <meta content="Health &amp; Safety" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/baucampus-fr-3d2c130f2c9eb3bf5def5f18fb.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Great Vibes:400"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="../images/webclip.webp" rel="apple-touch-icon"><!--  Finsweet Cookie Consent  -->
  <script async="" src="https://cdn.jsdelivr.net/npm/@finsweet/cookie-consent@1/fs-cc.js" fs-cc-mode="opt-in"></script>
  <script type="fs-cc" id="hs-script-loader" async="" defer="" src="https://js-eu1.hs-scripts.com/26454454.js" fs-cc-categories="marketing"></script>
</head>
<body class="body">
  <div data-collapse="medium" data-animation="default" data-duration="400" data-w-id="9962d9cc-619f-1e92-7f2b-747f23a87122" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="container flex">
      <a href="/" class="brand w-nav-brand">
        <div class="logo-wrapper"><img src="../images/logo.png" loading="lazy" width="49" sizes="49px" srcset="../images/logo-p-500.png 500w, ../images/logo-p-800.png 800w, ../images/logo-p-1080.png 1080w, ../images/logo.png 1172w" alt="">
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
            <a href="/leistungen" class="link-for-dropdown w-inline-block">
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
        <a href="/preise" class="nav-link w-nav-link">Preise</a>
        <a href="/kontakt" class="nav-link w-nav-link">Kontakt</a>
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
  <div data-w-id="6fca50ab-de2f-362b-39cc-d7d7b0ef92d4" class="main-section services wf-section">
    <div class="container relative">
      <div data-w-id="bf8531e1-198a-24de-4582-6d1ae146a6f6" style="opacity:0" class="bread-crumbs-wrapper">
        <a href="/" class="bread-crumbs">Home</a>
        <div class="bread-crumbs active"> / </div>
        <div class="bread-crumbs active">CSR</div>
      </div>
      <h3 data-w-id="d3349579-0b18-6f19-95a4-d1bb8ad22c13" style="opacity:0" class="display-text">Corporate Sustainability Responsibility (CSR) </h3>
    </div>
    <div class="background-overlay"></div><img src="../images/Time.webp" loading="lazy" sizes="100vw" srcset="../images/Time-p-500.webp 500w, ../images/Time-p-800.webp 800w, ../images/Time.webp 1024w" alt="" class="background-img">
  </div>
  <div data-w-id="4c341b8b-2ef7-5a8c-1192-6185da71e66f" class="section wf-section">
    <div class="container">
      <div class="column-grid-post-main two">
        <div data-w-id="04297b0d-1249-7c77-a3e2-8c234f4ef296" style="opacity:0" class="card-name-text">Corporate Sustainability<br>Responsibility (CSR) </div>
        <div data-w-id="04297b0d-1249-7c77-a3e2-8c234f4ef293" style="opacity:0">
          <p>Corporate Social Responsibility (CSR) is a concept where companies take into account the social, environmental, and economic impacts of their business operations. It involves taking responsibility for the company&#x27;s actions and working towards creating positive change in the community and environment where the company operates. The aim of CSR is to create sustainable, long-term value for all stakeholders, including shareholders, employees, customers, suppliers, and the wider community.<br></p>
        </div>
      </div>
      <div data-w-id="bc4587b8-9bad-314f-7392-df6c7b921cb2" style="opacity:0" class="logo-grid two">
        <a id="w-node-_9eb8d5b3-0971-6688-acca-3effacd710c5-d9f271c2" href="https://www.bitc.ie/" class="w-inline-block"><img src="../images/L7.svg" alt="" class="logo-img"></a>
        <a id="w-node-_03946f44-ddb2-05ff-9b4a-207db18e1ae7-d9f271c2" href="https://www.bitc.ie/" class="w-inline-block"><img src="../images/L6.svg" alt="" class="logo-img"></a>
        <a id="w-node-_7f25fd33-655e-6ba8-0abd-fff9183dc8df-d9f271c2" href="https://www.bitc.ie/" class="w-inline-block"><img src="../images/L1.svg" alt="" class="logo-img"></a>
        <a id="w-node-_00ffd2e6-539a-5a2a-5fc4-85eb67245657-d9f271c2" href="https://www.bitc.ie/" class="w-inline-block"><img src="../images/L2.svg" alt="" class="logo-img"></a>
        <a id="w-node-_5b66016d-d3ea-7238-6456-094cf49e967c-d9f271c2" href="https://www.bitc.ie/" class="w-inline-block"><img src="../images/L3.svg" alt="" class="logo-img"></a>
        <a id="w-node-_6943b4ef-760c-72f3-8d80-622f30212549-d9f271c2" href="https://www.bitc.ie/" class="w-inline-block"><img src="../images/L5.svg" alt="" class="logo-img"></a>
      </div>
    </div>
  </div>
  <div data-w-id="6bb3502d-11a7-7305-cc26-615d8fce3ac0" class="section wf-section">
    <div class="container max-1080-px">
      <a href="#" class="lightbox-second-page w-inline-block w-lightbox"><img src="../images/Road-2.jpg" width="1326" sizes="(max-width: 479px) 100vw, (max-width: 767px) 95vw, 96vw" srcset="../images/Road-2-p-500.jpeg 500w, ../images/Road-2-p-800.jpeg 800w, ../images/Road-2.jpg 1600w" alt="">
        <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "5ece89203b049ec301e2b2bb",
      "origFileName": "Layer 9.jpg",
      "fileName": "Layer 9.jpg",
      "fileSize": 273778,
      "height": 1068,
      "url": "https://uploads-ssl.webflow.com/6423fb8f92c380ae61471119/6423fb8f92c380272f47119c_Layer%209.jpg",
      "width": 1600,
      "type": "image"
    },
    {
      "_id": "5ebcf61be31db40707923541",
      "origFileName": "I@2x.jpg",
      "fileName": "I@2x.jpg",
      "fileSize": 193089,
      "height": 472,
      "url": "https://uploads-ssl.webflow.com/6423fb8f92c380ae61471119/6423fb8f92c3801ac4471187_I%402x.jpg",
      "width": 708,
      "type": "image"
    },
    {
      "_id": "5ece89203b049eb0f9e2b2bc",
      "origFileName": "Layer 8.jpg",
      "fileName": "Layer 8.jpg",
      "fileSize": 557442,
      "height": 1067,
      "url": "https://uploads-ssl.webflow.com/6423fb8f92c380ae61471119/6423fb8f92c38010c0471198_Layer%208.jpg",
      "width": 1600,
      "type": "image"
    }
  ],
  "group": ""
}</script>
      </a>
      <div>
        <div data-w-id="6bb3502d-11a7-7305-cc26-615d8fce3ac4" style="opacity:0" class="content-for-card grid">
          <div id="w-node-_6bb3502d-11a7-7305-cc26-615d8fce3ac5-d9f271c2" class="wrapper-for-icon marging-top"><img src="../images/1icon_11icon.png" alt=""></div>
          <div>
            <div class="card-name-text">The Environment &amp; Cummunity</div>
            <p>Corporate Social Responsibility (CSR) is a concept where companies take into account the social, environmental, and economic impacts of their business operations. It involves taking responsibility for the company&#x27;s actions and working towards creating positive change in the community and environment where the company operates. The aim of CSR is to create sustainable, long-term value for all stakeholders, including shareholders, employees, customers, suppliers, and the wider community.<br></p>
          </div>
        </div>
        <div data-w-id="af27476a-debf-c42d-673c-5cc1c469d21d" style="opacity:0" class="content-for-card grid">
          <div id="w-node-af27476a-debf-c42d-673c-5cc1c469d21e-d9f271c2" class="wrapper-for-icon marging-top"><img src="../images/2icon_12icon.png" alt=""></div>
          <div>
            <div class="card-name-text">Client Relations</div>
            <p>Corporate sustainability responsibility (CSR) is a similar concept but with a stronger focus on the environmental aspects of CSR. It involves integrating sustainability practices into the company&#x27;s operations and decision-making processes. This includes reducing the company&#x27;s carbon footprint, minimizing waste and pollution, and using natural resources in a responsible and sustainable way.<br></p>
          </div>
        </div>
        <div data-w-id="2bcd5eca-3223-c7e1-a03d-d5793000e1d1" style="opacity:0" class="content-for-card grid">
          <div id="w-node-_2bcd5eca-3223-c7e1-a03d-d5793000e1d2-d9f271c2" class="wrapper-for-icon marging-top"><img src="../images/3icon_13icon.png" alt=""></div>
          <div>
            <div class="card-name-text">Fair Employment</div>
            <p>In summary, both CSR and corporate sustainability responsibility (CSR) involve taking responsibility for the company&#x27;s impact on society and the environment. While CSR encompasses a broader range of social, environmental, and economic considerations, CSR specifically focuses on environmental sustainability. By incorporating CSR and CSR practices, companies can enhance their reputation, attract and retain customers, and create long-term value for all stakeholders.<br></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.footer')
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=648d0891096d52bfd9f271dc" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
</body>
</html>