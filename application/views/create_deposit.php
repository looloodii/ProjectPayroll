<html>

<head>
    <title>View Deposit Entries</title>
    <?php include("imports.php"); ?>

    <script>
        function validateForm() {
            var isValid = true;

            var x = document.getElementById("employeeName");
            if (x.value == null || x.value == "") {
                x.style.backgroundColor = "#F7D5D5";
                document.getElementById("employeeNameRequired").style.display = "block";
                isValid = false;
            }
            else {
                document.getElementById("employeeName").style.backgroundColor = "#393E42";
                document.getElementById("employeeNameRequired").style.display = "none";
            }

            var voucherNumber = document.getElementById("voucherNumber");
            if (voucherNumber.value == null || voucherNumber.value == "") {
                voucherNumber.style.backgroundColor = "#F7D5D5";
                document.getElementById("voucherNumberRequired").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("voucherNumber").style.backgroundColor = "#393E42";
                document.getElementById("voucherNumberRequired").style.display = "none";
            }

            var description = document.getElementById("description");
            if (description.value == null || description.value == "") {
                description.style.backgroundColor = "#F7D5D5";
                document.getElementById("descriptionRequired").style.display = "block";
                isValid = false;
            }
            else {
                document.getElementById("description").style.backgroundColor = "#393E42";
                document.getElementById("descriptionRequired").style.display = "none";
            }

            var amount = document.getElementById("amount");
            if (amount.value == null || amount.value == "") {
                amount.style.backgroundColor = "#F7D5D5";
                document.getElementById("amountRequired").style.display = "block";
                isValid = false;
            }else if(isNaN(amount.value)){
                amount.style.backgroundColor = "#F7D5D5";
                document.getElementById("amountFormat").style.display = "block";
                isValid = false;
            }
            else {
                document.getElementById("amount").style.backgroundColor = "#393E42";
                document.getElementById("amountRequired").style.display = "none";
                document.getElementById("amountFormat").style.display = "none";
            }

            var dateOfDeposit = document.getElementById("dateOfDeposit");
            if (dateOfDeposit.value == null || dateOfDeposit.value == "") {
                dateOfDeposit.style.backgroundColor = "#F7D5D5";
                document.getElementById("dateOfDepositRequired").style.display = "block";
                isValid = false;
            }
            else {
                document.getElementById("dateOfDeposit").style.backgroundColor = "#393E42";
                document.getElementById("dateOfDepositRequired").style.display = "none";
            }

            var bankAccount = document.getElementById("bankAccount");
            if (bankAccount.value == null || bankAccount.value == "") {
                bankAccount.style.backgroundColor = "#F7D5D5";
                document.getElementById("bankAccountRequired").style.display = "block";
                isValid = false;
            }else if(isNaN(bankAccount.value)){
                bankAccount.style.backgroundColor = "#F7D5D5";
                document.getElementById("bankAccountFormat").style.display = "block";
                isValid = false;
            }
            else {
                document.getElementById("bankAccount").style.backgroundColor = "#393E42";
                document.getElementById("bankAccountRequired").style.display = "none";
                document.getElementById("bankAccountFormat").style.display = "none";
            }
            if(isValid){
                var cont = confirm ("Would you like to continue adding the deposit entry?");
                if (cont){
                    alert("Deposit entry successfully added!");
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
            <form method="post" onsubmit="return validateForm();" action="<?php echo base_url();?>deposit/insert_new_deposit">

                <div class="form-group">
                    <label for="employeeName">Employee Name</label>
                    <!--<input type="text" class="form-control" name="employee_username" id="employeeName"
                                                                           autocomplete="on" />-->

                    <select class="form-control" name="employee_username" id="employeeName" value="<?php echo $n_key->username; ?>"><?php echo $n_key->username; ?>
                        <?php foreach ($employee_list as $n_key) { ?>

                            <option value="<?php echo $n_key->username; ?>"><?php echo $n_key->username; ?></option>

                        <?php } ?>
                    </select>
                    <span id="employeeNameRequired" style="display: none; color: #FF4545">Employee name cannot be blank.</span>
                </div>





                <div class="form-group">
                    <label for="voucherNumber">Disbursement Voucher Number</label> <input
                        type="text" class="form-control"
                        id="voucherNumber" name="disbursement_voucher_number"/>
                    <span id="voucherNumberRequired" style="display: none; color: #FF4545">Voucher Number cannot be blank.</span>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
						<textarea id="description" rows="5" cols="60" class="form-control" name="description"
                            ></textarea>
                    <span id="descriptionRequired" style="display: none; color: #FF4545">Description cannot be blank.</span>
                </div>
                <div class="form-group">
                    <label for="amount">Amount (in Pesos)</label> <input type="text"
                                                                         id="amount" class="form-control"  name="amount" />
                    <span id="amountRequired" style="display: none; color: #FF4545">Amount cannot be blank.</span>
                    <span id="amountFormat" style="display: none; color: #FF4545">Amount must be a number.</span>
                </div>
                <div class="form-group">
                    <label for="dateOfDeposit">Date of Deposit</label> <input
                        type="date" id="dateOfDeposit" class="form-control" name="deposit_date"
                        />
                    <span id="dateOfDepositRequired" style="display: none; color: #FF4545">Date of Deposit cannot be blank.</span>
                </div>
                <div class="form-group">
                    <label for="bankAccount">Bank Account Number</label> <input
                        type="text" id="bankAccount" class="form-control" name="bank_account"
                        />
                    <span id="bankAccountRequired" style="display: none; color: #FF4545">Bank Account Number cannot be blank.</span>
                    <span id="bankAccountFormat" style="display: none; color: #FF4545">Bank account must be a number.</span>
                </div>
                <button type="submit" class="btn btn-teal">Add Deposit
                    Entry</button>

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>

</html>

