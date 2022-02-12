<?php
    require_once('views/Partials/header.php');
?>
<?php
require_once('models/Category.php');
?>
<?php
    // echo "<pre>";
    //     print_r($categories);
    // echo "</pre>";
    // die();
?>
<div class="table-responsive">
<form action="index.php?mod=post&act=updatePost" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="hidden" name = "id" value = "<?= $post['id'] ?>"class="form-control">
                <input type="text" class="form-control" id="" placeholder="" name="title" value=" <?= $post['title'] ?> ">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $post['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?= $post['content'] ?>">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                    <?php 
                        foreach($categories as $category) {?>
                            <option value="<?= $category['id'] ?>"><?= $category['name'] ?> </option>

                       <?php }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">Select files to add</label>
                <input type="file" name="thumbnail" class="form-">
            </div>
            <div class="form-group">
                <label for="appt">Time Update</label>
                <input type="datetime-local" id="birthdaytime" name="created_at">     
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
</div>
<?php
    require_once('views/Partials/footer.php');
?>