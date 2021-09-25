<?php

$movies = [

'Firewall' => 2006,
'Blade Runner' => 1982,
'Le fugitif' => 1993

];



array_multisort($movies);

foreach($movies as $key => $releaseDate){
     
    echo '<p>'.$releaseDate. '  -  '.$key. '</p>';
  
};


?>

