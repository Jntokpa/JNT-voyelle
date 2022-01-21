<?php include_once "controller.php"; ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>JNT Page</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form method="post" action="">
      <h1 class="h3 mb-3 fw-normal">Jnt work</h1>

      <div class="form-floating">
        <input type="text" class="form-control" name="prenom" id="prenom" value="<?php if ($prenom) {
                                                                                    echo $prenom;
                                                                                  } ?>">
        <label for="prenom">Votre prenom</label>
      </div>

      <div class="mb-3 mt-3">
        <label class="text-danger"> <?php echo $error; ?> </label>
        <label> <?php echo $message; ?> </label>
      </div>
      <button class="w-100 btn btn-lg btn-danger" type="submit" name="valider">Valider</button>
    </form>
  </main>



</body>

</html>