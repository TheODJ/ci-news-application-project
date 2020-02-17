<h2><?php # echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<hr>
<div class="col-md-6">
    <label for="title"><b>Title</b></label><br>
    <input type="text" name="title" class="form-control"><br><br>
</div>
<div class="col-md-6">
    <label for="text" ><b>Text</b></label><br>
    <textarea name="text" class="form-control"></textarea><br><br>
</div>

<div class="text-center col-md-6"> <button type="submit" name="submit" class="btn btn-primary form-control">Create News Item</button></div>
<div class="text-center"><br>
</form>