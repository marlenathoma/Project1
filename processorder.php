<?php
require_once("file_exceptions.php"); // Ensure the file exists in the right location

// Create short variable names from POST data
$Jewleryqty = (int) $_POST['Jewleryqty'];                                           
$Shoesqty = (int) $_POST['Shoesqty'];                                             
$Clothesqty = (int) $_POST['Clothesqty'];                                         
$address = preg_replace('/\t|\R/', ' ', $_POST['address']);                     
$date = date('H:i, jS F Y'); 

// Start HTML output
?>
<!DOCTYPE html>
<html>
<head>
    <title>Marlena's Vintage Shop - Order Results</title>
</head>
<body>
    <h1>Marlena's Vintage Shop</h1>
    <h2>Order Results</h2>
    <?php
        echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
        echo "<p>Your order is as follows: </p>";

        // Calculate totals
        $totalqty = $Jewleryqty + $Shoesqty + $Clothesqty;
        echo "<p>Items ordered: ".$totalqty."<br />";

        if ($totalqty == 0) {
            echo "You did not order anything on the previous page!<br />";
        } else {
            if ($Jewleryqty > 0) {
                echo htmlspecialchars($Jewleryqty).' Jewlery<br />';
            }
            if ($Shoesqty > 0) {
                echo htmlspecialchars($Shoesqty).' Shoes<br />';
            }
            if ($Clothesqty > 0) {
                echo htmlspecialchars($Clothesqty).' Clothes<br />';
            }
        }

        // Define prices and calculate total amount
        define('JEWLERYPRICE', 100);
        define('SHOESPRICE', 10);
        define('CLOTHESPRICE', 4);

        $totalamount = $Jewleryqty * JEWLERYPRICE + $Shoesqty * SHOESPRICE + $Clothesqty * CLOTHESPRICE;
        echo "Subtotal: $".number_format($totalamount, 2)."<br />";

        // Calculate total with tax
        $taxrate = 0.10;  // local sales tax is 10%
        $totalamount *= (1 + $taxrate);
        echo "Total including tax: $".number_format($totalamount, 2)."</p>";

        echo "<p>Address to ship to is ".htmlspecialchars($address)."</p>";

        // Prepare output string for order logging
        $outputstring = $date."\t".$Jewleryqty." Jewlery \t".$Shoesqty." Shoes\t"
                        .$Clothesqty." Clothes\t\$".$totalamount
                        ."\t". $address."\n";

        // Try to open the file and log the order
        try {
            $document_root = $_SERVER['DOCUMENT_ROOT']; 
            if (!($fp = @fopen("$document_root/../orders/orders.txt", 'ab'))) {
                throw new fileOpenException();
            }

            if (!flock($fp, LOCK_EX)) {
                throw new fileLockException();
            }

            if (!fwrite($fp, $outputstring, strlen($outputstring))) {
                throw new fileWriteException();
            }

            flock($fp, LOCK_UN);
            fclose($fp);
            echo "<p>Order written.</p>";
        }
        catch (fileOpenException $foe) {
            echo "<p><strong>Orders file could not be opened.<br/>
                  Please contact our webmaster for help.</strong></p>";
        }
        catch (Exception $e) {
            echo "<p><strong>Your order could not be processed at this time.<br/>
                  Please try again later.</strong></p>";
        }
    ?>
</body>
</html>
