@extends("layouts.navbar")

@section("title", "RJ Carwash & Autocare - Home")

@section("content")
    <!-- Hero Section with Full Screen Slider -->
    <div class="relative w-full h-screen overflow-hidden">
        <div class="carousel flex transition-transform duration-500 h-full">
            <div class="carousel-item w-full h-full flex-shrink-0 relative">
                <img src="/assets/Cuci Eksterior.jpeg" class="w-full h-full object-cover" alt="Slide 1">
                <div class="absolute inset-0 bg-black bg-opacity-50">
                    <div class="container mx-auto px-4 h-full flex items-center">
                        <div class="max-w-2xl text-white">
                            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fadeIn">
                                Cuci Mobil Profesional
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 animate-fadeIn opacity-90">
                                Layanan cuci mobil terbaik dengan hasil yang memuaskan
                            </p>
                            <a href="#services" 
                               class="inline-block bg-white text-black px-8 py-4 rounded-full text-lg font-semibold hover:bg-blue-700 transition-all transform hover:scale-105 shadow-lg">
                                Lihat Layanan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item w-full h-full flex-shrink-0 relative">
                <img src="/assets/Mobil3.jpg" class="w-full h-full object-cover" alt="Slide 2">
                <div class="absolute inset-0 bg-black bg-opacity-50">
                    <div class="container mx-auto px-4 h-full flex items-center">
                        <div class="max-w-2xl text-white">
                            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fadeIn">
                                Kualitas Terbaik
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 animate-fadeIn opacity-90">
                                Menggunakan peralatan dan bahan berkualitas premium
                            </p>
                            <a href="#services" 
                               class="inline-block bg-white text-black px-8 py-4 rounded-full text-lg font-semibold hover:bg-blue-700 transition-all transform hover:scale-105 shadow-lg">
                                Lihat Layanan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item w-full h-full flex-shrink-0 relative">
                <img src="/assets/Mobil2.jpg" class="w-full h-full object-cover" alt="Slide 3">
                <div class="absolute inset-0 bg-black bg-opacity-50">
                    <div class="container mx-auto px-4 h-full flex items-center">
                        <div class="max-w-2xl text-white">
                            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fadeIn">
                                Pelayanan Professional
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 animate-fadeIn opacity-90">
                                Tim ahli yang berpengalaman dan ramah
                            </p>
                            <a href="#services" 
                               class="inline-block bg-white text-black px-8 py-4 rounded-full text-lg font-semibold hover:bg-blue-700 transition-all transform hover:scale-105 shadow-lg">
                                Lihat Layanan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="absolute left-4 top-1/2 -translate-y-1/2 bg-white bg-opacity-20 p-3 rounded-full text-white hover:bg-opacity-30 transition-all" onclick="moveCarousel(-1)">
            <i class="fas fa-chevron-left text-2xl"></i>
        </button>
        <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-white bg-opacity-20 p-3 rounded-full text-white hover:bg-opacity-30 transition-all" onclick="moveCarousel(1)">
            <i class="fas fa-chevron-right text-2xl"></i>
        </button>
    </div>

    <!-- Welcome Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-8">Selamat Datang di RJ Carwash & Autocare</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-10">
                    Kami menyediakan layanan perawatan kendaraan profesional dengan teknologi modern dan tim ahli yang berpengalaman. 
                    Kepuasan pelanggan adalah prioritas utama kami.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="p-6 bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                        <i class="fas fa-clock text-4xl text-black mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Layanan Cepat</h3>
                        <p class="text-gray-600">Waktu pengerjaan efisien tanpa mengurangi kualitas</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                        <i class="fas fa-star text-4xl text-black mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Kualitas Terbaik</h3>
                        <p class="text-gray-600">Menggunakan produk dan peralatan premium</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                        <i class="fas fa-users text-4xl text-black mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Tim Profesional</h3>
                        <p class="text-gray-600">Dikerjakan oleh tenaga ahli berpengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Layanan Kami</h2>
                <p class="text-gray-600 text-lg">Berbagai layanan perawatan untuk kendaraan Anda</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <img src="/assets/Cuci Eksterior.jpeg" class="w-full h-64 object-cover transform transition-transform group-hover:scale-110" alt="Cuci Eksterior">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-70 transition-opacity"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold mb-4">Premium Wash</h3>
                        <p class="text-gray-600 mb-4">Membersihkan bagian luar dan dalam mobil dengan teknologi terkini untuk hasil maksimal.</p>
                    </div>
                </div>

                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <img src="/assets/Cuci Interior.jpeg" class="w-full h-64 object-cover transform transition-transform group-hover:scale-110" alt="Cuci Interior">
                        <div class="absolute inset-0 bg-gradient-to-t from- black to-transparent opacity-0 group-hover:opacity-70 transition-opacity"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold mb-4">Interior Detailing</h3>
                        <p class="text-gray-600 mb-4">Menyegarkan interior mobil Anda agar lebih nyaman dan bersih.</p>
                    </div>
                </div>

                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <img src="/assets/Poles.jpeg" class="w-full h-64 object-cover transform transition-transform group-hover:scale-110" alt="Poles Mobil">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-70 transition-opacity"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold mb-4">Paint Correction</h3>
                        <p class="text-gray-600 mb-4">Mengembalikan kilau mobil Anda seperti baru dengan teknik poles profesional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sidebar Contact Section -->
    <section id="contact" class="fixed top-2/3 right-0 z-50">
        <div class="flex flex-col space-y-4">
            <!-- WhatsApp Button -->
            <a href="https://wa.me/6281326619803" 
               class="group flex items-center justify-center bg-green-500 text-white w-12 h-12 rounded-full hover:bg-green-600 transition-all transform hover:scale-110 shadow-lg">
                <i class="fab fa-whatsapp text-2xl"></i>
            </a>
            <!-- Instagram Button -->
            <a href="https://instagram.com/rjautocareid"
               class="group flex items-center justify-center bg-gradient-to-r from-purple-500 to-pink-500 text-white w-12 h-12 rounded-full hover:from-purple-600 hover:to-pink-600 transition-all transform hover:scale-110 shadow-lg">
                <i class="fab fa-instagram text-2xl"></i>
            </a>
            <!-- TikTok Button -->
            <a href="https://www.tiktok.com/@rjautocareid?refer=creator_embed"
               class="group flex items-center justify-center bg-black text-white w-12 h-12 rounded-full hover:bg-gray-800 transition-all transform hover:scale-110 shadow-lg">
                <i class="fab fa-tiktok text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-6">Tentang Kami</h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Kami adalah penyedia layanan cuci mobil profesional yang berdedikasi untuk memberikan kualitas terbaik kepada pelanggan kami. 
                    Dengan teknologi modern dan tenaga ahli, kami memastikan setiap mobil mendapatkan perawatan terbaik.
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gradient-to-br from-black to-black">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Testimoni Pelanggan</h2>
                <p class="text-gray-200 text-lg">Apa kata mereka tentang layanan kami</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-xl transform transition-all duration-300 hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <img src="/assets/DummyProfileON.png" alt="Customer" class="w-16 h-16 rounded-full ring-4 ring-blue-100">
                        <div class="ml-4">
                            <h4 class="text-xl font-semibold">Arya Satrio</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed">"Pelayanan sangat profesional, hasil cucian bersih dan rapi. Staff ramah dan cepat dalam bekerja."</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-xl transform transition-all duration-300 hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <img src="/assets/DummyProfileON.png" alt="Customer" class="w-16 h-16 rounded-full ring-4 ring-blue-100">
                        <div class="ml-4">
                            <h4 class="text-xl font-semibold">Budi Santoso</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed">"Interior mobil jadi seperti baru lagi setelah dicuci di sini. Sangat memuaskan!"</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-xl transform transition-all duration-300 hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <img src="/assets/DummyProfileON.png" alt="Customer" class="w-16 h-16 rounded-full ring-4 ring-blue-100">
                        <div class="ml-4">
                        <h4 class="text-xl font-semibold">Siti Rahma</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed">"Poles mobilnya bagus banget, kilap maksimal. Recommended banget buat yang mau mobilnya tampil maksimal!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">FAQ</h2>
                <p class="text-gray-600 text-lg">Pertanyaan yang sering diajukan</p>
            </div>
            <div class="max-w-3xl mx-auto">
                <div class="space-y-4">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <button class="faq-button w-full px-8 py-6 text-left font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span class="text-lg">Berapa lama waktu yang dibutuhkan untuk cuci mobil?</span>
                            <i class="fas fa-plus text-blue-600 transition-transform duration-300"></i>
                        </button>
                        <div class="faq-answer px-8 py-6 bg-gray-50 hidden">
                            <p class="text-gray-600">Waktu yang dibutuhkan bervariasi tergantung jenis layanan. Untuk cuci exterior biasa membutuhkan waktu sekitar 30-45 menit.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <button class="faq-button w-full px-8 py-6 text-left font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span class="text-lg">Apakah perlu reservasi terlebih dahulu?</span>
                            <i class="fas fa-plus text-blue-600 transition-transform duration-300"></i>
                        </button>
                        <div class="faq-answer px-8 py-6 bg-gray-50 hidden">
                            <p class="text-gray-600">Untuk layanan basic tidak perlu reservasi, bisa langsung datang. Namun untuk layanan Poles, kami sarankan untuk reservasi terlebih dahulu agar mendapat pelayanan optimal melaui Whatsapp.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <button class="faq-button w-full px-8 py-6 text-left font-semibold flex justify-between items-center hover:bg-gray-50">
                            <span class="text-lg">Apa saja produk yang digunakan aman untuk mobil?</span>
                            <i class="fas fa-plus text-blue-600 transition-transform duration-300"></i>
                        </button>
                        <div class="faq-answer px-8 py-6 bg-gray-50 hidden">
                            <p class="text-gray-600">Kami hanya menggunakan produk berkualitas premium yang aman untuk semua jenis cat mobil. Semua produk telah tersertifikasi dan digunakan oleh profesional berpengalaman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Hubungi Kami</h2>
                <p class="text-gray-600 text-lg">Kami siap melayani Anda</p>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-6">
                <a href="https://wa.me/6281326619803" 
                   class="group flex items-center space-x-3 bg-green-500 text-white px-8 py-4 rounded-full hover:bg-green-600 transition-all transform hover:scale-105 shadow-lg">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    <span class="text-lg font-medium">WhatsApp</span>
                </a>
                <a href="https://instagram.com/rjautocareid"
                   class="group flex items-center space-x-3 bg-gradient-to-r from-purple-500 to-pink-500 text-white px-8 py-4 rounded-full hover:from-purple-600 hover:to-pink-600 transition-all transform hover:scale-105 shadow-lg">
                    <i class="fab fa-instagram text-2xl"></i>
                    <span class="text-lg font-medium">Instagram</span>
                </a>
                </a>
                <a href="https://www.tiktok.com/@rjautocareid?refer=creator_embed"
                   class="group flex items-center space-x-3 bg-black text-white px-8 py-4 rounded-full hover:from-purple-600 hover:to-pink-600 transition-all transform hover:scale-105 shadow-lg">
                    <i class="fab fa-tiktok text-2xl"></i>
                    <span class="text-lg font-medium">Tiktok</span>
                </a>    
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section id="map" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Lokasi Kami</h2>
                <p class="text-gray-600 text-lg">Kunjungi workshop kami</p>
            </div>
            <div class="max-w-5xl mx-auto">
                <div class="relative w-full" style="padding-bottom: 50%; height: 0;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3258.037689682956!2d110.38631507404985!3d-7.802542677453464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a577b1febaa3f%3A0x7d76d1c6d90cba91!2sRJ%20Carwash!5e1!3m2!1sid!2sid!4v1735230782439!5m2!1sid!2sid"
                        class="absolute top-0 left-0 w-full h-full rounded-xl shadow-lg"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="mt-8 text-center">
                    <h3 class="text-2xl font-semibold mb-2">RJ Carwash & Autocare</h3>
                    <p class="text-gray-600">Jl. Glagahsari No.4, Yogyakarta</p>
                    <p class="text-gray-600 mt-2">Buka Setiap Hari: 07.00 - 23.00 WIB</p>
                </div>
            </div>
        </div>
    </section>

    

    <script>
        // Carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const totalSlides = slides.length;
        const carousel = document.querySelector('.carousel');

        function moveCarousel(direction) {
            currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
            updateCarousel();
        }

        function updateCarousel() {
            carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        // Auto-advance carousel
        setInterval(() => moveCarousel(1), 5000);

        // FAQ Toggle Functionality
        document.querySelectorAll('.faq-button').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('i');
                
                // Toggle answer visibility
                answer.classList.toggle('hidden');
                
                // Toggle icon plus/minus
                if (answer.classList.contains('hidden')) {
                    icon.classList.remove('fa-minus');
                    icon.classList.add('fa-plus');
                } else {
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                }
                
                // Close other answers
                document.querySelectorAll('.faq-answer').forEach(otherAnswer => {
                    if (otherAnswer !== answer && !otherAnswer.classList.contains('hidden')) {
                        otherAnswer.classList.add('hidden');
                        otherAnswer.previousElementSibling.querySelector('i').classList.remove('fa-minus');
                        otherAnswer.previousElementSibling.querySelector('i').classList.add('fa-plus');
                    }
                });
            });
        });

        // Scroll to Top Button Functionality
        const scrollButton = document.getElementById('scrollToTop');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollButton.classList.remove('opacity-0');
                scrollButton.classList.add('opacity-100');
            } else {
                scrollButton.classList.remove('opacity-100');
                scrollButton.classList.add('opacity-0');
            }
        });

        scrollButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
@endsection