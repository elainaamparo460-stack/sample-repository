<!DOCTYPE html>
<html>
<head>
    <title>Gym Membership Billing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .bill {
            border: 1px solid #000;
            padding: 20px;
            width: 500px;
            margin: auto;
            margin-top: 30px;
            background-color: #fff;
        }
        .bill h2, .bill h3 {
            text-align: center;
            margin: 0;
        }
        table {
            width: 100%;
            margin-top: 10px;
        }
        td {
            padding: 5px;
        }
        .total {
            text-align: right;
        }
        button {
            margin-top: 20px;
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #070606ff;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #b4b6b4ff;
        }
    </style>
</head>
<body>

<?php

$membershipID = $_POST['membershipID'];
$clientName = $_POST['clientName'];
$membershipType = $_POST['membershipType'];
$months = $_POST['months'];
$paymentType = $_POST['paymentType'];

$basicRate = 20.00;
$premiumRate = 50.00;
$discountPerMonth = 5.00;
$discount = 0;
$subtotal = 0;


if ($membershipType == "Basic") {
    $subtotal = $basicRate * $months;
} else if ($membershipType == "Premium") {
    $subtotal = $premiumRate * $months;
    if ($months == 12) {
        $discount = $discountPerMonth * $months; 
    }
}

$total = $subtotal - $discount;
$dateToday = date("M , Y");
?>

<div class="bill">
    <h2>RAVENS BODY FITNESS</h2>
    <h3>
        Hermanos Belen Street, San Pablo City, Laguna<br>
        Philippines 4000<br>
        Phone: 562-8139<br>
        Email: info@ravensbodyfitness.com
    </h3>
    <hr>

    <table>
        <tr><td>Date:</td><td><?= $dateToday ?></td></tr>
        <tr><td>Membership ID:</td><td><?= htmlspecialchars($membershipID) ?></td>
        </tr>
        <tr><td>Name:</td><td><?= htmlspecialchars($clientName) ?></td>
        </tr>
        <tr><td>Membership Type:</td><td><?= htmlspecialchars($membershipType) ?></td>
        </tr>
        <tr><td>Months Availed:</td><td><?= htmlspecialchars($months) ?></td>
        </tr>
        <tr><td>Payment Type:</td><td><?= htmlspecialchars($paymentType) ?></td>
    </tr>
    </table>

    <hr>
    <table>
        <tr><td>Sub-Total:</td><td class="total">$<?= number_format($subtotal, 2) ?></td>
    </tr>
        <tr><td>Discount:</td><td class="total">$<?= number_format($discount, 2) ?></td>
    </tr>
        <tr><td>Total:</td><td class="total">$<?= number_format($total, 2) ?></td>
    </tr>
    </table>

    <button onclick="window.print()">Print Billing</button>
</div>

</body>
</html>