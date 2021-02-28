<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['sub'])){
        // call method addToCart

        $sql = "INSERT INTO user (first_name, last_name, Mobile, Email, Pass, adress)
        VALUES ('".$_POST['FName']."', '".$_POST['LName']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['password']."','".$_POST['area']."')";
        
        if ($db->con->query($sql) === TRUE) {
          echo "<div class='alert alert-danger'>Register Successfuly, Now Login to Enjoy Shopping</div>";
        } else {
          echo "Error: " . $sql . "<br>" . $db->con->error;
        }

      
    
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
                  <input type="input" name="FName" class="form-control" placeholder="First Name" required minlength="3" maxlength="8">
                  
                </div>
                <div class="col-lg-7 py-2">
                    <input type="input" name="LName" class="form-control" placeholder="Last Name" required minlength="3" maxlength="8">
                    
                  </div>
              </div>

              <div class="form-row ">
                <div class="col-lg-7 py-2">
                  <input type="input" name="mobile" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="03xxxxxxxxx" requiredminlength="10" maxlength="11">
                </div>
              </div>

            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required maxlength="25">
              </div>
            </div>
            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="password" name="password" class="form-control" placeholder="*******" required minlength="3" maxlength="8">
              </div>
            </div>

            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <textarea name='area'class="form-control" placeholder="Enter you Address" required minlength="7" maxlength="40 "></textarea>
              </div>
            </div>



            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="submit" name="sub" value="SignUp" class="form-control bg-info" >
              </div>
            </div>
          </form>

          

         </div>
       </div>

     </div>
   </section>
