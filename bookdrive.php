<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Test Drive</title>
</head>
<style>
    
</style>
<body style="background-color: rgb(235, 236, 170);">

<nav class="navbar navbar-light"  style="background-color: rgb(187, 189, 97);">

<h3 class="navbar-brand mb-0 h1 mx-4"><span style= "color: #f87959" >Max</span> wheels<h3>
 </nav>

 <h1 style="text-align: center;" class="test my-2"> Book Your Test Drive </h1>
<form action="testdetail.php" method="POST" >
  <div class="form-row mx-4">
    <div class="form-group col-md-6">
      <label for="inputName">Full Name</label>
      <input type="text" name="fullname" class="form-control my-2" id="inputEmail" placeholder="Full Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" name="email"class="form-control my-2" id="inputemail" placeholder="Email">
    </div>
  </div>
  <div class="form-row mx-4">
    <div class="form-group col-md-6">
      <label for="inputContact">Contact</label>
      <input type="text" name="contact" class="form-control my-2" id="inputContact" placeholder="Contact">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Address</label>
      <input type="address" name="address1" class="form-control my-2" id="inputAddress" placeholder="Address">
    </div>
  </div>
  <div class="form-row mx-4">
    <div class="form-group col-md-6">
      <label for="inputCarName">Car Name</label>
      <input type="text" name="car" class="form-control my-2" id="inputCar" placeholder="Audi Q7">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCarModel">Car Model</label>
      <input type="text" name="model" class="form-control my-2" id="inputCarModel" placeholder=" Q7 Premium Plus 55 TFSI">
    </div>
</div> 
  <div class="form-row mx-4">
    <div class="form-group col-md-6">
      <label for="inputDate">Date</label>
      <input type="date" name="datee" class="form-control my-2" id="inputDate">
    </div>
</div>
    <small id="emailHelp" class="form-text text-muted mx-4">*Our Executive will get back to confirm your appointment</small>
  <br>
  <br>
  <button type="submit" name="save" class="btn btn-primary mx-4">Book Test Drive</button>
</form> 
</body>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
</body>
   </html>