<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Théau & Fils : Contact</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-210283645-1">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-210283645-1');
  </script>
    </head>
    <body id="page-top">
      <header class="masthead-vt">
          <div class="container">
            <div class="masthead-subheading">Nous Contactez !</div>
              <div class="masthead-heading text-uppercase">Vert Toucan</div>
          </div>
      </header>
      <section class="page-section">
        <div class="container">
          <form id="contactForm" class="pad-for" method="post">
            <div class="row align-items-stretch mb-5">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- Name input-->
                  <label>Nom</label>
                  <input class="form-control" id="name" type="text" placeholder="Nom *" name="name" required/>
                </div>
                <div class="form-group">
                  <!-- Email address input-->
                  <label>E-mail</label>
                  <input class="form-control" id="email" type="email" placeholder="E-mail *" name="email" required />
                </div>
                <div class="form-group">
                  <!-- sujet address input-->
                  <label>Sujet</label>
                  <input class="form-control" id="sujet" type="text" placeholder="Sujet *" name="sujet" required />
                </div>
                <div class="form-group mb-md-0">
                  <!-- Phone number input-->
                  <label>Numéro</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Téléphone *" name="tel" required/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group form-group-textarea mb-md-0">
                  <!-- Message input-->
                  <label>Descriptif de votre projet</label>
                  <textarea class="form-control" id="message" placeholder="Descriptif *" name="mes" required></textarea>
                </div>
              </div>
            </div>
            <!-- Submit Button-->
            <div class="text-center">
              <button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Envoyer Message</button>
            </div>
          </form>
          <?php
          if (isset($_POST["mes"])) {
            $message = "Ce message vous à été envoyé via la page contact de votre site
            Nom : " . $_POST["name"] . "
            E-mail : " . $_POST["email"] . "
            Téléphone : " . $_POST["tel"] . "
            Message : " . $_POST["mes"];

            $retour = mail("TCI.Agence@gmail.com",$_POST["sujet"],$message,"From:contact@cabinet-theau-et-fils.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
            if($retour){
              echo "<div class='container'><div class='text-center'><p>Le mail à bien été envoyer.</p></div></div>";
            }
          }
          ?>
        </div>
      </section>
    </body>
