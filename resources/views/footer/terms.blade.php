<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog UI</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <!------------------- Navbar Section --------------------------->
    <header>
        <nav class="container flex justify-between items-center py-6 relative">
            <div class="py-5 text-color-secondary font-bold text-4xl">
                <a href="#home">
                    <span class="text-color-gray">Desa</span><span class="text-color-gray">Karangasem.</span>
                </a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-8">
                    <li><a href="#home" class="hover:text-color-secondary ease-in duration-200 text-xl">Home</a></li>
                    <li><a href="#features" class="hover:text-color-secondary ease-in duration-200 text-xl">Features</a></li>
                    <li><a href="#footer" class="hover:text-color-secondary ease-in duration-200 text-xl">About Us</a></li>
                </ul>
            </div>

            <div id="hamburger" class="lg:hidden cursor-pointer z-60">
                <i class="fa-solid fa-bars text-3xl" id="hamburger-icon"></i>
                <i class="fa-solid fa-xmark text-3xl hidden" id="close-icon"></i>
            </div>
        </nav>
    </header>

    <!-- Header Section -->
    <section id="header" class="flex flex-col justify-center items-center bg-gray-100 py-10 w-full">
        <div class="text-gray-900 text-center">
            <p class="text-4xl font-bold">About Us Desa Karangasem</p>
            <p class="text-lg text-gray-600 mt-2">Berkembang bersama dengan desa karangasem Kecamatan Petarukan.</p>
        </div>
    </section>
    <!-- Main Section Start -->
    <section id="sejarah" class="main-section flex items-center justify-center w-full">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl w-full text-justify">
            <p class="text-gray-700 mt-2 mb-2">Dengan mengakses dan menggunakan website Desa Karangasem, 
                Kecamatan Petarukan, Kabupaten Pemalang, Anda setuju untuk mematuhi syarat dan ketentuan yang berlaku. 
                Website ini disediakan untuk tujuan informasi umum mengenai profil desa dan berita keseharian di Desa 
                Karangasem. Konten yang ada di website ini, termasuk teks, gambar, dan video, adalah milik Desa Karangasem 
                atau telah mendapat izin penggunaan yang sah. Pengguna dilarang menyalin, mendistribusikan, atau menggunakan 
                konten tersebut tanpa izin tertulis dari pengelola.</p>
            <br>
            <p class="text-gray-700 mt-2 mb-2">Pengguna dapat berinteraksi melalui komentar di blog, namun harus mematuhi etika 
                komunikasi yang baik, tidak mengandung unsur SARA, pornografi, atau hal yang dapat menyinggung pihak lain. Pengelola 
                website berhak menghapus komentar yang dianggap tidak sesuai.
            </p>
            <br>
            <p class="text-gray-700 mt-2 mb-2">Website ini mungkin mengandung tautan ke situs eksternal, namun Desa Karangasem tidak 
                bertanggung jawab atas konten atau kebijakan privasi dari situs-situs tersebut. Pengelola website juga tidak bertanggung 
                jawab atas kerugian yang mungkin timbul akibat penggunaan informasi dari website ini.
            </p>
            <br>
            <p class="text-gray-700 mt-2 mb-2">Kami berkomitmen untuk melindungi privasi pengguna dan data yang dikumpulkan hanya akan digunakan 
                untuk keperluan analisis dan perbaikan layanan. Syarat dan ketentuan ini dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya, 
                sehingga pengguna diharapkan untuk memeriksa halaman ini secara berkala. Segala sengketa yang timbul akibat penggunaan website ini akan 
                diselesaikan sesuai dengan hukum yang berlaku di Indonesia. Untuk pertanyaan lebih lanjut, Anda dapat menghubungi kami melalui email yang 
                disediakan di website.
            </p>
        </div>
    </section>
</body>

</html>