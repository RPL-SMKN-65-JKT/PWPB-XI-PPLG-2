<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" type="text/css" href="{{ url('assets//css/style.css') }}" />
    <title>Portofolio</title>
    <style>
    body {
    font-family: 'Inter', sans-serif;
}

  .navbar-fixed {
    @apply fixed z-[9999] bg-white bg-opacity-70 backdrop-blur-sm dark:bg-dark dark:bg-opacity-50;
    box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.2);
}

    </style>
</head>

<body>
    <!-- Header start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
        <div class="container">
          <div class="relative flex items-center justify-between">
            <div class="px-4">
              <a href="#home" class="block py-6 text-lg font-bold text-primary">xxUmarMukhtarxx</a>
            </div>
            <div class="flex items-center px-4">
              <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                <span class=" origin-top-left transition duration-300 ease-in-out my-2 block h-[2px] w-[30px] bg-slate-950"></span>
                <span class=" transition duration-300 ease-in-out my-2 block h-[2px] w-[30px] bg-slate-950"></span>
                <span class=" origin-bottom-left transition duration-300 ease-in-out my-2 block h-[2px] w-[30px] bg-slate-950"></span>
              </button>

              <nav
                id="nav-menu"
                class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent"
              >
                <ul class="block lg:flex">
                  <li class="group">
                    <a href="#home" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Home</a>
                  </li>
                  <li class="group">
                    <a href="#about" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">About Me</a>
                  </li>
                  <li class="group">
                    <a href="#portfolio" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Portfolio</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>

    <!-- Header end -->

    <!-- Hero section start -->
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self center px-4 lg:w-1/2">
                    <h1 class="text-base font font-semibold text-primary md:text-xl">Hello everyone ╰*°▽°*╯ i'm <span class="block font-bold text-black text-4xl"> Umar Mukhtar </span></h1>
                    <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">a student & <span class="text-dark"></span> programming </h2>
                    <p class="font-medium text-secondary mb-10 leading-relaxed">Learning Web Programming is easy and fun, right?</p>

                <a href="https://wa.me/628595901989text=I'm%20interested%20in%20your%20project%20for%20sale" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Contact me</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="{{URL::to('/assets/img/test-1.png')}}" alt="Umar Mukhtar" class="max-w-full mx-auto">
                    <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                        <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#31C48D" d="M39.2,-34.1C51.1,-16.2,61.4,0.1,59.4,15.4C57.4,30.7,42.9,45,26.4,51.7C9.8,58.5,-8.8,57.8,-22.9,50.1C-36.9,42.3,-46.3,27.5,-52.1,9.7C-57.9,-8.1,-60.1,-28.9,-50.8,-46.1C-41.5,-63.3,-20.8,-77,-3.6,-74.1C13.6,-71.3,27.2,-51.9,39.2,-34.1Z" transform="translate(100 100) scale(1.3)" />
                          </svg>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section End -->

    <!-- About section start -->
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3"> About Me </h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl"> COME ON!, learn Web programming until you are successful!</h2>
                    <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Nama saya Umar Mukhtar yang lahir di Jakarta, Indonesia. Saya berumur 16 tahun, dan merupakan pelajar dari SMK Negeri 65 Jakarta dengan jurusan Pengembangan Perangkat Lunak dan GIM. Saya baru mulai mempelajari web development.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-black text-2xl mb-4 lg:text-3xl lg:pt-10">Let's be friends</h3>
                    <p class="font-medium text-base text-secondary mb-6 lg:text-lg"> Come on, let's be friends with my YouTube and Instagram, you can also see interesting videos for you!</p>
                    <div class="flex items-center">
                        <!--YOUTUBE-->
                        <a href="https://www.youtube.com/channel/UCDff1xWL5LZkTpzvlNSncSg" target="_blank" class="w-9 h-9 mr-3 rounded-full felx justify-center items-center border border-slate-300 text-slate-300  hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="34" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                         <!--INSTAGRAM-->
                         <a href="https://www.instagram.com/tokyu__8000/" target="_blank" class="w-9 h-9 mr-3 rounded-full felx justify-center items-center border border-slate-300 text-slate-300  hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="34" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About section end -->

    <!-- Portfolio Section Start -->
    <section id="portfolio" class="bg-slate-100 pt-36 pb-16 dark:bg-slate-800">
        <div class="container">
          <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-xl text-center">
              <h4 class="mb-2 text-lg font-semibold text-primary">Portfolio</h4>
              <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Contact me</h2>
              <p class="text-md font-medium text-secondary md:text-lg">
                This is my portfolio for 1 year
              </p>
            </div>
          </div>

          <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
            <div class="mb-12 p-4 md:w-1/2">
              <div class="overflow-hidden rounded-md shadow-md">
                <img src="{{URL::to('/assets/img/pojek1.png')}}" alt="Landing Page" width="w-full" />
              </div>
              <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white"> Musical Group Assignments </h3>
              <p class="text-base font-medium text-secondary"> </p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
              <div class="overflow-hidden rounded-md shadow-md">
                <img src="{{URL::to('/assets/img/pojek2.png')}}" alt="E-Commerce" width="w-full" />
              </div>
              <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white"> Biodata 1st edition </h3>
              <p class="text-base font-medium text-secondary"> </p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
              <div class="overflow-hidden rounded-md shadow-md">
                <img src="{{URL::to('/assets/img/pojek3.png')}}" alt="Technical Documentation" width="w-full" />
              </div>
              <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Biodata 2st edition</h3>
              <p class="text-base font-medium text-secondary"> </p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
              <div class="overflow-hidden rounded-md shadow-md">
                <img src="{{URL::to('/assets/img/pojek5.png')}}" alt="Tribute Page" width="w-full" />
              </div>
              <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Music Website</h3>
              <p class="text-base font-medium text-secondary"> </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Portfolio Section End -->

      <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="mb-12 w-full px-4 font-medium text-slate-300 md:w-1/3">
              <h3 class="mb-2 text-2xl font-bold">Contant me</h3>
              <p>umukhtar730@gmail.com</p>
              <p>Jl. Cipinang Muara IV , NO.41</p>
              <p>Jakarta</p>
            </div>
            <div class="mb-12 w-full px-4 md:w-1/3">
              <h3 class="mb-5 text-xl font-semibold text-white">Tautan</h3>
              <ul class="text-slate-300">
                <li>
                  <a href="#home" class="mb-3 inline-block text-base hover:text-primary">Home</a>
                </li>
                <li>
                  <a href="#about" class="mb-3 inline-block text-base hover:text-primary">About Me</a>
                </li>
                <li>
                  <a href="#portfolio" class="mb-3 inline-block text-base hover:text-primary">Portfolio</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="w-full border-t border-slate-700 pt-10">
            <div class="mb-5 flex items-center justify-center">
              <!-- Youtube -->
              <a
                href="https://www.youtube.com/channel/UCDff1xWL5LZkTpzvlNSncSg"
                target="_blank"
                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>YouTube</title>
                  <path
                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                  />
                </svg>
              </a>

              <!-- Instagram -->
              <a
                href="https://www.instagram.com/tokyu__8000/"
                target="_blank"
                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Instagram</title>
                  <path
                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                  />
                </svg>
              </a>
            </div>
            <p class="text-center text-xs font-medium text-slate-500">
                Oleh <a href="https://www.instagram.com/tokyu__8000/" target="_blank" class="font-bold text-primary">Umar Mukhtar</a>, menggunakan
              <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>.
            </p>
          </div>
        </div>
      </footer>
      <!-- Footer End -->



    <script src="{{url('assets//js/script1.js')}}"></script>
    @vite('resources/js/app.js')
</body>
</html>
