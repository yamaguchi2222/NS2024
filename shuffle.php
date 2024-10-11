<?php
$cards = range(1, 8);
$cards = array_merge($cards, $cards);
shuffle($cards);
?>