<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login</title>
    <?php include("imports.php"); ?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div id="login" class="col-md-4">

            <?php echo validation_errors(); ?>
            <?php echo form_open('verifylogin'); ?>
            <div class="form-group">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <br/>
            <div class="form-group">
                <button type="submit" class="btn btn-teal form-control">Log In</button>
            </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>

</html>

