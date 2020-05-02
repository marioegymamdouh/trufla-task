<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CSS Zen Garden: The Beauty of CSS Design</title>

	<link rel="stylesheet" media="screen" href="style.css?v=8may2013">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dave Shea">
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design.">
	<meta name="robots" content="all">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="CSS Zen Garden: The Beauty of CSS Design">
    <meta property="og:description" content="A demonstration of what can be accomplished visually through CSS-based design.">
    <meta property="og:url" content="https://mydomain.trufla">
    <meta property="og:site_name" content="CSS Zen Garden: The Beauty of CSS Design">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="A demonstration of what can be accomplished visually through CSS-based design.">
    <meta name="twitter:title" content="CSS Zen Garden: The Beauty of CSS Design">
    <meta name="twitter:image" content="https://mydomain.trufla">

    <!--[if lt IE 9]>
	<script src="script/html5shiv.js"></script>
	<![endif]-->

    <?= wp_head() ?>
</head>

<!--



	View source is a feature, not a bug. Thanks for your curiosity and
	interest in participating!

	Here are the submission guidelines for the new and improved csszengarden.com:

	- CSS3? Of course! Prefix for ALL browsers where necessary.
	- go responsive; test your layout at multiple screen sizes.
	- your browser testing baseline: IE9+, recent Chrome/Firefox/Safari, and iOS/Android
	- Graceful degradation is acceptable, and in fact highly encouraged.
	- use classes for styling. Don't use ids.
	- web fonts are cool, just make sure you have a license to share the files. Hosted 
	  services that are applied via the CSS file (ie. Google Fonts) will work fine, but
	  most that require custom HTML won't. TypeKit is supported, see the readme on this
	  page for usage instructions: https://github.com/mezzoblue/csszengarden.com/

	And a few tips on building your CSS file:

	- use :first-child, :last-child and :nth-child to get at non-classed elements
	- use ::before and ::after to create pseudo-elements for extra styling
	- use multiple background images to apply as many as you need to any element
	- use the Kellum Method for image replacement, if still needed. http://goo.gl/GXxdI
	- don't rely on the extra divs at the bottom. Use ::before and ::after instead.

		
-->

<body id="css-zen-garden">
<div class="page-wrapper">

    <?php
    while ( have_posts() ) : the_post();

        the_content();

    endwhile; // End of the loop.
    ?>


	<aside class="sidebar" role="complementary">
		<div class="wrapper">

			<div class="design-selection" id="design-selection">
				<h3 class="select">Select a Design:</h3>
				<nav role="navigation">

                    <?=
                        $PrimaryMenu = wp_nav_menu(
                            array (
                                'theme_location'  => 'primary-menu',
                                'depth'           => 2,
                                'container'       => false,
                                'walker'          => new custom_description_link_trufla
                            )
                        );
                    ?>

				</nav>
			</div>

			<div class="design-archives" id="design-archives">
				<h3 class="archives">Archives:</h3>
				<nav role="navigation">

                    <?=
                        $SecondaryMenu = wp_nav_menu(
                            array (
                                'theme_location'  => 'secondary-menu',
                                'depth'           => 1,
                                'container'       => false,
                            )
                        );
                    ?>

				</nav>
			</div>

			<div class="zen-resources" id="zen-resources">
				<h3 class="resources">Resources:</h3>

                <?=
                    $ResourcesMenu = wp_nav_menu(
                        array (
                            'theme_location'  => 'resources-menu',
                            'depth'           => 1,
                            'container'       => false,
                        )
                    );
                ?>

			</div>
		</div>
	</aside>


</div>

<!--

	These superfluous divs/spans were originally provided as catch-alls to add extra imagery.
	These days we have full ::before and ::after support, favour using those instead.
	These only remain for historical design compatibility. They might go away one day.
		
-->
<div class="extra1" role="presentation"></div><div class="extra2" role="presentation"></div><div class="extra3" role="presentation"></div>
<div class="extra4" role="presentation"></div><div class="extra5" role="presentation"></div><div class="extra6" role="presentation"></div>

</body>
</html>