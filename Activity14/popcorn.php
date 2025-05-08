<!DOCTYPE html>
<!-- popcorn.php - Processes the form described in popcorn.html -->
<html lang="en">
<head>
    <title>Process the Popcorn Order</title>
    <meta charset="utf-8" />
    <style>
        td, th, table {border: thin solid blue; border-collapse: collapse; padding: 10px;}
        th {background-color: #f2f2f2;}
    </style>
</head>
<body>
    <?php
    // Retrieve form data
    $unpop = isset($_POST["unpop"]) ? $_POST["unpop"] : 0;
    $caramel = isset($_POST["caramel"]) ? $_POST["caramel"] : 0;
    $caramelnut = isset($_POST["caramelnut"]) ? $_POST["caramelnut"] : 0;
    $toffeynut = isset($_POST["toffeynut"]) ? $_POST["toffeynut"] : 0;
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $street = isset($_POST["street"]) ? $_POST["street"] : "";
    $city = isset($_POST["city"]) ? $_POST["city"] : "";
    $payment = isset($_POST["payment"]) ? $_POST["payment"] : "";
    
    // Ensure quantities are numeric
    $unpop = is_numeric($unpop) ? $unpop : 0;
    $caramel = is_numeric($caramel) ? $caramel : 0;
    $caramelnut = is_numeric($caramelnut) ? $caramelnut : 0;
    $toffeynut = is_numeric($toffeynut) ? $toffeynut : 0;
    
    // Compute item costs
    $unpop_cost = 3.0 * $unpop;
    $caramel_cost = 3.5 * $caramel;
    $caramelnut_cost = 4.5 * $caramelnut;
    $toffeynut_cost = 5.0 * $toffeynut;
    $total_price = $unpop_cost + $caramel_cost + $caramelnut_cost + $toffeynut_cost;
    $total_items = $unpop + $caramel + $caramelnut + $toffeynut;
    ?>
    
    <h4>Customer Information:</h4>
    <p><?php echo htmlspecialchars($name); ?><br>
       <?php echo htmlspecialchars($street); ?><br>
       <?php echo htmlspecialchars($city); ?></p>
    
    <table>
        <caption>Order Summary</caption>
        <tr>
            <th>Product</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Total Cost</th>
        </tr>
        <tr>
            <td>Unpopped Popcorn</td>
            <td>$3.00</td>
            <td><?php echo $unpop; ?></td>
            <td><?php printf("$%.2f", $unpop_cost); ?></td>
        </tr>
        <tr>
            <td>Caramel Popcorn</td>
            <td>$3.50</td>
            <td><?php echo $caramel; ?></td>
            <td><?php printf("$%.2f", $caramel_cost); ?></td>
        </tr>
        <tr>
            <td>Caramel Nut Popcorn</td>
            <td>$4.50</td>
            <td><?php echo $caramelnut; ?></td>
            <td><?php printf("$%.2f", $caramelnut_cost); ?></td>
        </tr>
        <tr>
            <td>Toffee Nut Popcorn</td>
            <td>$5.00</td>
            <td><?php echo $toffeynut; ?></td>
            <td><?php printf("$%.2f", $toffeynut_cost); ?></td>
        </tr>
    </table>
    
    <p>You ordered <?php echo $total_items; ?> popcorn items.</p>
    <p>Your total bill is: <?php printf("$%.2f", $total_price); ?></p>
    <p>Payment Method: <?php echo htmlspecialchars($payment); ?></p>
</body>
</html>
