
<?php

$con=mysqli_connect("localhost","root","","ap");

if(isset($_POST["ok"]))
{

 $name=$_POST['first_name'];
 $contact=$_POST['contact'];
 $email=$_POST['email'];
 $date=$_POST['date'];
 $gender=$_POST['exist'];
 $state=$_POST['state'];
 $city=$_POST['city'];
 $course=$_POST['courseid'];
 $batch=$_POST['Batch'];
 $flag="Not verified";
 $query="INSERT INTO registration values ('$name','$email','$contact','$batch','$course','$flag','$state','$city')";
 $sql=mysqli_query($con,$query);
 if($sql){

    }
 else{
    echo "smthing went wrong";
 }

    $query1="select * from student_database where name='$name' ";
    $check=mysqli_query($con,$query1);
    
    while ($row = $check->fetch_assoc()) {
    
    if($name==$row['name'] || $email==$row['email'] || $date==$row['date'] && $course == $courseID)
    {
                    
            $query3="INSERT INTO alumini values ('$name','$email','$contact','$date','sad','course','$batch','$state','$city')";
            $sql1=mysqli_query($con,$query3);
            if($sql1){
                $query4="UPDATE registration SET verification = 'Done' WHERE email = '$email'";
                mysqli_query($con,$query4);
                echo "bravo";

            }
            else{
                    echo "oops"  ;      
            }
                    
    }
    
    
    else{

        header("location:../error/index.php");
    } 
    
}

}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" >
    <meta name="author" >
    <meta name="keywords" >

    <!-- Title Page-->
    <title></title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="first_name">
                                            
                                        </div>
                                   

                                    
                                </div>
                            </div>

                            
                        </div>
                        <div class="form-row">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="contact" required="" value="+91">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date Of birth</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="date">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">
                                    
                                        <label class="radio-container m-r-55">Male
                                    <input type="radio" checked="checked" name="exist" value="Male">
                                    <span class="checkmark"></span>
                                </label>
                                
                                <label class="radio-container m-r-55">Female
                                    <input type="radio" checked="checked" name="exist" value="fe">
                                    <span class="checkmark"></span>
                                </label>   

                                    
                                </div>
                            </div>

                            
                        </div>
                        <div class="form-row">
                            <div class="name">State</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="state" id="state_id" onchange="stateN(this.value);">
                                        <option value="0">Select State</option>    
                                            <?php
                                                                    $query="SELECT * from state_table";
                                                                    $result=mysqli_query($con,$query); 
                                                                    while ($row = mysqli_fetch_array($result))
                                                                    {
                                                                        echo "<option value='".$row['state_id']."'>'".$row['state_name']."'</option>";
                                                                    }
                                                                    ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group" >
                                    <div class="rs-select2 js-select-simple select--no-search" id="displayhere" >
                                        <select name="city" id="city_id" >
                                            <option value="0">Select city</option>

                                            
                                        </select>
                                        <div class="select-dropdown" id="disabled"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Course</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="courseid" id="courseid">
                                            <option value="0">Choose option</option>
                                            <?php
                                                                    $query="SELECT * from course";
                                                                    $result=mysqli_query($con,$query); 
                                                                    while ($row = mysqli_fetch_array($result))
                                                                    {
                                                                        echo "<option value='".$row['courseID']."'>'".$row['name']."'</option>";
                                                                    }
                                                                    ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Batch</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="Batch" placeholder="Eg :  2016-2019">
                                    
                                </div>
                            </div>
                        </div>
                                    
                                    <!--<div class="col-4">
                                    	<div class="rs-select2 js-select-simple select--no-search">
	                                        <div class="input-group">
	                                            <select class="input--style-5" type="text" name="Batch">
	                                            <option>Batch</option>	
	                                            </select>
	                                            
	                                        </div>
                                    	</div>
                                    </div> -->
                                     
                
                                            
                        

                       
                         <!-- <div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing alumini?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> -->
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="ok">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function stateN(val){
            var x=val;
        
            $.ajax({
            url:"city.php",
            type:"POST",
            data:{x:x},

            success:function(data)
            {

            
            $('#displayhere').html(data);
            }
        });
        }
    </script>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->