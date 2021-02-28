<?php
include('header.php')
?>

<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if (isset($_POST['add'])){
      // call method addToCart
      $host = 'localhost';
      $user = 'root';
     $password = '';
     $database = "watchshopee";
     $image='./Assests./'.$_POST['img'];
    
    // Create connection
    $conn = new mysqli($host, $user, $password, $database);
    $sql = "INSERT INTO product (item_brand, item_name, item_price, item_image, Category)
VALUES ('".$_POST['brand']."', '".$_POST['name']."','".$_POST['price']."','".$image."','".$_POST['cate']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
}
}
?>



<section class="Form my-4 mx-5">
     <div class="container">
       <div class="row">
         <div class="col-lg-5 py-5">
         <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail" style="height: 350; width:350px;">
         </div>


         <div class="col-lg-7 px-5 pt-3 ">
          <h1>Watch Shop</h1>
          <form action="" method="POST">
            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="text" name="brand" class="form-control" placeholder="Brand Name" required minlength="3" maxlength="8">
              </div>
            </div>
            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="text" name="name" class="form-control" placeholder="Name of Product" required minlength="3" maxlength="8">
              </div>
            </div>
            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="text" name="price" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="price" required minlength="2" maxlength="8">
              </div>
            </div>
            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="text" name="cate" class="form-control" placeholder="Category i.e Mens, Womens, Digital" required minlength="3" maxlength="8">
              </div>
            </div>


            <div class="form-row ">
              <div class="col-lg-7 py-2">
              <input type="file" name="img" class="file" accept="image/*" required>
              
            </div>
            </div>


            <div class="form-row ">
              <div class="col-lg-7 py-2">
                <input type="submit" value="Add" name="add" class="form-control bg-info" >
              </div>
            </div>
          </form>

        

         </div>
       </div>

     </div>
   </section>




<script>
$(document).on("click", ".browse", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
  });
  $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);
  
    var reader = new FileReader();
    reader.onload = function(e) {
      // get loaded data and render thumbnail.
      document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
  });

</script>

</body>
</html>
