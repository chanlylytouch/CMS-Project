
<!DOCTYPE html>
<html lang="en">
<head>
  <title class="text-center"><?php bloginfo('name') ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <br>
    <div class="container text-center">
       <h1> Welcome to Food Network!</h1>
      <p> We have a website dedicated to Asian Food Network, with top recipes and all you need to
        know about your favorite shows.
      </p>
      <button class="btn btn-danger">CONTINUE TO ASIANFOODNETWORK.COM</button>
    </div>
</header>
<br>
<nav class="navbar navbar-expand-sm bg-danger">
<?php wp_nav_menu() ?>
<form class="form-inline ml-5" action="<?php esc_url(home_url('/')); ?>" method="post">
    <input class="form-control mr-sm-2 ml-5" type="text" placeholder="Search" name="s">
    <button class="btn btn-success" type="submit">Search</button>
</form>
</nav>
</body>
</html>

