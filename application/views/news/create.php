<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<hr>
<div class="container mx-auto">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <label for="title"><b>Title</b></label><br>
        <input type="text" name="title" class="form-control"><br><br>
    </div>
    <div class="col-md-8">
        <label for="text" ><b>Text</b></label><br>
        <textarea name="text" class="form-control"></textarea><br><br>
    </div>


<div class="text-center col-md-8"> <button type="submit" name="submit" class="btn btn-primary form-control"><i class="fa fa-newspaper-o" aria-hidden="true"></i> &nbsp;&nbsp;Create News Item</button></div>
</form>
</div>
        <div class="row pt-3">  
            <a href="<?php echo base_url(); ?>"><button class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Home</button></a>
        </div>
</div>