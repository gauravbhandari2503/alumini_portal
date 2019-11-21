<?php
 $con=mysqli_connect("localhost","root","","ap");
 extract($_POST);   
 if(isset($_POST['x'])){

	$state_id=$_POST['x']; 
	intval($state_id);
	$displayquery = " SELECT * FROM city_table  WHERE state_id ='$state_id'"; 
	$result = mysqli_query($con,$displayquery);

	
	$data='<select name="city" class="form-control" id="city1">';
		while ($ar= mysqli_fetch_array($result))
				{
				    $data.= "<option value='".$ar['city_id_table']."'>".$ar['city_name']."</option>";
				    
				}
	$data.='</select>';
	echo $data;
}	


?>