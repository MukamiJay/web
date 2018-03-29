<?php
/**
 * Created by PhpStorm.
 * User: EBENEZER
 * Date: 2/19/2018
 * Time: 3:51 PM
 */
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link href="http://localhost/sample/assets/css/bootstrap.css" rel="stylesheet"/>

    <title>Add User</title>
</head>

<style>
    .well {
        background: #c6c5ff;
    }
</style>
</head>

<body>
<div class="container" style="margin: 20px">
</div>
<div class="container-fluid">
    <div class="well row">
<div class="col-md-4 col-md-offset-4">
    <h1 >Register</h1>
    <FORM method="post" action="store"  >

        <div class="form-group">
            Name: <input type="text" class="form-control" name="name"/>
        </div>
        <div class="form-group">
            Email: <input type="email" class="form-control" name="email"/>
        </div>
        <div class="form-group">
            Phone: <input type="text" class="form-control" name="phone"/>
        </div>

        <br>
            <button type="submit" class="form-control btn btn-primary">Save</button>
    </FORM>
</div>

</body>
</html>