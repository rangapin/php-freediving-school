<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Freediving School</title>
    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-500 text-white p-4 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold">974 Freedivers</h1>
        </div>
        <nav class="text-white">
            <ul class="flex">
                <li class="mr-6"><a href="#" class="hover:text-gray-300">Home</a></li>
                <li class="mr-6"><a href="#" class="hover:text-gray-300">Courses</a></li>
                <li class="mr-6"><a href="#" class="hover:text-gray-300">About Us</a></li>
                <li><a href="#" class="hover:text-gray-300">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-4">

        <!-- Hero Section -->
        <section class="bg-cover bg-center h-screen flex items-center relative" style="background-image: url('path/to/your/hero-image.jpg');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="container mx-auto text-white text-center relative z-10">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Discover the Depths with My Freediving School</h1>
                <p class="text-lg md:text-xl mb-8">Experience the thrill of freediving with our expert instructors. Join us for an unforgettable journey beneath the waves.</p>
                <a href="#courses" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Explore Courses</a>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; 2024 My Freediving School. All rights reserved.</p>
    </footer>

</body>
</html>

