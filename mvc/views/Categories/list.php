<?php
    require_once('views/Partials/header.php');
?>
<style>
    td {
        text-align: center;
    }
</style>
<div class="table-responsive">
            <a href="index.php?mod=category&act=create" class="btn btn-primary" style="margin-bottom:30px" >Add New Category</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Thumbnail</th>
                        <th>Description</th>
                        <th>Parent</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </thead>
                    <?php
                        foreach ($categories as $category) {?>
                            <tr>
                                <td><?= $category['id'] ?></td>
                                <td><?= $category['name'] ?></td>
                                <td>
                                    <img src="./images/<?= $category['thumbnail'] ?>" width="100px" height="100px">
                                </td>
                                <td><?= $category['description'] ?></td>
                                <td><?= $category['parent_id'] ?></td>
                                <td><?= $category['created_at'] ?></td>
                                <td>
                                <form action="index.php?mod=category&act=edit"  style="display:  inline-block" method="POST" role="form" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $category['id'] ?> ">
                                    <button type="submit" class="btn btn-success" > Edit </button>
                                </form>
                                    <a href="index.php?mod=category&act=delete&id=<?= $category['id'] ?>" class="btn btn-danger" style="margin-top:10px" >Delete</a>
                                </td>
                            </tr>
                        <?php }
                    ?>                     
            </table>
        </div>
       
<?php
    require_once('views/Partials/footer.php');
?>
 <script type="text/javascript" >
            <?php 
            if ($check) {?>
                toastr.success('success')
                unset($check)
            <?php }
            
            ?>
               
        </script>