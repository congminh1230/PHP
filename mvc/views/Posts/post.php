<?php
    require_once('views/Partials/header.php');
?>
<style>
    td {
        text-align: center;
    }
</style>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="index.php?mod=post&act=create" class="btn btn-primary" style="margin-bottom:30px" >Add New Post</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Category</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </thead>
                    <?php
                        foreach ($posts as $post) {?>
                            <tr>
                                <td><?= $post['id'] ?></td>
                                <td><?= $post['title'] ?>
                                    <a href="../FrontEnd/index.php?mod=post&act=getPost&id=<?= $post['id'] ?>"><br>FrontEnd</a>
                                    
                                </td>
                                <td><?= $post['description'] ?></td>
                                <td>
                                    <img src="./images/<?= $post['thumbnail'] ?>" width="100px" height="100px">
                                </td>
                                <td><?= $post['category_id'] ?></td>
                                <!-- <td></td> -->
                                <!-- <td><?= $post['content'] ?></td> -->
                                <td><?= $post['created_at']  ?></td>
                                <td>
                                    <form style="display:  inline-block" action="index.php?mod=post&act=edit" method="POST" role="form" enctype="multipart/form-data">
                                        <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $post['id'] ?> ">
                                        <button type="submit" class="btn btn-success" > Edit </button>
                                    </form>
                                    <!-- <a href="index.php?mod=category&act=edit?id=<?= $post['id'] ?>" class="btn btn-success">Edit</a> -->
                                    <a href="index.php?mod=post&act=delete&id=<?= $post['id'] ?>" class="btn btn-danger" style="margin-top:10px" >Delete</a>
                                </td>
                            </tr>
                        <?php }
                    ?>                     
            </table>
        </div>
    </div>
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