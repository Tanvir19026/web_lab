<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
.hed h2{
 color:blue;
 font-size: 25px;
}


</style>
</head>
<body>
<div class="container s_section">
<div class="hed">
<h2 class="ok d-flex justify-content-center mt-2 p-3 ">SignUp form</h2> 
<hr>
</div>
   <form action="./connection.php" method="post" class="col-md-auto">

    <div class="mb-1 m-1">
      <label for="exampleInputEmail1" class="form-label ">Name</label>
      <input required type="text" class="form-control " name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-1 m-1">
      <label for="exampleInputPassword1" class="form-label">Address</label>
      <input required type="text" name="address" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-1 m-1">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input required type="email" name="email" class="form-control" id="exampleInputPassword1">
      </div>
  
      <div class="radio_btn">
           <label>Gender</label>
           <br>
        
       <input type="radio" id="html" name="gender" value="Male">Male</input>
        <br>
       <input type="radio" id="css" name="gender" value="Female" >Female</input>
    
      </div>


      <div class="mb-1 m-1">
        <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
        <input required type="text" name="mobile" class="form-control" id="exampleInputPassword1">
      </div>

      <div class="mb-1 m-1">
        <label for="exampleInputPassword1" class="form-label">Department</label>
        <input required type="text" name="department" class="form-control" id="exampleInputPassword1">
      </div>


      <div class="mb-1 m-1">
        <label for="exampleInputPassword1" class="form-label">Zip code</label>
        <input required type="text" name="zipcode" class="form-control" id="exampleInputPassword1">
      </div>

      <div class="mb-1 m-1">
        <label for="exampleInputPassword1" class="form-label">password</label>
        <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>

     


      <div class="container">
   
      <div class="mb-1 form-check m-1">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label required class="form-check-label" for="exampleCheck1">I agree with terms and services</label>
      <hr>
    </div>
    <button type="submit" class="btn btn-primary m-1 sbt">Submit</button>


   


  </form>

</div>





  


      </div>
      <div class=" container search_opt">
      <form  method="POST">
  <button  class="btn btn-danger m-5" name="readuser">show users</button>
  </form>

  <?php

if(array_key_exists('readuser',$_POST))
{
  showusers();
}

function showusers(){
  $conn = new mysqli('localhost','root','','users_info');
  $sql="select * from tbl_user";
  $result = $conn -> query($sql);
  
  if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Mobile</th><th>zipcode</th><th>Department</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. " " ."</td><td>". $row["email"]."</td><td>".$row["gender"]."</td><td>".$row["mobile"]."</td><td>".$row["zipcode"]."</td><td>".$row["department"].
          
          "</td></tr>";
        
        ;
    }
    echo "</table>";
} else {
    echo "0 results";
}
  
    
}


?>

      </div>



 

<div>
  <br>
</div>


</body>
</html>