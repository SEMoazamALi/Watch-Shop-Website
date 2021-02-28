<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if($_POST['Logout']){
            session_unset();
            session_destroy();
            header('Location:./index.php');
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
          <form action="" method="POSt">
            <div class="form-row ">
                <div class="col-lg-7 py-2">
                  <input type="input" name='FName' class="form-control" placeholder=  <?php echo $_SESSION['F_Name'] ?> >
                  
                </div>
                <div class="col-lg-7 py-2">
                    <input type="input" name="LName" class="form-control" placeholder=  <?php echo $_SESSION['L_Name'] ?>>
                    
                  </div>
              </div>

              <div class="form-row ">
                <div class="col-lg-7 py-2">
                <input type="email" name="email"  class="form-control" placeholder=<?php echo $_SESSION['Mobile'] ?>>
                </div>
              </div>

            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="email" name="email"  class="form-control" placeholder=<?php echo $_SESSION['Email'] ?>>
                
              </div>
            </div>
            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <textarea name='area'class="form-control" placeholder=<?php echo $_SESSION['Address'] ?> ></textarea>
              </div>
            </div>

            





            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="submit" name="Logout" value="Logout" class="form-control bg-info" >
              </div>
            </div>
          </form>

          

         </div>
       </div>

     </div>
   </section>
