<?php include 'formphp.php';?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
   
</head>
<body>
<link rel="stylesheet" type="text/css" href="formpage.css">
 <form   method="POST">

 <h1>
ENTER YOUR DETAILS
</h1>
  <table>
   <tr>
    <td>First name :</td>
    <td><input type="text" name="first" required></td><br>
   </tr><br>
   <tr>
    <td>last name :</td>
    <td><input type="text" name="last" required></td>
   </tr><br>
   <tr>
    <td>DOB :</td>
    <td><input type="date" name="dob" required></td>
   </tr>
    <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="male" required id="m">Male
     <input type="radio" name="gender" value="female" required id="f">Female
    </td>
   </tr>
    <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr>
 <tr>
    <td>Degree :</td>
    <td><input type="text" name="deg" required></td>
   </tr> 
   <tr>
    <td>Department :</td>
    <td>
     <select name="department" required>
      <option selected hidden value="">Select Department</option>
      <option value="EEE">Electrical and Electronics</option>
      <option value="EIE">Electronics & Instrumentation</option>
      <option value="ECE">Electronics & Comuncaton</option>
      <option value="CSE">Computer Scence</option>
      <option value="IT">Information Technology</option>
      <option value="MECH">Mechanical</option>
	  <option value="OTHER">Others</option>
     </select>
    <tr>
	<td>Phone :</td> 
	<td><input type="phone" name="phone" required id="phone"></td>
	</tr>
	 
    </td>
   </tr>   
   <tr>
    <td><input type="submit" name="submit" id="submit" value="Submit"></td>

   </tr>

  </table>
  </form>
   <form action="jtohdemo2.html">
<input type="submit" value="Preview" id="preview">
</form>


</body>
</html>