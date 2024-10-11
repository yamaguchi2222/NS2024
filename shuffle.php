<?php
function $shuffleCards(){
$cards = range(1, 8);
$cards = array_merge($cards, $cards);
shuffle($cards);
return $cards;
}
?>