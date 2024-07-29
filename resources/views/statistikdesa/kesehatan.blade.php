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
                                    <a href="{{ route('Kesehatan') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kesehatan</a>
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
            <p class="text-4xl font-bold">Data Kesehatan Desa Karangasem</p>
            <p class="text-lg text-gray-600 mt-2">Berkembang bersama dengan desa karangasem Kecamatan Petarukan.</p>
        </div>
    </section>
    <!-- Main Section Start -->
    <section id="sejarah" class="main-section flex items-center justify-center w-full">
        <div class="bg-white rounded-lg shadow-lg max-w-6xl p-12 w-full text-justify">
            <p class="text-2xl font-bold">Data Kesehatan Desa Karangasem</p>
            <p class="text-lg text-gray-700 mt-2 mb-2">Puskesmas Karangasem Kabupaten Pemalang mempunyai tata nilai MANDIRI yang
                menjadi dasar petugas untuk memberikan pelayanan sehingga menjadi budaya kerja.
                Adapun tata nilai MANDIRI yaitu:</p>
            <ul class="text-lg text-gray-700 list-disc list-inside">
                <li>
                    <span class="w-40">Mampu</span><span>:</span>
                    <span class="ml-2">Mampu memberikan pelayanan secara optimal.</span>
                </li>
                <li>
                    <span class="w-40">Adil</span><span>:</span>
                    <span class="ml-2">Memberikan pelayanan tanpa membedakan status.</span>
                </li>
                <li>
                    <span class="w-40">Nyaman</span><span>:</span>
                    <span class="ml-2">Memberikan kenyamanan kepada pasien.</span>
                </li>
                <li>
                    <span class="w-40">Disiplin</span><span>:</span>
                    <span class="ml-2">Tepat waktu dalam bekerja dan memberikan pelayanan.</span>
                </li>
                <li>
                    <span class="w-40">Inovatif</span><span>:</span>
                    <span class="ml-2">Kreatif dalam mengembangkan program Puskesmas.</span>
                </li>
                <li>
                    <span class="w-40">Ramah</span><span>:</span>
                    <span class="ml-2">Ramah dalam memberikan pelayanan.</span>
                </li>
                <li>
                    <span class="w-40">Inisiatif</span><span>:</span>
                    <span class="ml-2">Mampu memberikan solusi terhadap permasalahan kesehatan.</span>
                </li>
            </ul>
            <br>
            <p class="text-2xl font-bold">Kebijakan Mutu Puskesmas</p>
            <p class="text-lg text-gray-700 mt-4 mb-4">Puskesmas Karangasem menetapkan Kebijakan Mutu yang ditinjau secara berkala.
                Kebijakan Mutu yang ditetapkan adalah sebagai berikut:</p>
            <p class="text-lg text-gray-700 mt-4 mb-4">
                “Kami segenap karyawan Puskesmas Karangasem dengan ini menyatakan siap dan
                sanggup untuk:</p>
            <ul class="text-lg text-gray-700 list-decimal list-inside">
                <li>
                    <span>Meningkatkan kinerja dan melaksanakan mutu pelayanan sesuai standar pelayanan.</span>
                </li>
                <li>
                    <span>Belajar dan merubah kearah perbaikan menuju prestasi kerja.</span>
                </li>
                <li>
                    <span>Melaksanakan pelayanan dengan mengedepankan kerjasama dan komunikasi.</span>
                </li>
                <li>
                    <span>Melaksanakan pencatatan dan pelaporan tetap waktu.”</span>
                </li>
            </ul>
            <br><br><br>
            <p class="text-2xl font-bold">JUMLAH KELAHIRAN MENURUT JENIS KELAMIN PUSKESMAS KARANGASEM TAHUN 2022</p>
            <div class="overflow-x-auto mt-4">
                <table class="min-w-full bg-white border-collapse border border-gray-400">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">NO</th>
                            <th class="border border-gray-300 px-4 py-2">DESA/ KELURAHAN</th>
                            <th colspan="3" class="border border-gray-300 px-4 py-2">LAKI-LAKI</th>
                            <th colspan="3" class="border border-gray-300 px-4 py-2">PEREMPUAN</th>
                            <th colspan="3" class="border border-gray-300 px-4 py-2">JUMLAH KELAHIRAN</th>
                        </tr>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2"></th>
                            <th class="border border-gray-300 px-4 py-2"></th>
                            <th class="border border-gray-300 px-4 py-2">HIDUP</th>
                            <th class="border border-gray-300 px-4 py-2">MATI</th>
                            <th class="border border-gray-300 px-4 py-2">HIDUP + MATI</th>
                            <th class="border border-gray-300 px-4 py-2">HIDUP</th>
                            <th class="border border-gray-300 px-4 py-2">MATI</th>
                            <th class="border border-gray-300 px-4 py-2">HIDUP + MATI</th>
                            <th class="border border-gray-300 px-4 py-2">HIDUP</th>
                            <th class="border border-gray-300 px-4 py-2">MATI</th>
                            <th class="border border-gray-300 px-4 py-2">HIDUP + MATI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1</td>
                            <td class="border border-gray-300 px-4 py-2">KENDALSARI</td>
                            <td class="border border-gray-300 px-4 py-2">131</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">131</td>
                            <td class="border border-gray-300 px-4 py-2">118</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">118</td>
                            <td class="border border-gray-300 px-4 py-2">249</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">249</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">2</td>
                            <td class="border border-gray-300 px-4 py-2">WIDODAREN</td>
                            <td class="border border-gray-300 px-4 py-2">86</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">86</td>
                            <td class="border border-gray-300 px-4 py-2">92</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">92</td>
                            <td class="border border-gray-300 px-4 py-2">178</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">178</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">3</td>
                            <td class="border border-gray-300 px-4 py-2">KARANGASEM</td>
                            <td class="border border-gray-300 px-4 py-2">42</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">42</td>
                            <td class="border border-gray-300 px-4 py-2">36</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">36</td>
                            <td class="border border-gray-300 px-4 py-2">78</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">78</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">4</td>
                            <td class="border border-gray-300 px-4 py-2">PETANJUNGAN</td>
                            <td class="border border-gray-300 px-4 py-2">65</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">65</td>
                            <td class="border border-gray-300 px-4 py-2">58</td>
                            <td class="border border-gray-300 px-4 py-2">1</td>
                            <td class="border border-gray-300 px-4 py-2">59</td>
                            <td class="border border-gray-300 px-4 py-2">123</td>
                            <td class="border border-gray-300 px-4 py-2">1</td>
                            <td class="border border-gray-300 px-4 py-2">124</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">5</td>
                            <td class="border border-gray-300 px-4 py-2">SIRANGKANG</td>
                            <td class="border border-gray-300 px-4 py-2">44</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">44</td>
                            <td class="border border-gray-300 px-4 py-2">36</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">36</td>
                            <td class="border border-gray-300 px-4 py-2">80</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">80</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">6</td>
                            <td class="border border-gray-300 px-4 py-2">PESUCEN</td>
                            <td class="border border-gray-300 px-4 py-2">73</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">73</td>
                            <td class="border border-gray-300 px-4 py-2">84</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">84</td>
                            <td class="border border-gray-300 px-4 py-2">157</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">157</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="border border-gray-300 px-4 py-2 text-center font-bold">JUMLAH</td>
                            <td class="border border-gray-300 px-4 py-2">441</td>
                            <td class="border border-gray-300 px-4 py-2">0</td>
                            <td class="border border-gray-300 px-4 py-2">441</td>
                            <td class="border border-gray-300 px-4 py-2">424</td>
                            <td class="border border-gray-300 px-4 py-2">1</td>
                            <td class="border border-gray-300 px-4 py-2">425</td>
                            <td class="border border-gray-300 px-4 py-2">865</td>
                            <td class="border border-gray-300 px-4 py-2">1</td>
                            <td class="border border-gray-300 px-4 py-2">866</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="mt-4 text-gray-700">
                <p><strong>Sumber:</strong> Pengelola Program KIA-KB Puskesmas</p>
                <p><strong>Ket:</strong> Angka Lahir Mati (dilaporkan) tersebut di atas belum tentu menggambarkan Angka Lahir Mati yang sebenarnya di populasi</p>
            </div>
            <br><br><br>
            <p class="text-2xl font-bold">CAKUPAN PEMBERIAN MAKANAN PENDAMPING ASI ANAK USIA 6-23 BULAN KELUARGA MISKIN TAHUN 2022</p>
            <div class="overflow-x-auto mt-8">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">NO</th>
                            <th class="border border-gray-300 px-4 py-2">DESA/ KEL</th>
                            <th class="border border-gray-300 px-4 py-2">JUMLAH (L)</th>
                            <th class="border border-gray-300 px-4 py-2">JUMLAH (P)</th>
                            <th class="border border-gray-300 px-4 py-2">JUMLAH (L+P)</th>
                            <th class="border border-gray-300 px-4 py-2">MENDAPAT MP-ASI (L)</th>
                            <th class="border border-gray-300 px-4 py-2">MENDAPAT MP-ASI (P)</th>
                            <th class="border border-gray-300 px-4 py-2">MENDAPAT MP-ASI (L+P)</th>
                            <th class="border border-gray-300 px-4 py-2">%</th>
                            <th class="border border-gray-300 px-4 py-2">%</th>
                            <th class="border border-gray-300 px-4 py-2">%</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1</td>
                            <td class="border border-gray-300 px-4 py-2">KENDALSARI</td>
                            <td class="border border-gray-300 px-4 py-2">186</td>
                            <td class="border border-gray-300 px-4 py-2">163</td>
                            <td class="border border-gray-300 px-4 py-2">349</td>
                            <td class="border border-gray-300 px-4 py-2">186</td>
                            <td class="border border-gray-300 px-4 py-2">163</td>
                            <td class="border border-gray-300 px-4 py-2">349</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">2</td>
                            <td class="border border-gray-300 px-4 py-2">WIDODAREN</td>
                            <td class="border border-gray-300 px-4 py-2">113</td>
                            <td class="border border-gray-300 px-4 py-2">118</td>
                            <td class="border border-gray-300 px-4 py-2">231</td>
                            <td class="border border-gray-300 px-4 py-2">113</td>
                            <td class="border border-gray-300 px-4 py-2">118</td>
                            <td class="border border-gray-300 px-4 py-2">231</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">3</td>
                            <td class="border border-gray-300 px-4 py-2">KARANGASEM</td>
                            <td class="border border-gray-300 px-4 py-2">51</td>
                            <td class="border border-gray-300 px-4 py-2">46</td>
                            <td class="border border-gray-300 px-4 py-2">97</td>
                            <td class="border border-gray-300 px-4 py-2">51</td>
                            <td class="border border-gray-300 px-4 py-2">46</td>
                            <td class="border border-gray-300 px-4 py-2">97</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">4</td>
                            <td class="border border-gray-300 px-4 py-2">PETANJUNGAN</td>
                            <td class="border border-gray-300 px-4 py-2">65</td>
                            <td class="border border-gray-300 px-4 py-2">63</td>
                            <td class="border border-gray-300 px-4 py-2">128</td>
                            <td class="border border-gray-300 px-4 py-2">65</td>
                            <td class="border border-gray-300 px-4 py-2">63</td>
                            <td class="border border-gray-300 px-4 py-2">128</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">5</td>
                            <td class="border border-gray-300 px-4 py-2">SIRANGKANG</td>
                            <td class="border border-gray-300 px-4 py-2">45</td>
                            <td class="border border-gray-300 px-4 py-2">49</td>
                            <td class="border border-gray-300 px-4 py-2">94</td>
                            <td class="border border-gray-300 px-4 py-2">45</td>
                            <td class="border border-gray-300 px-4 py-2">49</td>
                            <td class="border border-gray-300 px-4 py-2">94</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">6</td>
                            <td class="border border-gray-300 px-4 py-2">PESUCEN</td>
                            <td class="border border-gray-300 px-4 py-2">114</td>
                            <td class="border border-gray-300 px-4 py-2">114</td>
                            <td class="border border-gray-300 px-4 py-2">228</td>
                            <td class="border border-gray-300 px-4 py-2">114</td>
                            <td class="border border-gray-300 px-4 py-2">114</td>
                            <td class="border border-gray-300 px-4 py-2">228</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">7</td>
                            <td class="border border-gray-300 px-4 py-2">KERSANA</td>
                            <td class="border border-gray-300 px-4 py-2">73</td>
                            <td class="border border-gray-300 px-4 py-2">72</td>
                            <td class="border border-gray-300 px-4 py-2">145</td>
                            <td class="border border-gray-300 px-4 py-2">73</td>
                            <td class="border border-gray-300 px-4 py-2">72</td>
                            <td class="border border-gray-300 px-4 py-2">145</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">8</td>
                            <td class="border border-gray-300 px-4 py-2">KRANDON</td>
                            <td class="border border-gray-300 px-4 py-2">67</td>
                            <td class="border border-gray-300 px-4 py-2">67</td>
                            <td class="border border-gray-300 px-4 py-2">134</td>
                            <td class="border border-gray-300 px-4 py-2">67</td>
                            <td class="border border-gray-300 px-4 py-2">67</td>
                            <td class="border border-gray-300 px-4 py-2">134</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">9</td>
                            <td class="border border-gray-300 px-4 py-2">GLEMPANG</td>
                            <td class="border border-gray-300 px-4 py-2">44</td>
                            <td class="border border-gray-300 px-4 py-2">47</td>
                            <td class="border border-gray-300 px-4 py-2">91</td>
                            <td class="border border-gray-300 px-4 py-2">44</td>
                            <td class="border border-gray-300 px-4 py-2">47</td>
                            <td class="border border-gray-300 px-4 py-2">91</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10</td>
                            <td class="border border-gray-300 px-4 py-2">KEMURANG</td>
                            <td class="border border-gray-300 px-4 py-2">98</td>
                            <td class="border border-gray-300 px-4 py-2">76</td>
                            <td class="border border-gray-300 px-4 py-2">174</td>
                            <td class="border border-gray-300 px-4 py-2">98</td>
                            <td class="border border-gray-300 px-4 py-2">76</td>
                            <td class="border border-gray-300 px-4 py-2">174</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                            <td class="border border-gray-300 px-4 py-2">100</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>