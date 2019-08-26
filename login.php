<?php include './include/inner_header.php' ?>


<style>

div#login-box {
    box-shadow: 0px 1px 14px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    padding: 20px 35px;
}

.login-box{    
    background: url(./images/info.jpg);
    background-size: 50%;
    background-position: bottom;
    background-repeat: no-repeat;
    min-height: 90vh;
    margin-bottom: 5em;
   
}

nav#ftco-navbar {
    display: none;
}

form#login-form .form-control {
    border: 0;
    border-bottom: 1px solid #aaa;
    border-radius: inherit;
}
div#login-box {
    box-shadow: 0px 1px 14px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    padding: 30px 50px;
    background: #fff;
}

div#login-box .login-btn {
    padding: 0.4em 3em;
}


div#register-link {
    font-size: 12px;
}
</style>

<section  class="ftco-counter img ftco-section login-box">
   <div class="container">
    

               <div id="login">
       <div class="text-center">

      <a href="index.php" ><img src="images/logo.png" style="width:150px;" class="mb-4" ></a>

       </div>
        <div class="container">
       
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-4 col-sm-12">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center">Login</h3>
                            <div class="form-group">
                               
                                <input type="text" name="username" id="username" placeholder="username" class="form-control">
                            </div>
                            <div class="form-group mb-4">
                             
                                <input type="password" name="password" id="password" placeholder="password" class="form-control">
                            </div>

                            <div class="form-group text-center">
                              
                                <input type="submit" name="submit" class="btn btn-primary login-btn mt-2" value="LOGIN">
                            </div>
                           
                            <div id="register-link" class="text-center">
                               <p>Don’t have account ? <a href="#" class="text-warning">Register Here</a></p>
                            </div>
                        </form>

                        <p class="text-center"><a href="index.php" title="home page" >Home</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

             
              
   </div>
</section>



<?php include './include/footer.php' ?>