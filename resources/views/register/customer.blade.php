<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('public/css/app.css')
    <title>Daftar - WeMarried</title>
    <link rel="stylesheet" href="css/output.css" />
  </head>
  <body>
    <!-- Navbar -->
    <header class="bg-transparent bg-white absolute top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="welcome" class="font-lus font-bold text-lg text-pink block py-6">WeMarried</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
              <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <nav id="nav-menu" class="hidden absolute py-5 px-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
              <ul class="block lg:flex">
                <li class="group">
                  <a href="#desain" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">Desain</a>
                </li>
                <li class="group">
                  <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">About</a>
                </li>
                <li class="group">
                  <a href="#undangan" class="text-base text-dark py-2 mx-8 flex group-hover:text-pink">Undangan</a>
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
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- Form Login -->
    <section id="daftar" class="bg-cover bg-center" style="background-image: url('img/bg-login.png')">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 lg:w-1/2">
            <div class="relative lg:mt-10 lg:right-0">
              <img src="img/register.png" alt="WeMarried" class="register" />
            </div>
          </div>

          <div class="form-daftar w-full self-center px-4 lg:w-1/2">
            <h2 class="font-bold text-center md:text-3xl">Daftar Sebagai</h2>
            <ul class="flex mt-8 justify-between">
              <li class="text-start px-4 md:px-0">
                <a href="" class="flex text-base font-semibold text-white mx-8 mt-1 py-1 px-8 rounded-full border border-pink bg-pink transition duration-300 ease-in-out">Individu</a>
              </li>
              <li class="text-center px-4 md:px-0">
                <a href="regven" class="flex text-base font-semibold text-dark mx-8 mt-1 py-1 px-8 rounded-full hover:bg-pink hover:text-white transition duration-300 ease-in-out">Vendor</a>
              </li>
            </ul>
            <h3 class="text-base mt-8 mx-8"><span class="text-pink">Individu</span>, buat kamu yang ingin membuat undangan</h3>
            <form action="{{ route('register.store') }}" method="POST">
              @csrf
              <div class="mt-5 mb-6 mx-8">
                  <input type="nama" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
              </div>
              <div class="mb-6 mx-8">
                  <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required>
              </div>
              <div class="mb-6 mx-8">
                  <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password" required>
              </div>
              <div class="mb-6 mx-8">
                <input type="number" id="nomorhp" name="nomorhp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No. Handphone" required>
            </div>
              <div class="flex items-start mb-6">
              <div class="flex items-center h-5 mx-8">
                  <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
              </div>
                  <label for="remember" class="text-sm font-medium text-gray-900 dark:text-gray-300">Dengan mendaftar, saya menyetujui <span class="text-pink">Syarat Ketentuan dan Kebijakan Privasi</span>.</label>
              </div>
              <button type="submit" class="text-white bg-pink font-medium rounded-lg text-sm sm:w-auto px-8 py-2.5 mx-8">Daftar</button>
          </form>
          <h3 class="text-normal text-center mt-8">Sudah punya akun? <a href="/login" class="text-pink">Masuk disini</a></h3>
          </div>
        </div>
      </div>
    </section>

    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  </body>
</html>
