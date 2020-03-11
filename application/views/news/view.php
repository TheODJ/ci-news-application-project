<div class="px-4">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center" style="color:red">
                <?php
                echo '<h2>'.$news_item['title'].'</h2>';
                ?>
            </div>
            <hr>
            <div class="col-md-12 text-justify">
                <?php
                echo $news_item['text'];
                ?>
            </div>
        <div class="row pt-3">
            <a href="<?php echo base_url(); ?>"><button class="btn btn-info"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Home</button></a>
        </div>
    </div>
</div>