<?php
// Memanipulasi data dari json ke dalam index.php
$data = file_get_contents('api/data.json');
$menu = json_decode($data, true);

$menu = $menu["menu"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waroeng Soenda</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-slate-50 py-2">
        <div class="flex flex-col lg:flex-row">
            <div class="flex items-center justify-between px-4 py-4 lg:py-0">
                <!-- Logo -->
                <a href="#">
                    <img src="img/logo.png" alt="Logo" class="w-48 h-auto inline-block mr-2">
                </a>
    
                <!-- Hamburger (Mobile) -->
                <button id="navbar-toggle" class="lg:hidden text-lime-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <div class="flex flex-col lg:flex-row justify-between w-full lg:py-0"></div>
                <!-- Menu Navigasi (Desktop) -->
                <ul id="menu-item" class="flex flex-col lg:flex-row">
                    <a href="#" class="block px-4 py-2 lg:py-5 text-lime-400 hover:text-emerald-500">Beranda</a></li>
                    <a href="#" class="block px-4 py-2 lg:py-5 text-lime-400 hover:text-emerald-500">Menu</a></li>
                    <a href="#" class="block px-4 py-2 lg:py-5 text-lime-400 hover:text-emerald-500">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Isi Menu -->
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">All Menu</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4">
            <?php foreach ($menu as $row) : ?>
                <div class="p-2">
                    <div class="bg-white rounded-lg shadow-md">
                        <img src="img/menu/<?= $row["gambar"]; ?>" class="w-full h-48 object-cover rounded-t-lg md:inline-block">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold"><?= $row["nama"]; ?></h5>
                            <p class="text-gray-600 mt-2"><?= $row["deskripsi"]; ?></p>
                            <h5 class="text-gray-800 font-semibold mt-2">Rp. <?= $row["harga"]; ?>,00.</h5>
                            <a href="#" class="bg-lime-500 text-white px-4 py-2 rounded-full mt-4 inline-block hover:bg-lime-600">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- JQuery Framework -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Kustomisasi JS -->
    <script src="script.js"></script>
</body>

</html>