<?php 
    
    $title = 'Edit Record';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    
    $results = $crud->getsexualroles();

	if (!isset($_GET['id']))
    {

        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");

    }

        else{
                $id= $_GET['id'];
                $client = $crud->getclientDetails($id);

		

?>



<!DOCTYPE html>
<html>
	
<head>
	<link
	rel="stylesheet"
	href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	/>
	<link
	rel="stylesheet"
	href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
	/>
	<link rel="stylesheet" href="style.css" />
</head>
<br>
  



<body>


	<section id="last">
	<!-- heading -->
	<div class="full">
		<h3>Edit Record</h3>
		<br>

		<div class="lt">

		<!-- form starting -->
		<form method="post" action="editpost.php" class="form-horizontal"> 
		<input type="hidden" name="id" value="<?php echo $client ['client_id'] ?>" />

			<div class="form-group">
			<div class="col-sm-12">
				<!-- name -->
				<input
				type="text"
				class="form-control"
				value="<?php echo $client['fname']?>"
				id="fname"
				placeholder="fname"
				name="fname"
				
				
				/>
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-12">
				<!-- email -->
				<input
				type="email"
				class="form-control"
				id="email"
				placeholder="EMAIL"
				name="email"
				value="<?php echo $client['email']?>"
				/>
			</div>
			</div>

			<!-- gender -->
			<div class = "form-group">
				<label for="gender">Gender:</label>
				<select class="form-control" value="<?php echo $client['email']?>" id="gender" name="gender">
				<?php while($r = $results->fetch(PDO :: FETCH_ASSOC)) { ?>
                <option  value= " <?php echo $r ['gender_id'] ?>" >  <?php echo $r['name']; ?> </option> 
				
				
            	<?php } ?>
				</select>
        			
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<!-- address -->
					<input
					type="haddress"
					class="form-control"
					id="haddress"
					placeholder="Address"
					name="haddress"
					value="<?php echo $client['haddress']?>"
					/>
				</div>
			</div>


			<div class="form-group">
				<div class="col-sm-12">
					<!-- phone number -->
					<input
					type="contactinfo"
					class="form-control"
					id="contactinfo"
					placeholder="CONTACTINFO"
					name="contactinfo"
					value="<?php echo $client['contactinfo']?>"
					/>
				</div>
			</div>
			

			<div class="custom-file">
				<div class="col-sm-12">
            		<input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            		<label class="custom-file-label" for="avatar"> Upload a Profile Photo </label>
            		<div id="avatar" class="form-text text-blue"> (File Upload is Optional) </div>
        		</div>
			</div>
			<br>
			<br>

			<button
			class="btn btn-success send-button"
			id="submit"
			type="submit"
			name="submit"
			value="SEND">
			<i class="fa fa-paper-plane"></i>
			<span class="send-text">Save Changes</span>
			</button>
			
			<button
			class="btn btn-default send-button"
			id="submit"
			type="submit"
			name="submit"
			value="SEND">
			<i class="fa fa-paper-plane"></i>
			<span class="send-text">Back to the List</span>
			</button>
		</form>
		<!-- end of form -->
		<?php }?>
		</div>

		<br>
		<br>
		<!-- Contact information -->
		


<br>
<br>

<?php require_once 'includes/footer.php'; ?>