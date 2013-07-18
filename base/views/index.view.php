<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><? the_title() ?></h1>
	<h4><? the_date() ?></h4>
	<p><? the_content() ?></p>
<? endwhile; ?>
<? posts_nav_link() ?>
<? else: ?>
	<h1>No posts found<h1>
<? endif; ?>