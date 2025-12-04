
<!DOCTYPE html>
<html>
<head>
    <title>Gym Membership Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f9f9f9;
        }
        table {
            margin: auto;
            background-color: #ffffff;
            border-collapse: collapse;
            padding: 20px;
            box-shadow: 0px 0px 8px rgba(0,0,0,0.1);
        }
        td {
            padding: 10px;
        }
        input, select {
            width: 100%;
            padding: 8x;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        input[type=submit] {
            background-color: #0c0e0cff;
            color: rgba(255, 255, 255, 1);
            border: none;
            cursor: pointer;
            font-size: 17px;
            padding: 10px;
        }
        input[type=submit]:hover {
            background-color: #eaeeeb;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Gym Membership Form</h2>
<form method="post" action="printgym.php">
    <table>
        <tr>
            <td>Membership ID:</td>
            <td><input type="text" name="membershipID" required></td>
        </tr>
        <tr>
            <td>Client Name:</td>
            <td><input type="text" name="clientName" required></td>
        </tr>
        <tr>
            <td>Membership Type:</td>
            <td>
                <select name="membershipType" required>
                    <option value="" disabled selected>Select Type</option>
                    <option value="Basic">Basic - $20 / month</option>
                    <option value="Premium">Premium - $50 / month</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Duration (months):</td>
            <td><input type="number" name="months" min="1" required></td>
        </tr>
        <tr>
            <td>Payment Type:</td>
            <td>
                <select name="paymentType" required>
                    <option value="" disabled selected>Select Payment Type</option>
                    <option value="Full Payment">Full Payment</option>
                    <option value="Installment">Installment</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Generate Billing">
            </td>
        </tr>
    </table>
</form>

</body>
</html>