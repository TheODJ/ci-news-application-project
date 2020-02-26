<h2 class="text-center">News Archive</h2>
<div class="scroll-container">
	<div class="scroll-text1">
		<?php echo "This is the news as brought to you by ODJ Tech... To create your own news, scroll to the bottom and click on Create News"; ?>
	</div>
</div>

<div class="col-md-12">
	<?php
		foreach ($news as $news_item) {?>
			<h4 class="text-center"><?php echo $news_item['title'] ?></h4>
			<main>
				<div style="">
					<?php echo $news_item['text'] ?>
				</div>
			</main>
			<p class="text-center"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
			<div class="row">
				<p class="text-center col-md-6"><a href="<?php echo site_url('news/create');?>"><button class="btn btn-danger" >Create News</button></a></p>
				<p class="text-center col-md-6"><a href="<?php echo site_url('auth/logout');?>"><button class="btn btn-primary" >Log out</button></a></p>
			</div>
		<?php } ?>
</div>