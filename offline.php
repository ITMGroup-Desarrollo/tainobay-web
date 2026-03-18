<?php
include_once("include/config.php");

?>
<!DOCTYPE html>
<html lang="<?= $idioma ?>">

<head>
  <?php include("include/head.php"); ?>

  <style>
    .not-found-container {
      width: 100%;
      height: 100dvh;
      display: grid;
      grid-template-columns: 1fr;
      place-content: center;
    }

    .img-404 {
      width: 55%;
    }

    .img-cat {
      width: 35%;
      bottom: 0px;
    }

    .number-404 {
      font-size: 5rem;
      font-weight: 800;
      font-family: var(--secondary-font);
      line-height: 1.2;
    }

    /* sm */
    @media (min-width: 640px) {}

    /* md 768px  */
    @media (min-width: 768px) {
      .not-found-container {
        grid-template-columns: repeat(2, 1fr);
      }

      .img-404 {
        width: 65%;
        object-fit: contain;
      }

      .img-cat {
        width: 30%;
        bottom: 0px;
      }

      .number-404 {
        font-size: 6.2rem;
        font-weight: 800;
        font-family: var(--secondary-font);
        line-height: 1.2;
      }
    }
  </style>
</head>

<body class="shock-body">
  <!-- Main -->
  <main id="main" class="shock-main">
    <section class="shock-section pt-2 pb-4 not-found-container">
      <div class="text-center d-flex align-items-center justify-content-center flex-column py-3 px-4 p-md-5">
        <h1 class=" text-blue text-style-3"><span class="text-orange"><?= OFFLINE[0] ?> </span><br><?= OFFLINE[1] ?></h1>
        <p class="text-style-12 text-blue"><?= OFFLINE[2] ?></p>
        <a href="<?= $path; ?><?= $idioma; ?>/home" class="button-orange-solid text-uppercase my-2 my-md-4"><?= OFFLINE[3] ?></a>
      </div>
      <div class="text-center position-relative">
        <img class="img-404" src="assets/images/errors/lost-connection.png" alt="Imagen 404" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
        <img class="position-absolute end-0 img-cat" src="assets/images/errors/lost-connection-cat.png" alt="Imagen 404" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
      </div>
    </section>
  </main>

  <?php include("include/widget.php"); ?>
  <?php include("include/js.php"); ?>
</body>

</html>