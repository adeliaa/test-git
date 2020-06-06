
<?php 	
if(!isset($_GET['page'])){
	echo "<script>url:location='list_pembayaran.php';</script>";
}else{require('read.php');
	$lib = new read();


	$cashier = @$_POST['cashier'];
	$category 	= @$_POST['category'];
	$product 	= @$_POST['product'];
	$price = @$_POST['price'];

}
if($_GET['page'] == "tambah"){
	$proses = $lib->add($cashier
,$category
,$product
,$price);
	//var_dump($proses);
	if($proses == true){
		echo "<script>alert('Data Berhasil Di Tambah');</script>";
		// echo "<script>console.log('hai');</script>";
		//echo "<script>url:location='../view/list_pembayaran.php';</script>";
	}else{
		echo "<script>alert('data gagal Ditambah');</script>";
		// echo "<script>console.log('hai');</script>";
		//echo "<script>url:location='../view/list_pembayaran.php';</script>";
	 }
}elseif($_GET['page'] == "update"){
	$proses = $lib->update($id, $id_tagihan, $id_agen, $tanggal, $bulanbayar, $biayaadmin, $totalbayar);
	if($proses == true){
		echo "<script>alert('Data Berhasil Di Update');</script>";
		echo "<script>url:location='../view/list_pembayaran.php';</script>";
	}else{
		echo "<script>alert('data gagal diupdate');</script>";
		echo "<script>url:location='../view/list_pembayaran.php';</script>";
	} } ?>