<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body class="bg-[#0a0a0a] text-white">

    <nav class="p-6 border-b border-white/10">
        <h1 class="text-2xl font-bold">StudyCafe</h1>
    </nav>

    <div class="max-w-6xl mx-auto p-6">
        <h2 class="text-xl font-semibold mb-6">Pilih Tempat Belajar</h2>
        <div id="cafe-grid" class="grid grid-cols-1 md:grid-cols-3 gap-6">
            </div>
    </div>

    <script>
        // DATA KAFE (Database statis)
        const cafes = [
            { name: "Brew & Study", loc: "Jakarta Selatan", price: 20000 },
            { name: "Kopi Koding", loc: "Bandung", price: 15000 },
            { name: "Green Corner", loc: "Yogyakarta", price: 10000 }
        ];

        // FUNGSI TAMPILKAN DATA
        function renderCafe() {
            const grid = document.getElementById('cafe-grid');
            grid.innerHTML = cafes.map(cafe => `
                <div class="bg-[#1a1a1a] p-5 rounded-2xl border border-white/10 hover:border-yellow-500 transition">
                    <h3 class="text-lg font-bold">${cafe.name}</h3>
                    <p class="text-sm text-gray-400">${cafe.loc}</p>
                    <p class="text-yellow-500 font-semibold mt-2">Rp ${cafe.price.toLocaleString()}</p>
                </div>
            `).join('');
        }

        // Jalankan fungsi saat web dibuka
        renderCafe();
    </script>
</body>
</html>
