<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$model = $_POST['models'];
$options = $_POST['options'];
$message = $_POST['message'];
$formcontent="From: $name \n Mobile No: $phone  \n Model: $model \n Dealer: $options ";

if($options == 'Green Honda-Nagole,Hyderabad/Secunderabad') { 
    $to = 'saleshead@metrohonda.in, leads@hondacarssouth.com';
    $otpcellno = '9849227676,7893143843';
}
if($options == 'Metro Honda-Bowenpally,Hyderabad/Secunderabad') {
    $to = 'saleshead@metrohonda.in, leads@hondacarssouth.com';
    $otpcellno = '9849227676,7893143843';
}

if($options == 'Pride Honda-Madhapur,Hyderabad') { 
    $to = 'sm.madhapur@pridehonda.in, leads@hondacarssouth.com';
    $otpcellno = '8499974558';
}

if($options == 'Pride Honda-Banjarahills,Hyderabad') { //other options
    $to = 'bmbh12@pridehonda.in, leads@hondacarssouth.com';
    $otpcellno = '9505368811';
}

if($options == 'Pride Honda-Miyapur,Hyderabad') { //other options
    $to = 'salesmgr.myp@pridehonda.com, leads@hondacarssouth.com';
    $otpcellno = '9989647874';
}

if($options == 'Sundaram Honda-Ranigunj,Hyderabad') { //other options
    $to = 'honsalmgr.sec@tvs.in, leads@hondacarssouth.com';
    $otpcellno = '7330832233';
}

if($options == 'Green Honda-Warangal') { //other options
    $to = 'sm_warangal@greenhonda.in, leads@hondacarssouth.com';
    $otpcellno = '7799701912';
}

if($options == 'Green Honda-Karimnagar') { //other options
    $to = 'sm_karimnagar@greenhonda.in, leads@hondacarssouth.com';
    $otpcellno = '9100032923';
}


if($options == 'Green Honda-Nizamabad') { //other options
    $to = 'sm_nizamabad@greenhonda.co.in, leads@hondacarssouth.com';
    $otpcellno = '9553377496';
}

if($options == 'Green Honda-Kammam') { //other options
    $to = 'sm_warangal@greenhonda.in, leads@hondacarssouth.com';
    $otpcellno = '7799701912';
}

if($options == 'Green Honda-Mahabubnagar') { //other options
    $to = 'asm_hyd@greenhonda.in, leads@hondacarssouth.com';
    $otpcellno = '7799019430';
}


if($options == 'Pride Honde-Nalgonda') { //other options
    $to = 'sm.nlg@pridehonda.com, leads@hondacarssouth.com';
    $otpcellno = '9848532368';
}

if($options == 'Sundaram Honda-Vijaywada') { //other options
    $to = 'honsalmgr.vij@tvs.in, leads@hondacarssouth.com';
    $otpcellno = '7995666510';
}

if($options == 'Central Honda-Vizag') { //other options
    $to = 'sm.vizag@centralhonda.co.in, leads@hondacarssouth.com';
    $otpcellno = '8886635028';
}

if($options == 'Sundaram Honda-Vizag') { //other options
    $to = 'honsalmgr_viz@sundarammotors.com, leads@hondacarssouth.com';
    $otpcellno = '9849120325';
}



if($options == 'Express Honda-Guntur') { //other options
    $to = 'ceo@expresshonda.com, leads@hondacarssouth.com';
    $otpcellno = '9000947144';
}



if($options == 'Express Honda-Nellore') { //other options
    $to = 'ceo@expresshonda.com, leads@hondacarssouth.com';
    $otpcellno = '9000947144';
}


if($options == 'Elite Honda-Rajahmundry') { //other options
    $to = 'sales@elitehonda.co.in, leads@hondacarssouth.com';
    $otpcellno = '7799900555';
}


if($options == 'Premium Honda-Anantapur') { //other options
    $to = 'gm@premiumhonda.com, leads@hondacarssouth.com';
    $otpcellno = '9100056555';
}

if($options == 'Premium Honda-Kurnool') { //other options
    $to = 'agm@premiumhonda.com, leads@hondacarssouth.com';
    $otpcellno = '9100102999';
}

if($options == 'Express Honda-Ongole') { //other options
    $to = 'ceo@expresshonda.com, leads@hondacarssouth.com';
    $otpcellno = '9000947144';
}

if($options == 'Sundaram Honda-Eluru') { //other options
    $to = 'honsalmgr.elu@tvs.in, leads@hondacarssouth.com';
    $otpcellno = '7995666510';
}

if($options == 'Elite Honda-Kakinada') { //other options
    $to = 'saleskkd@elitehonda.co.in, leads@hondacarssouth.com';
    $otpcellno = '7799137333';
}

if($options == 'Express Honda-Tirupati') { //other options
    $to = 'ceo@expresshonda.com, leads@hondacarssouth.com';
    $otpcellno = '9000947144';
}

if($options == 'Premium Honda-Kadapa') { //other options
    $to = 'gm@premiumhonda.com, leads@hondacarssouth.com';
    $otpcellno = '9100056555';
}

if($options == 'Elite Honda-Bhimavaram') { //other options
    $to = 'salesbvrm@elitehonda.co.in, leads@hondacarssouth.com';
    $otpcellno = '7799900553';
}





$subject = "Enquiry from Honda ap & ts website";
$mailheader = "From: $email \r\n";
mail($to, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You! <br /> We will get in touch with you as soon as possible.";




$abc="Dear Member, Important information regarding \n Test Driving \n From: $name \n Mobile No: $phone  \n Area: $options   \n Model: $model \n SMSTEX";
 $url = curl_init("http://sms.pavansms.com/v3/api.php?username=madworks&apikey=417b417817f4cbb8323a&mobile=$otpcellno&senderid=SMSTEX&message=".urlencode($abc));    
curl_setopt($url, CURLOPT_POST, true);
$response = curl_exec($url);
//echo $response;


$servername = "localhost";
$username = "u468158713_leads";
$password = "Honda@leads123";
$database = "u468158713_honda_leads";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO `Leads_info`( `NAME`, `MOBILE`, `EMAIL`, `MODEL`, `DEALER`,`DATE`) VALUES ('$name','$phone','$email','$model','$options',curdate())";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


header("Location: thank-you.html");



?>
