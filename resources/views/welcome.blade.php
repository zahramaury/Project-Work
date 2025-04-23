<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasko Nayor - Coffee Service</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=LT+Soul:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            font-family: 'LT Soul', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'LT Soul', sans-serif;
        }

        .font-serif {
            font-family: 'LT Soul', serif !important;
        }

        .font-bold {
            font-weight: 700 !important;
        }
        .font-normal {
        }

        .hero-section {
            background:url('img/background.jpg') no-repeat center center;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }


        .service-section {
            background:url('img/Banner.png') no-repeat center center;
            background-size: cover;
            min-height: 30vh;
            display: flex;
            align-items: center;
        }


        .main-content {
            background-color: #f5e6d3;
            margin-top: -40px;
            position: relative;
            padding: 2rem;
        }

        .brown-rectangle {
            background-color: #71482F;
            width: 85%;
            height: 80px;
            border-radius: 15px;
            margin: -5px auto 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            font-size: 1.3rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 10;
        }

        .story-section {
            margin-top: 50px;
        }

        .brown-section {
            background-color: #f5e6d3;
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem auto;
            color: white;
        }

        .testimonial-card {
            background-color: #754c29; /* Warna coklat */
            border-radius: 20px;
            padding: 1.5rem;
            color: white;
            text-align: left;
        }

        html {
            scroll-behavior: smooth;
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .user-icon {
            width: 50px; /* Ukuran ikon */
            height: 50px;
            border-radius: 50%;
            background-color: transparent; /* Hapus background putih */
            color: white; /* Warna ikon */
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            gap: 10px; /* Jarak antara ikon dan teks */
        }

        .contact-section {
            background-color: #71482F;
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem auto;
            color: white;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .product-card {
            background: #8B5E3B;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 219px;
            height: 273px;
            object-fit: cover;
        }

        .nav-logo {
            height: 40px;
        }

        .nav-link {
            color: white;
            font-size: 14px;
            padding: 0.5rem 1rem;
            transition: opacity 0.3s ease;
        }

        .nav-link:hover {
            opacity: 0.8;
        }

        .contact-btn {
            background-color: white;
            color: black;
            padding: 8px 24px;
            border-radius: 20px;
            font-weight: 500;
        }

        .testimonial-card {
            background-color: #71482F;
            border-radius: 15px;
            padding: 1.5rem;
            margin: 1rem;
        }

        .white-section {
            background-color: white;
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem auto;
        }

        .instagram-btn {
            background-color: #71482F;
            color: white;
            padding: 10px 30px;
            border-radius: 25px;
            font-size: 16px;
            margin-top: 2rem;
            display: inline-block;
        }

        .story-section h2,
        .story-section p {
            color: #71482F;
        }
        .brown-section h2 {
            color: #71482F;
        }
        .product-section{
            color: #71482F;
        }


        footer {
            background-color: #71482F;
        }

    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-gray-800 bg-opacity-75 py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <!-- Logo on the left -->
            <img src="img/logo.png" alt="PaskoNayor" class="nav-logo h-10">

            <!-- Centered navigation links -->
            <div class="hidden md:flex items-center justify-center flex-grow space-x-6">
                <a href="#" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#product" class="nav-link">Product</a>
                <a href="#service" class="nav-link">Service</a>
                <a href="#testimoni" class="nav-link">Testimoni</a>
            </div>
            <!-- Contact button on the right -->
            <button class="contact-btn">Contact Me</button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden">
            <div class="flex flex-col items-center space-y-2 bg-gray-800 py-4">
                <a href="#" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#product" class="nav-link">Product</a>
                <a href="#service" class="nav-link">Service</a>
                <a href="#testimoni" class="nav-link">Testimoni</a>
                <button class="contact-btn">Contact Me</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container mx-auto px-6">
            <h1 class="text-white text-5xl font-bold mb-4">Welcome!</h1>
            <img src="img/paskonayor.png" alt="PaskoNayor" class="text-white text-7xl font-serif mb-2">
            <button class="bg-white text-black px-8 py-3 rounded-full font-medium">Order Now!</button>
        </div>
    </section>

     <!-- Rectangle Section -->
     <div class="brown-rectangle"></div>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Story Section -->
        <section id="about" class="container mx-auto max-w-4xl text-center mb-16 story-section">
            <h2 class="text-3xl font-bold mb-8">This Is Our Story!</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                Pasko Nayor is a combination of a coffee market and roasting house that brings you the best quality coffee beans. The name Pasko, which means "coffee market", reflects our vision to be the center of quality coffee providers that can compete in the market. Meanwhile, Nayor is one of our flagship products that has been widely recognized among coffee lovers.
            </p>
            <p class="text-gray-700 leading-relaxed mb-6">
                With the concept of storytelling coffee, we believe that every coffee bean has its own story. We not only deliver delicious coffee, but also share the stories and insights behind each cup served.
            </p>
            <button class="instagram-btn hover:opacity-90">Our Instagram</button>
        </section>

       <!-- Products Section -->
       <section id="product" class="bg-white py-10 mb-16 rounded-lg product-section">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Our Special Product</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="rounded-lg shadow-md overflow-hidden p-4 text-center" style="background-color: #f5e6d3 !important;">
                    <img src="/img/coffe.png" alt="Coffee Beans" class="w-full h-auto object-cover">
                    <h3 class="text-xl font-semibold">Coffee Beans</h3>
                    <p class="text-brown">Penjelasan dari Coffee Beans Tersedia.</p>
                </div>
                <div class="rounded-lg shadow-md overflow-hidden p-4 text-center" style="background-color: #f5e6d3 !important;">
                    <img src="/img/coffe.png" alt="Coffee Bubuk" class="w-full h-auto object-cover">
                    <h3 class="text-xl font-semibold">Coffee Bubuk</h3>
                    <p class="text-brown">Penjelasan dari Coffee Bubuk Tersedia.</p>
                </div>
                <div class="rounded-lg shadow-md overflow-hidden p-4 text-center" style="background-color: #f5e6d3 !important;">
                    <img src="/img/coffe.png" alt="Coffee Tubruk" class="w-full h-auto object-cover">
                    <h3 class="text-xl font-semibold">Coffee Tubruk</h3>
                    <p class="text-brown">Penjelasan dari Coffee Tubruk Tersedia.</p>
                </div>
                <div class="rounded-lg shadow-md overflow-hidden p-4 text-center" style="background-color: #f5e6d3 !important;">
                    <img src="/img/coffe.png" alt="Coffee Drink" class="w-full h-auto object-cover">
                    <h3 class="text-xl font-semibold">Coffee Drink</h3>
                    <p class="text-brown">Penjelasan dari Coffee Drink Tersedia.</p>
                </div>
            </div>

            <h2 class="text-3xl font-bold mt-10 mb-8">Other Product</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="rounded-lg shadow-md overflow-hidden p-4 text-center" style="background-color: #f5e6d3 !important;">
                    <img src="/img/coffe.png" alt="Sugar for Coffee" class="w-full h-auto object-cover">
                    <h3 class="text-xl font-semibold">Sugar for Coffee</h3>
                    <p class="text-brown">Penjelasan dari Sugar Tersedia.</p>
                </div>
                <div class="rounded-lg shadow-md overflow-hidden p-4 text-center" style="background-color: #f5e6d3 !important;">
                    <img src="/img/coffe.png" alt="Syrup for Coffee" class="w-full h-auto object-cover">
                    <h3 class="text-xl font-semibold">Syrup for Coffee</h3>
                    <p class="text-brown">Penjelasan dari Syrup Tersedia.</p>
                </div>
                <div class="rounded-lg shadow-md overflow-hidden p-4 text-center" style="background-color: #f5e6d3 !important;">
                    <img src="/img/coffe.png" alt="Cookies Coffee" class="w-full h-auto object-cover">
                    <h3 class="text-xl font-semibold">Cookies Coffee</h3>
                    <p class="text-brown">Penjelasan dari Cookies Tersedia.</p>
                </div>
                <div class="rounded-lg shadow-md overflow-hidden p-4 text-center" style="background-color: #f5e6d3 !important;">
                    <img src="/img/coffe.png" alt="Merchandise Coffee" class="w-full h-auto object-cover">
                    <h3 class="text-xl font-semibold">Merchandise Coffee</h3>
                    <p class="text-brown">Penjelasan dari Merchandise Tersedia.</p>
                </div>
            </div>
            <div class="mt-8">
                <button class=" text-white px-6 py-2 rounded-full font-semibold  shadow-md hover:bg-gray-200 transition duration-300" style="background-color: #71482F !important;">
                    Chat Admin!
                </button>
            </div>
        </div>
    </section>

    {{-- service --}}
    <section id="service" class="service-section">
        <div class="max-w-3xl">
            <h5 class="text-white text-4xl font-serif mb-6 leading-snug">
                Find Out The Details of PaskoNayor Products And Enjoy Our Private Coffee Service!
            </h5>
            <button class="bg-white text-brown-600 px-6 py-2 rounded-full font-semibold shadow-md hover:bg-gray-200 transition duration-300">
                Chat Admin!
            </button>
        </div>
    </section>

    <section id="testimoni" class="brown-section">
        <h2 class="text-3xl text-black font-bold text-center mb-8">
            <span class="block">Come & Join</span>
            <span class="block">Our Happy Customers</span>
        </h2>
        <div class="grid grid-cols-3 gap-6">
            <div class="testimonial-card">
                <div class="testimonial-header">
                    <x-heroicon-s-user-circle class="w-10 h-10" />
                    <div>
                        <h3 class="font-bold mb-1">Rizky Dwi Sukmana</h3>
                        <p class="customer-label">Customer</p>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-header">
                     <x-heroicon-s-user-circle class="w-10 h-10" />
                    <div>
                        <h3 class="font-bold mb-1">Rizky Dwi Sukmana</h3>
                        <p class="customer-label">Customer</p>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-header">
                    <x-heroicon-s-user-circle class="w-10 h-10" />
                    <div>
                        <h3 class="font-bold mb-1">Rizky Dwi Sukmana</h3>
                        <p class="customer-label">Customer</p>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>


       <!-- Contact CTA -->
        <section class="contact-section text-center">
            <h2 class="text-2xl font-bold mb-4 ">Contact Us for Exciting Promotions!</h2>
            <p class="text-white mb-4">Start & Conditions Apply in Accordance with The Promotion Period!</p>
            <button class="bg-white text-black px-6 py-2 rounded-full font-semibold shadow-md hover:bg-gray-200 transition duration-300">
                Chat Admin!
            </button>
        </section>
    </main>

    <footer class="text-white py-8 text-center">
        <p>&copy; 2025 PaskoNayor. All rights reserved.</p>
    </footer>

    <script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>
