<?php
/**
 * @package WordPress
 * @subpackage html5wp
 */

get_header();
?>
<header>
<h1><?php bloginfo('name');?></h1>
</header>
<p><?php bloginfo('description');?></p>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<header>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'iwaimhtm5'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
<ul>
<li><?php the_time(__('F jS, Y', 'html5wp')) ?> <!-- by <?php the_author() ?> --></li>
<li><?php printf(__('Categories: %s.', 'html5wp'), get_the_category_list(', ')); ?></li>
<li><?php printf(__('Tags: ', 'html5wp'));?><?php the_tags('',', ',''); ?></li>
</ul>
</header>
<?php the_content(__('Read the rest of this entry &raquo;', 'html5wp')); ?>
</article>
<?php endwhile; ?>
<?php else : ?>
<h2><?php __('Not Found', 'html5wp'); ?></h2>
<p><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'html5wp'); ?></p>
<?php get_search_form(); ?>
<?php endif; ?>
<?php
get_footer();
?>
