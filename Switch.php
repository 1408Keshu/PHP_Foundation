<?php
// $grade = "k";
// switch( $grade){
//     case "A":
//         echo "You did Great";
//         break;
//         case "B":
//             echo  "you did good";
//             break;
//             case "C":
//                 echo  "you did okay";
//                 break;
//                 case "D":
//                     echo  "you did poorly";
//                     break;
//                     case "F":
//                     echo "You got failed";
//                     break;
//                     default :
//                     echo "{$grade} is not valid";
    
// }
$day  = date("1");
$day  = "Tuesday";
switch( $day ){
    case "Monday":
        echo "I hate Monday";
        break;
    case "Tuesday":
        echo "Its Tension Tuesday ";
        break;
    case "Wednesday":
        echo "Its a half of the week";
        break;
    case "Thursday":
        echo "Its's almost Weekend";
        break;
        case "Friday":
            echo "The weekend is here ";
        break;
    case "Saturday":
        echo "Time to Party";
        break;
    case "Sunday":
        echo "What Tommorrow is Monday, Again!!!";
        break;
    default :
    echo "Its a invalid day";

}
?>