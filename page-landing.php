<?php
/*
Template Name: Landing
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>  

<head profile="http://gmpg.org/xfn/11">  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<link rel="icon" href="<?php bloginfo('url');?>/favicon.ico" type="image/x-icon" />

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 

<link href='http://fonts.googleapis.com/css?family=Raleway:700,100,400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'> 

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css"/>

<meta property="og:title" content="<?php wp_title(); ?>"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php the_permalink(); ?>"/> 
<meta property="og:site_name" content="<?php wp_title(); ?>"/>
<meta property="fb:admins" content="595996194" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window,document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '727938030719382'); 
    fbq('track', 'PageView');
    fbq('track', 'ViewContent');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=727938030719382&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<?php wp_head(); ?>

</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>

<div id="header">

  <div id="logo">
    <img src="<?php bloginfo('template_url'); ?>/images/logo.png"/>
  </div>

  <div id="title">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <h1><?php bloginfo('name'); ?></h1>
    </a>
  </div>
<br clear="both"/>
  
</div>

	<?php while ( have_posts() ) : the_post(); ?>

			<h1 class="landing-title" align="center"><?php the_title();?></h1>

		<div id="content">
			<p><?php the_content();?></p>

      
        <?php comments_template( '/comments.php' ); ?>
        
		</div>

	<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>  