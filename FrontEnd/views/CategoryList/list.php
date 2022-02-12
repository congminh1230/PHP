<?php
    require_once('views/Partials/header.php');
?>
<section class="section-content grid-layout">
    <div class="container">
        <div class="row">
            <?php
                foreach ($categories as $category) {?> 
                    <div class="col-sm-6">
                        <div class="grid-wrapper">
                            <div class="grid-content">
                                <article class="content-item">
                                    <div class="entry-media">
                                        <div class="post-title">
                                            <h2> <a href="index.php?mod=post&act=getData&id=<?= $category['id'] ?>"><?= $category['name'] ?></a> </h2>
                                            <div class="entry-date">
                                                <ul>
                                                    <li>
                                                        <a href="#"></a>
                                                    </li>
                                                    <li><?= $category['created_at'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bubble-line"></div>
                                        <div class="post-content">

                                            <img src="/mvc/images/<?= $category['thumbnail'] ?>" alt="not image">
                                            
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
    </div>
</section>
<?php
    require_once('views/Partials/footer.php');
?>