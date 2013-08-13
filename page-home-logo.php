<?php
/**
 * Template Name: Home Hero Template with 3 widget areas and masthead logo
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
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="span3">
				<?php
				// Retrieve the custom field(s) for this post
				$custom_fields = get_post_custom();
				$logo_url = $custom_fields['home-masthead-logo-url'];
				foreach ( $logo_url as $key => $value )
					echo '<img alt="logo" src="' . $value . '">';
				?>
			</div> <!--span3-->
			<div class="span9">
				<h1><?php the_title();?></h1>
				<?php
				$tagline = $custom_fields['home-masthead-subhead'];
				foreach ( $tagline as $key => $value )
					 echo "<p>" . $value . "</p>";
				?>
			</div> <!--span9-->
		</div> <!--row-->
	</div> <!--container-->
</div> <!--jumbotron masthead-->

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
