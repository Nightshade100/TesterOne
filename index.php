<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>something</title>
</head>
<body>
    <form action=index.php method=post>
    <input type=radio name=credit_card value=Visa>Visa<br>
    <input type=radio name=credit_card value=Mastercard>Mastercard<br>
    <input type=radio name=credit_card value=Amex>Amex<br>
    <input type=submit name=confirm value=confirm>
    </form>
</body>
</html>


<?php
    if(isset($_POST['confirm']))
    {
        $credit_card = null;
        if(isset($_POST['credit_card'])) //This checks to see if a selection was made: i.e a value was assigned to $credit_card
        {
            $credit_card = $_POST['credit_card'];
            //echo"You selected {$credit_card}";
        }
        /*else{
            echo"Please make a selection";
        }*/

        switch($credit_card){
            case "Visa":
                echo"You selected Visa";
                break;
            case "Mastercarc":
                echo"You selected Mastercard";
                break;
            case "Amex":
                echo"You selected Amex";
                break;
            default:
                echo"Please make a selection";
                break;
                        
                    
        }

    }
?>