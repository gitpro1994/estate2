<?php
if (isset($_SESSION) AND !empty($_SESSION)) 
{          
    unlink($_SESSION['id']);     
    unlink($_SESSION['set_lang']);			  
    unlink($_SESSION['name']);     
    unlink($_SESSION['surname']);     
    unlink($_SESSION['status']);   		
    unlink($_SESSION['kadi']);     
    unlink($_SESSION['mail']);		  
    unlink($_SESSION['logged_in']);   
    session_destroy();
    header("Location:home");
}
?>