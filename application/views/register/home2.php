<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navvy" style="margin-bottom:0px" >
            <div class="container-fluid" >
                <div class="navbar-header">
                    <img src="http://localhost/sample/assets/images/log.png"
                         style="height: 60%; width: 60%;max-height: 100px; overflow-y: hidden ">

                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="http://localhost/sample/index.php/donor/view" style="alignment: center">Donors</a></li>
                    <li><a href="http://localhost/sample/index.php/patient/view">Patients</a>
                    <li><a href="http://localhost/sample/index.php/home/doctors">Physicians</a></li>
                    <li ><a href="http://localhost/sample/index.php/home/homepage">Logout</a>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <!---slideview-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://localhost/sample/assets/images/bg2.png "
                     style="height: auto; width: 100%;max-height: 500px; overflow-y: hidden "/>
                <div class="carousel-caption">
                    <h1>Register Today</h1>
                    <p>Register with us as a volunteer or a patient</p>
                </div>
            </div>
            <div class="item ">
                <img src="http://localhost/sample/assets/images/d1.png "
                     style="height: auto; width: 100%;max-height: 500px; overflow-y: hidden "/>
                <div class="carousel-caption">
                    <h1>Donate</h1>
                    <p>Find a patient in need and donate</p>
                </div>
            </div>
            <div class="item">
                <img src="http://localhost/sample/assets/images/d2.png"
                     style="height: auto; width: 100%;max-height: 500px; overflow-y: hidden "/>
                <div class="carousel-caption">
                    <h1>Blood Types</h1>
                    <p>Find your Blood type </p>
                </div>
            </div>
            <div class="item">
                <img src="http://localhost/sample/assets/images/d3.png"
                     style="height: auto; width: 100%;max-height: 500px; overflow-y: hidden "/>
                <div class="carousel-caption">
                    <h1>Physician </h1>
                    <p> Find your specialist</p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <div class="introd container bord-b" align="center" style="margin-bottom: 7px">
        <!----start introd--------------->
        <div class="container col-lg-12" style="margin-bottom: 30px">
            <h2>Who We Are</h2>
            <p>A platform that enables patients to get compatible donors within their area</p>
            <div style="margin-top: 50px">
                <h2 >About us</h2>
                <p>We enable patients to find compatible donors that are near their location and also give
                    <br>volunteer donors an opportunity to donote to needy patients</p>

            </div>
        </div>
    </div>

</div>
<div class="container-fluid">
    <div class="container services-inner" id="intro" style="margin-bottom: 15px; ">
        <!----start services-inner--------------->
        <h2 class="text-center">Our Services</h2>
        <ul class="main-content col-md-12" id="main-content">
            <!----start main-content--------------->
        </ul>
    </div>
    <div row>
        <div class="sol_n col-md-4">
            <div data-sr="enter top, vFactor 0.3" class="package">
                <div class="serv_icon">
                    <a class="serve-content">
                        <img src="http://localhost/sample/assets/images/IMG1.png"
                             style="height: auto; width: 100%;max-height: 500px; overflow-y: hidden ">
                    </a>
                </div>
                <div class="package_inner">
                    <h3><a data-toggle="modal" data-target="#myPatient">Patient</a></h3>
                    <p>Upload patients details to be contacted by volunteer donors</p>
                    <div class="sol-hm">
                    </div>
                </div>
            </div>
        </div>

        <div class="sol_n col-md-4" >
            <div data-sr="enter top, vFactor 0.3" class="package">
                <div class="serv_icon">
                    <a class="serv-content">
                        <img src="http://localhost/sample/assets/images/IMG3.png"
                             style="height: auto; width: 100%;max-height: 500px; overflow-y: hidden ">
                    </a>
                </div>
                <div class="package_inner">
                    <h3>                <a data-toggle="modal" data-target="#myModal">Donate</a>
                    </h3>
                    <p>Fill in your personal details including your blood group type.
                        <br>Patients with similar blood groups will contact</p>

                </div>
            </div>
        </div>

        <div class="sol_n col-md-4">
            <div data-sr="enter top, vFactor 0.3" class="package">
                <div class="serv_icon">
                    <a class="serv-content">
                        <img src="http://localhost/sample/assets/images/IMG2.png"
                             style="height: auto; width: 100%;max-height: 500px; overflow-y: hidden "> </a>
                </div>
                <div class="package_inner">
                    <h3>Physicians</h3>
                    <p>Get contacts of reccomended physicians and access the nearest physicians in your location</p>
                    <div class="sol-hm">
                    </div>
                </div>
            </div>

        </div>
        </ul>
    </div>
    <!---popup-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="alignment: center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Details</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row" >
                            <div class="col-md- col-md-6 ">
                                <FORM method="post" action="<?php echo base_url('index.php/Donor/store') ?>">
                                    <div class="form-group">
                                        Name: <input type="text" class="form-control" name="name"/>
                                    </div>
                                    <div class="form-group">
                                        Bloodgroup: <input type="text" class="form-control" name="bloodgroup"/>
                                    </div>
                                    <div class="form-group">
                                        Phone: <input type="text" class="form-control" name="contact"/>
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

                </div>
            </div>

        </div>
    </div>
    <!---popup-->
    <div class="modal fade" id="myPatient" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="alignment: center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Details</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row" >
                            <div class="col-md- col-md-6 ">
                                <FORM method="post" action="<?php echo base_url('index.php/Patient/store') ?>">
                                    <div class="form-group">
                                        Name: <input type="text" class="form-control" name="name"/>
                                    </div>
                                    <div class="form-group">
                                        Bloodgroup: <input type="text" class="form-control" name="bloodgroup"/>
                                    </div>
                                    <div class="form-group">
                                        Phone: <input type="text" class="form-control" name="contact"/>
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

                </div>
            </div>



            <!-- Modal content-->
            <div class="modal-content" style="alignment: center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Details</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row" >
                            <div class="col-md- col-md-6 ">
                                <FORM method="post" action="<?php echo base_url('index.php/Patient/store') ?>">
                                    <div class="form-group">
                                        Name: <input type="text" class="form-control" name="name"/>
                                    </div>
                                    <div class="form-group">
                                        Bloodgroup: <input type="text" class="form-control" name="bloodgroup"/>
                                    </div>
                                    <div class="form-group">
                                        Phone: <input type="text" class="form-control" name="contact"/>
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

                </div>
            </div>

        </div>
    </div>
</div>
<footer class="mojFooter">
    <div class="container col-lg-12" style="background: #a8a7a0">
        <div class="row" style="margin-top: 7px;">
        </div>
        <div class="bottom-footer ">
            <h1 >Contact</h1>
            <div class="col-md-6 ">
                   <p>Call us on for queries and questions <br>
                   0788989898<br>
                   0788989898<br>
                   0788989898<br>
                   0788989898</p>
            </div>
            <p>Email us on <br>
                123@gmail.com<br>
                donate@gmail.com<br>
                volunteer@gmail.com</p>
            </div>

        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://www.emomentum-interactive.com/assets/js/scrollReveal.min.js"></script>
<script src="http://www.emomentum-interactive.com/assets/js/jquery.particleground.js"></script>

</body>
</html>
