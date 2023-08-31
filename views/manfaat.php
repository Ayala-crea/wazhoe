<!-- Blogs -->
<section id="blogs">
    <style>
        .item {
            display: inline-block;
            margin-right: 15px;
            /* Adjust the margin as needed */
            vertical-align: top;
        }
    </style>
    <div class="container py-5">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="card border-0 font-rale" style="width: 14rem;">
                    <img src="../assets/blog/murah.jpg" alt="">
                    <h5 class="card-title font-size-16">Harga Terjangkau</h5>
                    <p class="card-text font-size-12 text-black-50 py-1">Semua layanan kami memiliki harga yang
                        terjangkau baik untuk pelajar/mahasiswa maupun untuk pekerja.</p>
                    <a href="#" class="color-second text-left">Go Order</a>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 font-rale" style="width: 14rem;">
                    <img src="../assets/blog/pegawai.jpg" alt="">
                    <h5 class="card-title font-size-16">Teknisi Pengalaman</h5>
                    <p class="card-text font-size-12 text-black-50 py-1">Tim kami yang sudah berpengalaman dapat anda
                        percaya untuk menyelesaikan permasalahan pada sepatu anda.</p>
                    <a href="#" class="color-second text-left">Go Order</a>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 font-rale" style="width: 14rem;">
                    <img src="../assets/blog/bahan_alami.png" alt="">
                    <h5 class="card-title font-size-16">Bahan Alami</h5>
                    <p class="card-text font-size-14 text-black-50 py-1">Kami menggunakan bahan-bahan alami yang aman
                        dan di khususkan untuk bahan sepatu maupun tas anda.</p>
                    <a href="#" class="color-second text-left">Go Order</a>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 font-rale" style="width: 14rem;">
                    <img src="../assets/blog/cepat.png" alt="">
                    <h5 class="card-title font-size-16">Layanan Ambil Antar</h5>
                    <p class="card-text font-size-14 text-black-50 py-1">Kami juga menyediakan layanan ambil atau antar
                        sepatu anda, sehingga lebih memudahkan anda untuk mendapatkan layanan kami.</p>
                    <a href="#" class="color-second text-left">Go Order</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // JavaScript to auto-scroll the carousel every 0.3 seconds
        const carousel = document.querySelector(".owl-carousel");
        let currentIndex = 0;

        function scrollToNext() {
            currentIndex = (currentIndex + 1) % carousel.children.length;
            const scrollAmount = currentIndex * carousel.children[0].offsetWidth;
            carousel.scrollTo({ left: scrollAmount, behavior: "smooth" });
        }

        setInterval(scrollToNext, 300);
    </script>
</section>
<!-- !Blogs -->