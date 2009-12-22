<?php
/**
 * @package WordPress
 * @subpackage html5wp
 */

get_header();
?>
<header>
<h1><a href="http://iwaim.beering.be/blog/"><?php bloginfo('name');?></a></h1>
</header>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<header>
<h2><?php the_title(); ?></h2>
<ul>
<li><?php the_time(__('F jS, Y', 'html5wp')) ?> <!-- by <?php the_author() ?> --></li>
<li><?php printf(__('Categories: %s.', 'html5wp'), get_the_category_list(', ')); ?></li>
<li><?php printf(__('Tags: ', 'html5wp'));?><?php if(have_posts()):while(have_posts()):the_post(); ?><?php the_tags('',', ',''); ?><?php endwhile;endif; ?></li>
</ul>
</header>
<?php the_content(__('Read the rest of this entry &raquo;', 'html5wp')); ?>

<footer>
<ul class="bookmarks"><!-- based http://www.sky-s.net/sky-blog/archives/2009/11/12-115903.php -->
<li><!-- delicious--><a href="http://delicious.com/save" onclick="window.open('http://delicious.com/save?v=5&amp;noui&amp;jump=close&amp;url='+encodeURIComponent('<?php the_permalink() ?>')+'&amp;title='+encodeURIComponent('<?php the_title() ?>'),'delicious', 'toolbar=no,width=550,height=550'); return false;"><img src="http://static.delicious.com/img/delicious.small.gif" height="10" width="10" alt="Deliciousにブックマーク" style="border: none;" /></a> <a href="http://delicious.com/url?url=<?php echo get_permalink(); ?>" target="_blank"><img src="http://labs.creazy.net/sbm/delicious/textimg/<?php the_permalink() ?>" style="border: none;" /></a></li>
<li><!-- hatena bookmark --><a href="http://b.hatena.ne.jp/append?<?php the_permalink() ?>" target="_blank"><img src="http://d.hatena.ne.jp/images/b_entry.gif" alt="このエントリをはてなブックマークに登録" width="16" height="12" /></a> <a href="http://b.hatena.ne.jp/entry/<?php echo get_permalink(); ?>" target="_blank"><img src="http://b.hatena.ne.jp/entry/image/<?php the_permalink() ?>" style="border: none;" /></a></li>
<li><!-- Livedoor Clip --><a href="http://clip.livedoor.com/clip/add?link=<?php the_permalink() ?>&amp;title=<?php the_title(); ?>&amp;jump=ref" target="_blank"><img src="http://parts.blog.livedoor.jp/img/cmn/clip_16_16_w.gif" alt="このエントリをlivedoorクリップに登録" width="16" height="16"  style="border: none;" /></a> <a href="http://clip.livedoor.com/page/<?php echo get_permalink(); ?>" target="_blank"><img src="http://image.clip.livedoor.com/counter/small/<?php the_permalink() ?>" style="border: none;" /></a></li>
<li><!-- yahoo --><?php echo '<a href="http://bookmarks.yahoo.co.jp/action/bookmark?t='.urlencode(the_title('','',false)).'&amp;u='.urlencode(get_permalink()).'" target="_blank"><img src="http://i.yimg.jp/images/sicons/ybm16.gif" width="16" height="16" alt="Yahoo!ブックマークに登録" style="border:none;"></a>';?> <a href="http://bookmarks.yahoo.co.jp/url?url=<?php the_permalink();?>" target="_blank"><img src="http://num.bookmarks.yahoo.co.jp/image/small/<?php the_permalink();?>" style="border: none;" /></a></li>
<li><!-- twitter topsy --><?php echo topsy_retweet_small() ?></li>
</ul>
</footer>

</article>
<?php
get_footer();
?>
