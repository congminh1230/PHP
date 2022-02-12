<?php
    require_once('views/Partials/header.php');
?>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="index.php?mod=post&act=create" class="btn btn-primary" style="margin-bottom:30px" >Add New Post</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>password</th>
                    </thead>
                    <?php
                        foreach ($users as $user) {?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['password'] ?></td>
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