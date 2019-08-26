<?php include 'curl.php' ?>
<?php $data = post_details($_GET['post_id']);
$post = $data["post"];
$categories = $data["categories"];
$latests = $data["latest"];

?>
<?php include './include/inner_header.php' ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="inner_header">
                <div class="row no-gutters slider-text align-items-end">
                    <div class="col-md-6 ftco-animate  breadcurmb_sec">
                        <h1 class="mb-0 bread">Post Details</h1>
                    </div>
                    <div class="col-md-6 ftco-animate text-right breadcurmb_sec">
                        <p class="breadcrumbs"><a href="index.php">Home<span class="mx-2"> <i
                                            class="ion-ios-arrow-forward"></i></span></a> <span class="mr-2"><a
                                        href="#">Post Details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="ftco-section" id="blog-section">
    <div class="container">
        <!--    <div class="row justify-content-center mb-5 pb-5">
             <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Blog</span>
               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
             </div>
           </div> -->
        <div class="inner-col">
            <div class="row">
                <div class="col-lg-8 border-right px-4">


                    <h2 class="mb-3"><?php echo $post["blog_title"]; ?></h2>
                    <p>
                        <img src="http://backoffice.myplacecoworking.com/storage/app/public/<?php echo $post["featured_image"] ?>"
                             alt="" class="img-fluid">
                    </p>
                    <p><?php echo $post["discription"]; ?></p>

                    <div class="row">
            <div class="col-md-12">

                <ul class="ftco-footer-social list-unstyled">
                <li class="ftco-animate"><a href="https://www.facebook.com/myplacecowork/" target="_blank"><span
                                    class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="https://twitter.com/myplacecowork"  target="_blank"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.instagram.com/myplacecowork/"  target="_blank"><span class="icon-instagram"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCEQu7ogztVzLfkXrdssAtxw/"  target="_blank">  <span class="icon ion-logo-youtube"></span></a></li>

                    <li class="ftco-animate"><a href="https://www.linkedin.com/company/myplacecowork/"  target="_blank">   <span class="icon ion-logo-linkedin"></span></a></li>
                </ul>

            </div>
        </div>


                    <div class="pt-5 mt-5">
                        <h3 class="mb-5"><?php echo count($post["comments"]) ?> Comment(s)</h3>
                        <ul class="comment-list">
                            <?php foreach ($post["comments"] as $comment){?>
                            <li class="comment">

                                <div class="comment-body">
                                    <h3><?php echo $comment["name"];?></h3>
                                    <div class="meta"><?php echo date("F d, Y , h:i a",strtotime($comment["created_at"]));?></div>
                                    <p><?php echo $comment["comment"];?></p>

                                </div>
                            </li>
                            <?php }?>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5 ftco-animate">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="http://backoffice.myplacecoworking.com/api/post_comment" class="p-5 bg-light" method="post">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                    <input type="hidden" name="blog_id" value="<?php echo $_GET["post_id"];?>">
                                    <input type="hidden" name="redirect_url" value="https://myplacecoworking.com/single-blog.php?post_id=<?php echo $_GET["post_id"];?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>


                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 sidebar ftco-animate">
                  
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Categories</h3>
                        <ul class="categories">
                            <?php foreach ($categories as $category) { ?>
                                <li><a href="blog.php?category_id=<?php echo $category['id']; ?>"><?php echo $category["category_name"]?> <span>(<?php echo count($category["blogs"])?>)</span></a></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Recent Blog</h3>
                        <?php foreach($latests as $latest){?>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style='background-image: url("http://backoffice.myplacecoworking.com/storage/app/public/<?php echo $latest["featured_image"] ?>");'></a>
                                <div class="text">
                                    <h3 class="heading"><a href="single-blog.php?post_id=<?php echo $latest["id"]?>"><?php echo $latest["blog_title"];?></a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> <?php echo date("F d, Y",strtotime($latest["created_at"]))?></a></div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> <?php echo count($latest["comments"]);?></a></div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


<?php include './include/footer.php' ?>