<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>974 Freedivers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Blue Mode Styles -->
    <link rel="stylesheet" href="blue.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Lexend:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="font-inter bg-white">

    <!-- Navbar -->
    <nav class="bg-blue-500 text-white p-6 fixed w-full z-10">
        <div class="flex items-center justify-start">
            <!-- Logo -->
            <div class="flex items-center">
                <span class="ml-2 text-xl font-bold">974 Freedivers</span>
            </div>
            <!-- Navbar Links -->
            <div class="hidden md:flex items-center pl-8 space-x-6">
                <a href="#home" class="hover:text-light">Home</a>
                <a href="#education" class="hover:text-light">Education</a>
                <a href="#training" class="hover:text-light">Training</a>
                <a href="#coaching" class="hover:text-light">Coaching</a>
                <a href="#contact" class="hover:text-light">Contact</a>
            </div>
            <!-- Blue Mode Toggle Button -->
            <div class="ml-auto">
                <button id="blueModeToggle" class="text-white hover:text-light focus:outline-none">
                    Blue Mode
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="bg-cover bg-center h-screen w-full flex items-center relative" style="background-image: url('');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto text-white text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to 974 Freedivers</h1>
            <p class="text-lg md:text-xl mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, enim?</p>
            <a href="#education" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-full">Explore Education</a>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="container mx-auto p-8">
        
</section>

    <!-- Training Section -->
    <section id="training" class="container mx-auto p-8">

</section>

    <!-- Coaching Section -->
    <section id="coaching" class="container mx-auto p-8">

</section>

    <!-- Contact Section -->
    <section id="contact" class="container mx-auto p-8">

</section>

    <!-- Footer -->
    <footer class="bg-black text-white p-4 text-center">
        <p>&copy; 2024 974 Freedivers. All rights reserved.</p>
    </footer>

    <!-- JavaScript for Blue Mode Toggle -->
    <script>
        const blueModeToggle = document.getElementById('blueModeToggle');
        const body = document.body;

        blueModeToggle.addEventListener('click', () => {
            body.classList.toggle('blue-mode');
        });
    </script>

    <!-- Smooth Scroll Library (You can include your preferred smooth scroll library) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script>
        
        const scroll = new SmoothScroll('a[href*="#"]', {
