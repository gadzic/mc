
<?php


$api_url = 'https://survey.fast-insight.com/mcd/srb/coupon.php';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);


$patterns = array();
$patterns[0] = 'PDF';
$patterns[1] = 'TrendingThread';
$patterns[2] = 'href="https://survey.fast-insight.com/mcd/srb/coupon_pdf.php?couponcode=';
$patterns[3] = 'validtodate=';
$patterns[4] = '<img src="https://survey.fast-insight.com/mcd/hr/images/pdf1.png" style="width:60px;">';
$patterns[5] = '<img src="https://survey.fast-insight.com/mcd/srb/images/print.png" style="width:60px;">';
$patterns[6] = 'https://survey.fast-insight.com/mcd/srb/images/mail.png';
$patterns[7] = 'Ispišite kupon';
$patterns[8] = 'ILI POŠALJITE KUPON E-MAILOM NA:';


$replacements = array();
$replacements[8] = '';
$replacements[7] = '<a href="./">REFRESH</a>';
$replacements[6] = '> <img src="http://api.qrserver.com/v1/create-qr-code/?color=000000&amp;bgcolor=FFFFFF&amp;data=';
$replacements[5] = 'qzone=1&margin=0&size=150x150&';
$replacements[4] = '';
$replacements[3] = '';
$replacements[2] = '';
$replacements[1] = '';
$replacements[0] = '';

echo str_replace($patterns, $replacements,print_r($json_data,true));



//echo $json["slug"]->value ."<br/>";
//var_dump($json[1]->{'slug'});
//echo $data->slug[1]->value;


?>
