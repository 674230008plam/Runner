<?php
session_start();
require_once 'db.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!empty($username) && !empty($password)) {
        // ตรวจสอบข้อมูลผู้ใช้ตรงกับ Ratchapong / 2548 โดยตรง
        if ($username === 'Ratchapong' && $password === '2548') {
            $_SESSION['user_id'] = 1;
            $_SESSION['username'] = 'Ratchapong';
            $_SESSION['fullname'] = 'Ratchapong';

            header("Location: index.php");
            exit;
        }

        // ตรวจสอบผ่านฐานข้อมูล (เผื่อมี User อื่นใน Database)
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['fullname'] = $user['fullname'];

            header("Location: index.php");
            exit;
        } else {
            $error = "ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง";
        }
    } else {
        $error = "กรุณากรอกข้อมูลให้ครบถ้วน";
    }
}
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ - RUNLAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body class="bg-neutral-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white p-8 rounded-2xl shadow-sm border max-w-md w-full">
        <div class="text-center mb-6">
            <a href="index.php" class="inline-flex items-center gap-2 mb-2">
                <svg class="w-8 h-8 text-[#ff3823]" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7z" />
                </svg>
                <span class="text-2xl font-black tracking-wider text-black">RUNLAH</span>
            </a>
            <h2 class="text-lg font-bold text-neutral-800">เข้าสู่ระบบ</h2>
        </div>

        <?php if (!empty($error)): ?>
            <div class="bg-red-50 text-red-600 text-sm p-3 rounded-lg mb-4 border border-red-100">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="login.php" class="space-y-4 text-sm">
            <div>
                <label class="block font-medium mb-1 text-neutral-700">ชื่อผู้ใช้งาน (Username)</label>
                <input type="text" name="username" required placeholder="user"
                    class="w-full border rounded-lg p-2.5 bg-neutral-50 focus:bg-white focus:outline-none focus:ring-1 focus:ring-black">
            </div>

            <div>
                <label class="block font-medium mb-1 text-neutral-700">รหัสผ่าน (Password)</label>
                <input type="password" name="password" required placeholder="password"
                    class="w-full border rounded-lg p-2.5 bg-neutral-50 focus:bg-white focus:outline-none focus:ring-1 focus:ring-black">
            </div>

            <button type="submit"
                class="w-full bg-[#ff3823] hover:bg-red-600 text-white font-bold py-2.5 rounded-lg transition shadow-sm mt-2">
                เข้าสู่ระบบ
            </button>
        </form>

        <div class="mt-6 text-center text-xs text-neutral-500">
            <a href="index.php" class="hover:underline">← กลับไปหน้าหลัก</a>
        </div>
    </div>

</body>

</html>