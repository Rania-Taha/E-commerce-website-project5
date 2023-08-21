<?php
include 'includes/head-vars.php';

if (isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true) {
    $loggedInId = $_SESSION['loggedInUserData']['id'];
    $array_product = $_SESSION['cart'];

    // Loop through the cart array and insert items into the cart table if not already inserted
    foreach ($_SESSION['cart'] as $item) {
        $product_id = $item['productid'];
        $product_quantity = $item['quantity'];

        // Check if the item is already in the cart table
        $check_sql = "SELECT * FROM cart WHERE user_id='$loggedInId' AND product_id = '$product_id'";
        $check_result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($check_result) == 0) {
            // Insert the item into the cart table
            $sql_c = "INSERT INTO cart (user_id, product_id, product_quantity)
                      VALUES ('$loggedInId', '$product_id', '$product_quantity')";
            $result = mysqli_query($conn, $sql_c);

            if ($result) {
                // echo "Inserted successfully";
                header('Location: checkout.php');
            } else {
                echo "Error: " . mysqli_error($conn);
                // header('Location: shopping-cart.php');
            }
        }
    }

    // Clear the cart in the session after insertion
    //$_SESSION['cart'] = array();
    unset($_SESSION['cart'] );

    header('Location: checkout.php');
    exit(0);
} else {
    $loggedInId = NULL;
    // header('Location: shopping-cart.php');
}
?>
