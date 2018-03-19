<?php
function diamont($number){
    for ($brake = 1; $brake <= $number; $brake++) {
        for ($dot = $brake; $dot <= $number; $dot++)
            echo "&nbsp;&nbsp;&nbsp;";
        for ($dot = 2 * $brake - 1; $dot > 0; $dot--)
            echo("&nbsp;*&nbsp;");
        echo "<br>";
    }
    for ($brake = $number; $brake >= 0; $brake--) {
        for ($dot = $number - $brake; $dot >= 0; $dot--)
            echo "&nbsp;&nbsp;&nbsp;";
        for ($dot = 2 * $brake - 1; $dot > 0; $dot--)
            echo("&nbsp;*&nbsp;");
        echo "<br>";
    }
}