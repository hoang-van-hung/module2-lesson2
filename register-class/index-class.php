<?php
include_once "demo.php";
$usernameErr= null;
$emailErr =null;
$phoneErr= null;

include_once "err-check.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Register Form</legend>
        <label for="username">User Name</label>
        <input type="text" name="username" id="username">

        <span style="color: red"><?php echo $usernameErr; ?></span> <br>

        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <span style="color: red"><?php echo $emailErr; ?></span> <br>

        <label for="phone">Phone Number</label>
        <input type="number" name="phone" id="phone">
        <span style="color: red"><?php echo $phoneErr; ?></span> <br>

        <button name="register">Register</button>

    </fieldset>
</form>

// loaddata kieu gi?goi thong qua lop.
<?php $loadData= $Register->loadRegister()?>

<h2>List of Register</h2>
<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Action</th>
   </tr>
    <?php  foreach ($loadData as $key=>$infor): ?>
        <tr>
            <td> <?php echo $key+1 ?></td>
            <td> <?php echo $infor['name'] ?></td>
            <td> <?php echo $infor['email'] ?></td>
            <td> <?php echo $infor['phone'] ?></td>
            <td><button name="delete">Delete</button></td>
        </tr>
    <?php endforeach; ?>
</table>

<link rel="stylesheet" href="style.css">
</body>
</html>
