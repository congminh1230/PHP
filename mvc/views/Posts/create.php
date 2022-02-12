<?php
    require_once('views/Partials/header.php');
?>
<form action="index.php?mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" >
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" >
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" >
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
            <button type="submit" class="btn btn-primary">Submit</button>
</form>  
<?php
    require_once('views/Partials/footer.php');
?>