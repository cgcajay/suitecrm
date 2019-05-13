<?php
if($_POST["stateID"] !='' || $_POST["cityID"] !='')
 {
 	//$stateId = $_POST["stateId"];
 	//print_r($_POST);
	$dataArray = file_get_contents('http://asodl.amizone.net/AuthApi/api/GetCityUsingStateApi/GetCityUsingState?Country=53&State='.$_POST["stateID"].'');

		$data = json_decode($dataArray,true);		
		echo '<option value="">Select state</option>';
		foreach($data as $result)
			{
				
					echo '<option value='.$result["CityId"].'>'.$result["CityName"].'</option>';
				
			
			
			}
		
			
	



	// $con = mysqli_connect('localhost', 'root', '','suitecrm');
	// $qry = "SELECT * FROM `city_table`";

	// $run = mysqli_query($con, $qry);
	// if(mysqli_num_rows($run)>0)
	// {
	// 	$dataArray = array();
	// 	while($result = mysqli_fetch_assoc($run))
	// 	{
	// 		$dataArray[] = $result;
	// 	}
		//echo $dataArray;
		//die;
	// }

		$conn = mysqli_connect('localhost','root','','suitecrm');
		$cityID = $_POST["cityID"];
		if(!empty($cityID))
		{
			$qry = "INSERT INTO `leads_cstm` (`city_name_c`) VALUES ('$cityID')";
			$run = mysqli_query($conn, $qry);
		}
		
		

		
		

 }



        			// dropDownValue();
        			// function dropDownValue(){

        			// 	var dropDownSet = "value";
        			// 	$.ajax({
        			// 		url:"dropDown.php",
        			// 		method:"POST",
        			// 		data:{dropDownSet:dropDownSet},
        			// 		dataType:"json",
        			// 		success:function(data){
        			// 			var listItems= "";
        			// 			var i;
        			// 			for(i=0; i<data.length; i++)
        			// 			{
        			// 				listItems += "<option value=" + data[i].CityId + ">" + data[i].CityName + "</option>";
        			// 			}
        			// 			$("#city_name_c").html(listItems);
        			// 		}
        			// 		});
        			// }





?>
