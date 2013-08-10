<?php
/**
 * Template Name: Home Hero Template with 3 widget areas
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
<div class="jumbotron masthead">
    <div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title();?></h1>
      <?php //the_content();
        // Retrieve the custom field(s) 'Tagline' and print those here instead
        // of the posts's content:
        $custom_fields = get_post_custom();
        $tagline = $custom_fields['Tagline'];
        foreach ( $tagline as $key => $value )
          echo "<p>" . $value . "</p>";
      ?>
    </div>
</div>

<?php endwhile; endif; ?>

<div class="bs-docs-social">
	<div class="container">
      <ul class="bs-docs-social-buttons">
         <li class="follow-btn">
            <a class="twitter-follow-button" href="http://twitter.com/acfhawaii">Follow @acfhawaii</a>
         </li>
         <li><a class="btn btn-success" href="/donate">Donate!</a></li>
      </ul>
   </div>
</div> <!-- bs-docs-social -->

<div class="container">
  <!--div class="marketing"-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content();?>
    <?php endwhile; endif; ?>
  <!--/div--><!-- /.marketing -->
</div>

<div class="container"> 
  <div class="row-fluid">
    <div class="span4">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-left" );
?>
    </div>
    <div class="span4">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-middle" );
?>
    </div>
    <div class="span4">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-right" );
?>
    </div>
  </div>
</div>
<?php get_footer();?>
