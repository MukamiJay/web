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

    <title>Patient</title>
</head>

<style>
    .well {
        background: #c6c5ff;
        color: black;
        alignment: center;
    }
</style>
</head>

<body>
<div class="col-md-6" >
    <div class="container" style="margin: 20px">
    </div>
    <div class="container-fluid">
        <div class="well row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9  ">
                        <h1 >Upload Patient Details</h1>
                        <FORM method="post" action="store"  >

                            <div class="form-group">
                                Name: <input type="text" class="form-control" name="name"/>
                            </div>
                            <div class="form-group">
                                Bloodgroup: <input type="text" class="form-control" name="bloodgroup"/>
                            </div>
                            <div class="form-group">
                                Phone: <input type="text" class="form-control" name="phone"/>
                            </div>
                            <div class="form-group">
                                Location: <input type="text" class="form-control" name="location"/>
                            </div>

                            <br>
                            <button type="submit" class="form-control btn btn-primary">Save</button>
                        </FORM>
                    </div>


                </div>
            </div>

</body>
</html>