<?php session_start(); ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PALMMI - หน้าหลัก</title>
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
                    class="text-neutral-900 border-b-2 border-[#ff3823] h-full flex items-center font-bold">หน้าหลัก</a>
                <a href="calendar.php"
                    class="text-neutral-700 hover:text-black h-full flex items-center transition">ปฏิทินงานวิ่ง</a>
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
                        <?= htmlspecialchars($_SESSION['fullname'] ?? $_SESSION['username']) ?></span>
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
    <main class="max-w-6xl mx-auto px-4 py-8">
        <div
            class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center bg-white p-4 md:p-6 rounded-2xl border border-neutral-100 shadow-sm">
            <div class="md:col-span-7 overflow-hidden rounded-2xl bg-neutral-900 border border-neutral-100 shadow-sm">
                <img src="runnig.png" alt="Nakhon Pathom Trail Runner"
                    class="w-full h-80 object-cover block rounded-2xl"
                    onerror="this.src='https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=1200&auto=format&fit=crop&q=80'" />
            </div>

            <div class="md:col-span-5 flex flex-col justify-between py-2">
                <div>
                    <h2 class="text-2xl font-bold tracking-tight text-neutral-950">Nakhon Pathom Trail Runner</h2>
                    <p class="mt-3 text-sm text-neutral-600 leading-relaxed font-normal">
                        &ldquo;ขึ้นเขากบและเขาคีรีวงศ์ ชมอุทยานสวรรค์ แลไหว้พระธาตุ&rdquo;
                    </p>
                    <div class="mt-4 space-y-1.5 text-sm text-neutral-700">
                        <div>20 สิงหาคม 2569</div>
                        <div class="text-xs text-neutral-500 leading-relaxed">สำนักสงฆ์เขารังจันทร์ทาราม หนองปลิง
                            นครสวรรค์ จ.นครสวรรค์</div>
                        <div class="flex items-center gap-1.5 pt-1 text-xs text-neutral-600">
                            <svg class="w-4 h-4 text-neutral-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5v-2a4 4 0 0 0-5-3.87M9 20H4v-2a4 4 0 0 1 5-3.87m8-8.13a4 4 0 1 1-8 0 4 4 0 0 1 8 0zm-8 4a4 4 0 1 0-8 0 4 4 0 0 0 8 0z" />
                            </svg>
                            <span>ผู้จัดงาน: ชมรมคนวิ่งเมืองพระบาง</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex items-center gap-3">
                    <a href="event-detail.php"
                        class="px-5 py-2 rounded-lg bg-neutral-100 hover:bg-neutral-200 text-neutral-800 text-sm font-medium transition">
                        รายละเอียด
                    </a>
                    <a href="register.php"
                        class="px-6 py-2 rounded-full bg-[#0070f3] hover:bg-blue-600 text-white text-sm font-medium transition shadow-sm">
                        สมัครเลย!
                    </a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>