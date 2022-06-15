<?php
include '../includes/session.php';

if (isset($_POST['save'])) {
    $ipagecolor = $_POST['ipagecolor'];
    $ibgcolor = $_POST['ibgcolor'];
    $abgcolor = $_POST['abgcolor'];
    $pbgcolor = $_POST['pbgcolor'];
    $sbgcolor = $_POST['sbgcolor'];
    $ipagefontsize = $_POST['ipagefontsize'];
    $ifontcolor = $_POST['ifontcolor'];
    $ifontstyle = $_POST['ifontstyle'];
    $iwinpagecolor = $_POST['iwinpagecolor'];
    $ipaymentcolor = $_POST['ipaymentcolor'];
    if (!empty($ipaymentcolor) && $ipaymentcolor!='#000000') {
        try {
            $conn = $pdo->open();
            $stmt = $conn->prepare("UPDATE message SET ipaymentcolor=:background WHERE message_id=:id");
            $stmt->execute(['background' => $ipaymentcolor, 'id' => 1]);
            $_SESSION['success'] = 'Updated successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    if (!empty($iwinpagecolor) && $iwinpagecolor!='#000000') {
        try {
            $conn = $pdo->open();
            $stmt = $conn->prepare("UPDATE message SET iwinpagecolor=:background WHERE message_id=:id");
            $stmt->execute(['background' => $iwinpagecolor, 'id' => 1]);
            $_SESSION['success'] = 'Updated successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    if (!empty($ipagecolor) && $ipagecolor!='#000000') {
        try {
            $conn = $pdo->open();
            $stmt = $conn->prepare("UPDATE message SET ipagecolor=:logo WHERE message_id=:id");
            $stmt->execute(['logo' => $ipagecolor, 'id' => 1]);
            $_SESSION['success'] = 'Updated successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    if (!empty($ibgcolor) && $ibgcolor!='#000000') {
        try {
            $conn = $pdo->open();
            $stmt = $conn->prepare("UPDATE message SET ibgcolor=:background WHERE message_id=:id");
            $stmt->execute(['background' => $ibgcolor, 'id' => 1]);
            $_SESSION['success'] = 'Updated successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    if (!empty($abgcolor) && $abgcolor!='#000000') {
        try {
            $conn = $pdo->open();
            $stmt = $conn->prepare("UPDATE message SET abgcolor=:logo WHERE message_id=:id");
            $stmt->execute(['logo' => $abgcolor, 'id' => 1]);
            $_SESSION['success'] = 'Updated successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    if (!empty($pbgcolor) && $pbgcolor!='#000000') {
        try {
            $conn = $pdo->open();
            $stmt = $conn->prepare("UPDATE message SET pbgcolor=:background WHERE message_id=:id");
            $stmt->execute(['background' => $pbgcolor, 'id' => 1]);
            $_SESSION['success'] = 'Updated successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    if (!empty($sbgcolor) && $sbgcolor!='#000000') {
        try {
            $conn = $pdo->open();
            $stmt = $conn->prepare("UPDATE message SET sbgcolor=:logo WHERE message_id=:id");
            $stmt->execute(['logo' => $sbgcolor, 'id' => 1]);
            $_SESSION['success'] = 'Updated successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    if (!empty($ifontcolor) && $ifontcolor!='#000000') {
        try {
            $conn = $pdo->open();
            $stmt = $conn->prepare("UPDATE message SET ifontcolor=:background WHERE message_id=:id");
            $stmt->execute(['background' => $ifontcolor, 'id' => 1]);
            $_SESSION['success'] = 'Updated successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    } if (!empty($ifontstyle)) {
        try {
            $conn = $pdo->open();
            $stmt = $conn->prepare("UPDATE message SET ipagefont=:logo WHERE message_id=:id");
            $stmt->execute(['logo' => $ifontstyle, 'id' => 1]);
            $_SESSION['success'] = 'Updated successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    if (!empty($ipagefontsize)) {
        try {
            $conn = $pdo->open();
            $stmt = $conn->prepare("UPDATE message SET ipagefontsize=:logo WHERE message_id=:id");
            $stmt->execute(['logo' => $ipagefontsize, 'id' => 1]);
            $_SESSION['success'] = 'Updated successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit style form first';
}
header('location: style.php');
