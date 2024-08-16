<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog UI</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100">
    <!------------------- Navbar Section --------------------------->
    <header>
        <nav class="container flex justify-between items-center py-6 relative">
            <div class="py-5 text-color-secondary font-bold text-4xl">
                <a href="#home">
                    <span class="text-color-gray">Desa</span><span class="text-color-gray">Karangasem</span>
                </a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-8">
                    <li><a href="{{ route('WelcomePage') }}" class="hover:text-color-secondary ease-in duration-200 text-xl">Home</a></li>
                    <li><a href="{{ route('WelcomePage') }}" class="hover:text-color-secondary ease-in duration-200 text-xl">Features</a></li>
                    <li><a href="{{ route('WelcomePage') }}" class="hover:text-color-secondary ease-in duration-200 text-xl">About Us</a></li>
                </ul>
            </div>

            <div id="hamburger" class="lg:hidden cursor-pointer z-60">
                <i class="fa-solid fa-bars text-3xl" id="hamburger-icon"></i>
                <i class="fa-solid fa-xmark text-3xl hidden" id="close-icon"></i>
            </div>
        </nav>
    </header>

    <!-- Contact Section -->
    <section class="flex flex-col justify-center items-center h-full w-full mt-40">
        <div class="container lg:grid lg:grid-cols-3 gap-8 w-full">
            <div class="flex flex-col items-center bg-white p-6 rounded shadow-lg">
                <i class="fa-solid fa-phone text-4xl mb-4 text-color-secondary"></i>
                <p class="text-xl">+62 838-6171-5352</p>
            </div>
            <div class="flex flex-col items-center bg-white p-6 rounded shadow-lg">
                <i class="fa-solid fa-envelope text-4xl mb-4 text-color-secondary"></i>
                <p class="text-xl">desakarangasempemalang@gmail.com</p>
            </div>
            <div class="flex flex-col items-center bg-white p-6 rounded shadow-lg">
                <i class="fa-brands fa-instagram text-4xl mb-4 text-color-secondary"></i>
                <p class="text-xl">karangasem.petarukan</p>
            </div>
        </div>
    </section>
</body>

</html>