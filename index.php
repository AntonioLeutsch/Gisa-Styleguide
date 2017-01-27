<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>GISA Styleguide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <!-- <link rel="stylesheet" href="css/gisa-style.css"> -->
  <!--[if lt IE 9]><link rel="stylesheet" href="css/gisa-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>
  <a href="#main" class="gisa-visually-hidden gisa-visually-hidden-focusable">Zum Content</a>

  <div id="top" class="gisa-header" role="banner">
    <div class="gisa-container">
      <h1 class="gisa-logo">
        <span class="gisa-logo-initials">GISA</span>
        <span class="gisa-logo-full">GISA</span> <em>Styleguide</em>
      </h1>
      <button type="button" class="gisa-nav-toggle">MENÜ</button>
    </div>
  </div><!--/.gisa-header-->

  <div class="gisa-wrapper gisa-clearfix">
    <div id="nav" class="gisa-sidebar" role="navigation">
      <h2 class="gisa-h2 gisa-subnav-title">Über</h2>
      <ul class="gisa-nav-group">
        <li>
          <a href="#gisa-about">Start</a>
        </li>
        <li>
          <a href="#gisa-colors">Farben</a>
        </li>
        <li>
          <a href="#gisa-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.gisa-sidebar-->

    <div id="main" class="gisa-main" role="main">
      <div class="gisa-container">
        <div class="gisa-info">
          <div class="gisa-about gisa-section">
            <h2 id="gisa-about" class="gisa-h2">Getting Started</h2>
            <p>Dieser Styleguide dient zur Veranschaulichung und zum besseren Verständnis der Visuellen Design Sprache, welche auf der GISA Webseite verwendet wird.</p>
            <p>Research, Entwicklung und Realisierung durch <a href="https://nvii-media.com/" class="nvii">./nvii<strong>media+</strong></a></p>
          </div><!--/.gisa-about-->

          <!-- Manually add your UI colors here. -->
          <div class="gisa-colors gisa-section">
            <h2 id="gisa-colors" class="gisa-h2">Farben</h2>
            <div class="gisa-color-grid">
              <div class="gisa-color">
                <div class="gisa-color-swatch" style="background-color: #003399;"></div>
                <div class="gisa-color-name">GISA Blau</div>
                <div class="gisa-color-value">#003399</div>
              </div>
              <div class="gisa-color">
                <div class="gisa-color-swatch" style="background-color: #2ecc71;"></div>
                <div class="gisa-color-name">Emerald</div>
                <div class="gisa-color-value">#2ecc71</div>
              </div>
              <div class="gisa-color">
                <div class="gisa-color-swatch" style="background-color: #3498db;"></div>
                <div class="gisa-color-name">Peter River</div>
                <div class="gisa-color-value">#3498db</div>
              </div>
              <div class="gisa-color">
                <div class="gisa-color-swatch" style="background-color: #9b59b6;"></div>
                <div class="gisa-color-name">Amethyst</div>
                <div class="gisa-color-value">#9b59b6</div>
              </div>
            </div><!--/.gisa-color-grid-->
            <div class="gisa-color-grid">
              <div class="gisa-color">
                <div class="gisa-color-swatch" style="background-color: #ecf0f1;"></div>
                <div class="gisa-color-name">Clouds</div>
                <div class="gisa-color-value">#ecf0f1</div>
              </div>
              <div class="gisa-color">
                <div class="gisa-color-swatch" style="background-color: #95a5a6;"></div>
                <div class="gisa-color-name">Silver</div>
                <div class="gisa-color-value">#95a5a6</div>
              </div>
              <div class="gisa-color">
                <div class="gisa-color-swatch" style="background-color: #697374;"></div>
                <div class="gisa-color-name">Concrete</div>
                <div class="gisa-color-value">#697374</div>
              </div>
              <div class="gisa-color">
                <div class="gisa-color-swatch" style="background-color: #111313;"></div>
                <div class="gisa-color-name">Obsidian</div>
                <div class="gisa-color-value">#111313</div>
              </div>
            </div><!--/.gisa-color-grid-->
          </div><!--/.gisa-colors-->

          <!-- Manually add your fonts here. -->
          <div class="gisa-font-stacks gisa-section">
            <h2 id="gisa-fontStacks" class="gisa-h2">Font</h2>
            <div class="rev-wrapper">
              <p class="left">Die Leichtigkeit und Vielfältigkeit der Schnitte machte die Font 'Roboto' für die Gisa prädestiniert.</p>
              <a class="gisa-btn right" href="https://fonts.google.com/specimen/Roboto" target="_blank">Roboto downloaden</a>
            </div>

            <dl class="gisa-font-list">
              <dt>Primary Font:</dt>
              <dd style='font-family: "Roboto", sans-serif; font-weight: 300;'>'Roboto', sans-serif;</dd>

              <dt>Primary Font Italic:</dt>
              <dd style='font-family: "Roboto", sans-serif; font-style: italic; font-weight: 300'>'Roboto', sans-serif;</dd>

              <dt>Primary Font Bold:</dt>
              <dd style='font-family: "Roboto", sans-serif; font-weight: 500;'>'Roboto', sans-serif;</dd>
            </dl>
            <div class="gisa-markup-controls"><a class="gisa-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.gisa-font-stacks-->
        </div><!--/.gisa-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.gisa-container-->
    </div><!--/.gisa-main-->
  </div><!--/.gisa-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/gisa-scripts.js"></script>
</body>
</html>
