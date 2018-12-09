<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["first"]))  
      {  
           $error = "<label class='text-danger'>Enter first Name</label>";  
      }  
      else if(empty($_POST["last"]))  
      {  
           $error = "<label class='text-danger'>Enter last name</label>";  
      }  
      else if(empty($_POST["dob"]))  
      {  
           $error = "<label class='text-danger'>Enter Date of Birth</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Enter Gender</label>";  
      }  	  
	  else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      }  	  
	  else if(empty($_POST["deg"]))  
      {  
           $error = "<label class='text-danger'>Enter Degree</label>";  
      }  	  
	  else if(empty($_POST["department"]))  
      {  
           $error = "<label class='text-danger'>Choose Department</label>";  
      }  	  
	  else if(empty($_POST["phone"]))  
      {  
           $error = "<label class='text-danger'>Enter phone</label>";  
      }  	  
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'first'               =>     $_POST['first'],  
                     'last'          =>     $_POST["last"],  
                     'dob'     =>     $_POST["dob"],
					 'gender'   =>    $_POST["gender"],
					 'email'   =>    $_POST["email"],
					 'deg'   =>    $_POST["deg"],
					 'department'   =>    $_POST["department"],
					 'phone'   =>    $_POST["phone"]
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success' style='color:white;'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = "<label class='text-danger' style='color:red;'>JSON File doesnot exist</p>";   
           }  
      }  
 }  
 ?>  
  <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
 ?>  
 <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  