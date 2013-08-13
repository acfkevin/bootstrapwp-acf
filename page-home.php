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
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<h1><?php the_title();?></h1>
		<?php
		// Retrieve the custom field(s) for this post
		$custom_fields = get_post_custom();
		$tagline = $custom_fields['home-masthead-subhead'];
		foreach ( $tagline as $key => $value )
			 echo "<p>" . $value . "</p>";
		?>
		<?php
		//<form onsubmit="window.open( 'http://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true;" target="vr_optin_popup" action="http://oi.vresp.com?fid=288f854b0a" method="post">
			//<input type="text" width="55" title="Subscribe to ACF's newsletter for updates" name="email_address" placeholder="Your email address"></br>
			//<button class="btn btn-small btn-info">Update me by email</button>
		//</form>
		?>
	</div> <!--container-->
</div> <!--jumbotron masthead-->

<?php endwhile; endif; ?>

<div class="bs-docs-social">
	<div class="container">
		<ul class="bs-docs-social-buttons">
			<li class="follow-btn">
				<a class="twitter-follow-button" href="http://twitter.com/acfhawaii">Follow @acfhawaii</a>
			</li>
			<li class="follow-btn">
				<a class="facebook-follow-button" href="http://facebook.com/theacfhawaii">Visit us on Facebook</a>
			</li>
			<!--li>
				<form class="form-inline" onsubmit="window.open( 'http://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true;" target="vr_optin_popup" action="http://oi.vresp.com?fid=288f854b0a" method="post">
					<div class="input-append">
						<input type="text" width="55" title="Subscribe to ACF's newsletter for updates" name="email_address" placeholder="Your email address">
						<button class="btn">Update me by email</button>
					</div>
				</form>
			<li-->
			<li><a class="btn btn-success" href="/donate">Donate!</a></li>
		</ul>
	</div> <!--container-->
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
