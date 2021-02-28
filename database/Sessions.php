

<?php

class Sessions{
         


    public function EndSession(){
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
        header('Location:index.php');
    }

}