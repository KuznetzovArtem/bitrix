<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//echo "<pre>arParams: "; print_r($arParams); echo "</pre>";
//echo "<pre>arResult: "; print_r($arResult); echo "</pre>";

//echo "<pre>"; print_r($arResult["arrFORM_FILTER"]); echo "</pre>";
?>
<div class = "tester">
<table class ="tester"> 
<caption>Таблица Сферических Товаров</caption>
<tr>
<?php
for($i=0;  $i<1; $i++)
{
	$idString = $arResult["arRID"][$i];

	foreach($arResult["arrAnswers"]["$idString"] as $number=>$informationAboutString)
	{
		foreach($informationAboutString as $onlyInformation)
		{
		echo	"<th>". $onlyInformation["TITLE"]."</th>";
		}
	}

}

?>
	</tr>
<?
for($i=0;  $i<count($arResult["arRID"]); $i++)
{
	$idString = $arResult["arRID"][$i];
	echo "<tr>";$valuearray = array();
	foreach($arResult["arrAnswers"]["$idString"] as $number=>$informationAboutString)
	{

		foreach($informationAboutString as $onlyInformation)
		{

			switch($onlyInformation["FIELD_TYPE"])
			{
				case "text":
				$valuearray[$onlyInformation["FIELD_ID"]] = $onlyInformation["USER_TEXT"];
				break;

				case "textarea":
				$valuearray[$onlyInformation["FIELD_ID"]] = $onlyInformation["USER_TEXT"];
				break;

				case "dropdown":
				$valuearray[ $onlyInformation["FIELD_ID"]] = $onlyInformation["ANSWER_TEXT"];
				break;

				case "checkbox":
				$valuearray[$onlyInformation["FIELD_ID"]] = "Это Популярный товар";
				break;
			}


		}

	}//var_dump($valuearray);
			echo  "<th>".$valuearray[33]."</th>"; 
			echo  "<th>".$valuearray[34]."</th>"; 
			echo  "<th>".$valuearray[37]."</th>"; 
			echo  "<th>".$valuearray[36]."</th>"; 
			echo  "<th>".$valuearray[35]."</th>"; 

	echo "</tr>";
}
?>
</table>
</div>