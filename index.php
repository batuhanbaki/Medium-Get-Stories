
<html>
<head>
<meta charset="UTF-8"/>
<title>Medium İçeriği</title>
</head><body>

<?php

function callAPI(){
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@batuhannbaki',
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ]);
    
    if (!curl_exec($curl)) {
        die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
    }
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);

    return $resp;
 }




 $get_data = callAPI();
 $response = json_decode($get_data, true);
 $errors = $response['response']['errors'];
 $data = $response['response']['data'][0];

  //print_r($get_data);


for($i=0;$i<count($response["items"]);$i++){

 echo $response["items"][$i]["title"]."<br>";
 echo "<a href='".$response["items"][$i]["link"]."' target='_blank'> <img src='".$response["items"][$i]["thumbnail"]."' title='".$response["items"][$i]["title"]. "' /></a><br>";
 print_r($response["items"][$i]['categories']);
 echo "<br>";
}
?>
</body>
</html>