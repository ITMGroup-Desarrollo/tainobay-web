<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-thecoffeefactorymenu.php");

?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>
  <?php include("include/head.php"); ?>
</head>

<body class="shock-body">
  <?php include("include/gtm-body.php"); ?>
  <?php include("include/header.php"); ?>

  <!-- Main -->
  <main id="main" class="shock-main">

    <!-- Title -->
    <section class="shock-section has-holder pt-5 pb-2">
      <!-- <div class="container max-w-75">
        
        <div class="basic-intro text-center">
          <h1 class="title black">
            <span class="text-1 text-style-3"><?php echo TITULOS_MENU[0]; ?> </span>
            <span class="text-2 text-style-4 text-italic"><?php echo TITULOS_MENU[1]; ?> <mark class="animated-underline accent">
                <?php echo TITULOS_MENU[2]; ?></mark></span>
          </h1>
        </div>
        <hr class="gray-25">
      </div> -->
    </section>

    <!-- Menu -->
    <section class="shock-section pb-5">
      <div class="container max-w-85">

        <!-- Image -->
        <div class="stretched-section wrapper-canva text-center">
          <!-- <iframe src="/assets/pdf/TainoBay_Coffee_Menu.pdf" width="100%" height="850px"></iframe> -->
          <!-- <object data="https://drive.google.com/file/d/1ZKgZhUuBr_-nLnbpExhQmqKCx_1QqxT2/preview" width="100%" height="650px"> <embed src="https://drive.google.com/file/d/1ZKgZhUuBr_-nLnbpExhQmqKCx_1QqxT2/preview" width="600px" height="500px" />
            <p>This browser does not support PDFs. Please download the PDF to view it: <a href="https://drive.google.com/file/d/1ZKgZhUuBr_-nLnbpExhQmqKCx_1QqxT2/preview">View the PDF</a>.</p> </embed>
          </object> -->
          <img src="/assets/images/thecoffeefactorymenu/TainoBay_Coffee.png" class="mobile-w-100" alt="Menu Coffee Factory">
          <!-- <canvas id="the-canvas" class="mobile-w-100"></canvas> -->
        </div>
      </div>
    </section>
  </main>

  <script src="//mozilla.github.io/pdf.js/build/pdf.mjs" type="module"></script>

  <script type="module">
    // If absolute URL from the remote server is provided, configure the CORS
    // header on that server.
    var url = '/assets/pdf/TainoBay_Coffee_Menu.pdf';

    // Loaded via <script> tag, create shortcut to access PDF.js exports.
    var {
      pdfjsLib
    } = globalThis;

    // The workerSrc property shall be specified.
    pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.mjs';

    // Asynchronous download of PDF
    var loadingTask = pdfjsLib.getDocument(url);
    loadingTask.promise.then(function(pdf) {
      console.log('PDF loaded');

      // Fetch the first page
      var pageNumber = 1;
      pdf.getPage(pageNumber).then(function(page) {
        console.log('Page loaded');

        var scale = 1.5;
        var viewport = page.getViewport({
          scale: scale
        });

        // Prepare canvas using PDF page dimensions
        var canvas = document.getElementById('the-canvas');
        var context = canvas.getContext('2d');
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        // Render PDF page into canvas context
        var renderContext = {
          canvasContext: context,
          viewport: viewport
        };
        var renderTask = page.render(renderContext);
        renderTask.promise.then(function() {
          console.log('Page rendered');
        });
      });
    }, function(reason) {
      // PDF loading error
      console.error(reason);
    });
  </script>

  <?php include("include/widget.php"); ?>
  <?php include("include/footer.php"); ?>
  <?php include("include/js.php"); ?>

</body>

</html>