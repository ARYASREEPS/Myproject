<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] ,input[type=ResetPSassword]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
   
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <center> <h1>MY.<span style="color:red">JOBS</span>.COM</h1></center>
    
 <img src="images/images (5).jpg" border="0"  height="26px" width="29px">
 <img src="images/download (5).jpg" border="0" height="26px" width="29px">
 <img src="images/images (17).jpg" border="0" height="26px" width="29px">
<img src="images/download (6).jpg" height="24px" width="27px">
<img src="images/download (7).jpg" height="24px" width="27px">
<img src="images/download (8).jpg" height="24px" width="27px">


                    <!-- *** Bglyphicon *** -->
<div class="col-xs-4">
    
     <a href="logins.php" target="iframe_a" id="register-form-link">LOGIN</a>
     </div>
     <div class="col-xs-4">
     <a href="register.php" target="iframe_a" id="register-form-link">REGISTER</a>
    
     </div>



<div class="container">
  <div class="col-xs-4">
  <p>Envelope : <span class="glyphicon glyphicon-envelope"></span>    
  </p>
  </div>
  <div class="col-xs-4">
  <p>Search: <span class="glyphicon glyphicon-search"></span>
  </p>
  </div>
   
  <p>Print : <span class="glyphicon glyphicon-print"></span></p>      
  
</div>
 <div class="container">
  
  <a href="#">News <span class="badge">2</span></a><br>
  <a href="#">Comments <span class="badge">6</span></a><br>
  <a href="#">Updates <span class="badge">9</span></a>
</div>

 <!-- *** Bglyphicon end *** -->

<div class="container-fluid">
 
  
      <!-- *** Carousel *** -->
<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/download (11).jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/download (10).jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/images (7).jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- *** Carousel end*** -->
<center><h2>Login Form</h2></center>

<form action="image.php">
 
  

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="checkbox" checked="checked"> Remember me
        
    <button type="submit">Login</button>
    
  </div>

  
    <span class="psw">Forgot <a href="email.php">password?</a></span>
  </div>

             <div class="container">
  
               <center>   
  <ul class="pagination">
    
    <li><a href="" target="iframe_a" id="register-form-link">1</a></li>
    <li><a href="image.php" target="iframe_a" id="register-form-link">2</a></li>
    
  </ul>
  </center> 
</div>


</form>

</body>
</html>