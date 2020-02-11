<?php
include 'db.php';
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['telephone'];
$ticket=$_POST['ticket'];
$_SESSION['eventnm']=$ticket;
$college=$_POST['college'];
$status="Unpaid";


       if($ticket=="Tech Wizard solo")
          {
             $price="50";
          }
       else if($ticket=="Tech Wizard duo")
          {
             $price="90";
          }
       else if($ticket=="Pro Googler")
          {
             $price="60";
          }
       else if($ticket=="Crack it")
          {
             $price="50";
          }
       else if($ticket=="Maze Coders solo")
          {
             $price="50";
          }
       else if($ticket=="Maze Coders duo")
          {
             $price="90";
          }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/icon" href="/assets/images/pl.ico"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2><center> Checkout Form</h2></center><br>
<b><u>NOTE:-</u><br>
1.Only Paytm accepted.Paytm Number & Paytm QR Code given below.<br>
2.Once Paytm transaction is completed,enter your transaction ID below.<br>
3.Once we receive your payment,we will send you confirmation mail on your entered email address.<br> </b>
 <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="insert.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address  </h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" value="<?php echo $name; ?>" name="name" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" value="<?php echo $email; ?>" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Contact No.</label>
            <input type="text" id="adr" value="<?php echo $phone; ?>" name="telephone" >
            <label for="city"><i class="fa fa-institution"></i> College Name</label>
            <input type="text" id="city" value="<?php echo $college; ?>" name="college" >
			
            <div class="row">
              <div class="col-50">
                <label for="state">Enter your paytm transaction ID <font color="red">*</font></label>
                <input type="text" id="state" name="tid" required >
              </div>
               
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Payment Methods</label>
         
               <img class="" src="paytm.jpg"   height="40px" width="100px">
			    Paytm Number: 9552873557
             
			<div>
             <br> 
            <img class="" src="sc.jpg"   height="340px" width="250px">
           
			
			</div>
           
          </div>
          
        </div>
       
        <input type="submit" value="Complete Payment" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Event Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> </span></h4>
      <p> <?php echo $ticket; ?></a> <span class="price">₹<?php echo $price; ?></span></p>
      
      <hr>
      <p>Total <span class="price" style="color:black"><b>₹<?php echo $price; ?></b></span></p>
    </div>
	 <img class="" src="qr1.jpeg"   height="300px" width="280px">
  </div>
  
</div>

</body>
</html>
