<?php	

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



	if (file_exists('count_file.txt')) 
	{
		$fil = fopen('count_file.txt', r);
		$dat = fread($fil, filesize('count_file.txt')); 
		$fdat = $dat+1;
//		echo $fdat;
		fclose($fil);
		$fil = fopen('count_file.txt', w);
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('count_file.txt', w);
		fwrite($fil, 1);
		echo '1';
		fclose($fil);
	}






include_once('simple_html_dom.php');

// Создаем объект DOM на основе кода, полученного по ссылке

$html = file_get_html($_GET['perpetual']);

foreach($html->find('div[id=desc_text]') as $element) 
//echo $element->innertext;
$bodytag01 = str_replace("<p>", "", $element->innertext);
$bodytag02 = str_replace("<br />", "<BR>", $bodytag01);
$bodytag03 = str_replace("</p>", "", $bodytag02);
//$bodytag03s = substr_replace($bodytag03, 0, 3);
$bodytag03s = stristr($bodytag03, "br");
$bodytag03ss = substr_replace($bodytag03s, null, 0, 3);
$bodytag03swag = str_replace("<BR>", "atgs", $bodytag03ss);
$bodytag03satg = str_replace("\t", " ", $bodytag03swag);
//$bodytag03satgx = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/","",$bodytag03satg);
$string = strtolower(preg_replace('/[^a-zA-ZА-Яа-я0-9\s]/',' ',iconv('UTF-8','cp1251',$bodytag03satg)));
$string = iconv('cp1251','UTF-8',$string);
$string = str_replace("atgs", "\\n", $string);
//echo $string;
if ($string=="") {exit(1);}else{ }


//echo "Rem ";
//echo "`";
//echo ";";
// Текст цены объявления
//foreach($html->find('div[class=item_similars_p]') as $key=>$element)
//{
//${'A' . $key} = $element->innertext;
//}
////echo $A0;
//$pricetag00 = str_replace("&nbsp;", "", $A0);
//$pricetag01 = str_replace(" ", "", $pricetag00);
//$pricetag02 = str_replace(".", "", $pricetag01);
//$pricetag03 = str_replace("р", "", $pricetag02);
//echo $pricetag03;
//echo ";";
//echo $_GET['bob'];
//echo "`";


foreach($html->find('a[class=breadcrumb-link]') as $key=>$element)
{
${'F' . $key} = $element->innertext;
}
//{\"data\":\"https://www.avito.ru/additem\",\"evType\":\"redirect\",\"newValue\":\"\"},
echo "{\"action\":[{\"data\":\"document.getElementsByClassName(\\\"col-3 form-section__title\\\")\\n[0].innerHTML = \\\"";
echo $F3;
echo " | ";
echo $F4;
echo " | ";
echo $F5;
echo "\\\";\",";
echo "\"evType\":\"inject\",\"newValue\":\"\"},{\"data\":\"span:contains('";
if ($F1=="") {echo "_";}else{echo $F1;}
echo "')\",\"evType\":\"click\",\"newValue\":\"\"},{\"data\":\"span:contains('";
if ($F2=="") {echo "_";}else{echo $F2;}
echo "')\",\"evType\":\"click\",\"newValue\":\"\"},{\"data\":\"span:contains('";
if ($F3=="") {echo "_";}else{echo $F3;}
echo "')\",\"evType\":\"click\",\"newValue\":\"\"},{\"data\":\"#item-edit__title\",\"evType\":\"change\",\"newValue\":\"";
// ================== Текст заголовка объявления
echo " ";
// ================== Текст заголовка объявления
echo "\"},";
//echo "\",\"msgType\":\"userEvent\"},";
echo "{\"data\":\"#item-edit__description\",\"evType\":\"change\",\"newValue\":\"";
// ================== Текст описания объявления
foreach($html->find('h1[itemprop=name]') as $element) 
echo $element->innertext;
echo "\\n";
foreach($html->find('div[id=desc_text]') as $element) 
//echo $element->innertext;
$bodytag01 = str_replace("<p>", "", $element->innertext);
$bodytag02 = str_replace("<br />", "<BR>", $bodytag01);
$bodytag03 = str_replace("</p>", "", $bodytag02);
//$bodytag03s = substr_replace($bodytag03, 0, 3);
$bodytag03s = stristr($bodytag03, "br");
$bodytag03ss = substr_replace($bodytag03s, null, 0, 3);
$bodytag03swag = str_replace("<BR>", "atgs", $bodytag03ss);
$bodytag03satg = str_replace("\t", " ", $bodytag03swag);
//$bodytag03satgx = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/","",$bodytag03satg);
$string = strtolower(preg_replace('/[^a-zA-ZА-Яа-я0-9\s]/',' ',iconv('UTF-8','cp1251',$bodytag03satg)));
$string = iconv('cp1251','UTF-8',$string);
$string = str_replace("atgs", "\\n", $string);
echo $string;








// Изображения объявления

foreach($html->find('a[data-fallback]') as $key=>$element)
{
${'A' . $key} = $element->href;
}


$gen1 = generateRandomString();
$gen2 = generateRandomString();
$gen3 = generateRandomString();
$gen4 = generateRandomString();
$gen5 = generateRandomString();
$gen6 = generateRandomString();

echo "\\n";
echo "..\\\\" . $gen1;
// ================== Текст описания объявления
echo "\",\"msgType\":\"userEvent\"},{\"data\":\"#item-edit__price\",\"evType\":\"change\",\"newValue\":\"";
echo $_GET['t'];
echo "\",\"msgType\":\"userEvent\"}],\"name\":\"";
echo $fdat;
echo "\",\"level\":\"1\",\"isLeaf\":true,\"expanded\":false,\"loaded\":true},";
echo "\n\n\n\n\n";

echo $gen1;
echo ".jpg";
echo "`";

echo $gen2;
echo ".jpg";
echo "`";

echo $gen3;
echo ".jpg";
echo "`";

echo $gen4;
echo ".jpg";
echo "`";

echo $gen5;
echo ".jpg";
echo "`";

echo $gen6;
echo ".jpg";
echo "`";


//$abx0 = substr($A0, -14);
//echo $abx0;
//echo "`";
//$abx1 = substr($A1, -14);
//echo $abx1;
//echo "`";
//$abx2 = substr($A2, -14);
//echo $abx2;
//echo "`";
//$abx3 = substr($A3, -14);
//echo $abx3;
//echo "`";
//$abx4 = substr($A4, -14);
//echo $abx4;
//echo "`";
//$abx5 = substr($A5, -14);
//echo $abx5;
//echo "`";


echo "`";
echo "C:\\Users\\1\\gbot\\1\\" . $gen1;
echo "`";

echo "\n";
echo "IF EXIST renmode ( ren \"%~nx0\" ".$fdat.".bat ) ELSE ( goto mainalgo )\n";
echo ":mainalgo\n";


echo "\n";
echo "\n";
echo "mkdir " . $gen1;
echo "\n";
//echo $A0;
$abs0 = substr($A0, -14);
$imgtag00 = str_replace("//", "wget --no-check-certificate https://", $A0);
echo $imgtag00 . " -O " . $abs0;
//renaming AIVOT shit to refrain from filename recognition


echo "\n";
echo "convertk -shave 1x51 ";
echo $abs0;
echo " ";
echo $gen1;
echo "\\";
echo $gen1;
echo ".jpg";
echo "\n";

//echo $A1;
$imgtag01 = str_replace("//", "wget --no-check-certificate https://", $A1);
$abs1 = substr($A1, -14);
echo $imgtag01 . " -O " . $abs1;
//renaming AIVOT shit to refrain from filename recognition
echo "\n";
echo "convertk -shave 1x51 ";
echo $abs1;
echo " ";
echo $gen1;
echo "\\";
echo $gen2;
echo ".jpg";
echo "\n";

//echo $A2;
$imgtag02 = str_replace("//", "wget --no-check-certificate https://", $A2);
$abs2 = substr($A2, -14);
echo $imgtag02 . " -O " . $abs2;
//renaming AIVOT shit to refrain from filename recognition
echo "\n";
echo "convertk -shave 1x51 ";
echo $abs2;
echo " ";
echo $gen1;
echo "\\";
echo $gen3;
echo ".jpg";
echo "\n";

//echo $A3;
$abs3 = substr($A3, -14);
$imgtag03 = str_replace("//", "wget --no-check-certificate https://", $A3);
echo $imgtag03 . " -O " . $abs3;
//renaming AIVOT shit to refrain from filename recognition
echo "\n";
echo "convertk -shave 1x51 ";
echo $abs3;
echo " ";
echo $gen1;
echo "\\";
echo $gen4;
echo ".jpg";
echo "\n";

//echo $A4;
$abs4 = substr($A4, -14);
$imgtag04 = str_replace("//", "wget --no-check-certificate https://", $A4);
echo $imgtag04 . " -O " . $abs4;
echo "\n";
//renaming AIVOT shit to refrain from filename recognition
echo "convertk -shave 1x51 ";
echo $abs4;
echo " ";
echo $gen1;
echo "\\";
echo $gen5;
echo ".jpg";
echo "\n";

//echo $A5;
$abs5 = substr($A5, -14);
$imgtag05 = str_replace("//", "wget --no-check-certificate https://", $A5);
echo $imgtag05 . " -O " . $abs5;
echo "\n";
//renaming AIVOT shit to refrain from filename recognition
echo "convertk -shave 1x51 ";
echo $abs5;
echo " ";
echo $gen1;
echo "\\";
echo $gen6;
echo ".jpg";
echo "\n";


echo "rem ";
foreach($html->find('div[class=item-subtitle]') as $element) 
echo $element->href .' ('. $element->innertext. ')<br>';


foreach($html->find('div[class=item-subtitle]') as $key=>$element) 
{
${'V' . $key} = $element->innertext;
}

echo $V1;
echo "\n";


echo "rem ";
foreach($html->find('span[class=js-show-stat]') as $element) 
echo $element->href .' ('. $element->innertext. ')<br>';


foreach($html->find('span[class=js-show-stat]') as $key=>$element) 
{
${'L' . $key} = $element->innertext;
}

echo $L1;


echo "\n";
//echo "iconv -f utf-8 -t cp1251 %~nx0>";
echo "type %~nx0>";

echo $fdat;


echo ".csv\n\n\n\n";




//echo "EXIT /B\n\n\n";


?>
