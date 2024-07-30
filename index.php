<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctors Details</title>
 
</head>
<body>
<?php 

  include("header.php");
?>

<div class="row ">
            <div class="col-lg-3 " >
                <div class="sidebar" style="width:15%; background-color: #E5E5E5;padding-left: 18px">
                    <?php include("sidebar.php"); ?>
                </div>
            </div>

    <div class="col-lg-9"  >
      <div class="container text-center" style="background-color: white;padding:100px">

        <li style="color: Orange; font-size: 30px; font-style: italic; font-weight: bold;"><i>View Doctors details</i></li>
        <hr>  
        <form id="registrationForm" action="validate.php" method="post" onsubmit="return validateForm()">
    <table class="mt-4 mb-5" style="margin: 0 auto;">
        <tbody>
            <tr>
                <td align="right">
                    Registration No
                </td>
                <td style="width: 5px;" align="center">
                    :
                </td>
                <td align="left">
                    <input name="reg_no" type="text" maxlength="10" id="reg_no" tabindex="1" title="Enter Registration Number" autocomplete="off" style="width:150px;">
                    <font color="red">*</font>
                    <span id="error_reg_no" style="color: red; visibility: hidden;">Enter Registration No</span>
                </td>
            </tr>
            <tr>
                <td align="right">
                    Registration Date
                </td>
                <td style="width: 5px;" align="center">
                    :
                </td>
                <td align="left">
                    <input name="reg_date" type="text" maxlength="10" id="reg_date" tabindex="2" title="Enter Registration Date" autocomplete="off" style="width:150px;">
                    <font color="red">*</font>
                    <span id="error_reg_date" style="color: red; visibility: hidden;">Enter Registration Date</span>
                </td>
            </tr>
            <tr>
                <td align="right">
                    Date Of Birth
                </td>
                <td style="width: 5px;" align="center">
                    :
                </td>
                <td align="left">
                    <input name="dob" type="text" maxlength="10" id="dob" tabindex="3" title="Enter Date of birth" autocomplete="off" style="width:150px;">
                    <font color="red">*</font>
                    <span id="error_dob" style="color: red; visibility: hidden;">Enter Date of birth</span>
                </td>
            </tr>
            <tr>
                <td align="right">
                    &nbsp;
                </td>
                <td style="width: 5px;" align="center">
                    &nbsp;
                </td>
                <td align="left">
                    <input type="submit" name="view_details" value="View Details" id="view_details" tabindex="4" title="Search" style="height:30px;">
                    <input type="reset" name="reset" value="Reset" id="btnReset" tabindex="5" title="Reset" style="height:30px;">
                </td>
            </tr>
        </tbody>
    </table>
</form>

      </div>
  </div>
</div>

  
</div>
<script>
    function validateForm() {
        var regNo = document.getElementById('reg_no').value;
        var regDate = document.getElementById('reg_date').value;
        var dob = document.getElementById('dob').value;

        var errorRegNo = document.getElementById('error_reg_no');
        var errorRegDate = document.getElementById('error_reg_date');
        var errorDob = document.getElementById('error_dob');

        // Reset error messages
        errorRegNo.style.visibility = 'hidden';
        errorRegDate.style.visibility = 'hidden';
        errorDob.style.visibility = 'hidden';

        // Validation logic
        var isValid = true;

        if (regNo.trim() === '') {
            errorRegNo.style.visibility = 'visible';
            isValid = false;
        }

        if (regDate.trim() === '') {
            errorRegDate.style.visibility = 'visible';
            isValid = false;
        }

        if (dob.trim() === '') {
            errorDob.style.visibility = 'visible';
            isValid = false;
        }

        return isValid;
    }
</script>

      


  


</body>
</html>
