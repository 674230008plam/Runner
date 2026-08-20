<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครงานวิ่ง - Nakhon Pathom Speed Trail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body class="bg-neutral-100 p-4 md:p-8 text-neutral-800">

    <main class="max-w-2xl mx-auto bg-white rounded-2xl p-6 md:p-8 shadow-sm border">
        <div class="flex items-center justify-between mb-6 pb-2 border-b">
            <h1 class="text-2xl font-bold text-slate-900">แบบฟอร์มสมัครเข้าร่วมกิจกรรม</h1>
            <a href="index.php" class="text-sm text-neutral-500 hover:text-neutral-800">← กลับหน้าหลัก</a>
        </div>

        <form action="submit.php" method="POST" class="space-y-6">

            <!-- เลือกระยะทาง -->
            <div>
                <label class="block font-bold mb-2">1. เลือกระยะทาง *</label>
                <div class="grid grid-cols-2 gap-3 text-sm">
                    <label class="flex items-center gap-2 border p-3 rounded-lg cursor-pointer hover:bg-neutral-50">
                        <input type="radio" name="distance" value="5KM" required> 5 KM (600 บาท)
                    </label>
                    <label class="flex items-center gap-2 border p-3 rounded-lg cursor-pointer hover:bg-neutral-50">
                        <input type="radio" name="distance" value="11KM"> 11 KM (1,000 บาท)
                    </label>
                    <label class="flex items-center gap-2 border p-3 rounded-lg cursor-pointer hover:bg-neutral-50">
                        <input type="radio" name="distance" value="25KM"> 25 KM (1,600 บาท)
                    </label>
                    <label class="flex items-center gap-2 border p-3 rounded-lg cursor-pointer hover:bg-neutral-50">
                        <input type="radio" name="distance" value="40KM"> 40 KM (2,000 บาท)
                    </label>
                </div>
            </div>

            <!-- ข้อมูลผู้สมัคร -->
            <div>
                <label class="block font-bold mb-2">2. ข้อมูลผู้สมัคร</label>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <label class="block mb-1">ชื่อ - นามสกุล (ภาษาไทย) *</label>
                        <input type="text" name="fullname_th" required class="w-full border rounded-lg p-2.5">
                    </div>
                    <div>
                        <label class="block mb-1">Full Name (English) *</label>
                        <input type="text" name="fullname_en" required class="w-full border rounded-lg p-2.5">
                    </div>
                    <div>
                        <label class="block mb-1">เลขบัตรประชาชน (13 หลัก) *</label>
                        <input type="text" name="id_card" maxlength="13" required
                            class="w-full border rounded-lg p-2.5">
                    </div>
                    <div>
                        <label class="block mb-1">เพศ *</label>
                        <select name="gender" required class="w-full border rounded-lg p-2.5 bg-white">
                            <option value="">-- เลือก --</option>
                            <option value="ชาย">ชาย</option>
                            <option value="หญิง">หญิง</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-1">วัน/เดือน/ปี เกิด *</label>
                        <input type="date" name="birthdate" required class="w-full border rounded-lg p-2.5">
                    </div>
                    <div>
                        <label class="block mb-1">กรุ๊ปเลือด</label>
                        <select name="blood_group" class="w-full border rounded-lg p-2.5 bg-white">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-1">เบอร์โทรศัพท์ *</label>
                        <input type="tel" name="phone" required class="w-full border rounded-lg p-2.5">
                    </div>
                    <div>
                        <label class="block mb-1">อีเมล *</label>
                        <input type="email" name="email" required class="w-full border rounded-lg p-2.5">
                    </div>
                </div>
            </div>

            <!-- ข้อมูลเพิ่มเติม -->
            <div>
                <label class="block font-bold mb-2">3. ข้อมูลเพิ่มเติม</label>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <label class="block mb-1">ไซส์เสื้อ *</label>
                        <select name="shirt_size" required class="w-full border rounded-lg p-2.5 bg-white">
                            <option value="">-- เลือกไซส์ --</option>
                            <option value="S">S (36 นิ้ว)</option>
                            <option value="M">M (38 นิ้ว)</option>
                            <option value="L">L (40 นิ้ว)</option>
                            <option value="XL">XL (42 นิ้ว)</option>
                            <option value="2XL">2XL (44 นิ้ว)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-1">ชื่อบนป้าย BIB</label>
                        <input type="text" name="bib_name" maxlength="10" placeholder="สูงสุด 10 ตัวอักษร"
                            class="w-full border rounded-lg p-2.5">
                    </div>
                    <div>
                        <label class="block mb-1">ชื่อผู้ติดต่อฉุกเฉิน *</label>
                        <input type="text" name="emergency_contact" required class="w-full border rounded-lg p-2.5">
                    </div>
                    <div>
                        <label class="block mb-1">เบอร์โทรติดต่อฉุกเฉิน *</label>
                        <input type="tel" name="emergency_phone" required class="w-full border rounded-lg p-2.5">
                    </div>
                </div>
            </div>

            <button type="submit"
                class="w-full bg-[#0070f3] hover:bg-blue-600 text-white font-bold py-3 rounded-xl transition shadow">
                ยืนยันการสมัคร
            </button>

        </form>
    </main>

</body>

</html>