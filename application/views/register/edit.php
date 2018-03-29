<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://localhost/sample/assets/css/new.css" rel="stylesheet"/>
    <link href="http://localhost/sample/assets/css/bootstrap.css">
    <link href="http://localhost/sample/assets/js/page.js">
    <title>Donors</title>
</head>
<body>
<div class="container-fluid">
                        <div class="row">
                            <div class="col-md- col-md-8 ">
                                <FORM method="post" action="<?php echo base_url('index.php/Donor/store') ?>">
                                    <div class="form-group">
Name: <input type="text" class="form-control" name="name" required/>
                                    </div>
                                    <div class="form-group">
Bloodgroup: <input type="text" class="form-control" name="bloodgroup" required/>
                                    </div>
                                    <div class="form-group">
Phone: <input type="text" class="form-control" name="contact" required/>
                                    </div>
                                    <div class="form-group">
Location: <input type="text" class="form-control" name="location" required/>
                                    </div>

                                    <br>
                                    <button type="submit" class="form-control btn btn-primary">Save</button>
                                </FORM>
                            </div>
                        </div>
                    </div>
</body>
</html>
