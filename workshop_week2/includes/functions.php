<?php
function ShowDate()
{
    //Haal de datum over een week op.
    $date = date("d-m-y", strtotime("+  1 week"));
    $message = "De datum over een week: $date";



    return $message;
}


//Functie die zich gedraagd als stoplicht
function TrafficLight($color, $ambulance)
{
    if($color == "green" && $ambulance == false)
    {
        $result = "Je mag doorrijden! De kleur is: $color";
    }
    else
    {
        $result = "Je moet stoppen! De kleur is: $color";
    }

    return $result;
}

//5000 euro sparen en ik kan elke maand 100 euro inleggen

function SavingGoal($goal, $monthly)
{
    $savings = 0;
    $month = 0;
    $intrest = 1.02;
    $showMessage = true;


    while($savings < $goal)
    {
        $savings = $savings + $monthly;
        $savings = $savings * $intrest;
        $month++;

        if($savings >= ($goal/2) && $showMessage == true) {
            echo "Je bent op de helft.";
            $showMessage = false;
        }
        echo "In maand $month heb ik $savings gespaard.<br>";
    }

    return "Ik heb $month maanden nodig om mijn $goal te halen.";

}
//Aanroepen van een functie
echo SavingGoal(7000, 100);



?>
