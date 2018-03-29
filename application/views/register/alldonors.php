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
<div class="container" style="margin-bottom: 10px" align="center">
    <div>
        <div class="well well-lg " style="background: transparent ; border: transparent ; margin-bottom: 25px" >
            <div class="col-sm-10" style="color: black; font-size: 150%" >Available Donors</div>
            <div class="col-sm-2" ><a data-toggle="modal" data-target="#myModal" style="color: black; font-size: 130%; border-bottom: solid">Donate Today</a></div>
        </div>
    </div>
</div>
<div>
    <div class="container row" >
     <div class="col-lg-3">
<!--navigation bar side-->
<div class="row" style="">
    <div class="column left">
        <div class='w3-sidebar w3-collapse' id='sidenav'>
            <div id='leftmenuinner'>
                <div class='w3-light-grey' id='leftmenuinnerinner'>
                    <ul class="nav nav-pills nav-stacked" role="tablist">
                        <li><a href="http://localhost/sample/index.php/home/homepage2">Home</a></li>
                        <li><a href="http://localhost/sample/index.php/patient/view">Patients</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div></div>

    <div class="col-lg-9">
<!--data table-->
<div style="width:90%;height:90%;overflow-y:visible;overflow-x: hidden">
    <div class="table-striped">

        <table id="alldonors" style="" >
            <thead>
            <tr id="row" style="border-bottom: double; font-size: 20px " >
                <ul>
                    <th >Id</th>
                    <th>Name</th>
                    <th>Bloodgroup</th>
                    <th>Contact</th>
                    <th>Location</th>
                    <th>Action</th>
                </ul>

            </tr>
            </thead>
            <tr>
                <?php
                if (!empty($donors)) {
                    foreach ($donors as $donor) // user is an object.
                    {
                        echo "<tr>
<td> " . $donor->Id . "</td>
<td> " . $donor->Name . "</td>
<td>" . $donor->Bloodgroup . "</td>
<td>" . $donor->Contact . "</td>
<td>" . $donor->Location . "</td>
<td>
<a href=\"http://localhost/sample/index.php/donor/edit?id=". $donor->Id."\" class='btn' style='color:blue; font-size: 20px'>edit</a> 
<a href=\"http://localhost/sample/index.php/donor/delete?id=". $donor->Id."\" class='btn' style='color:blue; font-size: 20px'>Delete</a> 
</td>
";
                    }
                }
                ?>
            </tr>
            </tr>
        </table>
    </div>
</div>
</div>
</div>
</div>

<!---popup-->
<div class="well-sm" style="width: 100px" >
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-open">

            <!-- Modal content-->
            <div class="modal-content" style="alignment: center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Details</h4>
                </div>
                <div class="modal-body">
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

                </div>
            </div>
        </div>
    </div>
</div>
</div>


    </div>
</body>
</html>