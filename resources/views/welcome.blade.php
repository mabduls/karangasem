<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome Page</title>
    <style>
        #hamburger {
            z-index: 60;
        }

        #menu {
            width: 100vw;
            height: 100vh;
        }

        #close-icon {
            display: none;
        }

        @media (max-width: 1024px) {
            #hamburger {
                display: block;
            }
        }

        section.full-screen {
            height: 100vh;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body class="bg-color-primary text-color-white tracking-wider">

    <!-------------------------- Header Section --------------------------------------->
    <header>
        <nav class="container flex justify-between items-center py-6 relative">
            <div class="py-5 text-color-secondary font-bold text-4xl">
                <a href="#home">
                    <span class="text-color-white">Desa</span>Karangasem.
                </a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-8">
                    <li><a href="#home" class="hover:text-color-secondary ease-in duration-200 text-xl">Home</a></li>
                    <li><a href="#features" class="hover:text-color-secondary ease-in duration-200 text-xl">Features</a></li>
                    <li><a href="#contact" class="hover:text-color-secondary ease-in duration-200 text-xl">Contact</a></li>
                    <li>
                        <a href="{{ route('UserDashboard') }}"><button class="bg-color-secondary px-4 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 text-xl">Bring It On !!!</button></a>
                    </li>
                </ul>
            </div>

            <!-------------------------- Header Mobile Section --------------------------------------->
            <div id="hamburger" class="lg:hidden cursor-pointer z-60">
                <i class="fa-solid fa-bars text-3xl" id="hamburger-icon"></i>
                <i class="fa-solid fa-xmark text-3xl hidden" id="close-icon"></i>
            </div>
        </nav>
    </header>

    <div id="menu" class="hidden bg-color-primary-dark absolute inset-0 z-50">
        <ul class="h-full grid place-items-center py-20">
            <li><a class="mobile-link hover:text-color-secondary ease-in duration-200 text-xl" href="#home">Home</a></li>
            <li><a class="mobile-link hover:text-color-secondary ease-in duration-200 text-xl" href="#features">Features</a></li>
            <li><a class="mobile-link hover:text-color-secondary ease-in duration-200 text-xl" href="#footer">Footer</a></li>
            <li>
                <a href="{{ route('UserDashboard') }}"><button class="bg-color-secondary px-4 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 text-xl">Bring It On !!!</button></a>
            </li>
        </ul>
    </div>

    <main>
        <section class="container-blob">
            <div class="blob-c">
                <div class="shape-blob"></div>
                <div class="shape-blob one"></div>
                <div class="shape-blob two"></div>
                <div class="shape-blob three"></div>
                <div class="shape-blob four"></div>
                <div class="shape-blob five"></div>
                <div class="shape-blob six"></div>
                <div class="shape-blob sevent"></div>
                <div class="shape-blob eight"></div>
                <div class="shape-blob nine"></div>
                <div class="shape-blob ten"></div>
                <div class="shape-blob eleven"></div>
                <div class="shape-blob twelve"></div>
                <div class="shape-blob thirteen"></div>
                <div class="shape-blob fourteen"></div>
                <div class="shape-blob fifteen"></div>
            </div>
            <!-------------------------- Home Section --------------------------------------->
            <section id="home" class="relative full-screen">
                <div class="w-80 h-80 bg-color-blob absolute top-0 -left-5 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>
                <div class="w-80 h-80 bg-color-secondary absolute bottom-10 right-0 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>
                <div class="container py-20">
                    <div class="flex flex-col items-center z-20 md:flex-row">
                        <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10">
                            <h1 class="text-5xl font-bold mb-4">Welcome To Karangasem Petarukan Website</h1>
                            <p class="text-lg leading-relaxed mb-10">Website karangasem petarukan adalah
                                website yang dibentuk dengan tujuan memperkenalkan desa ini ke
                                masyarakat Indonesia.</p>
                            <a href="{{ route('UserDashboard') }}"><button class="btn">
                                    Let's Get Started</button></a>
                        </div>
                        <div class="md:w-1/2">
                            <img src="img/pemalang2.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-------------------------- features Section --------------------------------------->
        <section id="features" class="bg-color-primary-light full-screen">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Our Features</h4>
                    <h1 class="title">Beragam Pengetahuan Tentang Desa Karangasem</h1>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
                    <!-- card number 1 -->
                    <div class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-calendar-days text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4">Daily Routines</h3>
                        <p class="leading-relaxed">Daily rutinitas yang dilaksanakan di Desa Karangasem Petarukan Pemalang</p>
                    </div>
                    <!-- card number 2 -->
                    <div class="bg-color-primary-dark border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-chart-column text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4">Data Statistic</h3>
                        <p class="leading-relaxed">Daily rutinitas yang dilaksanakan di Desa Karangasem Petarukan Pemalang</p>
                    </div>
                    <!-- card number 3 -->
                    <div class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-phone text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4">Support 24 hours</h3>
                        <p class="leading-relaxed">Daily rutinitas yang dilaksanakan di Desa Karangasem Petarukan Pemalang</p>
                    </div>
                </div>
            </div>
        </section>

        <!-------------------------- footer Section --------------------------------------->
        <section id="footer">
            <div class="bg-color-primary-dark relative">
                <div class="container py-10">
                    <div class="grid gap-10 md:grid-cols-3 pb-10">
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">About App</h4>
                            <p class="leading-relaxed">Website Desa Karangasem ini dibangun dengan
                                tujuan untuk memperkenalkan karakteristik Desa Karangasem ke Masyarakat
                                di seluruh Indonesia</p>
                            <div class="flex gap-5 items-center">
                                <p>Follow Us</p>
                                <i class="fa-brands fa-facebook-f cursor-pointer hover:text-color-secondary"></i>
                                <i class="fa-brands fa-twitter cursor-pointer hover:text-color-secondary"></i>
                                <i class="fa-brands fa-youtube cursor-pointer hover:text-color-secondary"></i>
                                <i class="fa-brands fa-instagram cursor-pointer hover:text-color-secondary"></i>
                            </div>
                        </div>
                        <div class="flex justify-between md:justify-around">
                            <div class="space-y-6">
                                <h4 class="font-bold text-lg">Quick Link</h4>
                                <ul class="space-y-3">
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">Home</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">Features</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">Footer</a></li>
                                </ul>
                            </div>
                            <div class="space-y-6">
                                <h4 class="font-bold text-lg">Quick Link</h4>
                                <ul class="space-y-3">
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">About Us</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">Contact</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">Newsletter</h4>
                            <p class="leading-relaxed">Bantu kami dengan dukungan anda berupa ikuti terus social media kami
                                follow akun instagram, twitter, dan facebook kami dan subscribe akun youtube kami agar
                                anda dapat terus mendapatkan informasi terbaru dari desa karangasem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        const hamburger = document.querySelector('#hamburger');
        const menu = document.querySelector('#menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');
        const hamburgerIcon = document.querySelector('#hamburger-icon');
        const closeIcon = document.querySelector('#close-icon');

        hamburger.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
    </script>
</body>

</html>