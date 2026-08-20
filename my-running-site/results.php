<?php session_start(); ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการแข่งขัน - RUNLAH</title>
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

    <!-- Header / Navbar -->
    <header class="border-b bg-white sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-2 hover:opacity-80 transition">
                <svg class="w-6 h-6 text-[#ff3823]" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7z" />
                </svg>
                <span class="text-xl font-black tracking-wider text-black">RUNLAH</span>
            </a>

            <!-- เมนูนำทาง (เน้นขีดเส้นใต้สีส้มที่ 'ผลการแข่งขัน') -->
            <nav class="hidden md:flex gap-8 text-sm font-medium h-16 items-center">
                <a href="index.php"
                    class="text-neutral-700 hover:text-black h-full flex items-center transition">หน้าหลัก</a>
                <a href="calendar.php"
                    class="text-neutral-700 hover:text-black h-full flex items-center transition">ปฏิทินงานวิ่ง</a>
                <a href="results.php"
                    class="text-[#ff3823] border-b-2 border-[#ff3823] h-full flex items-center font-bold">ผลการแข่งขัน</a>
                <a href="#"
                    class="text-neutral-700 hover:text-black h-full flex items-center transition">สำหรับผู้จัดงาน</a>
            </nav>

            <div class="flex items-center gap-3">
                <div class="relative hidden sm:block">
                    <input type="text" placeholder="ค้นหานักวิ่ง / หมายเลข BIB"
                        class="border rounded-lg pl-3 pr-8 py-1 text-sm bg-neutral-50 focus:outline-none focus:ring-1 focus:ring-black w-56">
                    <svg class="w-4 h-4 text-neutral-400 absolute right-2.5 top-2" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
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

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-6 md:py-8">

        <!-- Banner ผลการแข่งขันตามภาพ -->
        <div class="relative w-full h-[240px] sm:h-[320px] md:h-[380px] rounded-3xl overflow-hidden shadow-sm">
            <img src="https://images.unsplash.com/photo-1530549387789-4c1017266635?w=1600&auto=format&fit=crop&q=80"
                alt="ผลการแข่งขัน" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

            <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8 text-white space-y-1">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold tracking-tight drop-shadow-md">
                    ผลการแข่งขัน
                </h1>
                <p class="text-xs sm:text-sm md:text-base text-neutral-200 font-light">
                    ตัดสินผลแม่นยำทุกวินาที ด้วยระบบจับเวลา RFID มาตรฐานสากล โดยรันลา
                </p>
            </div>
        </div>

        <!-- รายการค้นหาผลการแข่งขัน -->
        <div class="mt-8 bg-white p-6 rounded-2xl border border-neutral-200 shadow-sm">
            <h2 class="text-lg font-bold text-neutral-900 mb-4">ค้นหาผลการแข่งขัน</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-neutral-600 mb-1">ชื่องานวิ่ง</label>
                    <select class="w-full border rounded-lg p-2.5 text-sm bg-neutral-50 focus:outline-none">
                        <option>Nakhonsawan Speed Trail 2026</option>
                        <option>Nakhon Pathom Virtual Run 2026</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-neutral-600 mb-1">ระยะทาง</label>
                    <select class="w-full border rounded-lg p-2.5 text-sm bg-neutral-50 focus:outline-none">
                        <option>ทุกระยะทาง</option>
                        <option>40 KM</option>
                        <option>25 KM</option>
                        <option>11 KM</option>
                        <option>5 KM</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-neutral-600 mb-1">หมายเลข BIB / ชื่อ</label>
                    <div class="flex gap-2">
                        <input type="text" placeholder="เช่น BIB 001"
                            class="w-full border rounded-lg p-2.5 text-sm bg-neutral-50 focus:outline-none">
                        <button
                            class="bg-[#ff3823] hover:bg-red-600 text-white text-sm font-semibold px-5 rounded-lg transition">ค้นหา</button>
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>

</html>