<?php 
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Initialize variables to store form data
    $regNo = isset($_POST['reg_no']) ? $_POST['reg_no'] : '';
    $regDate = isset($_POST['reg_date']) ? $_POST['reg_date'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';

    // Perform further validation if needed
    $errors = array();

    // Validate registration number
    if (empty($regNo)) {
        $errors[] = "Registration Number is required";
    }

    // Validate registration date
    if (empty($regDate)) {
        $errors[] = "Registration Date is required";
    }

    // Validate date of birth
    if (empty($dob)) {
        $errors[] = "Date of Birth is required";
    }

    // If there are errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo "<p><a href='javascript:history.go(-1)'>Go back and fix errors</a></p>";
    } 
    else 
    {

        $sql = "select * from registrationdata";
    $result = ($conn->query($sql));

        ?>
            <!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctors Details</title>
 
</head>
<body>
<?php 

  include("header.php");
?>

<div class="row">

  <div class="w3-sidebar w3-bar-block" style="width:15% ; background-color: #E5E5E5;">
    <?php
    include("sidebar.php"); 
    ?>
  </div>

  <div class="container text-center" style="background-color: white;padding:100px" >
      <div class="container" >

        <li style="color: Orange; font-size: 30px; font-style: italic; font-weight: bold;"><i>Candidate Details</i></li>
        <hr>  

        <div>
            
        </div>
        
   


      </div>
  </div>
  
</div>


      


  


</body>
</html>

        <?php
    }
} 
else 
{
    // If accessed directly without form submission
    echo "<h2>Error: Invalid Access</h2>";
    echo "<p>Please submit the form from the previous page.</p>";
}
?>

?>