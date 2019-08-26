<?php include './include/inner_header.php' ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');">
   <div class="overlay"></div>
   <div class="container">
      <div class="inner_header">
         <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-6 ftco-animate  breadcurmb_sec">
               <h1 class="mb-0 bread">Book Interest</h1>
            </div>
            <div class="col-md-6 ftco-animate text-right breadcurmb_sec">
               <p class="breadcrumbs"><a href="index.php">Home<span class="mx-2"> <i class="ion-ios-arrow-forward"></i></span></a> <span class="mr-2"><a href="bookinterest.php">Book Interest</a></p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-counter img ftco-section">
   <div class="container">
      <div class=" px-4">
         <div class="row  align-items-center">

            <div class="col-md-6">

               <img src="images/bookintrest.jpg" alt="img" class="img-fluid" />
            </div>
            <div class="col-md-6">
               <form action="interest.php" method="post" class="text-left bookintress">

                  <div class="form-group">
                     <input type="text" name="name" class="form-control" id="inputName" placeholder="Full Name" required="required">
                     <input type="hidden" name="type" value="interst" />
                  </div>
                  <div class="form-group my-2">
                     <input type="text" name="company_name" class="form-control" id="inputCompany" placeholder="Company name " required="required">
                  </div>
                  <div class="form-group">
                     <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required="required">
                  </div>
                  <div class="form-group my-2">
                     <input type="text" maxlength="10" pattern="\d*" title="Please enter valid mobile number" minlength="10" class="form-control" id="inputPhoneNumber" name="mobile_no" placeholder="Phone Number" required="required">
                  </div>
                  <div class="form-group row">
                              <div class="col-sm-7">
                              <select name="space_name" id="interested_in" class="form-control option" required="required">
                                  <option selected value="">Interest In</option>
                                  <option value="Shared Workplaces">Shared Workplaces</option> 

                                 <!--  <option value="Shared workplaces">Shared workplaces</option> -->

                                   <!--  <optgroup label="Shared workplaces">
                                       <option value="Hot Seat">Hot Seat</option>
                                       <option value="Fix Seat">Fix Seat</option>
                                    </optgroup> -->


                                 
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
                 

                  <div class="form-group text-center my-2">
                     <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include './include/footer.php' ?>