<?php include 'curl.php' ?>
<?php
if(isset($_GET['category_id'])){
    $data = category_posts($_GET['category_id']);
}else{
    $data = get_posts();
}
$posts = $data["blogs"];
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
                        <h1 class="mb-0 bread">Posts</h1>
                    </div>
                    <div class="col-md-6 ftco-animate text-right breadcurmb_sec">
                        <p class="breadcrumbs"><a href="index.php">Home<span class="mx-2"> <i
                                            class="ion-ios-arrow-forward"></i></span></a> <span class="mr-2"><a
                                        href="blog.php">Posts</a></p>
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
                    <div class="col-lg-8 border-right pl-4">
                        <div class="row d-flex">
                            <?php foreach ($posts as $post) {?>
                                <div class="col-lg-12 d-flex ftco-animate">
                                    <div class="blog-entry justify-content-end">
                                        <a href="single-blog.php?post_id=<?php echo $post['id']; ?>" class="block-20"
                                           style='background-image: url("http://backoffice.myplacecoworking.com/storage/app/public/<?php echo $post["featured_image"] ?>");'>
                                        </a>
                                        <div class="text mt-3 px-4 py-4 float-right d-block">
                                            <div class="d-flex align-items-center pt-2 mb-4 topp">
                                                <div class="one mr-2">
                                                    <span class="day"><?php echo date("d", strtotime($post["created_at"])) ?></span>
                                                </div>
                                                <div class="two">
                                                    <span class="yr"><?php echo date("Y", strtotime($post["created_at"])) ?></span>
                                                    <span class="mos"><?php echo date("F", strtotime($post["created_at"])) ?></span>
                                                </div>
                                            </div>
                                            <h3 class="heading"><a
                                                        href="single-blog.php?post_id=<?php echo $post['id']; ?>"><?php echo $post["blog_title"]; ?></a>
                                            </h3>
                                        <p><?php echo  substr( $post["discription"], 0, 200);
                                        
                                        ?></p> 
                                            <div class="d-flex align-items-center mt-4 meta">
                                                <p class="mb-0"><a
                                                            href="single-blog.php?post_id=<?php echo $post['id']; ?>"
                                                            class="btn btn-primary">Read More
                                                        <span class="ion-ios-arrow-round-forward"></span></a></p>
                                                <p class="ml-auto mb-0">
                                                    <a href="javascript:void(0)" class="mr-2">Admin</a>
                                                    <a href="javascript:void(0)" class="meta-chat"><span
                                                                class="icon-chat"></span>&nbsp;<?php echo count($post["comments"]); ?>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>








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