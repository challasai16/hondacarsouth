<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$model = $_POST['models'];
$state = $_POST['state']; // Assuming you have a hidden input field named 'state'


if ($state == 'Kerala') {
    $options = $_POST['options_kerala'];
} elseif ($state == 'Andhra Pradesh') {
    $options = $_POST['options_andhra'];
} elseif ($state == 'Telangana') {
    $options = $_POST['options_telangana'];
}


// $to = 'shiva@gmail.com';

// $formcontent = "From: $name \n Mobile No: $phone \n Model: $model \n Area: $options \n State: $state";

// if($options == 'Mountroad') { 
//     $to = 'honsalmgr.chn@tvs.in, leads@hondacarssouth.com';
//     $otpcellno = '9789849383,7893143843';
// }
// if($options == 'Nandanam') { 
//     $to = 'honsalmgr.ndm@tvs.in, chennai@tejapublicities.com';
//     $otpcellno = '9940062340';
// }

// if($options == 'Ambattur') { 
//     $to = 'businesshead.honda@khivrajvahan.com, chennai@tejapublicities.com';
//     $otpcellno = '9841374252';
// }

// if($options == 'Annanagar') { 
//     $to = 'businesshead.honda@khivrajvahan.com, chennai@tejapublicities.com';
//     $otpcellno = '9841374252';
// }

// if($options == 'Tiruvallur') { 
//     $to = 'businesshead.honda@khivrajvahan.com, chennai@tejapublicities.com';
//     $otpcellno = '9841374252';
// }

// if($options == 'omrChennai') { 
//     $to = 'digitalmarketing@capitalhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9884137000';
// }

// if($options == 'gstChennai') { 
//     $to = 'digitalmarketing@capitalhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9884137000';
// }

// if($options == 'velacheryChennai') { 
//     $to = 'digitalmarketing@capitalhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9884137000';
// }


// if($options == 'porurChennai') { 
//     $to = 'sm@maansarovarhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '8939828004';
// }

// if($options == 'vadapalaniChennai') { 
//     $to = 'sm_vad@maansarovarhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '8939834111';
// }

// if($options == 'Vellore') { 
//     $to = 'sm@balajihonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9043007636';
// }


// if($options == 'balajiKanchipuram') { 
//     $to = 'kpm@balajihonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9043007635';
// }

// if($options == 'urapakkamKancheepuram') { 
//     $to = 'sm.cpt@balajihonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9489988075';
// }

// if($options == 'avinashiCoimbatore') { 
//     $to = 'sqm@manchesterhonda.co.in, chennai@tejapublicities.com';
//     $otpcellno = '9500288688';
// }

// if($options == 'pollachiCoimbatore') { 
//     $to = 'sales.pollachi@manchesterhonda.co.in, chennai@tejapublicities.com';
//     $otpcellno = '9786788688';
// }



// if($options == 'mettupalayamCoimbatore') { 
//     $to = 'honsalmgr.cbe@tvs.in, chennai@tejapublicities.com';
//     $otpcellno = '9384832072';
// }



// if($options == 'Cuddalore') { 
//     $to = 'digitalmarketing@capitalhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9884137000';
// }


// if($options == 'Erode') { 
//     $to = 'honsalmgr.erd@tvs.in, chennai@tejapublicities.com';
//     $otpcellno = '9789079013';
// }


// if($options == 'Madurai') { 
//     $to = 'honsalmgr.mdu@tvs.in, chennai@tejapublicities.com';
//     $otpcellno = '9384698065';
// }

// if($options == 'Nagercoil') {
//     $to = 'salesngl@southernhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '7338872170';
// }

// if($options == 'Tuticorin') {
//     $to = 'salesmgr@southernhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '8489615548';
// }

// if($options == 'Tirunelveli') { 
//     $to = 'salesmgr@southernhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '8489615548';
// }

// if($options == 'Pondicherry') { 
//     $to = 'digitalmarketing@capitalhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9884137000';
// }

// if($options == 'Salem') { //other options
//     $to = 'honsalsqm.slm@tvs.in, chennai@tejapublicities.com';
//     $otpcellno = '9384832031';
// }

// if($options == 'Hosur') { //other options
//     $to = 'salesmanager@grandhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '8940086611';
// }

// if($options == 'Thanjavur') { //other options
//     $to = 'digitalmarketing@capitalhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9884137000';
// }

// if($options == 'Trichy') { //other options
//     $to = 'digitalmarketing@capitalhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9884137000';
// }

// if($options == 'Karur') { //other options
//     $to = 'honsaltl.karur@tvs.in, chennai@tejapublicities.com';
//     $otpcellno = '9384832033';
// }

// if($options == 'Tirupur') { //other options
//     $to = 'honsalmgr.tpr@tvs.in, chennai@tejapublicities.com';
//     $otpcellno = '9600354477';
// }

// if($options == 'Pudukotai') { //other options
//     $to = 'digitalmarketing@capitalhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9884137000';
// }

// if($options == 'Kumbakonam') { 
//     $to = 'digitalmarketing@capitalhonda.in, chennai@tejapublicities.com';
//     $otpcellno = '9884137000';
// }
// if (!isset($to)) {
//     $to = 'shiva@gmail.com';
// }
// $subject = "Enquiry from Website";
// $mailheader = "From: $email \r\n";
// mail($to, $subject, $formcontent, $mailheader) or die("Error!");





// $abc="Dear Member, Important information regarding \n Test Driving \n From: $name \n Mobile No: $phone  \n Area: $options   \n Model: $model \n SMSTEX";
//  $url = curl_init("http://sms.pavansms.com/v3/api.php?username=madworks&apikey=417b417817f4cbb8323a&mobile=$otpcellno&senderid=SMSTEX&message=".urlencode($abc));    
// curl_setopt($url, CURLOPT_POST, true);
// $response = curl_exec($url);
// echo $response;


$servername = "localhost";
    $username = "u468158713_leads";
    $password = "Honda@leads123";
    $database = "u468158713_honda_leads";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$sql = "INSERT INTO `hondaform` (`NAME`, `MOBILE`, `EMAIL`, `MODEL`, `STATE`, `OPTIONS`) VALUES ('$name','$phone','$email','$model','$state','$options')";
echo $sql;
echo "Selected Options: $options";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: thank-you.html");

?>
