<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$childTickets = $_POST['childTickets'];
$adultTickets = $_POST['adultTickets'];
$date = $_POST['date'];

$TAX = 0.07;
$MAXfee = 1.0;
$MINfee = 0.5;
$aTTENDcompare = 5;


    
    $totalAttend = $adultTickets + $childTickets;
    if ($totalAttend <= $aTTENDcompare) {
        $fee = $totalAttend * $MAXfee;
    } else {
        $fee = $totalAttend * $MINfee;
    }
    $subtotal = $adultTickets * 35 + $childTickets * 30;
    $salesTax = $subtotal * $TAX;
    $totalCost = $subtotal + $salesTax + $fee;

    print ("<h1> Summary Ticket Cost for Concert </h1>") ;
    print "Thank you " . $name . " at " . $phone . ". Details of your total cost are defined below:" ;
    print ("<ul><li>Adult Tickets: $adultTickets </li>");
    print ("<li>Child Tickets: $childTickets </li>");
    print ("<li>Date: $date </li>");
    print ("<li>Sub-total: $subtotal </li>");
    print ("<li>Sales tax: $salesTax </li>");
    print ("<li>Fee: $fee </li>");

    print ("<li>Total: $totalCost </li></ul>");

?>
