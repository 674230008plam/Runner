<?php session_start(); ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปฏิทินงานวิ่ง - PALMMI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body class="bg-neutral-50 text-neutral-800">

    <!-- Header -->
    <header class="border-b bg-white sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-2 hover:opacity-80 transition">
                <svg class="w-6 h-6 text-[#ff3823]" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7z" />
                </svg>
                <span class="text-xl font-black tracking-wider text-black">PALMMI</span>
            </a>

            <nav class="hidden md:flex gap-8 text-sm font-medium h-16 items-center">
                <a href="index.php"
                    class="text-neutral-700 hover:text-black h-full flex items-center transition">หน้าหลัก</a>
                <a href="calendar.php"
                    class="text-neutral-900 border-b-2 border-[#ff3823] h-full flex items-center font-bold">ปฏิทินงานวิ่ง</a>
                <a href="results.php"
                    class="text-neutral-700 hover:text-black h-full flex items-center transition">ผลการแข่งขัน</a>
                <a href="#"
                    class="text-neutral-700 hover:text-black h-full flex items-center transition">สำหรับผู้จัดงาน</a>
            </nav>

            <div class="flex items-center gap-3">
                <div class="relative hidden sm:block">
                    <input type="text" placeholder="ค้นหา"
                        class="border rounded-lg pl-3 pr-8 py-1 text-sm bg-neutral-50 focus:outline-none w-44">
                </div>

                <?php if (isset($_SESSION['username'])): ?>
                    <span class="text-xs text-neutral-600 font-medium">👤
                        <?= htmlspecialchars($_SESSION['fullname'] ?? $_SESSION['username']) ?>
                    </span>
                    <a href="logout.php"
                        class="text-xs bg-neutral-100 hover:bg-neutral-200 text-neutral-700 px-3 py-1.5 rounded-md font-medium transition">ออกจากระบบ</a>
                <?php else: ?>
                    <a href="login.php"
                        class="text-xs bg-[#ff3823] hover:bg-red-600 text-white px-3.5 py-1.5 rounded-md font-medium transition shadow-sm">เข้าสู่ระบบ</a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Banner & Filter -->
    <main class="max-w-6xl mx-auto px-4 py-6 md:py-8">
        <div class="relative w-full h-[280px] sm:h-[360px] md:h-[430px] rounded-2xl overflow-hidden shadow-sm">
            <img src="banner.png" alt="ปฏิทินงานวิ่งในไทย" class="w-full h-full object-cover"
                onerror="this.src='https://images.unsplash.com/photo-1552674605-db6ffd4facb5?w=1600&auto=format&fit=crop&q=80'" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
            <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white tracking-wide drop-shadow-md">
                    ปฏิทินงานวิ่งในไทย สัปดาห์นี้
                </h1>
            </div>
        </div>

        <div
            class="mt-4 bg-white rounded-xl border border-neutral-200 px-4 flex items-center gap-6 overflow-x-auto shadow-sm">
            <button
                class="flex items-center gap-2 py-3 text-sm font-semibold text-[#ff3823] border-b-2 border-[#ff3823] whitespace-nowrap">
                📅 ดูตามสัปดาห์
            </button>
            <button
                class="flex items-center gap-2 py-3 text-sm text-neutral-600 hover:text-black whitespace-nowrap transition">
                📍 ดูจากแผนที่
            </button>
            <button
                class="flex items-center gap-2 py-3 text-sm text-neutral-600 hover:text-black whitespace-nowrap transition">
                🏷️ ดูตามประเภท
            </button>
        </div>
    </main>

</body>

</html>