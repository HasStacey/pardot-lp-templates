<?php
	$hasSlateForm = true; // Toggles the background for the form
	$isLongForm = true; // Toggles long form layout

	// Full Width Layouts
	$isFullWidth = false; // Toggles fullwidth layout
		$hasWebinar = false; // Toggles the Webinar section
		$isThankYouPage = false; // Toggles thank you page layout

	// Development Stuff
	$inDevelopment = true; // Toggles dummy content and development styles
	$highlightPardotRegions = false; // Puts an outline around all elements with the pardot-region attr
?>


<!DOCTYPE html>
<html>
	<head>
		<base href="http://in.tune.com" >
		<meta charset="utf-8"/>
		<title>%%title%%</title>
		<meta name="description" content="%%description%%"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--  Favicon -->
		<link rel="shortcut icon" href="http://www.tune.com/favicon.ico?v=2" />

		<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6536912/638684/css/fonts.css" />
		<!-- <link href="http://localhost/css/2016-pardot-lp-templates-framework.css" rel="stylesheet" type="text/css"> -->

		<style type="text/css">
			<?php include('css/2016-pardot-lp-templates-framework.css'); ?>
		</style>
		
		<script src="/js/vendor/modernizr-2.6.2.min.js"></script>

		<?php if($inDevelopment && $highlightPardotRegions) {
			ob_start();
			?>
				<style>
					[pardot-region] {
						outline: 1px solid lime;
					}
				</style>
			<?php
			ob_end_flush();
		}
		?>

	</head>

	<body>

		<!-- SITE BRANDING // -->
		<header class="banded banded--nowhitespace site-branding">
			<div class="row">
				<div class="col-100 text-centered">
					<a name="TUNE">Tune</a>
				</div>
			</div>
		</header>
		<!-- // SITE BRANDING -->

		<!-- HERO IMAGE // -->
		<section class="hero">
			<img src="https://placeholdit.imgix.net/~text?txtsize=60&txt=Any+image+exactly+1200px+wide+x+200px+tall&w=1200&h=200&txttrack=0&bg=3d5265&txtclr=ffffff" pardot-region="region__hero-image--1200x200">
		</section>    
		<!-- // HERO IMAGE -->

		<!-- CONTENT // -->
		<section>
			<div class="banded row">
				<div class="
					<?php
						if($isFullWidth){
							echo 'col-80';
						} else {
							echo 'col-66';
						}
					?>
				">

					<div class="hgroup">
						<h2 pardot-region="region__subheading">White Paper: App Store Optimization</h2>
						<h1 pardot-region="region__heading">The Ultimate Guide to Keyword Research</h1>
					</div>

					<div class="content" pardot-region="region__content">
						<?php
							if($isFullWidth) {
								echo '<img src="https://placeholdit.imgix.net/~text?txtsize=60&txt=Any+image+up+to+888px+wide+by+any+height&w=888&h=300&txttrack=0&bg=007aff&txtclr=ffffff">';
							} else {
								echo '<img src="https://placeholdit.imgix.net/~text?txtsize=60&txt=Any+image+up+to+733px+wide+by+any+height&w=733&h=300&txttrack=0&bg=007aff&txtclr=ffffff">';
							}
						?>
					    
					    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac suscipit odio, ut sollicitudin lorem. Phasellus auctor hendrerit nisi, ac ullamcorper mauris efficitur at. Etiam eu libero tortor. Curabitur et mattis neque. Vivamus ut ipsum cursus, facilisis velit eget, sagittis nunc. Curabitur nibh ipsum, efficitur vitae sagittis molestie, iaculis vel risus. In auctor laoreet tellus, at finibus dui feugiat vel. Proin eros lorem, eleifend id erat sed, aliquam hendrerit orci. Quisque iaculis massa vel arcu euismod fringilla.</p>

					    <?php
					    	if($isLongForm) {
					    		echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac suscipit odio, ut sollicitudin lorem. Phasellus auctor hendrerit nisi, ac ullamcorper mauris efficitur at. Etiam eu libero tortor. Curabitur et mattis neque. Vivamus ut ipsum cursus, facilisis velit eget, sagittis nunc. Curabitur nibh ipsum, efficitur vitae sagittis molestie, iaculis vel risus. In auctor laoreet tellus, at finibus dui feugiat vel. Proin eros lorem, eleifend id erat sed, aliquam hendrerit orci. Quisque iaculis massa vel arcu euismod fringilla.</p>';
					    		echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac suscipit odio, ut sollicitudin lorem. Phasellus auctor hendrerit nisi, ac ullamcorper mauris efficitur at. Etiam eu libero tortor. Curabitur et mattis neque. Vivamus ut ipsum cursus, facilisis velit eget, sagittis nunc. Curabitur nibh ipsum, efficitur vitae sagittis molestie, iaculis vel risus. In auctor laoreet tellus, at finibus dui feugiat vel. Proin eros lorem, eleifend id erat sed, aliquam hendrerit orci. Quisque iaculis massa vel arcu euismod fringilla.</p>';
					    		echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac suscipit odio, ut sollicitudin lorem. Phasellus auctor hendrerit nisi, ac ullamcorper mauris efficitur at. Etiam eu libero tortor. Curabitur et mattis neque. Vivamus ut ipsum cursus, facilisis velit eget, sagittis nunc. Curabitur nibh ipsum, efficitur vitae sagittis molestie, iaculis vel risus. In auctor laoreet tellus, at finibus dui feugiat vel. Proin eros lorem, eleifend id erat sed, aliquam hendrerit orci. Quisque iaculis massa vel arcu euismod fringilla.</p>';
					    		echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac suscipit odio, ut sollicitudin lorem. Phasellus auctor hendrerit nisi, ac ullamcorper mauris efficitur at. Etiam eu libero tortor. Curabitur et mattis neque. Vivamus ut ipsum cursus, facilisis velit eget, sagittis nunc. Curabitur nibh ipsum, efficitur vitae sagittis molestie, iaculis vel risus. In auctor laoreet tellus, at finibus dui feugiat vel. Proin eros lorem, eleifend id erat sed, aliquam hendrerit orci. Quisque iaculis massa vel arcu euismod fringilla.</p>';
					    	}
					    ?>
					</div>
				</div>

				<?php
					if($isFullWidth && $isThankYouPage) {
						ob_start();
						?>
							<div class="col-80 text-centered">
								<a href="#" class="button" pardot-region="region__download-button" style="margin-bottom: 20px;">Download Now!</a>
							</div>
						<?php
						ob_end_flush();
					}
				?>

				<?php
					if(!$isFullWidth) {
						ob_start();
						?>
							<div class="col-33">

								<?php
								// FORMS!!
								if($hasSlateForm) {
									echo '<div class="banded banded--slate" style="margin: 0; width: 100%; padding: 20px;">';
								}

								if(!$inDevelopment) {
							    	echo '%%content%%';
								} else {
									include('typical-form-elements.php');	
								}
							    
							    echo '<p class="form__footnote required"><span class="is-required">*</span> indicates required field</p>';

								if($hasSlateForm) {
									echo '</div>';
								}

								// LONG FORM EXTRA CONTENT
								if(!$isFullWidth && $isLongForm) {
									ob_start();
									?>
										<h5 pardot-region="region__more-content-header" class="text-centered" style="margin-top: 40px;">Want more? Check these out!</h5>
										<div class="extra-content extra-content--longform">
											<img src="https://placeholdit.imgix.net/~text?txtsize=18&txt=129x100&w=129&h=100&bg=007aff&txtclr=ffffff" pardot-region="region__more-content-1-image">
											<h6 pardot-region="region__more-content-1-context">New On Our Blog:</h6>
											<p pardot-region="region__more-content-1-title">Top 25 Advertising Partners - Fall Edition</p>
											<a href="#" pardot-region="region__more-content-1-link">Visit our blog</a>
										</div>

										<div class="extra-content extra-content--longform">
											<img src="https://placeholdit.imgix.net/~text?txtsize=18&txt=77x100&w=77&h=100&bg=007aff&txtclr=ffffff" pardot-region="region__more-content-2-image">
											<h6 pardot-region="region__more-content-2-context">White Paper:</h6>
											<p pardot-region="region__more-content-2-title">App Store Optimization</p>
											<a href="#" pardot-region="region__more-content-2-link">View Our Resources</a>
										</div>
									<?php
									ob_end_flush();
								}
								?>
							</div>
						<?php
						ob_end_flush();
					}
					if(!$isFullWidth && $isLongForm) {
						ob_start();
						?>
							<div class="col-33">
							</div>

						<?php
						ob_end_flush();
					}
				?>

			</div><!-- // ROW -->
		</section>

		<?php 

			if($isFullWidth && $isThankYouPage) {
				ob_start();
				?>
				<!-- WEBINAR SECTION // -->
				<section>
					<div class="row banded banded--ltgrey-half">
						<div class="col-80 text-centered" style="margin-bottom: 0;">
							<h3 pardot-region="region__more-content-header">Want more? Check these out!</h3>
						</div>
						<div class="col-80" style="margin-top: 0;">

							<div class="col-33 extra-content">
								<img src="https://placeholdit.imgix.net/~text?txtsize=18&txt=129x100&w=129&h=100&bg=007aff&txtclr=ffffff" pardot-region="region__more-content-1-image">
								<h6 pardot-region="region__more-content-1-context">New On Our Blog:</h6>
								<p pardot-region="region__more-content-1-title">Top 25 Advertising Partners - Fall Edition</p>
								<a href="#" pardot-region="region__more-content-1-link">Visit our blog</a>
							</div>

							<div class="col-33 extra-content">
								<img src="https://placeholdit.imgix.net/~text?txtsize=18&txt=77x100&w=77&h=100&bg=007aff&txtclr=ffffff" pardot-region="region__more-content-2-image">
								<h6 pardot-region="region__more-content-2-context">White Paper:</h6>
								<p pardot-region="region__more-content-2-title">App Store Optimization</p>
								<a href="#" pardot-region="region__more-content-2-link">View Our Resources</a>
							</div>

							<div class="col-33 extra-content">
								<img src="https://placeholdit.imgix.net/~text?txtsize=18&txt=129x100&w=129&h=100&bg=007aff&txtclr=ffffff" pardot-region="region__more-content-3-image">
								<h6 pardot-region="region__more-content-3-context">Webinar:</h6>
								<p pardot-region="region__more-content-3-title">TUNE &amp; URX: Deeplinking</p>
								<a href="#" pardot-region="region__more-content-3-link">View our resources</a>
							</div>

						</div>
					</div>
				</section>
				<!-- // WEBINAR SECTION -->
				<?php
				ob_end_flush();
			}

			if($isFullWidth && $hasWebinar && !$isThankYouPage) {
				ob_start();
				?>
				<!-- WEBINAR SECTION // -->
				<section>
					<div class="row banded banded--ltgrey">
						<div class="col-80" pardot-region="region__wistia-video">
							<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="//fast.wistia.net/embed/iframe/t9rg3vtyc1?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe></div></div>
							<script src="//fast.wistia.net/assets/external/E-v1.js" async></script>
						</div>
					</div>
				</section>
				<!-- // WEBINAR SECTION -->
				<?php
				ob_end_flush();
			}

			if($isFullWidth && !$isThankYouPage) {
				ob_start();
				?>
				<!-- FULL WIDTH FORM // -->
				<section>
					<div class="row banded banded--slate">
						<div class="col-80 fullwidth">

							<?php 
								if(!$inDevelopment) {
							    	echo '%%content%%';
								} else {
									include('typical-form-elements.php');	
								}
							?>

						    <p class="form__footnote required"><span class="is-required">*</span> indicates required field</p>
						</div>
					</div>
				</section>
				<!-- // FULL WIDTH FORM -->
				<?php
				ob_end_flush();
			}
		?>
		<!-- // CONTENT -->

		<footer>

			<section class="banded banded--nowhitespace row">

				<div class="col-25">
					<img src="http://www.tune.com/img/common/brand/tune-logo.svg" alt="TUNE" width="90">
				</div>

				<div class="col-75">
					<p>2015 TUNE, Inc.</p>
				</div>
			</section>

		</footer>
	</body>
</html>