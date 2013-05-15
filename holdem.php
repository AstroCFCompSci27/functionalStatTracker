<!--
  
  File:         holdem.php
  Name:         Aaron Stroschein
  Date Created: 05.15.13
  
  Notes:
  
  This file is an experiment in php. I wanted to
  see just how functional I could treat a card
  game like Texas Hold'Em. So far all I have is
  the start of a program, but it is growing.
  
  As there is usually a standard of 52 cards in
  a playing card deck each suit and rank can be
  classified as one number. Winning combinations
  can be classified simply as arrays of numbers.
  
  This implementation of the game takes away the
  need for a lot of unnecessary variable names.
  
-->

<html>
<body>

<?php

$flush = array( 0, 0, 0, 0, 0 );
$straight = array( 0, 1, 2, 3, 4 );
$fullHouse = array( 0, 0, 1, 1, 1 );
$four = array( 0, 0, 0, 0, 1 );
$three = array( 0, 0, 0, 1, 2 );
$two = array( 0, 0, 1, 2, 3 );

$rank = array( 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4 );
$suit = array( 5, 1, 2, 3, 4 );

$random_card = array( rand( 0, 3 ), " : " , rand( 0, 12 ) );
echo $random_card[ 0 ], $random_card[ 1 ], $random_card[ 2 ] . "<br>";
$random_card_two = array( rand( 0, 3 ), " : " , rand( 0, 12 ) );
echo $random_card_two[ 0 ], $random_card_two[ 1 ], $random_card_two[ 2 ] . "<br>" . "<br>";

$random_card_three = array( rand( 0, 3 ), " : " , rand( 0, 12 ) );
echo $random_card_three[ 0 ], $random_card_three[ 1 ], $random_card_three[ 2 ] . "<br>";
$random_card_four = array( rand( 0, 3 ), " : " , rand( 0, 12 ) );
echo $random_card_four[ 0 ], $random_card_four[ 1 ], $random_card_four[ 2 ] . "<br>";
$random_card_five = array( rand( 0, 3 ), " : " , rand( 0, 12 ) );
echo $random_card_five[ 0 ], $random_card_five[ 1 ], $random_card_five[ 2 ] . "<br>";


$suitCollection = array( $random_card[ 0 ],
                         $random_card_two[ 0 ],
                         $random_card_three[ 0 ],
                         $random_card_four[ 0 ],
                         $random_card_five[ 0 ] );

$rankCollection = array( $random_card[ 2 ],
                         $random_card_two[ 2 ],
                         $random_card_three[ 2 ],
                         $random_card_four[ 2 ],
                         $random_card_five[ 2 ] );
                         
sort( $suitCollection, 1 );
sort( $rankCollection, 1 );
                         
echo $suitCollection[ 0 ] . " " .
     $suitCollection[ 1 ] . " " .
     $suitCollection[ 2 ] . " " .
     $suitCollection[ 3 ] . " " .
     $suitCollection[ 4 ] . "<br>";
     
echo $rankCollection[ 0 ] . " " .
     $rankCollection[ 1 ] . " " .
     $rankCollection[ 2 ] . " " .
     $rankCollection[ 3 ] . " " .
     $rankCollection[ 4 ] ;     

?>

</body>
</html>
