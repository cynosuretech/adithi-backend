!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Data Managing</title>
</head>
<?php
//db connection
<?php ob_start();
// Set Database name;
try{
     $database = "Adithi";
 $db = new PDO('mysql:host=localhost;dbname=u854448456_ adith;charset=utf8mb4', 'u854448456_ adith', 'AYYOpovalle$5!@');
     //$con = mysqli_connect("bookyourmusician.com", "bookyour_music", "$BookMYMUS%*@#", $database);
}
catch(PDOException $ex) {
    die('Could not connect: ' . $ex);
}



// define variables and set to empty values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//POST request is JSON encoded, meaning normal $_POST won't work.
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$vname = test_input($request->visitor_name);
$vphone =  test_input($request->phone);
$vemail = test_input($request->email);
$pov =  test_input($request->purpose_of_visit);
$visitee_name = test_input($request->visitee_name);
$vdate = date("d M Y");

$vname = "Peter"
$vphone =  "12345s6";
$vemail = "not_spiderman@gmail.com";
$pov = "To join Avengers";
$visitee_name = "Stark";


$query1 = "INSERT INTO `u854448456_ adith.`visitor`(`vdate`, `visitor_name`, `phone`, `email`, `purpose_of_visit`, `visitee_name`)VALUES ('$vdate' , '$vname' , '$phone' , '$email' , '$pov' , '$visitee_name')";
$result = $db->query($query1) ;

}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


  </body>
</html>