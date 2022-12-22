<?php 
    
        $title = 'Success';
        require_once 'includes/header.php'; 
        require_once 'db/conn.php';
        
        
        
        if (isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $haddress= $_POST['haddress'];
            $contactinfo = $_POST['contactinfo'];
            $gender = $_POST['gender'];        
            //$Specialty = $_POST['Specialty'];
            $isSuccess=$crud->insertclient($fname, $email, $haddress, $contactinfo, $gender);
            //$GenderName = $crud->getgenderById($gender);

            

            if($isSuccess){

                    //echo '<h1 class="text-center text-success"> You Have Been Registered !</h1>';
                    include 'includes/successmessage.php';
            }

            else{
                    //echo '<h1 class="text-center text-danger"> There was an error in processing</h1>';
                    include 'includes/errormessage.php';

            }

        }
            //$orig_file = $_FILES["avatar"]["tmp_name"];
            //$ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENTION);
            //$target_dir = 'uploads/';
            //$destination = "$target_dir$Contact.$ext";
            //move_uploaded_file($orig_file,$destination);
           
        
    ?> 

        <h1 class="text-center text-success"> SUBMITTED SUCCESSFULLY !</h1>;
        <div class="text-center">
                <p class="image-holder">
                    <img src="https://codeyegy.com/public/frontend/images/1.gif"  width="180" height="100"></img> 
                
                </p>
                
        </div>

        

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">
                        <?php echo   $_POST['fname'];?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">

                <?php echo   $_POST['gender']; ?>

                </h6>
                <p class="card-text">
                    <?php echo   $_POST['haddress']; ?>
                </p>

                <p class="card-text">
                    <?php echo   $_POST['email']; ?>
                </p>

                <p class="card-text">
                    <?php echo   $_POST['contactinfo']; ?>
                </p>

                

                
            </div>
        </div>
        
    <?php

          //echo  $_GET['FirstName'];
          //echo  $_GET['LastName'];
          //echo  $_GET['address'];
          //echo  $_GET['gender'];
          //echo  $_GET['EmailAddress'];
          //echo  $_GET['phone'];
          


        ?>
        <!-- Get method -->
        <!-- <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">
                        <?php //echo   $_GET['FirstName'] . '  ' .    $_GET['LastName1']; ?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                <?php //echo   $_GET['Specialty']; ?>

                </h6>
                <p class="card-text">
                Date of Birth: <?php //echo   $_GET['DateofBirth']; ?>

                </p>

                <p class="card-text">
                Email: <?php //echo   $_GET['exampleInputEmail1']; ?>

                </p>

                <p class="card-text">
                Contact: <?php //echo   $_GET['phone']; ?>

                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div> -->

        
        
        
        <br>
        <br>
        <br>
        <br>





    <?php require_once 'includes/footer.php'; ?>