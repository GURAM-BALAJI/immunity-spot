
<?php
	include '../includes/session.php';
	if(isset($_POST['add'])){
		$conn = $pdo->open();
		$image = $_FILES['image']['name'];
		if(!empty($image)){
			$ext = pathinfo($image, PATHINFO_EXTENSION);
			$filename = time() . '.' . $ext;
			move_uploaded_file($_FILES['image']['tmp_name'], '../../images/'.$filename);
			try{
				$stmt = $conn->prepare("INSERT INTO galary (galary_name) VALUES (:name)");
				$stmt->execute(['name'=>$filename]);
				$_SESSION['success'] = 'Image added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up galary form first';
	}

	header('location: galary.php');

?>