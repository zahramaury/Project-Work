<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasko Nayor - Coffee Service</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url('{{ asset("images/coffee-bg.jpg") }}') no-repeat center center;
            background-size: cover;
            height: 100vh;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .custom-brown {
            background-color: #8B4513;
        }

        .cream-bg {
            background-color: #FFF5E6;
        }
    </style>
</head>
<body class="cream-bg">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white bg-opacity-90 z-50">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold">PaskoNayor</a>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-brown-600">Home</a>
                <a href="#" class="hover:text-brown-600">About</a>
                <a href="#" class="hover:text-brown-600">Product</a>
                <a href="#" class="hover:text-brown-600">Service</a>
                <a href="#" class="hover:text-brown-600">Testimoni</a>
                <button class="custom-brown text-white px-6 py-2 rounded-full hover:opacity-90">Contact Us</button>
            </div>
        </div>
    </nav>
<!-- Hero Section -->
<section class="hero-section flex items-center">
    <div class="container mx-auto px-6">
        <h1 class="text-white text-5xl font-bold mb-4">Welcome!</h1>
        <h2 class="text-white text-6xl font-bold mb-2">PaskoNayor</h2>
        <p class="text-white text-2xl mb-6">STORY TELLING COFFEE.</p>
        <button class="bg-white text-brown-600 px-6 py-3 rounded-full font-bold">Order Now!</button>
    </div>
</section>





  <!-- Story Section -->
  <section class="story-section">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">This is Our Story!</h2>
            <p class="text-center max-w-3xl mx-auto text-gray-700 leading-relaxed">
                Pasko Nayor is a combination of a coffee blend created from studying Indonesian coffee quality. "Pasko" means Christmas, and "Nayor" means present. Together, they represent coffee as a gift to be shared. Our flagship products have earned recognition among discerning coffee enthusiasts.
            </p>
            <div class="text-center mt-8">
                <button class="custom-brown text-white px-8 py-3 rounded-full hover:opacity-90">Our Instagram</button>
            </div>
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
