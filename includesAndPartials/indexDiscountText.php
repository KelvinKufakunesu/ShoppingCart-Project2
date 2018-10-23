<?php
//Discount text on index-page if Monday or Friday
if(date("l") === "Monday"){
    echo "<div class='dicountText'>Today is Lucky Monday! Everything is 50 % off!</div>";
}else if(date("l") === "Friday"){
    echo "<div class='dicountText'>Happy Friday! 20 kr discount on all products over 200 kr.</div>";
}?>