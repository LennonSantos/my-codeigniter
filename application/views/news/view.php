<section>
	<h2>Artigo</h2>
	<article class="article">
		<h3><?php echo $news_item['title']; ?></h3>
		<div class="main">
			<?php echo $news_item['text']; ?>
		</div>
		<p><a href="<?php echo site_url('news#'.$news_item['slug']); ?>">Back</a></p>
	</article>
</section>