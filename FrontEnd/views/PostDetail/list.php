<?php
    require_once('views/Partials/header.php');
?>
<section class="section-content">
    <div class="container">
        <div class="row ">
        <div class="col-md-1 full-width-content">
					<article class="content-item">
						<div class="entry-media">
							<div class="post-title">
								<h2><a href="javascript:;"><?= $posts['title'] ?></a></h2>
								<div class="entry-date">
									
										<li><?= $posts['created_at'] ?></li>
									</ul>    
								</div>
							</div>
							<div class="bubble-line"></div>
							<div class="post-content full-width">
								<img src="/mvc/images/<?= $posts['thumbnail'] ?>" alt="post image">
								<p>
                                <?= $posts['content'] ?>
								</p>
							</div>
							<div class="bubble-line"></div>
							<div class="post-footer">
								<div class="row">
									<div class="col-sm-6 text-right">
										<div class="content-social">
											<a href="javascript:;"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
											<a href="javascript:;"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
											<a href="javascript:;"><i class="fa fa-pinterest"></i> <span>Pinterest</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
        </div>
    </div>
</section>
<?php
    require_once('views/Partials/footer.php');
?>