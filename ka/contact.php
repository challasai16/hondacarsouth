<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$model = $_POST['models'];
$options = $_POST['options'];
$message = $_POST['message'];
$formcontent="From: $name \n Mobile No: $phone  \n Model: $model \n Dealer: $options ";

// 1
if($options == 'Brigade Honda - Yelahanka Habli, Bengalore') { 
    $to = 'gmsales@brigadehonda.com, leads@hondacarssouth.com';
    $otpcellno = '9845368622,7893143843';
}
// 2
if($options == 'Dakshin Honda - Hosur Road, Bengalore') {
    $to = 'gm.sales@dakshinhonda.com, saleshead@dakshinhonda.com, leads@hondacarssouth.com';
    $otpcellno = '9686324190,7893143843';
}

// 3
if($options == 'Dakshin Honda - Levelle Road, Bengalore') { 
    $to = 'gm.sales@dakshinhonda.com, salesmanager.1s@dakshinhonda.com, leads@hondacarssouth.com';
    $otpcellno = '6366971599';
}

// 4
if($options == 'Dakshin Honda - Mysore Road, Bengalore') { //other options
    $to = 'gm.sales@dakshinhonda.com, salesmanager.mysrd@dakshihonda.com, leads@hondacarssouth.com';
    $otpcellno = '9731265103';
}

// 5
if($options == 'Magnum Honda - Kanakapura, Bengalore') { //other options
    $to = 'salesmanager_kp@magnumhonda.com, leads@hondacarssouth.com';
    $otpcellno = '9972303622';
}

// 6
if($options == 'Mangnum Honda - Mehkhri Circle, Bengalore') { //other options
    $to = 'salesmanager_rmv@magnumhonda.com, leads@hondacarssouth.com';
    $otpcellno = '9845719770';
}

// 7
if($options == 'Whitefield Honda - Narayanapura, Bengalore') { //other options
    $to = 'managersales@whitefieldhonda.com, leads@hondacarssouth.com';
    $otpcellno = '9980137857';
}

// 8
if($options == 'Magnum Honda - Tumkur') { //other options
    $to = 'salesmanager.tmk@magnumhonda.com, leads@hondacarssouth.com';
    $otpcellno = '9916004127';
}

//9
if($options == 'Inspire Honda - Mysore') { //other options
    $to = 'marketing@inspirehonda.com, leads@hondacarssouth.com';
    $otpcellno = '9742297469';
}

// 10
if($options == 'Inspire Honda - Hassan') { //other options
    $to = 'marketing@inspirehonda.com, leads@hondacarssouth.com';
    $otpcellno = '9742422348';
}

// 11
if($options == 'Artha Honda - Mangalore') { //other options
    $to = 'sales@arthahonda.com, leads@hondacarssouth.com';
    $otpcellno = '9606965270';
}

// 12
if($options == 'Shama Honda - Udipi') { //other options
    $to = 'agm@shamahonda.com, leads@hondacarssouth.com';
    $otpcellno = '9008422177';
}

// 13
if($options == 'Lakeview Honda - Hubli') { //other options
    $to = 'salesmanager@lakeviewhonda.com, leads@hondacarssouth.com';
    $otpcellno = '7353100093';
}

// 14
if($options == 'Alpha Honda - Belagavi') { //other options
    $to = 'admin@alphahonda.com, leads@hondacarssouth.com';
    $otpcellno = '8657588418';
}





$subject = "Enquiry from Honda Karnataka Website";
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

$sql = "INSERT INTO `karnataka_honda_leads`( `NAME`, `MOBILE`, `EMAIL`, `MODEL`, `DEALER`,`DATE`) VALUES ('$name','$phone','$email','$model','$options',curdate())";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


session_start();
$_SESSION['user_details'] = [
    'name' => $name,
    'email' => $options,
    // Add more fields as needed
];


header("Location: thank-you.php?username=". $name);



?>
