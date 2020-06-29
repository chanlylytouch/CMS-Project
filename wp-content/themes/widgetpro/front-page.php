<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title class="text-center"><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

<?php get_header();?>

<div class="jumbotron bg-light">
  <div class="container text-center">
    <h1>This is our Network Food</h1>      
    <p>It might look modern, but the Milo Kek Batik really is a recipe from Malaysia long ago.
     Inspired by the British biscuit cake, you use just four ingredients probably already in your kitchen
     to get a chewy condensed milk milo cake sandwiched with layers of classic Marie biscuits.</p>
  </div>
  <?php 
      if(is_active_sidebar('showcase')):
        dynamic_sidebar('showcase');
      endif;
  ?>
<br>
<div class="row">
  <div class="col-sm-4">
  <h5 class="text-uppercase font-weight-bold text-danger">Contac Us</h5>
      More information please contact to:
      <br>
      Tel: 0987654321
      <br>
      Email: <a href="">foodnetwork@gmail.com</a>
      <p>Location: Phnom Penh,51c,Tik Thla, Sen Sok1</p>
  <?php 
      if(is_active_sidebar('box1')):
        dynamic_sidebar('box1');
      endif;
  ?>
  </div>
  <div class="col-sm-4">
  <h5 class="text-uppercase font-weight-bold text-danger">Our Team</h5>
      
  <?php 
      if(is_active_sidebar('box2')):
        dynamic_sidebar('box2');
      endif;
  ?>
  </div>
  <div class="col-sm-4">
    <?php 
      if(is_active_sidebar('box3')):
        dynamic_sidebar('box3');
      endif;
    ?>
    </div>
</div>
</div>
<div class="footer">
  <?php get_footer()?>
</div>
</body>

</html>