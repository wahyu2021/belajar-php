<?php

// $number = array(1,2,3,4);
// echo "Array: ";
// echo $number[1];
// echo "\n";
// echo var_dump($number);
// unset($number[0]);
// echo "\n";
// echo var_dump($number);
// echo var_dump(count($number));

// $first = [
//     "first_name" => "Wahyu"
// ];

// $last = [
//     "last_name" => "Wahid"
// ];

// $full = $first + $last;
// echo var_dump($full);

// $last["middle_name"] = "Nugroho";
// echo var_dump($last);

// $name = "Wahyu Wahid Nugroho";
// $age = 19;

// echo "Name : " . $name . PHP_EOL;
// echo "Umur : " . $age . PHP_EOL;

// for(; ;){
//     echo "Andini 💓 ";
//     usleep(500000);
// }

// $names = [
//     "Alice", "Bob", "Charlie", "David", "Eva", "Frank", "Grace", "Hank", "Ivy", "Jack",
//     "Kathy", "Leo", "Mona", "Nathan", "Olivia", "Paul", "Quincy", "Rachel", "Sam", "Tina",
//     "Uma", "Victor", "Wendy", "Xander", "Yara", "Zack", "Adam", "Bella", "Carl", "Diana",
//     "Ethan", "Fiona", "George", "Hannah", "Ian", "Julia", "Kevin", "Lara", "Mike", "Nina",
//     "Oscar", "Penny", "Quinn", "Ruby", "Steve", "Tracy", "Ursula", "Vince", "Will", "Xena",
//     "Yasmin", "Zane", "Aaron", "Bianca", "Colin", "Daphne", "Edward", "Frances", "Gary", "Hazel",
//     "Isaac", "Jade", "Kyle", "Laura", "Mark", "Nora", "Owen", "Paula", "Quinton", "Rose",
//     "Sean", "Tara", "Ulysses", "Valerie", "Wes", "Ximena", "Yosef", "Zoey", "Amber", "Blake",
//     "Cindy", "Derek", "Elena", "Felix", "Gloria", "Harvey", "Ingrid", "James", "Kara", "Liam",
//     "Megan", "Nick", "Oscar", "Pam", "Quinn", "Ryan", "Sophia", "Tom", "Ursula", "Vanessa"
// ];

// foreach ($names as $name){
//     echo "Nama : $name" . PHP_EOL;
// }

$people = [
    "person1" => "Alice",
    "person2" => "Bob",
    "person3" => "Charlie",
    "person4" => "David",
    "person5" => "Eva",
    "person6" => "Frank",
    "person7" => "Grace",
    "person8" => "Hank",
    "person9" => "Ivy",
    "person10" => "Jack"
];

foreach($people as $key => $value){
    echo "Nama: $value ($key)" . PHP_EOL;
}