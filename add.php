function add($cashier, $category, $product, $price){
		include('config/koneksi.php');
		$sql = "INSERT INTO product values ('$product','$price','$category','$cashier')";
		$query = mysqli_query($koneksi, $sql);

		if ($query) {
			return true;
		}
		else{
			return false;
		}
	}