<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasko Nayor - Coffee Service</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url('/api/placeholder/1920/1080') no-repeat center center;
            background-size: cover;
            min-height: 100vh;
            position: relative;
        }

        .nav-link {
            color: white;
            font-size: 14px;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover {
            opacity: 0.8;
        }

        .contact-btn {
            background-color: white;
            color: black;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
        }

        .logo {
            width: 120px;
        }

        .story-section {
            background-color: #f5e6d3;
            border-radius: 40px 40px 0 0;
            padding: 3rem 1rem;
            margin-top: -40px;
            position: relative;
        }

        .story-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            color: #5d4037;
        }

        .instagram-btn {
            background-color: #8B4513;
            color: white;
            padding: 10px 30px;
            border-radius: 25px;
            font-size: 16px;
            margin-top: 2rem;
            display: inline-block;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="fixed w-full z-50 pt-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <img src="/api/placeholder/120/40" alt="PaskoNayor" class="logo">
            <div class="flex items-center space-x-6">
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">About</a>
                <a href="#" class="nav-link">Product</a>
                <a href="#" class="nav-link">Service</a>
                <a href="#" class="nav-link">Testimoni</a>
                <button class="contact-btn">Contact Me</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section flex items-center">
        <div class="container mx-auto px-6">
            <h1 class="text-white text-5xl font-bold mb-4">Welcome!</h1>
            <div class="space-y-2">
                <h2 class="text-white text-7xl font-serif">PaskoNayor</h2>
                <p class="text-white text-xl tracking-widest">STORY TELLING COFFEE</p>
            </div>
            <button class="bg-white text-black px-8 py-3 rounded-full mt-8 font-medium">Order Now!</button>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="story-content">
            <h2 class="text-3xl font-bold mb-8">This Is Our Story!</h2>
            <p class="text-lg leading-relaxed mb-8">
                Pasko Nayor is a combination of a coffee market and roasting house that brings you the best quality coffee beans. The name Pasko, which means "coffee market", reflects our vision to be the center of quality coffee providers that can compete in the market. Meanwhile, Nayor is one of our flagship products that has been widely recognized among coffee lovers.
            </p>
            <p class="text-lg leading-relaxed mb-8">
                With the concept of storytelling coffee, we believe that every coffee bean has its own story. We not only deliver delicious coffee, but also share the stories and insights behind each cup served.
            </p>
            <button class="instagram-btn hover:opacity-90">Our Instagram</button>
        </div>
    </section>

    <!-- Special Products -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Our Special Product</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                @foreach(['Coffee House', 'Coffee Mocha', 'Coffee Ethiopian', 'Coffee Brasil'] as $product)
                <div class="product-card shadow-lg">
                    <img src="{{ asset('images/product.jpg') }}" alt="{{ $product }}" class="w-full h-48 object-cover rounded-t">
                    <h3 class="text-xl font-bold mt-4">{{ $product }}</h3>
                    <p class="text-gray-600">A premium coffee blend</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Other Products -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Other Product</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                @foreach(['Sugar for Coffee', 'Syrup for Coffee', 'Cashless Coffee', 'Merchandise Coffee'] as $product)
                <div class="product-card shadow-lg">
                    <img src="{{ asset('images/product.jpg') }}" alt="{{ $product }}" class="w-full h-48 object-cover rounded-t">
                    <h3 class="text-xl font-bold mt-4">{{ $product }}</h3>
                    <p class="text-gray-600">Essential coffee accompaniment</p>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <button class="custom-brown text-white px-6 py-3 rounded-full">View More</button>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="bg-brown-600 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Find Out The Details of PaskoNayor Products</h2>
            <p class="mb-8">And Enjoy Our Private Coffee Service!</p>
            <button class="bg-white text-brown-600 px-6 py-3 rounded-full font-bold">View More</button>
        </div>
    </section>
</body>
</html>