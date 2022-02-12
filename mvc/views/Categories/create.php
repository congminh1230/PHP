<?php
    require_once('views/Partials/header.php');
?>
<form action="index.php?mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" >
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" >
            </div>
            <div class="form-group">
                <label class="control-label">Chọn file cần add</label>
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