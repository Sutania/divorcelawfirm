
    <?php 
    
    $title = 'Index';
    //require_once 'viewrecords.php'; 
    //require_once 'includes/header.php'; 
    //require_once 'db/conn.php';
    
    //$results = $crud->getSpecialties();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HomePage</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

body {
  margin: 0;
  box-sizing: border-box;
}

/* CSS for header */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #f5f5f5;
}

.header .logo {
  font-size: 25px;
  font-family: 'Sriracha', cursive;
  color: #000;
  text-decoration: none;
  margin-left: 30px;
}

.nav-items {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: #f5f5f5;
  margin-right: 20px;
}

.nav-items a {
  text-decoration: none;
  color: #000;
  padding: 35px 20px;
}

/* CSS for main element */
.intro {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 520px;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://villdelv2.wpenginepowered.com/wp-content/uploads/2015/12/Austin-Divorce-Lawyers-3.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.intro h1 {
  font-family: sans-serif;
  font-size: 60px;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  margin: 0;
}

.intro p {
  font-size: 20px;
  color: #d1d1d1;
  text-transform: uppercase;
  margin: 20px 0;
}

.intro button {
  background-color: #5edaf0;
  color: #000;
  padding: 10px 25px;
  border: none;
  border-radius: 5px;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
}

.achievements {
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 40px 80px;
}

.achievements .work {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0 40px;
}

.achievements .work i {
  width: fit-content;
  font-size: 50px;
  color: #333333;
  border-radius: 50%;
  border: 2px solid #333333;
  padding: 12px;
}

.achievements .work .work-heading {
  font-size: 20px;
  color: #333333;
  text-transform: uppercase;
  margin: 10px 0;
}

.achievements .work .work-text {
  font-size: 15px;
  color: #585858;
  margin: 10px 0;
}

.about-me {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px 80px;
  border-top: 2px solid #eeeeee;
}

.about-me img {
  width: 500px;
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}

.about-me-text h2 {
  font-size: 30px;
  color: #333333;
  text-transform: uppercase;
  margin: 0;
}

.about-me-text p {
  font-size: 15px;
  color: #585858;
  margin: 10px 0;
}

/* CSS for footer */
.footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #302f49;
  padding: 40px 80px;
}

.footer .copy {
  color: #fff;
}

.bottom-links {
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 40px 0;
}

.bottom-links .links {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0 40px;
}

.bottom-links .links span {
  font-size: 20px;
  color: #fff;
  text-transform: uppercase;
  margin: 10px 0;
}

.bottom-links .links a {
  text-decoration: none;
  color: #a1a1a1;
  padding: 10px 20px;
}
</style>
</head>


<body>
      
  <header class="header">
    <a href="index.php" class="logo">DIVORCE</a>
    <nav class="nav-items">
      <a href="login.php">LOGIN</a>
      <a href="registrationform.php"> Register with Us </a>
      <a href="viewrecords.php">VIEW PROFILE</a>
      <a href="#">LOGOUT</a>
    </nav>
  </header>

<main>
<div class="intro">
  <h1>THE NAME YOU CAN TRUST</h1>
  <p><br>We have more than twenty years of experience in the area of divorce <br>
         with an efficient and committed staff. We have clients in every parish in Jamaica,<br>
         most nations in the Caribbean, England, Canada and the United States of America.<br>
        
  </p>
  
  <button><a href = "https://www.supremecourt.gov.jm" target = "_blank"class="btn btn-danger" > SUPREME COURT.com </a></button>
</div>
<div class="achievements">
  <div class="work">
    <i class="fas fa-frown"></i>
    <p class="work-heading">DIVORCE CASES</p>
    <p class="work-text">OLIVER W. LLEWELLYN is a divorce lawyer who understands that ending a marriage
                        can be a devastating experience. Our competent and dedicated divorce lawyer works
                        hard to achieve a speedy divorce process,
                        making a painfully difficult time just a little less complicated.
                      
    </p>
  </div>
  <div class="work">
    <i class="fas fa-building"></i>
    <p class="work-heading">REAL ESTATE MATTERS</p>
    <p class="work-text">We understand how complicated real estate transactions can be. <br>
                        When purchasing land, an apartment, a townhouse, or a house, 
                        it is important to do your due diligence and retain a lawyer 
                        who will give you sound legal advice, one who is professional and one who you can trust.</p>
  </div>
  
</div>
<div class="about-me">
  <div class="about-me-text">
    <h2>About Us</h2>
    <p> Oliver W. Llewellyn has focused his legal practice to predominantly <br> 
        divorce matters for over 20 years. He has developed skills in the area of <br> 
        divorce that significantly reduce the risk of requisitions being placed on <br> 
        his divorce documents filed at the Supreme Court. The Supreme Court <br> 
        in Jamaica will put a requisition on a divorce document that is filed in <br> 
        the Court by an Attorney-at-Law if the document is not in order. This can <br> 
        lead to a delay in the divorce being granted and is one of the factors that<br>
        lead to a backlog of divorce cases at the Supreme Court in Jamaica.<br>
    </p>

    <p> The cost of a divorce in Jamaica varies. It may be expensive, or it may <br>
        be cheap. It depends on the lawyer that deals with the matter. The client <br>
        usually shops around to find out the cost that each lawyer charges, but it <br>
        should be noted that it would be in a client’s best interest to find out the <br>
        experience and reputation of lawyers in the area of divorce.<br>

    </p>

    <p> Clients are usually concerned about the length of time that the divorce<br> 
        process takes. Based on experience, a quick or speedy divorce can take <br>
        approximately four (4) months if there is no relevant child/children, and <br>
        the divorce is not contested.<br>
    </p>

    <p> Division of matrimonial property or spouse maintenance may not affect a <br>
        divorce being granted. However, maintenance of relevant child/children <br>
        may affect the granting of the divorce. The Court must be satisfied that<br>
        the arrangements for custody, maintenance, care and upbringing of <br>
        the relevant child/children are the best that may be devised in the <br>
        circumstances of the particular case before the divorce is granted.<br>
    </p>

  </div>
  <img src="https://www.owljamaica.com/wp-content/uploads/sites/225/2018/06/oliwer-logo.jpg">
</div>
</main>

<br>







<?php require_once 'includes/footer.php'; ?>



  

