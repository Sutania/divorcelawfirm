<?php 
    
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    
    $results = $crud->getsexualroles();
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
		<h3>Register With Us Now</h3>
		<br>

		<div class="lt">

		<!-- form starting -->
		<form method="post" action="success.php" class="form-horizontal"
				method="post" action="contact.php"> 
			<div class="form-group">
			<div class="col-sm-12">
				<!-- name -->
				<input required
				type="text"
				class="form-control"
				id="fname"
				placeholder="NAME"
				name="fname"
				value=""
				/>
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-12">
				<!-- email -->
				<input required
				type="email"
				class="form-control"
				id="email"
				placeholder="EMAIL"
				name="email"
				value=""
				/>
			</div>
			</div>

			<!-- gender -->
			<div class = "form-group">
				<label for="gender">Gender:</label>
				<select class="form-control" id="gender" name="gender">
				<?php while($r = $results->fetch(PDO :: FETCH_ASSOC)) { ?>
                <option  value= " <?php echo $r ['gender_id'] ?>" >  <?php echo $r['name']; ?> </option> 
				
				
            	<?php } ?>
				</select>
        			
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<!-- address -->
					<input required
					type="haddress"
					class="form-control"
					id="haddress"
					placeholder="Address"
					name="haddress"
					value=""
					/>
				</div>
			</div>


			<div class="form-group">
				<div class="col-sm-12">
					<!-- phone number -->
					<input required
					type="contactinfo"
					class="form-control"
					id="contactinfo"
					placeholder="CONTACTINFO"
					name="contactinfo"
					value=""
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
			class="btn btn-primary send-button"
			id="submit"
			type="submit"
			name="submit"
			value="SEND">
			<i class="fa fa-paper-plane"></i>
			<span class="send-text">SUBMIT</span>
			</button>
		</form>
		<!-- end of form -->
		</div>

		<br>
		<br>
		<!-- Contact information -->
		


<br>
<br>

<?php require_once 'includes/footer.php'; ?>