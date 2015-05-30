<html>

<head>
    <title>View Employees</title>
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

                window.location="<?php echo base_url();?>employee/"+act+"/"+gotoid;

            }

        }

    </script>

</head>

<body>
<?php include("nav_admin.php"); ?>


<div class="container">

    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center">Number</th>
            <th class="text-center">Username</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Middle Initial</th>
            <th class="text-center">Role</th>
            <th colspan="2" class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($employee_list as $n_key) { ?>
            <tr>
                <td><?php echo $n_key->number; ?></td>

                <td><?php echo $n_key->username; ?></td>

                <td><?php echo $n_key->firstname; ?></td>

                <td><?php echo $n_key->lastname; ?></td>

                <td><?php echo $n_key->middle_initial; ?></td>

                <td><?php echo $n_key->role; ?></td>

                <td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $n_key->id;?>)">Edit</a></td>
                <td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $n_key->id;?>)">Delete </a></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

    <a href="<?php echo base_url(); ?>employee/add"><button class="btn btn-teal">Add Employee</button></a>
</div>
</body>

</html>

