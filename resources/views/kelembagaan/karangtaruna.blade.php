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
    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/pemalang.png') }}" class="h-10" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Desa Karangasem</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('UserDashboard') }}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLinkProfile" data-dropdown-toggle="dropdownNavbarProfile" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Profil Desa <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbarProfile" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownNavbarLinkProfile">
                                <li>
                                    <a href="{{ route('SejarahDesa') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah Desa</a>
                                </li>
                                <li>
                                    <a href="{{ route('VisiMisiDesa') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visi Misi Desa</a>
                                </li>
                                <li>
                                    <a href="{{ route('demografi') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Demografi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Dropdown Kelembagaan -->
                    <li>
                        <button id="dropdownNavbarLinkKelembagaan" data-dropdown-toggle="dropdownNavbarKelembagaan" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Kelembagaan <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <div id="dropdownNavbarKelembagaan" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownNavbarLinkKelembagaan">
                                <li>
                                    <a href="{{ route('PemerintahDesa') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pemerintah Desa</a>
                                </li>
                                <li>
                                    <a href="{{ route('BadanPemerintahanDesa') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BPD</a>
                                </li>
                                <li>
                                    <a href="{{ route('LembagaPemberdayaan') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LPMD</a>
                                </li>
                                <li>
                                    <a href="{{ route('karangtaruna') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Karang Taruna</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Dropdown Statistik Desa -->
                    <li>
                        <button id="dropdownNavbarLinkStatistikDesa" data-dropdown-toggle="dropdownNavbarStatistikDesa" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Statistik Desa <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <div id="dropdownNavbarStatistikDesa" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownNavbarLinkStatistikDesa">
                                <li>
                                    <a href="{{ route('Pekerjaan') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pekerjaan</a>
                                </li>
                                <li>
                                    <a href="{{ route('Pendidikan') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pendidikan</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kesehatan</a>
                                </li>
                                <li>
                                    <a href="{{ route('Agama') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Agama</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section id="header" class="flex flex-col justify-center items-center bg-gray-100 py-10 w-full">
        <div class="text-gray-900 text-center">
                <p class="text-4xl font-bold">Karang Taruna Desa Karangasem</p>
            <p class="text-lg text-gray-600 mt-2">Berkembang bersama dengan desa karangasem Kecamatan Petarukan.</p>
        </div>
    </section>
    <!-- Main Section Start -->
    <section id="sejarah" class="main-section flex items-center justify-center w-full">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl w-full text-justify">
            <p class="text-gray-700 mt-2 mb-2">Karang Taruna adalah organisasi kepemudaan di Indonesia. Karang Taruna merupakan 
                wadah pengembangan generasi muda nonpartisan, yang tumbuh atas dasar kesadaran dan 
                rasa tanggung jawab sosial dari, oleh dan untuk masyarakat khususnya generasi muda 
                di wilayah Desa / Kelurahan atau komunitas sosial sederajat, yang terutama bergerak 
                dibidang kesejahteraan sosial. Sebagai organisasi sosial kepemudaan Karang Taruna merupakan 
                wadah pembinaan dan pengembangan serta pemberdayaan dalam upaya mengembangkan kegiatan ekonomis 
                produktif dengan pendayagunaan semua potensi yang tersedia dilingkungan baik sumber daya manusia 
                maupun sumber daya alam yang telah ada. Sebagai organisasi kepemudaan, Karang Taruna berpedoman 
                pada Pedoman Dasar dan Pedoman Rumah Tangga di mana telah pula diatur tentang struktur penggurus 
                dan masa jabatan dimasing-masing wilayah mulai dari Desa / Kelurahan sampai pada tingkat Nasional. 
                Semua ini wujud dari pada regenerasi organisasi demi kelanjutan organisasi serta pembinaan anggota 
                Karang Taruna baik dimasa sekarang maupun masa yang akan datang.</p>
            <br>
            <p class="text-gray-700 mt-2 mb-2">Karang Taruna didirikan dengan tujuan memberikan pembinaan dan pemberdayaan kepada para remaja, 
                misalnya dalam bidang keorganisasian, ekonomi, olahraga, ketrampilan, advokasi, keagamaan dan kesenian.</p>
        </div>
    </section>
</body>

</html>