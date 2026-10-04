<?php

$produk = [
    [
        "nama" => "Laptop ASUS",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 5
    ],
    [
        "nama" => "iPhone 15",
        "kategori" => "Smartphone",
        "harga" => 12000000,
        "stok" => 3
    ],
    [
        "nama" => "Keyboard Mechanical",
        "kategori" => "Aksesoris",
        "harga" => 750000,
        "stok" => 8
    ],
    [
        "nama" => "Mouse Wireless",
        "kategori" => "Aksesoris",
        "harga" => 350000,
        "stok" => 0
    ],
    [
        "nama" => "Monitor LG 24 Inch",
        "kategori" => "Monitor",
        "harga" => 2200000,
        "stok" => 4
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Aksesoris",
        "harga" => 950000,
        "stok" => 6
    ]
];

$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store</title>

    <!-- Hubungkan CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">

        <div class="logo">
            Cia Store
        </div>

        <nav>
            <a href="#home">Home</a>
            <a href="#produk">Produk</a>
            <a href="#about">About</a>
        </nav>

    </header>

    <section class="hero" id="home">

        <div class="hero-content">

            <h1>
                Selamat Datang di Cia Store
            </h1>

            <p>
                Temukan berbagai perangkat dan aksesoris
                teknologi dengan harga terbaik.
            </p>

            <a href="#produk" class="hero-button">
                Lihat Produk
            </a>

        </div>

    </section>

    <section class="info">

        <div class="info-card">

            <h2>
                <?= $jumlahProduk ?>
            </h2>

            <p>
                Total Produk
            </p>

        </div>

    </section>

    <section class="catalog" id="produk">

        <div class="section-title">

            <h2>
                Katalog Produk
            </h2>

            <p>
                Pilih produk teknologi yang kamu butuhkan.
            </p>

        </div>


        <div class="product-grid">

            <?php foreach ($produk as $item) { ?>

                <div class="product-card">

                    <div class="product-image">

                        <span>
                            Product
                        </span>

                    </div>


                    <div class="product-content">

                        <span class="category">
                            <?= $item["kategori"] ?>
                        </span>

                        <h3>
                            <?= $item["nama"] ?>
                        </h3>

                        <p class="price">

                            Rp <?= number_format(
                                $item["harga"],
                                0,
                                ",",
                                "."
                            ) ?>

                        </p>


                        <?php if ($item["stok"] > 0) { ?>

                            <p class="stock available">
                                Tersedia
                            </p>

                            <p class="stock-number">
                                Stok: <?= $item["stok"] ?>
                            </p>

                            <button class="buy-button">
                                Beli Sekarang
                            </button>

                        <?php } else { ?>

                            <p class="stock empty">
                                Stok Habis
                            </p>

                            <p class="stock-number">
                                Stok: 0
                            </p>

                            <button class="buy-button disabled" disabled>
                                Stok Habis
                            </button>

                        <?php } ?>

                    </div>

                </div>

            <?php } ?>

        </div>

    </section>

    <section class="about" id="about">

        <h2>
            Tentang Cia Store
        </h2>

        <p>
            Cia Store merupakan toko sederhana yang menyediakan
            berbagai perangkat dan aksesoris teknologi.
        </p>

    </section>

    <footer>

        <p>
            &copy; 2026 Cia Store. All Rights Reserved.
        </p>

    </footer>

</body>

</html>