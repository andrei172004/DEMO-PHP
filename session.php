<?php
//$color = array();

//$color = ["green","blue","red","black"];

//echo json_encode($color)."<br>";
//unset($color[1]);
//echo json_encode($color)."<br>";

//$data= ["john doe", "23", "Bacoor, Cavite", "BSIT", "4102", "092458385638", "bakajdoe@gmail.com"];
//echo json_encode($data);



/*$student = ["name" => "rere",
            "course" => "BSA",
            "email" => "bakarereto@test.com",
            "address"=> "Bacoor Cavite"];

foreach($student as $row){
    echo $row."<br";
}

function showName($name,$number){
    echo "HELLO THERE," .$name.", your total amount due is ".$number;

}
$amount = 3500;
showName("John Doe", $amount); */


function computeFare($fareAmount, $discout){
    $totalDiscount = $fareAmount * ($discout/100);
    $totalFare = $fareAmount - $totalDiscount;
    return $totalFare;

echo computeFare(200,20);

}
?>