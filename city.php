<?php
if(isset($_POST["cityNumber"]))
{
	$dataArray = file_get_contents('http://asodl.amizone.net/AuthApi/api/GetCityUsingStateApi/GetCityUsingState?Country=53&State='.$_POST["salutation"].'');
		$cityNumber = $_POST["cityNumber"];
		$data = json_decode($dataArray,true);
		foreach($data as $result)
			{
				
				if($cityNumber == $result["CityId"])
				{
					echo $result["CityName"];
					break;
				}
				
				
			
			}
}



?>