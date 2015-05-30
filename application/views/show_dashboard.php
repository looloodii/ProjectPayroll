<html>

<head>
    <title>View Deposit Report</title>
    <?php include("imports.php"); ?>


</head>

<body>
<?php include("nav_employee.php"); ?>


<div class="container">

    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center">Employee</th>
            <th class="text-center">Disbursement Voucher Number</th>
            <th class="text-center">Description</th>
            <th class="text-center">Amount (in Pesos)</th>
            <th class="text-center">Date of Deposit</th>
            <th class="text-center">Bank Account Number</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($deposit_list as $n_key) { ?>
            <tr>
                <td><?php echo $n_key->employee_username; ?></td>

                <td><?php echo $n_key->disbursement_voucher_number; ?></td>

                <td><?php echo $n_key->description; ?></td>

                <td><?php echo $n_key->amount; ?></td>

                <td><?php echo $n_key->deposit_date; ?></td>

                <td><?php echo $n_key->bank_account; ?></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

</div>
</body>

</html>

