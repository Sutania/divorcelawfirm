<?php 
    
        $title = 'View Profile';
        require_once 'includes/header.php'; 
        //require_once 'includes/authentication_check.php';
        require_once 'db/conn.php';
        $results = $crud->getclients();  
    ?>

    <br>
    <br>
    <br>
    <br>
    
    

    <!DOCTYPE html>
	
    <head>
	        <link
	        rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	        <link
	        rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	        <link rel="stylesheet" href="style.css" />
    </head>    

        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th> Name</th>
                <th> Gender</th>
                <th> Address</th>
                <th> Actions</th>
                


            </tr>

            <?php while($r = $results->fetch(PDO :: FETCH_ASSOC)) { ?>

                <tr>
                    <td> <?php echo $r['client_id'] ?></td>
                    <td> <?php echo $r['fname'] ?> </td>
                    
                    <td> <?php echo $r['name'] ?></td>
                    <td> <?php echo $r['email'] ?></td>
                    <td> 
                        <a href ="view.php?id= <?php echo $r['client_id'] ?>" class= "btn btn-primary" >View</a>
                        <a href ="edit.php?id= <?php echo $r['client_id'] ?>" class= "btn btn-warning" >Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete this record?')"; href ="delete.php?id= <?php echo $r['client_id'] ?>" class= "btn btn-danger" >Delete</a>
                    </td>
                </tr>

            <?php } ?>


        </table>
          





    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php require_once 'includes/footer.php'; ?>