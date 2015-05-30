<html>

<head>
    <title>View Deposit Entries</title>
    <?php include("imports.php"); ?>
    <script type="text/javascript">

        function show_confirm(act,gotoid)

        {

            if(act=="edit")

                var r=confirm("Do you really want to edit?");

            else

                var r=confirm("Do you really want to delete?");

            if (r==true)

            {

                window.location="<?php echo base_url();?>deposit/"+act+"/"+gotoid;

            }

        }

    </script>

</head>

<body>
<?php include("nav_admin.php"); ?>


<div class="container">
   <!-- <form class="form-inline">
        <div class="form-group">
            <label for="monthOfDeposit">Deposit Month</label>
            <input type="month" class="form-control" id="monthOfDeposit">
        </div>
    </form>-->

    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center">Employee</th>
            <th class="text-center">Disbursement Voucher Number</th>
            <th class="text-center">Description</th>
            <th class="text-center">Amount (in Pesos)</th>
            <th class="text-center">Date of Deposit</th>
            <th class="text-center">Bank Account Number</th>
            <th colspan="2" class="text-center">Actions</th>
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

                <td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $n_key->id;?>)">Edit</a></td>
                <td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $n_key->id;?>)">Delete </a></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

    <a href="<?php echo base_url(); ?>deposit/add"><button class="btn btn-teal">Add Deposit Entry</button></a>

</div>
</body>

</html>

