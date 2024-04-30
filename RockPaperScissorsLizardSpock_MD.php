<?php
function CreateChoiceText($availablechoices){
    for ($i = 0; $i < count($availablechoices); $i++)
    {
        echo $i.":".$availablechoices[$i]."\n";
    }
}
function determineWinner($playerA, $playerB):string {
    if ($playerA == $playerB) {
        return "It's a tie!";
    } elseif (($playerA + 1) % 5 == $playerB % 5 || ($playerA + 3) % 5 == $playerB % 5) {
        return "Player wins!" ;
    } else {
        return "Computer wins!" ;
    }
}
$choices = ["rock", "lizard", "spock", "scissors", "paper" ];
$computerchoice = rand(0,4);
($playerchoice = readline("Which do you pick ".CreateChoiceText($choices). "Make choice by writing number! \n"));
if ($playerchoice < 0 || $playerchoice > 4) {
    Exit("Invalid choice!.");
}
echo "Your choice: " . $choices[$playerchoice]."\n";
echo "Computer's choice: " . $choices[$computerchoice]."\n";
echo determineWinner($playerchoice, $computerchoice);

//salidzina vai playerchoice ir vienads ar abam uzvaras kombinacijam ja nav, computer uzvar
// izmantoju % lai varetu no pedejas izveles 4 tikt uz nakama kas ir , jo 4+1%5 = 0




