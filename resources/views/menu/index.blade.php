<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Portfolio</title>
  </head>
  <body class="font-nunito">
    <!-- into section -->
    <div
      class="h-1/2 lg:h-screen bg-gradient-to-t from-indigo-200 dark:from-slate-800 dark:to-slate-900 relative overflow-hidden"
    >
      <!-- navbar -->
      <nav class="w-full fixed top-0 bg-white z-10 dark:bg-slate-900">
        <div class="container mx-auto py-5 flex items-center justify-between">
          <div class="flex items-center gap-2">
            <img class="w-8" src="{{ asset('asset/img/logo.png') }}" alt="" />
            <span class="text-2xl font-bold text-indigo-900 dark:text-white"
              >Portfolio.</span
            >
          </div>
          <ul
            class="hidden md:flex space-x-10 text-gray-600 dark:text-gray-100 font-bold text-sm uppercase"
          >
            <li class="hover:text-gray-500">
              <a href="#">homepage</a>
            </li>
            <li class="hover:text-gray-500">
              <a href="#about">about me</a>
            </li>
            <li class="hover:text-gray-500">
              <a href="#services">services</a>
            </li>
            <li class="hover:text-gray-500">
              <a href="#works">works</a>
            </li>
            <li class="hover:text-gray-500">
              <a href="#contact">contact</a>
            </li>
          </ul>
          <img
            id="moon"
            src="{{ asset('asset/img/moon.png') }}"
            class="hidden md:block w-5 cursor-pointer"
            alt=""
          />
          <div id="hamburger" class="space-y-1 md:hidden cursor-pointer z-20">
            <div class="w-6 h-0.5 bg-black"></div>
            <div class="w-6 h-0.5 bg-black"></div>
            <div class="w-6 h-0.5 bg-black"></div>
          </div>
          <ul
            id="menu"
            class="hidden bg-indigo-900 absolute left-0 top-0 w-full p-10 rounded-b-3xl space-y-10 text-white text-center"
          >
            <li>
              <a id="hLink" href="#">homepage</a>
            </li>
            <li>
              <a id="hLink" href="#about">about me</a>
            </li>
            <li>
              <a id="hLink" href="#services">services</a>
            </li>
            <li>
              <a id="hLink" href="#works">works</a>
            </li>
            <li>
              <a id="hLink" href="#contact">contact</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- intro content -->
      <!-- image -->
      <img
        class="absolute bottom-0 right-0 lg:left-0 mx-auto h-5/6 object-cover"
        src="{{ asset('asset/img/man.png') }}"
        alt=""
      />
      <!-- circle -->
      <div
        class="hidden lg:block absolute -bottom-1/4 right-0 left-0 mx-auto w-big h-big bg-indigo-900 rounded-full -z-10"
      ></div>
      <!-- animated text -->
      <div
        class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-48 xl:text-7xl font-bold"
      >
        <span class="text-gray-600">Gitaris</span>
        <p id="text" class="text-red-500"></p>
      </div>
      <!-- texts -->
      <div
        class="hidden lg:flex flex-col gap-5 rounded-md shadow-lg absolute top-0 bottom-0 m-auto right-10 bg-white dark:bg-slate-900 dark:shadow-slate-800 p-6 h-fit w-1/3"
      >
        <h1 class="text-4xl font-bold text-indigo-900">Hi, I'm Bochi</h1>
        <p class="text-gray-400">
          aku adalah seorang anime nyata yang berasalah dari dunia
          abacadabra skibidi sigma rizz bagi kalian yang penasaran 
          dengan diri ku kalian bisa hire me agar aku menjadi yapper
        </p>
        <a
          class="bg-indigo-600 text-white text-xl px-3 py-2 rounded-md font-semibold w-fit"
          href="#contact"
          >Hire Me</a
        >
      </div>
    </div>
    <!-- about -->
    <div id="about" class="px-10 dark:bg-slate-900">
      <div
        class="container mx-auto py-40 flex flex-col-reverse lg:flex-row items-center gap-20"
      >
        <!-- left -->
        <div class="relative">
          <img
            class="h-1/4 absolute top-0 left-0 -z-10"
            src="{{ asset('asset/img/dots.png') }}"
            alt=""
          />
          <div class="h-full rounded-full overflow-hidden">
            <img src="{{ asset('asset/img/portrait.png') }}" alt="" />
          </div>
        </div>
        <!-- right -->
        <div class="my-auto flex flex-col gap-3">
          <h1 class="text-indigo-600 font-bold">ABOUT ME</h1>
          <h1 class="text-3xl font-medium dark:text-white">Gitaris</h1>
          <h1 class="text-3xl font-medium dark:text-white">
            At Kessuko Band
          </h1>
          <p class="text-gray-400">
            aku sebenernya jago banget main gitar cuman aku cuman bisa
            solo dan aku anaknya introvet dan juga anti sosial
          </p>
          <h2 class="text-gray-400 font-medium">Gitaris</h2>
          <div class="w-full bg-gray-200 h-1.5 rounded-md">
            <div class="w-full bg-indigo-600 h-1.5 rounded-md"></div>
          </div>
          <h2 class="text-gray-400 font-medium">Social Skills</h2>
          <div class="w-full bg-gray-200 h-1.5 rounded-md">
            <div class="w-4/6 bg-indigo-600 h-1.5 rounded-md"></div>
          </div>
          <h2 class="text-gray-400 font-medium">Vokal</h2>
          <div class="w-full bg-gray-200 h-1.5 rounded-md">
            <div class="w-5/6 bg-indigo-600 h-1.5 rounded-md"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- services -->
    <div id="services" class="dark:bg-slate-900">
      <div class="container mx-auto">
        <!-- top -->
        <div class="flex flex-col gap-3 items-center">
          <h1 class="text-indigo-600 font-bold">SERVICES</h1>
          <h1 class="text-3xl dark:text-white">Apa Yang Bisa Saya Tawarkan?</h1>
          <p class="w-1/2 text-center text-gray-400">
            Sebagai seorang gitaris dan vokalis, saya menyalurkan emosi melalui musik,
            menyampaikan apa yang tak bisa diungkapkan dengan kata-kata. 
            Saya fokus menciptakan penampilan yang penuh perasaan dan melodi yang menyentuh hati. 
            Meskipun saya pemalu dalam pergaulan, musik adalah suara saya, menceritakan kisah yang menginspirasi dan menghubungkan.
          </p>
        </div>
        <!-- bottom -->
        <div class="p-5 sm:p-0 flex flex-wrap justify-between">
          <!-- card -->
          <div class="flex flex-wrap">
    @foreach ($services as $service)
        <div class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3">
            <img class="w-10" src="{{ asset('storage/' . $service->image) }}" alt="" />
            <h1 class="font-medium text-lg dark:text-white">{{ $service->title }}</h1>
            <p class="text-gray-400">{{ $service->deskripsi }}</p>
            <a class="text-indigo-600 font-semibold text-sm" href="#">Read More</a>
        </div>
    @endforeach
</div>
      </div>
    </div>
    <!-- works -->
    <div id="works" class="py-40 dark:bg-slate-900">
      <div class="container mx-auto">
        <!-- top -->
        <div class="flex flex-col gap-3 items-center">
          <h1 class="text-indigo-600 font-bold">WORKS</h1>
          <h1 class="text-3xl dark:text-white">My Album</h1>
          <p class="w-1/2 text-center text-gray-400">
            "Melodi yang Menghidupkan Jiwa"
             Menyatukan emosi dan cerita dalam bentuk musik yang menyentuh hati dan pikiran.
          </p>
        </div>
        <!-- bottom -->
        <div class="p-5 sm:p-0 flex flex-wrap justify-between">
    @foreach ($albums as $album)
        <div
            class="w-full md:w-5/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10 m-1 transition-all hover:scale-110"
        >
            <img src="{{ asset('storage/' . $album->image) }}" alt="Album" />
        </div>
    @endforeach
</div>

      </div>
    </div>

    <!-- contact -->
    <div id="contact" class="dark:bg-slate-900">
      <div class="container mx-auto">
        <!-- top -->
        <div class="flex flex-col gap-3 items-center">
          <h1 class="text-indigo-600 font-bold">CONTACT</h1>
          <h1 class="text-3xl dark:text-white">Apakah Ada Pertanyaan?</h1>
          <p class="w-1/2 text-center text-gray-400">
            kalau ada pertanyaan kalian bisa langsung diskusikan saja ya
          </p>
        </div>
        <!-- bottom -->
        <form class="mt-5 p-8 flex flex-col gap-5 items-center">
          <input
            class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
            type="text"
            placeholder="Name"
          />
          <input
            class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
            type="email"
            placeholder="Email"
          />
          <textarea
            class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
            cols="30"
            rows="10"
            placeholder="Message..."
          ></textarea>
          <button
            class="w-1/2 bg-indigo-600 text-white font-medium px-3 py-2 rounded-md cursor-pointer"
          >
            Submit
          </button>
        </form>
      </div>
    </div>
    <!-- footer -->
    <div class="w-full bg-gray-800">
      <div class="container mx-auto py-5 flex items-center justify-between">
        <div class="flex items-center gap-2">
          <img class="w-8" src="{{ asset('asset/img/logo.png') }}" alt="" />
          <span class="text-2xl font-bold text-white">Portfolio</span>
        </div>
        <span class="hidden md:block font-medium text-white"
          >© 2024 Portfolio. Design by Jiwox.</span
        >
        <div class="flex gap-2">
          <img class="w-4 cursor-pointer" src="{{ asset('asset/img/facebook.png') }}" alt="" />
          <img class="w-4 cursor-pointer" src="{{ asset('asset/img/instagram.png') }}" alt="" />
          <img class="w-4 cursor-pointer" src="{{ asset('asset/img/twitter.png') }}" alt="" />
          <img class="w-4 cursor-pointer" src="{{ asset('asset/img/linkedin.png') }}" alt="" />
        </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/autotyping.js') }}"></script>

  </body>
</html>