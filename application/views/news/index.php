<h2 class="text-center pb-3">News Archive</h2>
<div class="scroll-container pt-1 pb-1">
	<div class="scroll-text1">
		<?php echo "This is the news as brought to you by ODJ Tech... To create your own news, scroll to the bottom and click on Create News"; ?>
	</div>
</div>

<div class="container pt-4">
	<div class="col-md-12">
			<?php
				foreach ($news as $news_item) {?>
				<div class="row text-justify py-2">
					<?php
						$news=$news_item['text']; 
						$cutOffLength=900;
						$charAtPosition = "";
						$newsLength = strlen($news);

						do {
							$cutOffLength++;
							$charAtPosition = substr($news, $cutOffLength, 1);
						} while ($cutOffLength < $newsLength && $charAtPosition != " ");

						$news_excerpt= substr($news, 0, $cutOffLength) . '...';
							
					?>
						<h4 class="col-md-12 text-center" style="color:red;"><?php echo $news_item['title'] ?></h4>
						<main>
							<div>
								<?php echo $news_excerpt ?>
							</div>
						</main>
						<p class=" col-md-12 text-center pt-1"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
				</div>
			<?php } ?>
		
		<div class="row pt-2">
				<p class="text-center col-md-6"><a href="<?php echo site_url('news/create');?>"><button class="btn btn-info">Create News</button></a></p>
				<p class="text-center col-md-6"><a href="<?php echo site_url('auth/logout');?>"><button class="btn btn-primary">Log out</button></a></p>
		</div>
	</div>
</div>	