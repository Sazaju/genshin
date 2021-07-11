<?php
	require_once("./php/cards.php");
	
	echo Card::getCard("???")->render("???");
	foreach(Card::getAllCards() as $id => $card) {
		echo $card->render("xxx");
	}
?>
