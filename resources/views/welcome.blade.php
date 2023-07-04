<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('public/css/app.css')
    <title>WeMarried</title>
    <link rel="stylesheet" href="css/output.css" />
  </head>
  <body>
    <!-- Navbar -->
    <header class="bg-transparent bg-white fixed top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="" class="font-lus font-bold text-lg text-pink block py-6">WeMarried</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
              <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <nav id="nav-menu" class="hidden fixed py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
              <ul class="block lg:flex">
                <li class="group">
                    <a href="" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">Home</a>
                </li>
                <li class="group">
                    <a href="#fitur" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">Fitur</a>
                  </li>
                <li class="group">
                  <a href="#tema" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">Tema</a>
                </li>
                <li class="group">
                  <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">About</a>
                </li>
                <li class="group">
                  <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">Contact</a>
                </li>
                <li>
                  <button id="dropdownNavbarLink" type="button" data-dropdown-toggle="dropdownNavbar" class="flex items-center text-base text-dark w-full py-2 mx-8 hover:text-pink">
                    Lainnya
                    <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                  </button>
                  <div id="dropdownNavbar" class="hidden px-2 font-normal bg-white rounded-md border">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownNavbarLink">
                      <li>
                        <a href="#" class="block px-4 py-2 hover:text-pink">Dashboard</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:text-pink">Settings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:text-pink">Earnings</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="group text-center px-4 md:mr-1 md:px-0">
                  <a href="register" class="inline-block text-base font-semibold text-white mt-1 py-1 px-8 rounded-full border border-pink bg-pink hover:shadow-lg transition duration-300 ease-in-out w-full">Daftar</a>
                </li>
                <li class="group text-center px-4 md:px-0">
                  <a href="login" class="inline-block text-base font-semibold text-white mt-1 py-1 px-8 rounded-full border border-pink bg-pink hover:shadow-lg transition duration-300 ease-in-out w-full">Masuk</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- Home-->
    <section id="home" class="pt-[220px] bg-[#FBE7EC]">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 mb-5 lg:w-1/2">
            <h2 class="text-base md:text-3xl">Invite Your Guest to The Wedding</h2>
            <h1 class="block font-bold text-pink text-5xl mt-8 mb-8 lg:text-[100px]">We Married!</h1>
            <p class="font-normal text-sm mb-10 lg:text-xl">Sebarkan Undangan hari bahagiamu dengan Cepat dengan menggunakan Undangan Digital.</p>
            <a href="#" class="text-base font-semibold text-white bg-pink py-5 px-20 rounded-full hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out">Pesan Sekarang</a>
          </div>

          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:mt-10 lg:right-0">
              <img src="img/home.png" alt="WeMarried" class="max-w-full mx-auto" />
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Fitur --}}
    <section id="fitur" class="fitur mt-20">
      <div class="container">
        <h2 class="text-base font-lus font-bold text-center md:text-3xl">Fitur Undangan</h2>
        <p class="text-normal mt-2 text-center">Berbagai macam fitur terbaik undangan online yang Anda butuhkan ada disini.</p>
        <div class="wrap mt-7">
          <div class="card">
            <div class="icon">
              <svg xmlns="https://www.w3.org/2000/svg" viewBoxx="0 0 20 20" fill="currentColor" class="h-5 w-5"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
            </div>
            <h3 class="font-semibold mt-6">Domain Eksklusif</h3>
            <p class="text-align-left text-normal">Menggunakan mekanisme <b>subdomain</b> dan tersedia paket custom domain.</p>
          </div>
          <div class="card">
            <div class="icon">
              <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
            </div>
            <h3 class="font-semibold mt-6">Custom Nama Tamu</h3>
            <p class="text-normal">Satu tamu, satu undangan.</p>
          </div>
          <div class="card">
            <div class="icon">
              <svg data-v-c62d867a="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path data-v-c62d867a="" d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path> <path data-v-c62d867a="" fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
            </div>
            <h3 class="font-semibold mt-6">Full Custom Teks</h3>
            <p class="text-normal">Seluruh teks pada undangan dapat Anda ubah sesuai keinginan.</p>
          </div>
          <div class="card">
            <div class="icon">
              <svg data-v-c62d867a="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path data-v-c62d867a="" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path></svg>
            </div>
            <h3 class="font-semibold mt-6">Dashboard Simpel</h3>
            <p class="text-normal">Menggunakan dashboard dengan tampilan dan cara penggunaan yang mudah dimengerti.</p>
          </div>
          <div class="card">
            <div class="icon">
              <svg data-v-c62d867a="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path data-v-c62d867a="" d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"></path></svg>
            </div>
            <h3 class="font-semibold mt-6">Konten Lengkap</h3>
            <p class="text-normal">Tersedia berbagai jenis konten baik <b>teks, gambar, link, peta, musik</b> hingga <b>video.</b></p>
          </div>
          <div class="card">
            <div class="icon">
              <svg data-v-c62d867a="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path data-v-c62d867a="" fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
            </div>
            <h3 class="font-semibold mt-6">Reservasi & Buku Tamu</h3>
            <p class="text-normal">Fitur penerima ucapan dari tamu dan konfirmasi kehadiran.</p>
          </div>
          <div class="card">
            <div class="icon">
              <svg data-v-c62d867a="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path data-v-c62d867a="" fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd"></path></svg>
            </div>
            <h3 class="font-semibold mt-6">Story & Quotes</h3>
            <p class="text-normal">Ceritakan perjalanan cinta Anda & tambahkan quotes kepada tamu undangan.</p>
          </div>
          <div class="card">
            <div class="icon">
              <svg data-v-c62d867a="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path data-v-c62d867a="" fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path> <path data-v-c62d867a="" d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
            </div>
            <h3 class="font-semibold mt-6">Hadiah</h3>
            <p class="text-normal">Tersedia fitur kirim hadiah secara online ke rekening atau alamat kamu.</p>
          </div>
          <div class="card">
            <div class="icon">
              <svg data-v-c62d867a="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path data-v-c62d867a="" fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
            </div>
            <h3 class="font-semibold mt-6">Countdown Timer</h3>
            <p class="text-normal">Tersedia fitur countdown timer yang dapat berfungsi sebagai pengingat waktu acara.</p>
          </div>
        </div>
      </div>
    </section>

    {{-- Tema Undangan --}}
    <section id="tema" class="tema mt-10">
      <div class="container">
        <h2 class="text-base font-lus font-bold text-center md:text-3xl">Pilihan Tema Undangan</h2>
        <p class="text-normal mt-2 text-center">Pilih tema sesukamu tanpa antri, Langsung Jadi !</p>
        <div class="flex grid-wrap mt-7">
          <a href="https://demo.datengdong.com/?guest=ayana&theme=one" data-action="demo" target="demo" class="card mr-5">
            <img src="img/tema/pertama.png" alt="Satu" loading="lazy" alt="">
            <div>
              <span class="text-lg">Satu</span>
              <span class="type">Free</span>
            </div>
          </a>
          <a href="https://demo.datengdong.com/?guest=ayana&theme=two" data-action="demo" target="demo" class="card">
            <img src="img/tema/kedua.png" alt="Dua" loading="lazy" alt="">
            <div>
              <span class="text-lg">Dua</span>
              <span class="type">Free</span>
            </div>
          </a>
          <a href="https://demo.datengdong.com/?guest=ayana&theme=three" data-action="demo" target="demo" class="card ml-5">
            <img src="img/tema/ketiga.png" alt="Tiga" loading="lazy" alt="">
            <div>
              <span class="text-lg">Tiga</span>
              <span class="type">Free</span>
            </div>
          </a>
        </div>
      </div>
    </section>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  </body>
</html>
