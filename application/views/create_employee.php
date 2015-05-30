<html>

<head>
    <title>View Deposit Entries</title>
    <?php include("imports.php"); ?>

    <script>
        function validateForm() {
            var isValid = true;

            var x = document.getElementById("employeeNumber");
            if (x.value == null || x.value == "") {
                x.style.backgroundColor = "#F7D5D5";
                document.getElementById("employeeNumberRequired").style.display = "block";
                isValid = false;
            }
            else if(isNaN(x.value)){
                x.style.backgroundColor = "#F7D5D5";
                document.getElementById("employeeNumberFormat").style.display = "block";
                isValid = false;
            }
            else {
                document.getElementById("employeeNumber").style.backgroundColor = "#393E42";
                document.getElementById("employeeNumberRequired").style.display = "none";
                document.getElementById("employeeNumberFormat").style.display = "none";
            }

            var voucherNumber = document.getElementById("firstName");
            if (voucherNumber.value == null || voucherNumber.value == "") {
                voucherNumber.style.backgroundColor = "#F7D5D5";
                document.getElementById("firstNameRequired").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("firstName").style.backgroundColor = "#393E42";
                document.getElementById("firstNameRequired").style.display = "none";
            }

            var description = document.getElementById("lastName");
            if (description.value == null || description.value == "") {
                description.style.backgroundColor = "#F7D5D5";
                document.getElementById("lastNameRequired").style.display = "block";
                isValid = false;
            }
            else {
                document.getElementById("lastName").style.backgroundColor = "#393E42";
                document.getElementById("lastNameRequired").style.display = "none";
            }

            var amount = document.getElementById("middleInitial");
            if (amount.value == null || amount.value == "") {
                amount.style.backgroundColor = "#F7D5D5";
                document.getElementById("middleInitialRequired").style.display = "block";
                isValid = false;
            }
            else {
                document.getElementById("middleInitial").style.backgroundColor = "#393E42";
                document.getElementById("middleInitialRequired").style.display = "none";
            }

            var dateOfDeposit = document.getElementById("username");
            if (dateOfDeposit.value == null || dateOfDeposit.value == "") {
                dateOfDeposit.style.backgroundColor = "#F7D5D5";
                document.getElementById("usernameRequired").style.display = "block";
                isValid = false;
            }
            else {
                document.getElementById("username").style.backgroundColor = "#393E42";
                document.getElementById("usernameRequired").style.display = "none";
            }

            var password = document.getElementById("password");
            if (password.value == null || password.value == "") {
                password.style.backgroundColor = "#F7D5D5";
                document.getElementById("passwordRequired").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("password").style.backgroundColor = "#393E42";
                document.getElementById("passwordRequired").style.display = "none";
            }


            if(isValid){
                var cont = confirm ("Would you like to continue adding the employee?");
                if (cont){
                    alert("Employee successfully added!");
                }else{
                    return false;
                }
            }
            return isValid;
        }
    </script>

</head>

<body>
<?php include("nav_admin.php"); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <form action="<?php echo base_url();?>employee/insert_new_employee" method="post" onsubmit="return validateForm();">

                <div class="form-group">
                    <label for="employeeNumber">Employee Number</label>
                    <input type="text" class="form-control" id="employeeNumber"name="number" >
                    <span id="employeeNumberRequired" style="display: none; color: #FF4545">Employee number cannot be blank.</span>
                    <span id="employeeNumberFormat" style="display: none; color: #FF4545">Employee number must be a number.</span>
                </div>
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstname">
                    <span id="firstNameRequired" style="display: none; color: #FF4545">First name cannot be blank.</span>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" class="form-control" name="lastname" >
                    <span id="lastNameRequired" style="display: none; color: #FF4545">Last name cannot be blank.</span>
                </div>
                <div class="form-group">
                    <label for="middleInitial">Middle Initial</label>
                    <input type="text" id="middleInitial" class="form-control" name="middle_initial">
                    <span id="middleInitialRequired" style="display: none; color: #FF4545">Middle initial cannot be blank.</span>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control" name="username" >
                    <span id="usernameRequired" style="display: none; color: #FF4545">Username cannot be blank.</span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                    <span id="passwordRequired" style="display: none; color: #FF4545">Password cannot be blank.</span>
                </div>
                <button type="submit" class="btn btn-teal">Add Employee</button>

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>

</html>

