<?php

require('lib_common.php');
require('lib_macdata.php');
require('lib_train.php');


DBConnect();

$q = "SELECT * FROM pointcal WHERE 1";
$result = DB($q);

$count = 0;
while ($row = mysql_fetch_array($result[0]))
{
	$rowArray[$count] = $row;
	$count ++;
}
//go through and get rid of the ones that have more than 4

$numUsed = 0;
$count2 = 0;
foreach ($rowArray as $row)
{

	$flag = true;
	
	for ($i=0;$i<$numUsed;$i++)
	{
		if ($usedRows[$i]["name"] == $row["placename"])
		{
			if ($usedRows[$i]["num"] >= 4)
			{
				// do nothing
			} else
			{
				$usedRows[$i]["num"] ++;
				$outputArray[$count2] = $row;
				$count2 ++;
			}
			$flag = false;
		}
	}
	
	if ($flag == true)
	{
		//insert it
		$usedRows[$numUsed]["name"] = $row["placename"];
		$usedRows[$numUsed]["num"] = 1;
		$outputArray[$count2] = $row;
		$count2 ++;
		$numUsed ++;
	}
}


foreach($outputArray as $row)
{
	$q = "INSERT INTO pointcal (`time`, `placename`, `username`, `mapx`, `mapy`, `mapw`, `coord1`, `coord2`, `coord3`, `coord4`, `coord5`, `coord6`, `coord7`, `coord8`, `coord9`, `coord10`, `coord11`, `coord12`, `coord13`, `coord14`, `coord15`, `coord16`, `coord17`, `coord18`, `coord19`, `coord20`, `coord21`, `coord22`, `coord23`, `coord24`, `coord25`, `coord26`, `coord27`, `coord28`, `coord29`, `coord30`, `coord31`, `coord32`, `coord33`, `coord34`, `coord35`, `coord36`, `coord37`, `coord38`, `coord39`, `coord40`, `coord41`, `coord42`, `coord43`, `coord44`, `coord45`, `coord46`, `coord47`, `coord48`, `coord49`, `coord50`, `coord51`, `coord52`, `coord53`, `coord54`, `coord55`, `coord56`, `coord57`, `coord58`, `coord59`, `coord60`, `coord61`, `coord62`, `coord63`, `coord64`, `coord65`, `coord66`, `coord67`, `coord68`, `coord69`, `coord70`, `coord71`, `coord72`, `coord73`, `coord74`, `coord75`, `coord76`) VALUES ('" . $row["time"] . "', '" . $row["placename"] . "', '" . $row["username"] . "', '" . $row["mapx"] . "', '" . $row["mapy"] . "', '" . $row["mapw"] . "'";
	
	for ($i=1;$i<=76;$i++)
	{
		$q = $q . ", " . $row["coord" . $i];
	}
	$q = $q . ")";
	
	DB($q);
}

?>
