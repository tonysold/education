<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{userName}', function ($userName)
{
$users = [ 

    'user1' => 'city1', 
   
    'user2' => 'city2', 
   
    'user3' => 'city3', 
   
    'user4' => 'city4', 
   
    'user5' => 'city5' 
   
];

if (array_key_exists($userName, $users)) {
    return $users[$userName];
}
else echo "Пользователь с именем $userName не найден.";
})
?>  