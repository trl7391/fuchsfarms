<?php


//$contents = file_get_contents('http://dtn.ilfb.org/index.cfm?show=31&mid=5');
//print_r($contents);
//$contents = file_get_contents('http://growers-edge.com/gelocalcashprices.aspx?newzip=61479');
//print_r($contents);

 /*
 $data = file_get_contents('http://www.wics.com/shared/news/features/sunrise-farm/stories/');
 $regex = '/CASH PRICE (.+?) results/';
 preg_match($regex,$data,$match);
 var_dump($match); 
 echo $match[1];
 */

 
 function file_get_contents_curl($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$data = curl_exec($ch);
curl_close($ch);

return $data;
}
function DOMinnerHTML($element){ 
$innerHTML = ""; 
$children = $element->childNodes; 
foreach ($children as $child) 
{ 
    $tmp_dom = new DOMDocument(); 
    $tmp_dom->appendChild($tmp_dom->importNode($child, true)); 
    $innerHTML.=trim($tmp_dom->saveHTML()); 
} 
return $innerHTML; 
}
//http://growers-edge.com/gelocalcashprices.aspx?newzip=61479
//http://www.agweb.com/markets/cash_grain_bids.aspx
$url  = 'http://growers-edge.com/gelocalcashprices.aspx?newzip=61479';
$html = file_get_contents_curl($url);

//parsing begins here:
$doc = new DOMDocument();
@$doc->loadHTML($html);
$div_elements = $doc->getElementsByTagName('td');

if ($div_elements->length <> 0){
foreach ($div_elements as $div_element) {
    if ($div_element->getAttribute('class') == 'homepagebannermiddle'){
        //id-----CT_Main_1_pnlContent
        $reviews[] = DOMinnerHTML($div_element);

    }
}
}

print_r ($reviews);



?>

