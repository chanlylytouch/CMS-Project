<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<?php wp_footer() ?>
<footer class="page-footer font-small danger pt-4">
<?php wp_nav_menu() ?>
          <div class="container-fluid text-center text-md-left">
            <div class="row">
              <div class="col-md-5 mt-md-0 mt-3">
                <h5 class="text-uppercase">Home Service</h5>
                   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRwvdAIHwn2AFyoY4HSfzXLEzxsqhuu0d_HEsemshDguFDjdlK_&usqp=CAU">            
                   
            </div>

              <hr class="clearfix w-100 d-md-none pb-3">
              <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase font-weight-bold">Our Partner</h5>
                Our partner has include many counries
                <br>
               <li >China</li> <br>
               <li>Vietnam</li> 

              </div>
              <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase font-weight-bold">Contac Us</h5>
                    More information please contact to:
                    <br>
                    Tel: 0987654321
                    <br>
                    Email: <a href="">foodnetwork@gmail.com</a>
                    <p>Location: Phnom Penh,51c,Tik Thla, Sen Sok1</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
          </div>
</footer>
</body>
</html>
