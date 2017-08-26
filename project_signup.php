  <div class="form">
      <ul class="tab-group">
      
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login" name="login">Log In</a></li>

      </ul>
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up</h1>
          
          <form action="home.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="name" id="name" />
            </div>
        
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email" id="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="pass" id="pass" />
          </div>

          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="cpass" id="cpass" />
          </div>

          <div class="field-wrap">
            <label>
              DOB<span class="req">*</span>
            </label>
            <input type="date" required autocomplete="off" name="dob" id="dob" />
          </div>

          <div class="field-wrap">
              <label>
                Mobile<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="mobile" id="mobile" />
            </div>

            <div class="field-wrap">
            <label>
              Gender (Male or Female)<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="gen" id="gen"/>
          </div>
          
          <button type="submit" onclick="return validate();" name="submit1" class="button button-block"/>Get Started</button>
          </form>
          </div>

          <?php

if(isset($_POST['submit1'])) {
$Name=$_POST["name"];
$Email=$_POST["email"];
$Password=$_POST["pass"];
$DOB=$_POST["dob"];
$Mobile=$_POST["mobile"];
$Gender=$_POST["gen"];

  $id=$_POST['email'];
  $pass=$_POST['pass'];
  $query=mysqli_query($link, "SELECT * FROM user_details WHERE Email='$id'");
  if(mysqli_num_rows($query) > 0)
  {
    echo "<script> alert('username already exists!'); </script>";
      }
      else{
    $sql = "INSERT INTO user_details (Name, Email, Password, DOB, Mobile, Gender)
        VALUES ('$Name', '$Email', '$Password', '$DOB', '$Mobile', '$Gender')";
        
    
    if(mysqli_query($link, $sql)){
        echo "<script> alert('Records added successfully.');</script>";
} else{
    echo "Error: " . $sql . "<br>" . $link->error;
}

}
}
?>



          <div id="login" name="login">   
          <h1>Welcome !</h1>
          
          <form action="" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="idd"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pas"/>
          </div>
          
          <button name="submit" class="button button-block"/>Log In</button>
          </form>
          </div>

          </div>
          </div>

          
          <?php
  if(isset($_POST['submit'])) {
    
    $username = $_POST["idd"];
    $password = $_POST["pas"];
    
    $query = "SELECT * FROM user_details WHERE Email = '$username' AND Password = '$password'";
    
    if(mysqli_num_rows(mysqli_query($link, $query)) > 0) {
      echo "<script>window.location.replace('index.php');</script>";
    }
    else{
      echo "<script> alert('the entered username and password is not valid')</script>";
    }
  }
  
?>




<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/Validate.js"></script>
  