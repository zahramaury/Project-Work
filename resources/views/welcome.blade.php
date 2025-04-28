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
    <!-- Head -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Before </body> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        :root {
            --primary-color: #71482F;
            --secondary-color: #f5e6d3;
            --text-dark: #1a1a1a;
            --text-light: #ffffff;
        }

        body, html {
            background-color: var(--text-dark);
            font-family: serif;
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: serif;
        }

        .font-serif {
            font-family: serif !important;
        }

        .font-bold {
            font-weight: 700 !important;
        }

        /* Hero Section */
        .hero-section {
            background: url('img/background.jpg') no-repeat center center;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        /* Service Section */
        .service-section {
            background: url('img/Banner.png') no-repeat center center;
            background-size: cover;
            min-height: 30vh;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            width: 100vw;
            margin: 0;
            padding: 20px;
            position: relative;
            left: 50%;
            right: 50%;
            transform: translateX(-50%);
        }

        .max-w-3xl {
            margin-left: 20px;
            margin-right: 20px;
            text-align: left;
        }

        /* Main Content */
        .main-content {
            background-color: var(--secondary-color);
            margin-top: -40px;
            position: relative;
            padding: 2rem;
        }

        /* Brown Rectangle */
        .brown-rectangle {
            background-color: var(--primary-color);
            width: 85%;
            height: 80px;
            border-radius: 15px;
            margin: -5px auto 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            text-align: center;
            font-size: 1.3rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 10;
        }

        /* Story Section */
        .story-section {
            margin-top: 50px;
        }

        .story-section h2,
        .story-section p,
        .brown-section h2,
        .product-section {
            color: var(--primary-color);
        }

        /* Brown Section */
        .brown-section {
            background-color: var(--secondary-color);
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem auto;
            color: var(--text-light);
        }

        /* White Section */
        .white-section {
            background-color: white;
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem auto;
        }

        /* Testimonial Card */
        .testimonial-card {
            background-color: var(--primary-color);
            border-radius: 15px;
            padding: 1.5rem;
            color: var(--text-light);
            text-align: left;
            margin: 1rem;
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .user-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: transparent;
            color: var(--text-light);
        }

        /* Contact Section */
        .contact-section {
            background-color: var(--primary-color);
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem auto;
            color: var(--text-light);
            text-align: center;
        }

        /* Product Grid */
        .product-card {
            background-color: var(--secondary-color) !important;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        /* Navigation */
        .nav-logo {
            height: 60px;
            transition: all 0.3s ease;
        }

        .nav-logo-white {
            filter: brightness(0) invert(1);
        }

        .nav-logo-dark {
            filter: none;
        }

        .nav-link {
            color: var(--text-light);
            font-size: 14px;
            padding: 0.5rem 1rem;
            transition: opacity 0.3s ease;
        }

        .nav-link:hover {
            opacity: 0.8;
        }

        .nav-link-white {
            color: var(--text-light) !important;
        }

        .nav-link-dark {
            color: #333 !important;
        }

        /* Buttons */
        .contact-btn {
            background-color: var(--text-light);
            color: black;
            padding: 8px 24px;
            border-radius: 20px;
            font-weight: 500;
        }

        .instagram-btn {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 10px 30px;
            border-radius: 25px;
            font-size: 16px;
            margin-top: 2rem;
            display: inline-block;
        }

        .admin-btn {
            background-color: var(--primary-color) !important;
            color: var(--text-light);
            padding: 0.5rem 1.5rem;
            border-radius: 9999px;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .admin-btn:hover {
            opacity: 0.9;
        }

        .order-btn {
            background-color: var(--text-light);
            color: black;
            padding: 0.75rem 2rem;
            border-radius: 9999px;
            font-weight: 500;
            display: inline-block;
            font-size: 25px;
        }

        /* Navbar Styles */
        .navbar-transparent {
            background-color: transparent !important;
            box-shadow: none !important;
        }

        .navbar-solid {
            background-color: rgba(55, 65, 81, 0.75) !important;
            transition: background-color 0.3s ease;
        }

        .navbar-solid .nav-link {
            color: var(--text-light) !important;
        }

        .navbar-solid .contact-btn {
            background-color: var(--primary-color) !important;
            color: var(--text-light) !important;
        }

        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: var(--text-light);
            text-align: center;
            padding: 2rem 0;
        }

        .swiper-pagination-bullet {
  background-color: #754A2D !important;
}

.swiper-pagination-bullet-active {
  background-color: #c49b75 !important;
}

    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="fixed w-full z-50 py-4 navbar-transparent">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <!-- Logo on the left -->
            <img src="img/logo.png" alt="PaskoNayor" class="nav-logo nav-logo-white h-10">
            

            <!-- Centered navigation links -->
            <div class="hidden md:flex items-center justify-center flex-grow space-x-6">
                <a href="#" class="nav-link nav-link-white">Home</a>
                <a href="#about" class="nav-link nav-link-white">About</a>
                <a href="#product" class="nav-link nav-link-white">Product</a>
                <a href="#service" class="nav-link nav-link-white">Service</a>
                <a href="#testimoni" class="nav-link nav-link-white">Testimoni</a>
            </div>
            <!-- Contact button on the right -->
            <a href="https://wa.me/6285960173803?text=Halo%20Admin%20Pasko%20Nayor!" class="contact-btn">Contact Me</a>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden">
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
            <a href="https://whatsform.com/kkqq3g" target="_blank" class="order-btn">Order Now!</a>
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
            <a href="https://www.instagram.com/kedaipasko?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" 
            target="_blank"
            class="instagram-btn hover:opacity-90 inline-block text-white bg-[#6B4226] px-4 py-2 rounded-lg">
            Our Instagram
         </a>         
        </section>

       <!-- Products Section -->
       <section id="product" class="bg-white py-10 mb-16 rounded-lg product-section">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-8">Our Special Product</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Card 1 - Coffee Beans -->
                    <div class="product-card p-4 text-center cursor-pointer" onclick="openModal('modal-1')">
                        <img src="/img/coffe.png" alt="Coffee Beans" class="w-full h-auto object-cover">
                        <h3 class="text-xl font-semibold">Coffee Beans</h3>
                        <p class="text-brown">Penjelasan dari Coffee Beans Tersedia.</p>
                    </div>
                    <!-- Modal 1 -->
                    <div id="modal-1" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                        <div class="bg-white rounded-lg p-8 w-96">
                            <img src="/img/coffe.png" alt="Coffee Beans" class="w-full h-48 object-cover rounded-lg">
                            <h3 class="text-xl font-semibold mt-4">Coffee Beans</h3>
                            <p class="mt-2">Detail lengkap Coffee Beans di sini.</p>
                            <a href="https://www.instagram.com/kedaipasko?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram-btn hidden">Go to Instagram</a>
                            <hr>
                            <button onclick="closeModal('modal-1')" class="mt-4 text-gray-500">Close</button>
                        </div>
                    </div>
                    
                    <!-- Card 2 - Coffee Bubuk -->
                    <div class="product-card p-4 text-center cursor-pointer" onclick="openModal('modal-2')">
                        <img src="/img/coffe.png" alt="Coffee Bubuk" class="w-full h-auto object-cover">
                        <h3 class="text-xl font-semibold">Coffee Bubuk</h3>
                        <p class="text-brown">Penjelasan dari Coffee Bubuk Tersedia.</p>
                    </div>
                    <!-- Modal 2 -->
                    <div id="modal-2" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                        <div class="bg-white rounded-lg p-8 w-96">
                            <img src="/img/coffe.png" alt="Coffee Bubuk" class="w-full h-48 object-cover rounded-lg">
                            <h3 class="text-xl font-semibold mt-4">Coffee Bubuk</h3>
                            <p class="mt-2">Detail lengkap Coffee Bubuk di sini.</p>
                            <a href="https://www.instagram.com/kedaipasko?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram-btn hidden">Go to Instagram</a>
                            <hr>
                            <button onclick="closeModal('modal-2')" class="mt-4 text-gray-500">Close</button>
                        </div>
                    </div>
            
                    <!-- Card 3 - Coffee Tubruk -->
                    <div class="product-card p-4 text-center cursor-pointer" onclick="openModal('modal-3')">
                        <img src="/img/coffe.png" alt="Coffee Tubruk" class="w-full h-auto object-cover">
                        <h3 class="text-xl font-semibold">Coffee Tubruk</h3>
                        <p class="text-brown">Penjelasan dari Coffee Tubruk Tersedia.</p>
                    </div>
                    <!-- Modal 3 -->
                    <div id="modal-3" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                        <div class="bg-white rounded-lg p-8 w-96">
                            <img src="/img/coffe.png" alt="Coffee Tubruk" class="w-full h-48 object-cover rounded-lg">
                            <h3 class="text-xl font-semibold mt-4">Coffee Tubruk</h3>
                            <p class="mt-2">Detail lengkap Coffee Tubruk di sini.</p>
                            <a href="https://www.instagram.com/kedaipasko?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram-btn hidden">Go to Instagram</a>
                            <hr>
                            <button onclick="closeModal('modal-3')" class="mt-4 text-gray-500">Close</button>
                        </div>
                    </div>
            
                    <!-- Card 4 - Coffee Drink -->
                    <div class="product-card p-4 text-center cursor-pointer" onclick="openModal('modal-4')">
                        <img src="/img/coffe.png" alt="Coffee Drink" class="w-full h-auto object-cover">
                        <h3 class="text-xl font-semibold">Coffee Drink</h3>
                        <p class="text-brown">Penjelasan dari Coffee Drink Tersedia.</p>
                    </div>
                    <!-- Modal 4 -->
                    <div id="modal-4" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                        <div class="bg-white rounded-lg p-8 w-96">
                            <img src="/img/coffe.png" alt="Coffee Drink" class="w-full h-48 object-cover rounded-lg">
                            <h3 class="text-xl font-semibold mt-4">Coffee Drink</h3>
                            <p class="mt-2">Detail lengkap Coffee Drink di sini.</p>
                            <a href="https://www.instagram.com/kedaipasko?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram-btn hidden">Go to Instagram</a>
                            <hr>
                            <button onclick="closeModal('modal-4')" class="mt-4 text-gray-500">Close</button>
                        </div>
                    </div>
                </div>
            
                <h2 class="text-3xl font-bold mt-10 mb-8">Other Product</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Card 5 - Sugar for Coffee -->
                    <div class="product-card p-4 text-center cursor-pointer" onclick="openModal('modal-5')">
                        <img src="/img/coffe.png" alt="Sugar for Coffee" class="w-full h-auto object-cover">
                        <h3 class="text-xl font-semibold">Sugar for Coffee</h3>
                        <p class="text-brown">Penjelasan dari Sugar Tersedia.</p>
                    </div>
                    <!-- Modal 5 -->
                    <div id="modal-5" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                        <div class="bg-white rounded-lg p-8 w-96">
                            <img src="/img/coffe.png" alt="Sugar for Coffee" class="w-full h-48 object-cover rounded-lg">
                            <h3 class="text-xl font-semibold mt-4">Sugar for Coffee</h3>
                            <p class="mt-2">Detail lengkap Sugar for Coffee di sini.</p>
                            <a href="https://www.instagram.com/kedaipasko?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram-button hidden">Go to Instagram</a>
                            <hr>
                            <button onclick="closeModal('modal-5')" class="mt-4 text-gray-500">Close</button>
                        </div>
                    </div>
            
                    <!-- Card 6 - Syrup for Coffee -->
                    <div class="product-card p-4 text-center cursor-pointer" onclick="openModal('modal-6')">
                        <img src="/img/coffe.png" alt="Syrup for Coffee" class="w-full h-auto object-cover">
                        <h3 class="text-xl font-semibold">Syrup for Coffee</h3>
                        <p class="text-brown">Penjelasan dari Syrup Tersedia.</p>
                    </div>
                    <!-- Modal 6 -->
                    <div id="modal-6" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                        <div class="bg-white rounded-lg p-8 w-96">
                            <img src="/img/coffe.png" alt="Syrup for Coffee" class="w-full h-48 object-cover rounded-lg">
                            <h3 class="text-xl font-semibold mt-4">Syrup for Coffee</h3>
                            <p class="mt-2">Detail lengkap Syrup for Coffee di sini.</p>
                            <a href="https://www.instagram.com/kedaipasko?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram-button hidden">Go to Instagram</a>
                            <hr>
                            <button onclick="closeModal('modal-6')" class="mt-4 text-gray-500">Close</button>
                        </div>
                    </div>
            
                    <!-- Card 7 - Cookies Coffee -->
                    <div class="product-card p-4 text-center cursor-pointer" onclick="openModal('modal-7')">
                        <img src="/img/coffe.png" alt="Cookies Coffee" class="w-full h-auto object-cover">
                        <h3 class="text-xl font-semibold">Cookies Coffee</h3>
                        <p class="text-brown">Penjelasan dari Cookies Tersedia.</p>
                    </div>
                    <!-- Modal 7 -->
                    <div id="modal-7" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                        <div class="bg-white rounded-lg p-8 w-96">
                            <img src="/img/coffe.png" alt="Cookies Coffee" class="w-full h-48 object-cover rounded-lg">
                            <h3 class="text-xl font-semibold mt-4">Cookies Coffee</h3>
                            <p class="mt-2">Detail lengkap Cookies Coffee di sini.</p>
                            <a href="https://www.instagram.com/kedaipasko?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram-button hidden">Go to Instagram</a>
                            <hr>
                            <button onclick="closeModal('modal-7')" class="mt-4 text-gray-500">Close</button>
                        </div>
                    </div>
            
                    <!-- Card 8 - Merchandise Coffee -->
                    <div class="product-card p-4 text-center cursor-pointer" onclick="openModal('modal-8')">
                        <img src="/img/coffe.png" alt="Merchandise Coffee" class="w-full h-auto object-cover">
                        <h3 class="text-xl font-semibold">Merchandise Coffee</h3>
                        <p class="text-brown">Penjelasan dari Merchandise Tersedia.</p>
                    </div>
                    <!-- Modal 8 -->
                    <div id="modal-8" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center">
                        <div class="bg-white rounded-lg p-8 w-96">
                            <img src="/img/coffe.png" alt="Merchandise Coffee" class="w-full h-48 object-cover rounded-lg">
                            <h3 class="text-xl font-semibold mt-4">Merchandise Coffee</h3>
                            <p class="mt-2">Detail lengkap Merchandise Coffee di sini.</p>
                            <a href="https://www.instagram.com/kedaipasko?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram-button hidden">Go to Instagram</a>
                            <hr>
                            <button onclick="closeModal('modal-8')" class="mt-4 text-gray-500">Close</button>
                        </div>
                    </div>
                </div>
            
              
            </div>            
            
            <div class="mt-8">
                <a href="https://wa.me/6285960173803?text=Halo%20Admin%20Pasko%20Nayor!" target="_blank" class="admin-btn">Chat Admin!</a>
            </div>
        </div>
    </section>

    <!-- service -->
    <section id="service" class="service-section">
        <div class="max-w-3xl">
            <h5 class="text-white text-4xl font-serif mb-6 leading-snug">
                Find Out The Details of PaskoNayor Products And Enjoy Our Private Coffee Service!
            </h5>
            <a href="https://wa.me/6285960173803?text=Halo%20Admin%20Pasko%20Nayor!" target="_blank" class="bg-white text-brown-600 px-6 py-2 rounded-full font-semibold shadow-md hover:bg-gray-200 transition duration-300 inline-block">
                Chat Admin!
            </a>
        </div>
    </section>

    <section id="testimoni" class="brown-section">
        <h2 class="text-3xl text-black font-bold text-center mb-8">
            <span class="block">Come & Join</span>
            <span class="block">Our Happy Customers</span>
            
        </h2>
        <div class="swiper mySwiper pb-16"> <!-- padding bawah ditambah -->
            <div class="swiper-wrapper">
              @foreach ($comments as $comment)
                <div class="swiper-slide mb-8"> <!-- kasih jarak bawah tiap slide -->
                  <div class="testimonial-card bg-[#754A2D] text-white p-6 rounded-xl">
                    <div class="testimonial-header flex items-center gap-4 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                      </svg>
                      <div>
                        <h3 class="font-bold text-lg">{{ $comment->nama }}</h3>
                        <p class="text-sm opacity-75">Customer</p>
                      </div>
                    </div>
                    <p class="text-sm leading-relaxed">{{ $comment->deksripsi }}</p>
                  </div>
                </div>
              @endforeach
            </div>
          
            <!-- Pagination buttons -->
            <div class="swiper-pagination mt-10"></div>
          </div>
          

    </section>
  

    <!-- Contact CTA -->
    <section class="contact-section">
        <h2 class="text-2xl font-bold mb-4">Contact Us for Exciting Promotions!</h2>
        <p class="text-white mb-4">Start & Conditions Apply in Accordance with The Promotion Period!</p>
        <button onclick="toggleModal()" class="bg-white text-black px-6 py-2 rounded-full font-semibold shadow-md hover:bg-gray-200 transition duration-300 inline-block">
            Add Comment
          </button>          
    </section>
    </main>

  <!-- Modal -->
<div id="commentModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
      <h2 class="text-xl font-semibold mb-4">Add a Comment</h2>
      <form method="POST" action="{{ route('comments.store') }}">
        @csrf
        <div class="mb-4">
          <label class="block text-gray-700 mb-1" for="nama">Name</label>
          <input type="text" id="nama" name="nama" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" placeholder="Your name" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 mb-1" for="deksripsi">Comment</label>
          <textarea id="deksripsi" name="deksripsi" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" rows="4" placeholder="Your comment" required></textarea>
        </div>
        <div class="flex justify-end">
          <button type="button" onclick="toggleModal()" class="mr-2 px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Cancel</button>
          <button type="submit" class="px-4 py-2 text-white rounded hover:opacity-90" style="background-color: #71482F;">
            Submit
          </button>
        </div>
      </form>
      <!-- Close Button -->
      <button onclick="toggleModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
    </div>
  </div>
  

    <footer class="text-white py-8 text-center">
        <p>&copy; 2025 PaskoNayor. All rights reserved.</p>
    </footer>

    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('nav');
            const logo = document.querySelector('.nav-logo');
            const navLinks = document.querySelectorAll('.nav-link');
            const heroSection = document.querySelector('.hero-section');
            const heroHeight = heroSection.offsetHeight;
            
            if (window.scrollY > heroHeight * 0.8) {
                navbar.classList.remove('navbar-transparent');
                navbar.classList.add('navbar-solid');
                logo.classList.remove('nav-logo-white');
                logo.classList.add('nav-logo-dark');
                navLinks.forEach(link => {
                    link.classList.remove('nav-link-white');
                    link.classList.add('nav-link-dark');
                });
            } else {
                navbar.classList.remove('navbar-solid');
                navbar.classList.add('navbar-transparent');
                logo.classList.remove('nav-logo-dark');
                logo.classList.add('nav-logo-white');
                navLinks.forEach(link => {
                    link.classList.remove('nav-link-dark');
                    link.classList.add('nav-link-white');
                });
            }
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        function toggleModal() {
    document.getElementById('commentModal').classList.toggle('hidden');
  }

  new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: { slidesPerView: 3 }, // Tampilkan 3 per view kalau layar md ke atas
    },
  });

  function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
}

function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
}
    </script>
</body>
</html>