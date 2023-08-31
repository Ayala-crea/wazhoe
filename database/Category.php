<?php
require_once "functions.php";

$category = query("SELECT * FROM kategori WHERE jenis = 'cleaning'");
$category_repaint = query("SELECT * FROM kategori WHERE jenis = 'repaint'");
$category_other = query("SELECT * FROM kategori WHERE jenis = 'other'");
?>


<section id="category">
    <div class="container mt-4">
        <h1>cleaning</h1>
        <div class="row">
            <?php foreach ($category as $row): ?>
                <div class="col-md-4">
                    <!-- Card mulai dari sini -->
                    <div class="card">
                        <!-- Gambar pada card -->
                        <img src="<?php echo $row["image"] ?? "jenis"; ?>" class="card-img-top" alt="Foto">

                        <div class="card-body">
                            <!-- Judul card -->
                            <h5 class="card-title">
                                <?php echo $row["jenis_khusus"] ?? "jenis"; ?>
                            </h5>
                            <!-- Isi card -->
                            <p class="card-text">
                                <?php echo $row["keterangan"] ?? "jenis"; ?>
                            </p>
                            <!-- Tombol untuk lebih lanjut -->
                            <a href="./order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                    <!-- Card berakhir di sini -->
                </div>
            <?php endforeach; ?>
        </div>
        <h1>repaint</h1>
        <div class="row">
            <?php foreach ($category_repaint as $row): ?>
                <div class="col-md-4 pt-5">
                    <!-- Card mulai dari sini -->
                    <div class="card">
                        <!-- Gambar pada card -->
                        <img src="<?php echo $row["image"] ?? "jenis"; ?>" class="card-img-top" alt="Foto">

                        <div class="card-body">
                            <!-- Judul card -->
                            <h5 class="card-title">
                                <?php echo $row["jenis_khusus"] ?? "jenis"; ?>
                            </h5>
                            <!-- Isi card -->
                            <p class="card-text">
                                <?php echo $row["keterangan"] ?? "jenis"; ?>
                            </p>
                            <!-- Tombol untuk lebih lanjut -->
                            <a href="./order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                    <!-- Card berakhir di sini -->
                </div>
            <?php endforeach; ?>
        </div>
        <h1>other</h1>
        <div class="row">

            <?php foreach ($category_other as $row): ?>
                <div class="col-md-4 pt-5">
                    <!-- Card mulai dari sini -->
                    <div class="card">
                        <!-- Gambar pada card -->
                        <img src="<?php echo $row["image"] ?? "jenis"; ?>" class="card-img-top" alt="Foto">

                        <div class="card-body">
                            <!-- Judul card -->
                            <h5 class="card-title">
                                <?php echo $row["jenis_khusus"] ?? "jenis"; ?>
                            </h5>
                            <!-- Isi card -->
                            <p class="card-text">
                                <?php echo $row["keterangan"] ?? "jenis"; ?>
                            </p>
                            <!-- Tombol untuk lebih lanjut -->
                            <a href="./order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                    <!-- Card berakhir di sini -->
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>