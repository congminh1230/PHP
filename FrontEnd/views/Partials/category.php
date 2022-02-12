<?php
    //  session_start();
     if(!isset($_SESSION['counter']))  $_SESSION['counter'] = 0 ;
     else $_SESSION['counter'] += 1;
?>
<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <article class="content-item">
                <?php
                    foreach ($categories as $category) {?>
                        <div class="entry-media">
                            <div class="post-title"><h2><a href="index.php?mod=post&act=getData&id=<?= $category['id'] ?>"> <?= $category['name'] ?></a></h2>
                                <div class="entry-date">
                                    <ul>
                                        <li><?= $category['created_at'] ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bubble-line"></div>
                            <div class="post-content">
                                <a href="index.php?mod=post&act=getData&id=<?= $category['id'] ?>">
                                    <img src="/mvc/images/<?= $category['thumbnail'] ?>" alt=" image">
                                </a>
                               <p>
                                    <?= $category['description'] ?>
                               </p>
                            </div>
                            <div class="bubble-line"></div>
                            <div class="post-footer">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <a href="javascript:;" class="button">Continue reading</a>
                                    </div>
                                    <div class="col-sm-7 text-right">
                                        <div class="content-social">
                                            <a href="javascript:;"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                            <a href="javascript:;"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                            <a href="javascript:;"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                               
                        
                                                <?php }
                                            ?>  
                        
                    <!-- <div class="entry-media">
                        <div class="post-ribbon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34 50" enable-background="new 0 0 34 50" xml:space="preserve">
                                <g>
                                    <polygon fill-rule="evenodd" clip-rule="evenodd" points="17,40.7 0.5,49.2 0.5,0.5 33.5,0.5 33.5,49.2"/>
                                    <path d="M33,1v47.4l-15.5-8L17,40.2l-0.5,0.2L1,48.4V1H33 M34,0H0v50l17-8.7L34,50V0L34,0z"/>
                                </g>
                            </svg>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="post-title">
                            <h2><a href="#">Weekly photoshoots</a></h2>
                            <div class="entry-date">
                                <ul>
                                    <li><a href="#">food recipe</a></li>
                                    <li>may 15,2001</li>
                                    <li>23 comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bubble-line"></div>
                        <div class="post-content">
                            <div class="container gallery">
                                <div class="row">
                                    <div class="col-xs-6 photos ">
                                        <a href="javascript:;"><img src="images/photos1.jpg" alt="not image"></a>
                                    </div>
                                    <div class="col-xs-6 photos">
                                        <a href="javascript:;"><img src="images/photos2.jpg" alt="image"></a>
                                    </div>
                                    <div class="col-xs-3 photos">
                                        <a href="javascript:;"> <img src="images/photos3.jpg" alt="image"></a>
                                    </div>
                                    <div class="col-xs-3 photos">
                                        <a href="javascript:;"><img src="images/photos4.jpg" alt="image"></a>
                                    </div>
                                    <div class="col-xs-3 photos">
                                        <a href="javascript:;"><img src="images/photos5.jpg" alt="image"></a>
                                    </div>
                                    <div class="col-xs-3 photos">
                                        <a href="javascript:;"><img src="images/about.jpg" alt="image"></a>
                                    </div>
                                </div>
                            </div>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a
                                page
                                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                normal
                                distribution of letters, as opposed to using 'Content here, content here', making it look
                                like
                                readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
                                as their default model text, and a search for [...]
                            </p>
                        </div>
                        <div class="bubble-line"></div>
                        <div class="post-footer">
                            <div class="row">
                                <div class="col-sm-5">
                                    <a href="javascript:;" class="button">Continue reading</a>
                                </div>
                                <div class="col-sm-7 text-right">
                                    <div class="content-social">
                                        <a href="javascript:;"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                        <a href="javascript:;"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                        <a href="javascript:;"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </article>
            </div>
            <div class="col-sm-4 sidebar">
            <div class="widget">
		<h3 class="widget-title">Story about me</h3>
		<div class="bubble-line"></div>

		<div class="widget-content">
			<img src="project/images/about.jpg" alt="not image">
			<p>Hello I’m Jenny Kurto author of Letter town blog. This is my personal space which is like to share
				others. And i’m living New York city working and blogging.</p>
			<div class="widget-more">
				<a href="javascript:;" class="button">More story</a>
			</div>
		</div>
	</div>
	<div class="widget">
		<h3 class="widget-title">Category</h3>
		<div class="bubble-line"></div>
		<div class="widget-content">
			<ul>
				<li>
					<a href="javascript:;">Video & music</a>
				</li>
				<li>
					<a href="javascript:;">Fashion</a>
				</li>
				<li>
					<a href="javascript:;">Travel & hiking</a>
				</li>
				<li>
					<a href="javascript:;">Photography</a>
				</li>
				<li>
					<a href="javascript:;">food recipe</a>
				</li>
				<li>
					<a href="javascript:;">do it yourself</a>
				</li>
			</ul>
		</div>
	</div>
    <div class="widget">
        <h3 style="font-size:20px ; padding: 0 30px;" >View <span>  <?php echo $_SESSION['counter']?> </span>  </h3>
    </div>
	<div class="widget">
		<h3 class="widget-title">Recent posts</h3>
		<div class="bubble-line"></div>
		<div class="widget-content">

            <?php
                foreach ($posts as $post) {?> 
                    <div class="widget-recent">
                        <a href="index.php?mod=post&act=getPost&id=<?= $post['id'] ?>" >
                            <img src="/mvc/images/<?= $post['thumbnail'] ?>" alt="not image">
                        </a>
                        <h4><a href="index.php?mod=post&act=getPost&id=<?= $post['id'] ?>"><?= $post['title'] ?></a> </h4>
                        <p>
                                <?= $post['description'] ?>
                        </p>
			        </div>
                <?php }
                ?>
			
		</div>
	</div>
	<div class="widget widget-sub">
		<h5> Subscribe</h5>
		<p>Sign up to receive updates and latest new things from us everyday. And i will not spam promise. :)</p>
		<div class="widget-sub-s">
			<form class="sign_up_form">
				<input type="text" name="2" placeholder="Enter your email">
				<a href="javascript:;" class="button color-y">sign up</a>
			</form>
		</div>


	</div>
	<div class="widget">
		<h3 class="widget-title">Cloudy tags</h3>
		<div class="bubble-line"></div>
		<div class="widget-content">
			<div class="widget-tags">
				<a href="javascript:;">clean</a>
				<a href="javascript:;">minimal</a>
				<a href="javascript:;">cloudy</a>
				<a href="javascript:;">video</a>
				<a href="javascript:;">template</a>
				<a href="javascript:;">fashion</a>
				<a href="javascript:;">bloggers</a>
				<a href="javascript:;">carefully</a>
				<a href="javascript:;">handcrafted</a>
				<a href="javascript:;">print</a>
				<a href="javascript:;">psd</a>
				<a href="javascript:;">music</a>
				<a href="javascript:;">food recipe</a>

			</div>
		</div>
	</div>
	<div class="widget-sub social">
		<ul>
			<li>
				<a class="social-widget" href="javascript:;"> <i class="fa fa-facebook"> </i><span> share</span></a>
				<div> 211</div>

			</li>
			<li>
				<a class="social-widget" href="javascript:;"> <i class="fa fa-twitter"></i> <span>follow</span></a>
				<div> 121</div>
			</li>
			<li>
				<a class="social-widget" href="javascript:;"> <i class="fa fa-google-plus"></i> <span> share </span></a>
				<div> 11</div>
			</li>
			<li>
				<a class="social-widget" href="javascript:;"> <i class="fa fa-instagram"></i> <span> follow  </span></a>
				<div>65</div>
			</li>

		</ul>

	</div>
            </div>
        </div>
    </div>
</div>