<?php

        require_once 'db/conn.php';

        
        if (isset($_POST['submit'])){
            $id= $_POST['id'];
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $haddress = $_POST['haddress'];
            $contactinfo = $_POST['contactinfo'];
            $gender = $_POST['gender'];

            $results = $crud->editclient($id,$fname, $email, $haddress, $contactinfo, $gender);
            
            

            if($results){

                header("Location: viewrecords.php");
                
            }
        }

        else{

            
                //echo('error') ;
                include 'includes/errormessage.php';
        }

    
    
       
?>