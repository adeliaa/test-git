
<?php 	

class read
{
	public $koneksi;

	public function __construct()
	{
		require_once("config/koneksi.php");
		$this->koneksi = new Koneksi();
	}

	function tampilList()
	{
		try{
			$sql = "SELECT * FROM list";
			$query = $this->koneksi->db->query($sql);
			$data = $query->fetchALL(PDO::FETCH_ASSOC);
			return $data;
		}
		catch(PDOexception $e){
			return false;
		}
	}


	 function add($cashier, $category, $product, $price){
		try{
			$sql = "INSERT INTO anggota SET Id_cashier=?, id_category=?, product=?, $price= ?";
			$insert = $this->koneksi->db->prepare($sql);
			$insert->bindparam(1, $cashier);
			$insert->bindparam(2, $category);
			$insert->bindparam(3, $product);
			$insert->bindparam(4, $price);
			return $insert;
		}
		catch(PDOException $e){
			return false;
		}
	}
}

	?>