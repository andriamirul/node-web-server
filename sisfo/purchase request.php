<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" src="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="purchase request.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<style type="text/css">
        body{
        background-image: url(images/brote_10001.jpg);
        background-size: auto;
        background-repeat: no-repeat;
    }
</style>
<body>
    <header>

    </header>
 
      <nav class="navbar fixed-top navbar-expand-md navbar-new-bottom">
            <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">

               <ul class="navbar-nav w-100 justify-content-center px-3">
                    <li class="nav-item">
                        <a class="nav-link" href="">List Restock</a></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="purchase request.php">Purchase Request</a></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="status.php">Status</a>
                    </li>
                    <li class="nav-item">
                        <button type="button"  class="header-btn">Sign Out</button>
                    </li>
                </ul>   
                
            </div>
        </nav>
<center>  
<div id="fullscreen_bg" class="fullscreen_bg"/>
        <div class="container">    
                <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title" >Purchase Request</div>
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                            <div class="form-group">
                                	
                                <label for="idrequest" class="col-md-3 control-label">Id Request</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="idrequest" placeholder="Id Request">
                                    </div>     
                            </div>                           
                            <div class="form-group">
                                    <label for="namabarang" class="col-md-3 control-label">Nama Barang</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="namabarang" placeholder="Nama Barang">
                                    </div>
                                </div>                 
                    
                           <div class="form-group">
                                    <label for="harga" class="col-md-3 control-label">Harga</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="harga" placeholder="0">
                                    </div>
                                </div>         
                           <div class="form-group">
                                    <label for="jumlah" class="col-md-3 control-label">Jumlah</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="jumlah" placeholder="0">
                                    </div>
                            </div> 
                            <div class="form-group">
                                    <label for="keterangan" class="col-md-3 control-label">Keterangan</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                                    </div>
                            </div>                               
                            <div class="form-group">
                                    <label for="status" class="col-md-3 control-label">Status</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="status" placeholder="Declined" readonly>
                                    </div>
                            </div>
                                    
                                
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info btn-block"><i class="icon-hand-right"></i>Request</button>
                                       
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</center>
</body>
</html>