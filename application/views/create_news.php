<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>CI Insert Form</title>

</head>

<body>

<form method="post" action="<?php echo base_url();?>index.php/news/insert_new_news">

    <table width="400" border="0" cellpadding="5">

        <tr>

            <th width="213" align="right" scope="row">Enter your title</th>

            <td width="161"><input type="text" name="title" size="20" /></td>

        </tr>

        <tr>

            <th align="right" scope="row">Enter your body</th>

            <td><input type="text" name="body" size="20" /></td>

        </tr>

            <th align="right" scope="row">&nbsp;</th>

            <td><input type="submit" name="submit" value="Send" /></td>

        </tr>

    </table>

</form>

</body>

</html>
