<?php
$con= mysqli_connect("localhost", "root", "", "ap");
extract($_POST);

if(isset($_POST['display'])){

	$data =  '<table class="table table-striped table-bordered" >
						<tr >
							<th>Name</th>
							<th>Email</th>
							<th>Batch</th>
							<th>Course</th>
							<th>Verification</th>
                            <th>State</th>
                            <th>City</th>							
						</tr>'; 

	 $displayquery = " SELECT registration.name,registration.email,registration.batch,registration.courseID,registration.verification,state_table.state_name,city_table.city_name FROM registration JOIN state_table ON registration.state_id=state_table.state_id JOIN city_table ON registration.city_id=city_table.city_id;" ; 
	$result = mysqli_query($con,$displayquery);
	if(mysqli_num_rows($result) > 0){

		 
		while ($ar = mysqli_fetch_array($result)) {
			
			$data .= '<tr>  
				<td>'.$ar[0].'</td>
				<td>'.$ar[1].'</td>
				<td>'.$ar[2].'</td>
				<td>'.$ar[3].'</td>
				<td>'.$ar[4].'</td>
				<td>'.$ar[5].'</td>
				<td>'.$ar[6].'</td>
				
				
    		</tr>';
    	

		}
	} 
	 $data .= '</table>';
    	echo $data;


}

?>