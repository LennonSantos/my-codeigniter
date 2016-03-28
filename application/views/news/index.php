<section>
	<h2><?php echo $title; ?></h2>

	<?php foreach ($news as $news_item): ?>
		<article class="article" id="<?php echo $news_item['slug']; ?>">
	        <h3><?php echo $news_item['title']; ?></h3>
	        <div class="main">
                <?php echo $news_item['text']; ?>
	        </div>
	        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
		</article>
	<?php endforeach; ?>
</section>