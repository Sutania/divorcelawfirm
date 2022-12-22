

<?php 
    
    $title = 'View Record';
    require_once 'includes/header.php'; 
    //require_once 'includes/authentication_check.php';
    require_once 'db/conn.php';

     
        
    
    if (!isset($_GET['id'])){

        include 'includes/errormessage.php';
        //echo "<h1 class = 'text-danger'> Please check details and try again  </h1>";
        

    } else{

        $id = $_GET['id'];
        $result= $crud->getClientDetails($id);

    
        

    
    
?> 

    <br>
    <br>
    <br>
        <br>
        


    <div class="card" style="width: 18rem;">
            <div class="card">
                <div class="card-body">
        
                    <h5 class="card-title">
                        <?php echo   $result['fname']; ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?php echo   $result['name']; ?>

                    </h6>
            

                </div>   

                <p class="card-text">
                    Email: <?php echo   $result['email']; ?>

                </p>

                <p class="card-text">
                    Adress: <?php echo   $result['haddress']; ?>

                </p>

                <p class="card-text">
                    Contact: <?php echo   $result['contactinfo']; ?>

                </p> 
            </div>
    </div>
        
     
             
                    <td> 
                        <a href ="viewrecords.php" class= "btn btn-info" >Back to List</a> 
                        <a href ="edit.php?id= <?php echo $result['client_id'] ?>" class= "btn btn-warning" >Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete this record?')"; href ="delete.php?id= <?php echo $result['client_id'] ?>" class= "btn btn-danger" >Delete</a>
                    </td>

        <?php } ?>


        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


<?php require_once 'includes/footer.php'; ?>


    