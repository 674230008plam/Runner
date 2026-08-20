<?php session_start(); ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nakhonsawan Speed Trail - PALMMI</title>
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

<body class="bg-white text-neutral-800">

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
    <main class="max-w-5xl mx-auto px-4 py-6 md:py-8">

        <!-- โปสเตอร์หลัก -->
        <div class="w-full overflow-hidden rounded-2xl shadow-sm border border-neutral-100 bg-neutral-950">
            <img src="runnig.png" alt="Nakhonsawan Speed Trail" class="w-full h-auto object-cover block"
                onerror="this.src='https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=1200&auto=format&fit=crop&q=80'" />
        </div>

        <div class="mt-6">
            <h1 class="text-2xl md:text-3xl font-black tracking-tight text-neutral-950">
                Nakhonsawan Speed Trail
            </h1>

            <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-8 text-sm text-neutral-700">
                <div class="flex items-start gap-2.5">
                    <span class="text-neutral-500">🏃 วันจัดกิจกรรม:</span>
                    <span class="font-normal text-neutral-800">20 สิงหาคม 2569</span>
                </div>
                <div class="flex items-start gap-2.5">
                    <span class="text-neutral-500">📍 สถานที่:</span>
                    <span class="font-normal text-neutral-800">สำนักสงฆ์เขารังจันทร์ทาราม หนองปลิง นครสวรรค์
                        จ.นครสวรรค์</span>
                </div>
                <div class="flex items-start gap-2.5">
                    <span class="text-neutral-500">👥 ผู้จัดงาน:</span>
                    <span class="font-normal text-neutral-800">ชมรมคนวิ่งเมืองพระบาง</span>
                </div>
                <div class="flex items-start gap-2.5">
                    <span class="font-normal text-neutral-800">🏷️ วิ่งเทรล, วิ่งครอสคันทรี, อัลตร้ารัน</span>
                </div>
                <div class="flex items-start gap-2.5">
                    <span class="text-neutral-500">👁️ มีผู้เข้าชม:</span>
                    <span class="font-normal text-neutral-800">422</span>
                </div>
            </div>

            <div class="mt-6">
                <a href="register.php"
                    class="inline-block bg-[#0070f3] hover:bg-blue-600 text-white text-sm font-medium px-6 py-2 rounded-full transition shadow-sm">
                    สมัครเลย!
                </a>
            </div>

            <!-- 1. ส่วนถ้วยรางวัลและการแบ่งกลุ่มอายุ -->
            <section class="mt-10 border-t pt-8">
                <h2 class="text-xl font-bold text-slate-900 mb-6">
                    ถ้วยรางวัล แบ่งชายและหญิง (ไม่มีแบ่งสัญชาติ)
                </h2>

                <div class="space-y-8 text-sm text-neutral-800">
                    <div>
                        <div class="flex items-center gap-2 font-bold text-base text-slate-900">
                            <span class="text-amber-500">🔰</span> TRAIL 40 ก.ม.
                        </div>
                        <p class="mt-1 text-xs text-neutral-600 font-medium">
                            เสื้อ Finisher สำหรับนักวิ่ง 40 Km. 25Km. 11Km. ที่เข้าเส้นชัยทุกคน
                        </p>
                        <p class="mt-1 text-xs text-neutral-500">
                            ถ้วยรางวัลแยกตามกลุ่มอายุ แบ่งประเภทชายและหญิง (ชาย 5 รางวัล และ หญิง 5 รางวัล)
                        </p>
                        <div class="mt-3 max-w-md overflow-hidden rounded-lg border border-orange-200">
                            <div
                                class="grid grid-cols-2 bg-[#ff5722] text-white font-semibold text-center py-2 text-xs">
                                <div>Male (ชาย)</div>
                                <div>Female (หญิง)</div>
                            </div>
                            <div class="divide-y divide-orange-100 text-center text-xs">
                                <div class="grid grid-cols-2 py-2 bg-orange-50/40">
                                    <div>รุ่นอายุไม่เกิน 29 ปี</div>
                                    <div>รุ่นอายุไม่เกิน 29 ปี</div>
                                </div>
                                <div class="grid grid-cols-2 py-2 bg-orange-100/50">
                                    <div>รุ่นอายุ 30 – 39 ปี</div>
                                    <div>รุ่นอายุ 30 – 39 ปี</div>
                                </div>
                                <div class="grid grid-cols-2 py-2 bg-orange-50/40">
                                    <div>รุ่นอายุ 40 – 49 ปี</div>
                                    <div>รุ่นอายุ 40 – 49 ปี</div>
                                </div>
                                <div class="grid grid-cols-2 py-2 bg-orange-100/50">
                                    <div>รุ่นอายุ 50 ปีขึ้นไป</div>
                                    <div>รุ่นอายุ 50 ปีขึ้นไป</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center gap-2 font-bold text-base text-slate-900">
                            <span class="text-amber-500">🔰</span> TRAIL 25 ก.ม.
                        </div>
                        <p class="mt-1 text-xs text-neutral-500">
                            ถ้วยรางวัลแยกตามกลุ่มอายุ แบ่งประเภทชายและหญิง (ชาย 5 รางวัล และ หญิง 5 รางวัล)
                        </p>
                        <div class="mt-3 max-w-md overflow-hidden rounded-lg border border-orange-200">
                            <div
                                class="grid grid-cols-2 bg-[#ff5722] text-white font-semibold text-center py-2 text-xs">
                                <div>Male (ชาย)</div>
                                <div>Female (หญิง)</div>
                            </div>
                            <div class="divide-y divide-orange-100 text-center text-xs">
                                <div class="grid grid-cols-2 py-2 bg-orange-50/40">
                                    <div>รุ่นอายุไม่เกิน 29 ปี</div>
                                    <div>รุ่นอายุไม่เกิน 29 ปี</div>
                                </div>
                                <div class="grid grid-cols-2 py-2 bg-orange-100/50">
                                    <div>รุ่นอายุ 30 – 39 ปี</div>
                                    <div>รุ่นอายุ 30 – 39 ปี</div>
                                </div>
                                <div class="grid grid-cols-2 py-2 bg-orange-50/40">
                                    <div>รุ่นอายุ 40 – 49 ปี</div>
                                    <div>รุ่นอายุ 40 – 49 ปี</div>
                                </div>
                                <div class="grid grid-cols-2 py-2 bg-orange-100/50">
                                    <div>รุ่นอายุ 50 ปีขึ้นไป</div>
                                    <div>รุ่นอายุ 50 ปีขึ้นไป</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center gap-2 font-bold text-base text-slate-900">
                            <span class="text-amber-500">🔰</span> TRAIL 11 ก.ม.
                        </div>
                        <p class="mt-1 text-xs text-neutral-500">
                            ถ้วยรางวัลแยกตามกลุ่มอายุ แบ่งประเภทชายและหญิง (ชาย 5 รางวัล และ หญิง 5 รางวัล)
                        </p>
                        <div class="mt-3 max-w-md overflow-hidden rounded-lg border border-orange-200">
                            <div
                                class="grid grid-cols-2 bg-[#ff5722] text-white font-semibold text-center py-2 text-xs">
                                <div>Male (ชาย)</div>
                                <div>Female (หญิง)</div>
                            </div>
                            <div class="divide-y divide-orange-100 text-center text-xs">
                                <div class="grid grid-cols-2 py-2 bg-orange-50/40">
                                    <div>รุ่นอายุไม่เกิน 29 ปี</div>
                                    <div>รุ่นอายุไม่เกิน 29 ปี</div>
                                </div>
                                <div class="grid grid-cols-2 py-2 bg-orange-100/50">
                                    <div>รุ่นอายุ 30 – 39 ปี</div>
                                    <div>รุ่นอายุ 30 – 39 ปี</div>
                                </div>
                                <div class="grid grid-cols-2 py-2 bg-orange-50/40">
                                    <div>รุ่นอายุ 40 – 49 ปี</div>
                                    <div>รุ่นอายุ 40 – 49 ปี</div>
                                </div>
                                <div class="grid grid-cols-2 py-2 bg-orange-100/50">
                                    <div>รุ่นอายุ 50 ปีขึ้นไป</div>
                                    <div>รุ่นอายุ 50 ปีขึ้นไป</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center gap-2 font-bold text-base text-slate-900">
                            <span class="text-amber-500">🔰</span> TRAIL 5 ก.ม.
                        </div>
                        <p class="mt-1 text-xs text-neutral-500">
                            ถ้วยรางวัลแยกตามกลุ่มอายุไม่เกิน 15 ปี (ชาย 5, หญิง 5) และ 16 ปีขึ้นไป (ชาย 10, หญิง 10)
                        </p>
                        <div class="mt-3 max-w-md overflow-hidden rounded-lg border border-orange-200">
                            <div
                                class="grid grid-cols-2 bg-[#ff5722] text-white font-semibold text-center py-2 text-xs">
                                <div>Male (ชาย)</div>
                                <div>Female (หญิง)</div>
                            </div>
                            <div class="divide-y divide-orange-100 text-center text-xs">
                                <div class="grid grid-cols-2 py-2 bg-orange-50/40">
                                    <div>รุ่นอายุไม่เกิน 15 ปี</div>
                                    <div>รุ่นอายุไม่เกิน 15 ปี</div>
                                </div>
                                <div class="grid grid-cols-2 py-2 bg-orange-100/50">
                                    <div>รุ่นอายุ 16 ปีขึ้นไป</div>
                                    <div>รุ่นอายุ 16 ปีขึ้นไป</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 2. ส่วนเสื้อที่ระลึก -->
            <section class="mt-10 border-t pt-8">
                <h2 class="text-xl font-bold text-slate-900 mb-4">
                    เสื้อที่ระลึก - เทรล 40 กม.
                </h2>
                <div
                    class="w-full max-w-2xl overflow-hidden rounded-2xl border border-neutral-100 shadow-sm bg-neutral-900">
                    <img src="Ts.png" alt="เสื้อที่ระลึก RACE T-SHIRT 40KM" class="w-full h-auto object-cover block"
                        onerror="this.src='https://images.unsplash.com/photo-1521572267360-ee0c2909d518?w=1000'" />
                </div>
            </section>

            <!-- 3. ส่วนถ้วยรางวัล (Race Trophy) -->
            <section class="mt-10 border-t pt-8">
                <h2 class="text-xl font-bold text-slate-900 mb-4">
                    ถ้วยรางวัล
                </h2>
                <div
                    class="w-full max-w-2xl overflow-hidden rounded-2xl border border-neutral-100 shadow-sm bg-neutral-900">
                    <img src="trophy.png" alt="ถ้วยรางวัล" class="w-full h-auto object-cover block" />
                </div>
            </section>

        </div>
    </main>

</body>

</html>