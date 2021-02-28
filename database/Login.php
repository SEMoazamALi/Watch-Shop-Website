
<?php
session_start();
class Login{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getLogin($Username,$password){
 
        $result=mysqli_query($this->db->con,"select * from user");
            //echo $Username.'' .$password .'<br>';
      while($row=mysqli_fetch_array($result))
        {
        //  echo $row['Email'].' '.$row['Pass'].'<br/>';

         if($row['Email']==$Username  || $row['Pass']==$password ){
            
            echo "<div class='alert alert-success'>Record was found</div>";
            $_SESSION['ID']=$row['user_id'];
            $_SESSION['F_Name']=$row['first_name'];
            $_SESSION['L_Name']=$row['last_name'];
            $_SESSION['Mobile']=$row['Mobile'];
            $_SESSION['Email']=$row['Email'];
            $_SESSION['Address']=$row['adress'];
            header('Location:./index.php');
         }
         
      }
      echo "<div class='alert alert-danger'>Unable to find.</div>";
                
            
            }

        }
    
