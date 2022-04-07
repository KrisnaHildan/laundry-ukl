<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Lontdryy</title>
</head>
<body class="bg-light">
<nav class="shadow navbar navbar-expand navbar-light bg-white fixed-top">
  <a class="navbar-brand text-primary ml-4 h1" href="index.php"><b>Lontdryy</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mb-2">
      <li class="nav-item">
          <a class="nav-link" href="list-member.php">Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list-transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list-paket.php">Paket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list-user.php">User</a>
        </li>
      </li>
    </ul>
    <b><h4><?=($_SESSION["user"]["nama_user"])?></h4></b>

    <a class="nav-link h6 text-danger text-right" href="login.php">Logout</a>
  </div>
</nav> <hr>
</body>
</html>