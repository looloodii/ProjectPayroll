<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span
                    class="glyphicon glyphicon-credit-card"></span> Payroll System</a>
        </div>
        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url();?>home">Home</a></li>
                <li><a href="<?php echo base_url();?>dashboard">View Deposit Report</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url();?>home/logout">Log out</a></li>
            </ul>
        </div>
    </div>
</nav>