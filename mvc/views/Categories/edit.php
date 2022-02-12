<?php
    require_once('views/Partials/header.php');
?>
<?php
require_once('models/Category.php');
?>
<?php


?>
<div class="table-responsive">
<form action="index.php?mod=category&act=updateCategory" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" name = "id" value = "<?= $category['id'] ?>"class="form-control">
                <input type="text" class="form-control" id="" placeholder="" name="name" value=" <?= $category['name'] ?> ">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $category['description'] ?>">
            </div>
            <div class="form-group">
                <label class="control-label">Select files to add</label>
                <input type="file" name="thumbnail" class="form-" >
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