<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" src="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="purchase request.css">
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<style type="text/css">
        body{
        background-image: url(images/Bakery-Background.png);
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

     <div class="row">
      <div class="col-lg-8 ml-auto mr-auto">
       <center><h3>List Request</h3></center>
    <table id="example" class="display" style="width:100%">
        <thead>
            <th>No</th>
            <th>Id Request</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Status</th>
        </thead>

</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.0.0.js"></script>
  <script src="js/popper.min.js"></script>
      <script>
          $(document).ready(function() {
    $('#example').DataTable({
        "columns": [
            { "width": "1%"},
            null,
            null,
            null,
            null,
            null,
            { "width": "10%"}
            
            
  ]
    });
} );
      </script>
</html>