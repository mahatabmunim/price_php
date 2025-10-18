<?PHP
    $price = 100;
    $quantity = 4;
    $taxRate = 0.5;

    $subTotal = $price * $quantity;
    $tax = $subTotal * $quantity;
    $total = $subTotal * $tax;

    echo "Sub Total: $$subTotal" . "<br>";
    echo "Tax: $$tax" . "<br>";
    echo "Total: $$total" . "<br>";