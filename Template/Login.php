<?php 


if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['btn_submit'])){
        // call method addToCart
         $lg->getLogin($_POST['Username'], $_POST['Password']);
    
  }
}

?>



<section class="Form my-4 mx-5">
     <div class="container">
       <div class="row">
         <div class="col-lg-5">
           <img src="./Assests/images/Login.jpg" alt="image loding" class="img-fluid">
         </div>


         <div class="col-lg-7 px-5 pt-3 ">
          <h1>Watch Shop</h1>
          <form action="" method="POST">
            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="email" name="Username" class="form-control" placeholder="example@gmail.com">
              </div>
            </div>
            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="password" name="Password" class="form-control" placeholder="*******">
              </div>
            </div>

            

            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="submit" value="Login" name="btn_submit" class="form-control bg-info" >
              </div>
            </div>
          </form>

          <a href="#">forogot Password?</a>
          <p>Don't have an account <a href="./Register.php">Register Now</a>  </p>

         </div>
       </div>

     </div>
   </section>