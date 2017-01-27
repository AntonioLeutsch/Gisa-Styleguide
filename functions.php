<?php

  // Display title of each markup samples as a list item
  function listFilesInFolder($dir) {
    $files = preg_grep('/^([^.])/', scandir($dir));
    sort($files);

    echo '<ul class="gisa-nav-group">';
    foreach ($files as $file) {
      $path = $dir.'/'.$file;
      if (is_dir($path)) {
        echo '<li class="gisa-subnav-parent">';
        renderTitleFromPath($path, 'h2');
        listFilesInFolder($path);
        echo '</li>';
      } else {
        echo '<li>';
        renderTitleFromPath($path, '');
        echo '</li>';
      }
    }
    echo '</ul>';
  }

  // Scan specified directory recursively and render files
  function renderFilesInFolder($dir) {
    $files = preg_grep('/^([^.])/', scandir($dir));
    sort($files);

    echo '<div class="gisa-section-group">';
    foreach ($files as $file) {
      $path = $dir.'/'.$file;
      if (is_dir($path)) {
        renderTitleFromPath($path, 'h1');
        renderFilesInFolder($path);
      } else {
        renderFile($path);
      }
    }
    echo '</div>';
  }

  function renderTitleFromPath($path, $parent) {
    $unwantedChars = array("/", "-", "_", ".");
    $filename = pathinfo($path, PATHINFO_FILENAME); // filename without extension
    $filename = str_replace($unwantedChars, " ", $filename);
    $id = str_replace($unwantedChars, "-", $path);

    if ($parent) {
      echo '<'.$parent.' id="gisa-'.$id.'" class="gisa-'.$parent.' gisa-title">'.$filename.'</'.$parent.'>';
    } else {
      echo '<a href="#gisa-'.$id.'">'.$filename.'</a>';
    }
  }

  function renderFile($path) {
    $content = file_get_contents($path);
    echo '<div class="gisa-section">';
    renderTitleFromPath($path, 'h2');
    renderFileDoc($path);
    renderFileExample($content);
    renderFileSource($content);
    echo '</div>';
  }

  function renderFileDoc($path) {
    $doc = 'doc'.strstr($path, "/");
    $doc = str_replace(".html",".md",$doc);

    require_once 'Parsedown.php';
    $Parsedown = new Parsedown();


    // Check if markdown doc exists
    if (is_readable($doc)) {
      echo '<div class="gisa-sub-section gisa-doc">';
      echo '<div class="markdown-body">';
      echo $Parsedown->text(file_get_contents($doc));
      echo '</div>';
      echo '</div>';
    } else {
      $doc = 'doc'.strstr($path, "/");

      // Check if html doc exists
      if (file_exists($doc)) {
        echo '<div class="gisa-sub-section gisa-doc">';
        include($doc);
        echo '</div>';
      }
    }
  }

  function renderFileExample($content) {
    if ($content != '') {
      echo '<div class="gisa-sub-section gisa-example">';
      echo '<h3 class="gisa-h3 gisa-title">Example</h3>';
      echo $content;
      echo '</div>';
    }
  }

  function renderFileSource($content) {
    if ($content != '') {
      echo '<div class="gisa-sub-section">';
      echo '<div class="gisa-markup-controls">';
      echo '<button type="button" class="gisa-btn gisa-btn--source">View Source</button>';
      echo '<a class="gisa-btn--top" href="#top">Back to Top</a>';
      echo '</div>';
      echo '<div class="gisa-source">';
      echo '<button type="button" class="gisa-btn gisa-btn--select">Copy Source</button>';
      echo '<pre class="line-numbers"><code class="language-markup">';
      echo htmlspecialchars($content);
      echo '</code></pre>';
      echo '</div>';
      echo '</div>';
    }
  }
?>
