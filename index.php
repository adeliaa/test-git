

<!DOCTYPE html>
<html lang="en">

<?php 
 mysql_connect("localhost","root","");
 mysql_select_db("test2");
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>POS App Test</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/material-icons/material-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../assets/a/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="../../assets/a/css/dataTables.bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <style type="text/css">
  @font-face {
   font-family: "Roboto";
   src: url('../../Roboto/Roboto-Thin.TTF');
 }
</style>

</style>



</head>

<body>


   <!-- Navbar -->
   
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand"><img src="assets/img/download.png" width="50%"></a>
  <form class="form-inline" style="position: right">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>   
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Add
</button>
  </form>
</nav>
    <!-- /Navbar -->

    <!-- Page Content -->
    <form method="post" action="add_update.php?page=tambah">
    <br>  <br>  <br>  
<div class="container" style="margin-left: 30px; width: 1030px;">
  <br>
 
<table id="tabel-data" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th>cashier</th>
      <th>product</th>
      <th>Category</th>
      <th>price</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   include ('read.php');
   $pem = new read();
   $num =1;
   foreach ($pem->tampilList() as $value) {
    ?>
    <tr>
      <td><?php echo $value['cashier'] ?></td>
      <td><?php echo $value['product'] ?></td>
      <td><?php echo $value['category'] ?></td>
      <td><?php echo $value['price'] ?></td>
      <td>
        <a href="../proses/pengembalian.php?filter=<?php echo $value['id'] ?>"><button class="btn btn-danger" type="submit" name="submit" value="masuk">Kembali</button></a>
        <a href="detail.php?filter=<?php echo $value['id'] ?>"><button class="btn btn-info" type="submit" name="submit" value="masuk">Detail</button></a>
      </td>
    </tr>
      <?php } ?>
    </tbody>
  </table>


  <!-- /#content -->



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST">
<select class="form-control form-control-lg" name="cashier">
  <option disabled selected> Cashier </option>
 <?php 
  $sql=mysql_query("SELECT * FROM cashier");
  while ($data=mysql_fetch_array($sql)) {
 ?>
   <option value="<?=$data['id']?>"><?=$data['name']?></option> 
 <?php
  }
 ?>
  </select>
  <br>  
  <select class="form-control form-control-lg" name="category">
  <option disabled selected> Category </option>
 <?php 
  $sql=mysql_query("SELECT * FROM category");
  while ($data=mysql_fetch_array($sql)) {
 ?>
   <option value="<?=$data['id']?>"><?=$data['name']?></option> 
 <?php
  }
 ?>
  </select>
  <div class="form-group">
<br>  
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="product" name="product">
    <br>  
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add"</button>
      </div>
    </div>
  </div>
</div>
</
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>