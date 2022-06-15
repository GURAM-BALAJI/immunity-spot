<?php
include '../includes/session.php';
include '../includes/req_start.php';
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	$conn = $pdo->open();
	try {
		$stmt = $conn->prepare("SELECT * FROM galary WHERE galary_id=:id");
		$stmt->execute(['id' => $id]);
		foreach ($stmt as $row)
			$file = $row['galary_name'];
		unlink('../../images/' . $file);
		$stmt = $conn->prepare("DELETE from galary WHERE galary_id=:id");
		$stmt->execute(['id' => $id]);


		$_SESSION['success'] = 'galary deleted successfully';
	} catch (PDOException $e) {
		$_SESSION['error'] = $e->getMessage();
	}

	$pdo->close();
} else {
	$_SESSION['error'] = 'Select galary to delete first';
}

header('location: galary.php');
