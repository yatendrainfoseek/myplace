<?php include './include/inner_header.php' ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/project-4.jpg');  background-position: center 40%;">
   <div class="overlay"></div>
   <div class="container">
      <div class="inner_header">
         <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-6 ftco-animate  breadcurmb_sec">
               <h1 class="mb-0 bread">Contact Us</h1>
            </div>
            <div class="col-md-6 ftco-animate text-right breadcurmb_sec">
               <p class="breadcrumbs"><a href="index.php">Home </a> <span class="mr-2"> <i class="ion-ios-arrow-forward"></i></span> <span class="mr-2"> <a href="contactus.php">Contact Us</a></p>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="ftco-section">
   <div class="container-fluid">
      <div class="row justify-content-center mb-5 pb-3">
         <div class="col-md-7 heading-section text-center ftco-animate">
            <!--  <span class="subheading">Contact</span> -->
           <!--  <h2 class="mb-3">Enquiry Form</h2> -->
            <p class="h5 text-dark">Have a question on availability or membership?</p>
         </div>
      </div>

      <div class="row no-gutters block-9 contact_us_sec align-items-center">
         
      <div class="col-lg-6">
        <!--  <img src="images/bg_1.jpg" class="img-fluid px-4" alt="myplace" /> -->


       <!--  <iframe src="https://wego.here.com/directions/mix//My-Place-Coworking,-5-Jolping-Road,-226001-Lucknow:e-eyJuYW1lIjoiTXkgUGxhY2UgQ293b3JraW5nIiwiYWRkcmVzcyI6IjUgSm9scGluZyBSb2FkLCBMdWNrbm93LCBVdHRhciBQcmFkZXNoIiwibGF0aXR1ZGUiOjI2Ljg1MzMxLCJsb25naXR1ZGUiOjgwLjk1NTgzLCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjIwNjAyNTM4MjQyNzU3MDl9?map=26.85331,80.95583,15,normal&fb_locale=en_GB" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe> -->

        

<div class="map_are">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d748.3090222311919!2d80.95525263170295!3d26.85338242616417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9eef64ffe7fbed21!2sMy+Place+Coworking!5e0!3m2!1sen!2sin!4v1563602994563!5m2!1sen!2sin" width="100%"  height="550" frameborder="1" style="border:1px solid #ced4da;" allowfullscreen></iframe>
</div>

      </div>
      
      <div class="col-lg-4 offset-md-1">
            <form action="interest.php" method="post" class="">
             
                  <div class="form-group">
                     <input type="text" class="form-control" name="name" placeholder="Your Name" required="required">
                  </div>
                   <div class="form-group">
                     <input type="hidden" name="type" value="contact_us" />
                     </div>
                   <div class="form-group">
                     <input type="text" class="form-control" name="email" placeholder="Your Email" required="required">
                     </div>
                   <div class="form-group">
                     <input type="text" class="form-control" name="company_name" placeholder="Company Name" required="required">
                  </div>
             
             
                  <div class="form-group">
                     <input type="text" class="form-control" name="mobile_no" placeholder="Phone Number" required="required">
                  </div>
                 
              

               <div class="form-group row">
                              <div class="col-sm-7">
                              <select name="space_name" id="interested_in" class="form-control option" required="required">
                                  <option selected value="">Interest In</option>
                                  <option value="Shared Workplaces">Shared Workplaces</option> 

                                 <!--  <option value="Shared workplaces">Shared workplaces</option> -->

                                    <!-- <optgroup label="Shared workplaces">
                                       <option value="Hot Seat">Hot Seat</option>
                                       <option value="Fix Seat">Fix Seat</option>
                                    </optgroup>
 -->

                                 
                                  <option value="Time Share">Time Share</option>
                                  <option value="Presentation Arena">Presentation Arena</option>
                                  <option value="Private Office">Private Office</option>
                                  <option value="Office Suite">Office Suite</option>
                                  <option value="Conference Rooms">Conference Room</option>
                              </select>
                              </div>
                              <div class="col-sm-5">
                                 <select  id="duration" class="form-control option" name="duration" required="required">

                                 </select>
                              </div>
                           </div>





               <div class="form-group">
                  <textarea name="remark" id="" cols="30" rows="7" class="form-control" placeholder="Remarks" ></textarea>
               </div>
               <div class="form-group text-center">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
               </div>
            </form>
         </div>
         <div class="col-lg-1"></div>
      </div>
   </div>

</section>



<section class="ftco-section contact-section ftco-no-pb " id="contact-section">
   <div class="container">
      <div class="row d-flex contact-info mb-5">
         <div class="col-md-6 col-lg-4 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
               <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-map-marker"></span>
               </div>
               <h3 class="mb-4">Address</h3>
               <p> My Place 5, Jopling Road,<br> Lucknow – 226001</p>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
               <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-phone2"></span>
               </div>
               <h3 class="mb-4">Contact Number</h3>
               <p><a href="tel://18001027575">1800 102 2000</a></p>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
               <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-paper-plane"></span>
               </div>
               <h3 class="mb-4">Email Address</h3>
               <p><a href="mailto:hello@myplacecoworking.com">hello@myplacecoworking.com</a></p>
            </div>
         </div>
        
      </div>

   </div>
</section>


<?php include './include/footer.php' ?>