<h3><?php echo "This is the news as brought to you by ODJ Tech..."; ?> </h3>

<?php
	foreach ($news as $news_item) {?>
		<h3><?php echo $news_item['title'] ?></h3>
		<main>
			<?php echo $news_item['text'] ?>
		</main>
		<p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
	<?php } ?>

