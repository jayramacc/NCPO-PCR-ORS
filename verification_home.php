<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Speak Multipager Responsive Template</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/css/style_home.css" rel="stylesheet" />

</head>
<body>
  <div class="navbar navbar-default navbar-fixed-top menu-back">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.jpg" class="navbar-brand-logo " alt="" />
                </a>
            </div>
            <div class="navbar-collapse collapse" >
                <ul class="nav navbar-nav navbar-right">
                   
                    <li class="dropdown">
                        <a href="index.php">HOME PAGE<i class="fas fa-home"></i>
                            <span>Official Website</span>

                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                           
                          
                          

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="our-services.php">APPLICATION FORM<i class="fa fa-folder-open-o"></i>
                            <span> Register Now!</span>

                        </a>
                       
                    </li>

                    <li class="dropdown">
                        <a href="request-renew.php">REQUEST/RENEW<i class=" fa fa-clipboard"></i>
                            <span>Renew Here!</span>
                        </a>
                       
                    </li>

                   
                    <li class="dropdown">
                        <a href="verification_home.php"> Tracking <i class="fa fa-clipboard"></i>
                            <span>track document status</span>
                        </a>
                       
                    </li>
                     <li class="dropdown">
                        <a href="error.php">FAQ <i class="fa fa-globe"></i>
                            <span>Help?</span>
                        </a>

                    </li>

                      <li class="dropdown">
                        <a href="login.php"> Employee Login <i class="fa fa-globe"></i>
                            <span>login account</span>
                        </a>

                    </li>
                </ul>
            </div>

        </div>
    </div>

<div class="clearfix"></div>
        
    </div>
    
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12"  >
                <div style="float:left;position:absolute">
                    <img align="left" height="90" src="assets/img/logo.jpg">
                </div>
                <center style="color:blue;">
                <h1 style="font-weight:50;line-height:50px;font-size:32px"><strong>TRACKING</strong> </h1>
                <div class="description">
                    <p>Please enter your transaction ID to track document request status</p>
                </div>
             </center>
            </div>
        </div>
        <div class="col-md-12">
            
            <form method="post" id="verifyform" >

            <div class="panel panel-default custpanel">
                    <div class="panel-body mainpanel">
                        <div class="col-md-12" >
                            <div class="col-md-12" >
                                <div class="col-md-12" >
                                    <span style="color:red">Note : All fields with asterisk( <b>*</b> ) are required.</span>
                                </div>
                            </div>
                            <div class="col-md-12" >
                                <center><h4 class ="infoheader">
                                    TRANSACTION ID
                                </h4></center>
                            </div>
                            <div class="col-md-12" >
                                <center>
                                    <span style="color:black;font-weight: 600";>*** To search just type your transaction ID  ***</span><br/><br/>
                                    <span style="color:green;font-weight: 600;display: none" id="searchloader">Searching...</span>
                                    <span style="color:red;font-weight: 600;display: none" id="searcherror"></span>
                                </center>
                            </div>
                            
                            <div class="col-md-6 field" >
                                <div class="col-md-4 lbl">
                                    <label> Transaction ID <span style="color:red">*</span></label>
                                </div>
                                <div class="col-md-8" >
                                    <input type="hidden" name="_token" value="xit4z0Q6YIv0i37LIzj3JCfvD84oF9R14DPQ2ptP">
                                    <div class="input-group">
                                      <input class="form-control" name="c_applicant_refcode" id="c_applicant_refcode" placeholder="Transaction ID" autocomplete="false">
                                      <span class="input-group-addon" id="searchToVerify" style="cursor:pointer"><span  class="glyphicon glyphicon-search" ></span></span>
                                    </div>
                                    <div  style="position: absolute;;z-index:1000;width: 100%;padding-right: 70px">
                                        <select id="refcodeoptions" class="form-control"  size="3" style="display: none;">
                                    </select>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                
                <center  style="padding-top:10px">
                    <button class="btn btn-success btnrenew">Submit</button>
                </center>
            </form>
            <!-- begin error modal-->
<div class="modal fade" id="error-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin:0 auto">
            <div class="modal-header" style="color:#fff;background:#D85C5C">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Error!
                </h4>
            </div>
            <div class="modal-body">
                <span id="errorMessage" style="font-weight:bolder"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="color:#fff;background:#D85C5C">
                    Close
                </button> 
            </div>
        </div>
    </div>
</div>
<!-- end error modal -->

<!-- begin success modal-->
<div class="modal fade" id="success-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin:0 auto">
            <div class="modal-header" style="color:#fff;background:#309630">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Success
                </h4>
            </div>
            <div class="modal-body">
                <span id="errorMessage" style="font-weight:bolder">
                    Are you sure all data is correct?
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" id="btncancelCont" class="btn btn-default" data-dismiss="modal">
                    Cancel
                </button> 
                <button id="btncontinue"  type="button" class="btn btn-default" data-dismiss="modal" style="color:#fff;background:#309630">
                    Continue
                </button> 
            </div>
        </div>
    </div>
</div>
<!-- end success modal -->


<!-- begin success modal-->
<div class="modal fade" id="success-renew-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin:0 auto">
            <div class="modal-header" style="color:#fff;background:#309630">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Applicant Found
                </h4>
            </div>
            <div class="modal-body">
                <span id="errorMessage" style="font-weight:bolder">
                    Click Continue to create transaction.
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" id="btncancelCont" class="btn btn-default" data-dismiss="modal">
                    Cancel
                </button> 
                <button id="btnrenewcontinue"  type="button" class="btn btn-default" data-dismiss="modal" style="color:#fff;background:#309630">
                    Continue
                </button> 
            </div>
        </div>
    </div>
</div>
<!-- end success modal -->
<!-- begin success modal-->

<div class="modal fade" id="convert-height-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin:0 auto">
            <div class="modal-header" style="color:#fff;background:#309630">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Height Converter
                </h4>
            </div>
            <div class="modal-body">
                <label class="text-danger" id="msgError"></label>
                <div class="col-md-12" >
                    <div class="col-md-6" >
                        <label>Feet <span style="color:red">*</span></label>
                        <input class="form-control" id="feet" >
                    </div>
                    <div class="col-md-6" >
                        <label>Inches <span style="color:red">*</span></label>
                        <input class="form-control" id="inches" >
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btncancelCont" class="btn btn-default" data-dismiss="modal">
                    Cancel
                </button> 
                <button id="btnconvert"  type="button" class="btn btn-default"  style="color:#fff;background:#309630">
                    Convert
                </button> 
            </div>
        </div>
    </div>
</div>
<!-- end success modal -->


<!-- begin success modal-->
<div class="modal fade" id="success-verify-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content" style="margin:0 auto">
            <div class="modal-header" style="color:#fff;background:#309630">
                
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    x
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Applicant Found
                </h4>
            </div>
            <div class="modal-body">
                <span id="errorMessage" style="font-weight:bolder">
                    Police Clearance Reference Code Inputted is Confirmed Valid.
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="color:#fff;background:#309630">
                    Close
                </button> 
            </div>
        </div>
    </div>
</div>
<!-- end success modal -->      </div>
    </div>
</div>

   
</body>
</html>
