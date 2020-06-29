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

<div class="row">
  <div class="leftcolumn">
    <div class="card">
    <?php if(have_posts()):?>
        <?php while(have_posts()):?>
        <?php the_post();?>
        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
        <strong>Writen by:</strong><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> </strong>
        Date: <?php the_date();?>
        <?php $caters = get_the_category();
            $output = "";
                if($caters){
                    foreach($caters as $cater){
                        $output ='<a href="'.get_category_link($cater->term_id).'">'.$cater->cat_name.'</a>';
                    }
                }
                echo $output;
        ?>
        <?php the_tags();?>
        <?php if(has_post_thumbnail()):?>
        <?php the_post_thumbnail();?>
        <?php endif;?>  
        <?php the_excerpt();?>
            <p><?php the_content();?></p>
            <a href="<?php the_permalink();?>" >Read More</a>
            <br>
        <?php endwhile;?>
        <?php else:?>
        <?php echo "the post no found";
            endif;
        ?>
    </div>
    <div class="card">
      <h2>THAT IS EXAMPLE</h2>
      <h5>Title description, June 7, 2020</h5>
      <div class="fakeimg" style="height:400px;">
      <img src="https://speckyboy.com/wp-content/uploads/2019/03/restaurant-food-drink-website-inspiration-web-design-ui-04.jpg" style="height:320px; width:800px;"></div>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRwvdAIHwn2AFyoY4HSfzXLEzxsqhuu0d_HEsemshDguFDjdlK_&usqp=CAU">
      </div><br>
      <p>Network food have the delivery 24 province</p>
    </div>
  </div>
</div>
<div class="footer">
  <?php get_footer()?>
</div>
</body>

</html>