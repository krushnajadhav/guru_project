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
      <div class="container " >

        <li style="color: Orange; font-size: 30px; font-style: italic; font-weight: bold;"><i>View Doctors details</i></li>
        <hr>  
        <table class="mt-4 mb-5" style="margin: 0 auto;" >
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
                                <span id="ctl00_ContentPlaceHolder1_rftxtRegNo" style="color:Red;visibility:hidden;">Enter Registration No</span>
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
                                <input name="reg_date" type="text" maxlength="10" id="reg_date" tabindex="2" title="Enter Registration Date"  autocomplete="off" style="width:150px;">
                                
                                <font color="red">*</font>
                                <span id="ctl00_ContentPlaceHolder1_rftxtRegdate" style="color:Red;visibility:hidden;">Enter Registration Date<span>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                &nbsp; Date Of Birth
                            </td>
                            <td style="width: 5px;" align="center">
                                :&nbsp;
                            </td>
                            <td align="left">
                                <input name="dob" type="text" maxlength="10" id="dob" tabindex="3" title="Enter Date of birth"  autocomplete="off" style="width:150px;">
                                
                                
                                <font color="red">*</font>
                                <span id="ctl00_ContentPlaceHolder1_rftxtdob" style="color:Red;visibility:hidden;">Enter Date of birth</span>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" >
                                &nbsp;
                            </td>
                            <td style="width: 5px;" align="center">
                                &nbsp;
                            </td>
                            <td align="left" >

                                <input type="submit" name="view_details" value="View Details" id="view_details" tabindex="4" title="Search" style="height:30px;">

                                <input type="submit" name="reset" value="reset" id="ctl00_ContentPlaceHolder1_btnReset" tabindex="4" title="Search" style="height:30px;">

                            </td>
                        </tr>
            </tbody>
        </table>
      </div>
  </div>
  
</div>

      


  


</body>
</html>
