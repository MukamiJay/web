<?php
/**
 * Created by PhpStorm.
 * User: EBENEZER
 * Date: 2/19/2018
 * Time: 3:51 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="http://localhost/sample/assets/css/bootstrap.css" rel="stylesheet"/>

    <title>Add User</title>
</head>
<body>
<div class="col-md-4 col-md-offset-4">
    <h1>Add New User </h1>
    <FORM method="post" action="store">
        <div class="form-group">
            Name: <input type="text" class="form-control" name="name"/>
        </div>
        <div class="form-group">
            Email: <input type="email" class="form-control" name="email"/>
        </div>
        <div class="form-group">
            Phone: <input type="number" class="form-control" name="phone"/>
        </div>

        <br>
        <br>
        <br>
        <br>

        <button type="submit" class="form-control btn btn-primary">Save</button>
    </FORM>
</div>

</body>
</html>