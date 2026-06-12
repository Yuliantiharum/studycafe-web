<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Cafe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0a0a0a] text-white">

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=2047&auto=format&fit=crop" class="w-full h-full object-cover opacity-40" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/60 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500/10 border border-yellow-500/20 rounded-full text-yellow-500 text-xs font-semibold uppercase mb-6">
                Platform Pencarian Tempat Belajar
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                Temukan <span class="text-yellow-500">Tempat Belajar</span> Idealmu
            </h1>

            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-8 leading-relaxed">
                Cari kafe & coworking space terbaik untuk belajar berdasarkan WiFi, colokan, tingkat kebisingan, dan vibe aesthetic.
            </p>

            <div class="max-w-xl mx-auto bg-[#1c1c1c] p-2 rounded-full border border-gray-800 flex items-center mb-8">
                <input type="text" placeholder="Cari nama kafe atau lokasi..." class="w-full bg-transparent p-3 text-white focus:outline-none pl-4">
                <button class="bg-yellow-500 text-black font-bold px-8 py-3 rounded-full hover:bg-yellow-400 transition">Cari</button>
            </div>

            <div class="flex flex-wrap justify-center gap-3">
                <span class="px-5 py-2 bg-[#1c1c1c]/50 border border-gray-800 rounded-full text-sm text-gray-300">WiFi Kencang</span>
                <span class="px-5 py-2 bg-[#1c1c1c]/50 border border-gray-800 rounded-full text-sm text-gray-300">Tenang</span>
                <span class="px-5 py-2 bg-[#1c1c1c]/50 border border-gray-800 rounded-full text-sm text-gray-300">Banyak Colokan</span>
                <span class="px-5 py-2 bg-[#1c1c1c]/50 border border-gray-800 rounded-full text-sm text-gray-300">Aesthetic</span>
            </div>
        </div>
    </section>

</body>
</html>
