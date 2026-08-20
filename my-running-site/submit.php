<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql = "INSERT INTO registrations (
                distance, fullname_th, fullname_en, id_card, gender, 
                birthdate, blood_group, phone, email, shirt_size, 
                bib_name, emergency_contact, emergency_phone
            ) VALUES (
                :distance, :fullname_th, :fullname_en, :id_card, :gender, 
                :birthdate, :blood_group, :phone, :email, :shirt_size, 
                :bib_name, :emergency_contact, :emergency_phone
            )";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':distance' => $_POST['distance'] ?? '',
            ':fullname_th' => $_POST['fullname_th'] ?? '',
            ':fullname_en' => $_POST['fullname_en'] ?? '',
            ':id_card' => $_POST['id_card'] ?? '',
            ':gender' => $_POST['gender'] ?? '',
            ':birthdate' => $_POST['birthdate'] ?? '',
            ':blood_group' => $_POST['blood_group'] ?? '',
            ':phone' => $_POST['phone'] ?? '',
            ':email' => $_POST['email'] ?? '',
            ':shirt_size' => $_POST['shirt_size'] ?? '',
            ':bib_name' => $_POST['bib_name'] ?? '',
            ':emergency_contact' => $_POST['emergency_contact'] ?? '',
            ':emergency_phone' => $_POST['emergency_phone'] ?? '',
        ]);

        echo "<script>
            alert('สมัครเข้าร่วมกิจกรรมสำเร็จเรียบร้อย!');
            window.location.href = 'index.php';
        </script>";
    } catch (PDOException $e) {
        die("เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $e->getMessage());
    }
}
?>