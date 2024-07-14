<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAYATUDIN</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{-- @vite('resources/js/navbar.js') --}}
    <script>
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
      } else {
        document.documentElement.classList.remove('dark')
      }
    </script>
  
</head>
<body>
    {{-- awal navbar --}}
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container  ">
            <div class="flex items-center justify-between relative">
                <div class="px-4 block dark:text-white">
                    <img src="img/ayat1.png" alt="ayat" class="w-10 py-2 mt-1 inline-flex animate-bounce duration-500 fill-current">
                   <a href="" class="font-bold text-primary text-lg px-1">H2FL SITE</a>
                </div>
                {{-- haburger --}}
                <div class="flex items-center px-4">
                    <button id="burger" name="burger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="burger transition duration-500 ease-in-out origin-top-left"></span>
                        <span class="burger transition duration-500 ease-in-out"></span>
                        <span class="burger transition duration-500 ease-in-out origin-bottom-left"></span>
                    </button>
                {{-- nav --}}
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-64 w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full  lg:shadow-none lg:rounded-none dark:bg-dark dark:shadow-zinc-700 lg:dark:bg-transparent">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="#lust" class="text-slate-600 text-base mx-6 flex py-2 group-hover:text-primary dark:text-zinc-200">Home</a>
                        </li>
                        <li class="group">
                            <a href="#gluttony" class="text-slate-600 text-base mx-6 flex py-2 group-hover:text-primary dark:text-zinc-200">About Me</a>
                        </li>
                        <li class="group">
                            <a href="#envy" class="text-slate-600 text-base mx-6 flex py-2 group-hover:text-primary dark:text-zinc-200">Project</a>
                        </li>
                        <li class="group">
                            <a href="#greed" class="text-slate-600 text-base mx-6 flex py-2 group-hover:text-primary dark:text-zinc-200">Skills</a>
                        </li>
                        <li class="group">
                            <a href="#sloth" class="text-slate-600 text-base mx-6 flex py-2 group-hover:text-primary dark:text-zinc-200">Contact</a>
                        </li>
                        <li class="mt-3 lg:mt-0 flex items-center">
                          <div class="flex">
                            <span class="text-sm dark:text-zinc-200 mr-2 mx-6 text-slate-600">Light</span>
                            <input type="checkbox" id="pindah" class="hidden">
                            <label for="pindah">
                             <div class="w-8 h-5 bg-zinc-500 rounded-full flex items-center p-0.5 cursor-pointer">
                                 <div class="w-4 h-4 bg-slate-200 dark:bg-zinc-200 rounded-full pindah-lingkar transition duration-500 ease-in-out">
                                 </div>
                             </div>
                         
                             </label> 
                            <span class="text-sm  text-slate-600 dark:text-zinc-200 ml-2 ">Dark</span> 
                         </div>
                         
                        </li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- akhir navbar --}}
{{-- awal depan --}}
<section  id="lust" class="pt-36 dark:bg-dark" >
 <div class="container">
    <div class="flex flex-wrap">
        <div class="w-full self-center px-6 lg:w-1/2 lg:px-10 mx -auto">
            <h1 class="text-base semi-bold text-primary md:text-xl font-mayter">Hello there🖖, This is 
              <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl dark:text-white">HAYATUDIN</span></h1>
             {{-- <h2 class="font-medium text-slate-700 dark:text-white text-lg mb-5 lg:text-3xl mt-2">Web Developer </h2> --}}
             <h2 class="font-semibold text-slate-700 dark:text-white text-xl mb-5 lg:text-3xl mt-2"> <span class="gado"></span></h2>
             <p class="font-medium text-slate-400 mb-10 leading-relaxed">I'm Just a Human Who Lives In This Universe</p>
            <a href="" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-3xl hover:shadow hover:opacity-70 transition duration-300 ease-in-out">Hubungi Saya</a>
        </div>
        {{-- kanan --}}
        <div class="w-full self-end px-4  lg:bg-transparent lg:w-1/2 rounded-2xl">
            <div class="relative mt-10 lg:mt-0 lg:right-0" data-aos="fade-up">
                <img src="img/ayat.png" alt="ayat" class="max-w-full mx-auto" >
                <span class="absolute w-full -bottom-0 -z-10 left-1/2 -translate-x-1/2">
                    <img src="img/blov.svg" alt="">
                </span>

               
            </div>
        </div>
        {{-- <div>
        <div class="w-full self-end px-4  lg:bg-transparent sm:bg-primary lg:w-1/2 rounded-2xl">
            <div class="absolute w-full top-10 -z-10 justify-center lg:left-3/4 lg:-translate-x-1/2">
                <img src="img/ayat.png" alt="ayat" class="max-w-full mx-auto">
            </div>
        </div>
         </div> --}}
    </div>
 </div>
</section>
{{-- akhir depan --}}

{{-- mulai about --}}
<section id="gluttony" class="pt-36 pb-32 dark:bg-dark ">
    <div class="container" >
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10 lg:w-1/2">
                <h4 class="text-primary text-uppercase font-bold text-lg mb-2"  data-aos="zoom-in" data-aos-duration="500">About Me</h4>
                <h2 class="font-bold text-slate-800 text-2xl mb-3 max-w-xl lg:text-4xl dark:text-white"  data-aos="zoom-in" data-aos-duration="1000">Mengenal Saya</h2>
                <p class="font-medium text-base text-para max-w-xl lg:text-lg dark:text-zinc-400"  data-aos="zoom-in-right" duration="2000">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, 
                    natus iste optio, eum quae enim dicta repudiandae, nisi deleniti esse ratione aut? 
                    Commodi ut facilis aperiam laboriosam natus ad modi quo voluptates, quaerat aliquid, 
                    dignissimos alias aliquam veniam ratione. Debitis voluptatibus
                     fugiat error nemo perspiciatis assumenda, libero beatae eligendi minus voluptas 
                     voluptate natus quidem, quam facilis labore aperiam animi? Omnis quisquam, et ad
                      accusantium perspiciatis voluptatum quas tempore ab asperiores hic culpa praesentium 
                      reprehenderit labore debitis, quos dolore, harum animi delectus libero eos totam? Consectetur, 
                      impedit nostrum? Hic corporis eaque ipsum, 
                    illum dicta debitis quod minus fugit dolorum ipsa voluptatum.</p>
            </div>
            <div class="w-full px-4 mb-10 lg:w-1/2">
                <h4 class="font-semibold text-dark text-2xl mb-3 lg:text-3xl pt-10 dark:text-white"  data-aos="zoom-in" data-aos-duration="1000">Keep In Touch</h4>
                <p class="font-medium text-base text-para mb-6 lg:text-lg dark:text-zinc-400" data-aos="zoom-in-right" duration="2000" delay="1000">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, 
                    natus iste optio, eum quae enim dicta repudiandae, nisi deleniti esse ratione aut? 
                    Commodi ut facilis aperiam laboriosam natus ad modi quo voluptates, quaerat aliquid, 
                    dignissimos alias aliquam veniam ratione. Debitis voluptatibus
                     fugiat error nemo perspiciatis assumenda, libero beatae eligendi minus voluptas 
                     voluptate natus quidem, quam facilis labore aperiam animi? Omnis quisquam, et ad
                      accusantium perspiciatis voluptatum quas tempore ab asperiores hic culpa praesentium 
                      reprehenderit labore debitis, quos dolore, harum animi delectus libero eos totam? Consectetur, 
                      impedit nostrum? Hic corporis eaque ipsum, 
                    illum dicta debitis quod minus fugit dolorum ipsa voluptatum.
                </p>

                {{-- icon --}}
                <div class="flex items-center">
                    {{-- youtube --}}
                    <a href="https://youtube.com/@ayatforbusiness669?si=NuxPIFW6Fmxb08jr" target="blank " class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:border-primary hover:text-white dark:text-white dark:hover:text-dark">
                     <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title>
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                      {{-- instagram --}}
                      <a href="https://www.instagram.com/h2flproject" target="blank " class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:border-primary hover:text-white dark:text-white dark:hover:text-dark">
                      <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                    </a>
                         {{-- facebook --}}
                    <a href="https://youtube.com/@ayatforbusiness669?si=NuxPIFW6Fmxb08jr" target="blank " class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:border-primary hover:text-white dark:text-white dark:hover:text-dark">
                        <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                       </a>
                         {{-- linkindn --}}
                    <a href="https://youtube.com/@ayatforbusiness669?si=NuxPIFW6Fmxb08jr" target="blank " class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:border-primary hover:text-white dark:text-white dark:hover:text-dark">
                        <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    
                         {{-- github --}}
                    <a href="https://youtube.com/@ayatforbusiness669?si=NuxPIFW6Fmxb08jr" target="blank " class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:border-primary hover:text-white dark:text-white dark:hover:text-dark">
                        <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                 
                </div>
            </div>
        </div>
    </div>
</section>
{{-- akhir about --}}

{{-- awal project --}}
<section id="envy" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-700 font-mayter">
    <div class="container" data-aos="fade-up" data-aos-duration="2000">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto mb-16 text-center">
                <h4 class="text-lg text-primary font-bold mb-2">Project</h4>
                <h2 class="font-bold text-dark mb-4 text-3xl dark:text-white">Project Yang Pernah Saya Kerjakan</h2>
                <p class="text-md text-para font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde inventore molestiae ducimus commodi dignissimos. Dolore?</p>
            </div>
          
        </div>
        <div class="swiper">
          <div class="w-full px-4justify-center xl:w-10/12 xl:mx-auto swiper-wrapper">
            <div class="mb-12 p-4 swiper-slide">
              <div class="rounded-md shadow md overflow-hidden">
                <img src="img/gambar.jpg" alt="gambar" width="full">
              </div>
              <h3 class="font-semibold text-xl mt-5 mb-3 text-dark dark:text-white">ayatttt</h3>
                <p class="font-medium text-base text-para dark:text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsa minima recusandae dolor maiores natus molestiae.</p>
            </div>
            <div class="mb-12 p-4 swiper-slide">
                <div class="rounded-md shadow md overflow-hidden">
                    <img src="img/ayat.png" alt="gambar" class="h-72 mx-auto" width="full">
                </div>
                <h3 class="font-semibold text-xl mt-5 mb-3 text-dark dark:text-white">ayatttt</h3>
                <p class="font-medium text-base text-para dark:text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsa minima recusandae dolor maiores natus molestiae.</p>
            </div>
            <div class="mb-12 p-4 swiper-slide">
                <div class="rounded-md shadow md overflow-hidden">
                    <img src="img/gambar.jpg" alt="gambar" clas width="full">
                </div>
                <h3 class="font-semibold text-xl mt-5 mb-3 text-dark dark:text-white">ayatttt</h3>
                <p class="font-medium text-base text-para dark:text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsa minima recusandae dolor maiores natus molestiae.</p>
            </div>
            <div class="mb-12 p-4 swiper-slide">
                <div class="rounded-md shadow md overflow-hidden">
                    <img src="img/gambar.jpg" alt="gambar" width="full">
                </div>
                <h3 class="font-semibold text-xl mt-5 mb-3 text-dark dark:text-white">ayatttt</h3>
                <p class="font-medium text-base text-para dark:text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsa minima recusandae dolor maiores natus molestiae.</p>
            </div>
        </div>
        <div class="swiper-button-next" ></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>

        {{-- <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
          <div class="max-w-4xl px-4 text-right">gesr kanan</div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow md overflow-hidden">
              <img src="img/gambar.jpg" alt="gambar" width="full">
            </div>
                <h3 class="font-semibold text-xl mt-5 mb-3 text-dark dark:text-white">ayatttt</h3>
                <p class="font-medium text-base text-para dark:text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsa minima recusandae dolor maiores natus molestiae.</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow md overflow-hidden">
                    <img src="img/gambar.jpg" alt="gambar" width="full">
                </div>
                <h3 class="font-semibold text-xl mt-5 mb-3 text-dark dark:text-white">ayatttt</h3>
                <p class="font-medium text-base text-para dark:text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsa minima recusandae dolor maiores natus molestiae.</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow md overflow-hidden">
                    <img src="img/gambar.jpg" alt="gambar" width="full">
                </div>
                <h3 class="font-semibold text-xl mt-5 mb-3 text-dark dark:text-white">ayatttt</h3>
                <p class="font-medium text-base text-para dark:text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsa minima recusandae dolor maiores natus molestiae.</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow md overflow-hidden">
                    <img src="img/gambar.jpg" alt="gambar" width="full">
                </div>
                <h3 class="font-semibold text-xl mt-5 mb-3 text-dark dark:text-white">ayatttt</h3>
                <p class="font-medium text-base text-para dark:text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ipsa minima recusandae dolor maiores natus molestiae.</p>
            </div>
        </div> --}}
        
      
    </div>
    
</section>
{{-- akhir project --}}

{{-- awal SKILL --}}
<section id="greed" class="pt-36 pb-16 dark:bg-dark font-mayter">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto mb-16 text-center">
                <h4 class="text-lg text-primary font-bold mb-2">My Skill & Service </h4>
                <h2 class="font-bold text-dark mb-4 text-3xl dark:text-white">What I Do</h2>
                <p class="text-md text-para font-medium dark:text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde inventore molestiae ducimus commodi dignissimos. Dolore?</p>
            </div>
        </div>
{{-- 
        <div class="flex flex-warp">
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-slate-100 rounded-xl shadow-lg overflow-hidden mb-10  hover:bg-primary group">
                    
                     
                    <svg role="img" width="100" class="fill-current mx-auto" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    <div class="py-8 px-6">
                        <h3 class="block mb-3 text-dark group-hover:text-white  dark:group-hover:text-dark text-xl font-semibold text-center">Web Development</h3>
                        <p class="font-medium text-base text-para group-hover:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, voluptatem.</p>

                    </div>
                </div>
            </div>
            
        </div> --}}

        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-1/2 xl:w-1/4" data-aos="zoom-in-right">
              <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800 dark:shadow-slate-600 dark:hover:bg-primary hover:bg-primary dark:hover:text-dark hover:text-white group group-hover:scale-95 transition-all duration-500">
               
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-21 h-20 mt-5 mx-auto group-hover:scale-110 transition-all duration-400 dark:text-white dark:group-hover:text-dark"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM4 5V19H20V5H4ZM20 12L16.4645 15.5355L15.0503 14.1213L17.1716 12L15.0503 9.87868L16.4645 8.46447L20 12ZM6.82843 12L8.94975 14.1213L7.53553 15.5355L4 12L7.53553 8.46447L8.94975 9.87868L6.82843 12ZM11.2443 17H9.11597L12.7557 7H14.884L11.2443 17Z"></path></svg>
                  
                {{-- <img src="img/webb.svg" alt="" class="fill-current mx-auto group-hover:scale-110 transition-all duration-500"> --}}
                {{-- <svg role="img" width="100" class="fill-current mx-auto group-hover:scale-110 transition-all duration-400 dark:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg> --}}
                <div class="py-8 px-6">
                  <h3 class="mb-3 block truncate text-xl font-semibold text-dark group-hover:text-white group-hover:scale-105 transition-all duration-500 text-center dark:text-white dark:group-hover:text-dark">
                    Web Development
                  </h3>
                  <div class="grid grid-cols-2">
                    <p class="mb-2 px-1 text-sm font-medium text-para dark:text-zinc-400 group-hover:text-white dark:group-hover:text-dark"><span class="grayscale">📄</span>Laravel</p>
                  <p class="mb-2 px-1 text-sm font-medium text-para dark:text-zinc-400 group-hover:text-white dark:group-hover:text-dark"><span class="grayscale">📄</span>Tailwind CSS</p>
                  <p class="mb-2 px-1 text-sm font-medium text-para dark:text-zinc-400 group-hover:text-white dark:group-hover:text-dark"><span class="grayscale">📄</span>HTML</p>
                  <p class="mb-2 px-1 text-sm font-medium text-para dark:text-zinc-400 group-hover:text-white dark:group-hover:text-dark"><span class="grayscale">📄</span>PHP</p>
                  <p class="mb-2 px-1 text-sm font-medium text-para dark:text-zinc-400 group-hover:text-white dark:group-hover:text-dark"><span class="grayscale">📄</span>MySQL</p>
                  <p class="mb-2 px-1 text-sm font-medium text-para dark:text-zinc-400 group-hover:text-white dark:group-hover:text-dark"><span class="grayscale">📄</span>Bootstrap</p>
                  
                  </div>
                  
                 
                </div>
              </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/4" data-aos="zoom-in-right" data-aos-delay="250">
              <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800 dark:shadow-slate-600 dark:hover:bg-primary hover:bg-primary dark:hover:text-dark hover:text-white group group-hover:scale-95 transition-all duration-500">
               
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-21 h-20 mt-5 mx-auto group-hover:scale-110 transition-all duration-400 dark:text-white dark:group-hover:text-dark">><path d="M4 5V16H20V5H4ZM2 4.00748C2 3.45107 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44892 22 4.00748V18H2V4.00748ZM1 19H23V21H1V19Z"></path></svg>
            
                <div class="py-8 px-6">
                  <h3 class="mb-3 block truncate text-xl font-semibold text-dark group-hover:text-white group-hover:scale-105 transition-all duration-500 text-center dark:text-white dark:group-hover:text-dark">
                    Microsoft Office
                  </h3>
                  <div class="grid grid-cols-2">
                    <p class="mb-2 px-1 text-sm font-medium text-para dark:text-zinc-400 group-hover:text-white dark:group-hover:text-dark"><span class="grayscale">📄</span>Word</p>
                  <p class="mb-2 px-1 text-sm font-medium text-para dark:text-zinc-400 group-hover:text-white dark:group-hover:text-dark"><span class="grayscale">📄</span>Excel</p>
                  <p class="mb-9 px-1 text-sm font-medium text-para dark:text-zinc-400 group-hover:text-white dark:group-hover:text-dark"><span class="grayscale">📄</span>Power Point</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="w-full px-4 lg:w-1/2 xl:w-1/4" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800 dark:shadow-slate-600 dark:hover:bg-primary hover:bg-primary dark:hover:text-dark hover:text-white group group-hover:scale-95 transition-all duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-21 h-20 mt-5 mx-auto group-hover:scale-110 transition-all duration-400 dark:text-white dark:group-hover:text-dark"><path d="M16.9337 8.96494C16.426 5.03562 13.0675 2 9 2 4.58172 2 1 5.58172 1 10 1 11.8924 1.65707 13.6313 2.7555 15.0011 3.56351 16.0087 4.00033 17.1252 4.00025 18.3061L4 22H13L13.001 19H15C16.1046 19 17 18.1046 17 17V14.071L18.9593 13.2317C19.3025 13.0847 19.3324 12.7367 19.1842 12.5037L16.9337 8.96494ZM3 10C3 6.68629 5.68629 4 9 4 12.0243 4 14.5665 6.25141 14.9501 9.22118L15.0072 9.66262 16.5497 12.0881 15 12.7519V17H11.0017L11.0007 20H6.00013L6.00025 18.3063C6.00036 16.6672 5.40965 15.114 4.31578 13.7499 3.46818 12.6929 3 11.3849 3 10ZM21.1535 18.1024 19.4893 16.9929C20.4436 15.5642 21 13.8471 21 12.0001 21 10.153 20.4436 8.4359 19.4893 7.00722L21.1535 5.89771C22.32 7.64386 23 9.74254 23 12.0001 23 14.2576 22.32 16.3562 21.1535 18.1024Z"></path></svg>
                <div class="py-8 px-6">
                  <h3 class="mb-3 block truncate text-xl font-semibold text-dark group-hover:text-white group-hover:scale-105 transition-all duration-500 text-center dark:text-white dark:group-hover:text-dark">
                    Languanges
                  </h3>
                  <div class="mx-auto">
                    <p class="mb-2 px-8 text-sm font-medium text-para  dark:text-zinc-400 group-hover:text-white  dark:group-hover:text-dark"><span class="grayscale">📄</span>Indonesian (Native)</p>
                  <p class="mb-2 px-8 text-sm font-medium text-para  dark:text-zinc-400 group-hover:text-white  dark:group-hover:text-dark"><span class="grayscale">📄</span>English (Intermediate)</p>
                  <p class="mb-2 px-8 text-sm font-medium text-para  dark:text-zinc-400 group-hover:text-white  dark:group-hover:text-dark"><span class="grayscale">📄</span>French (Elementary)</p>
           
                  
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/4" data-aos="zoom-in-left" data-aos-delay="750">
              <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800 dark:shadow-slate-600 dark:hover:bg-primary hover:bg-primary dark:hover:text-dark hover:text-white group group-hover:scale-95 transition-all duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-21 h-20 mt-5 mx-auto group-hover:scale-110 transition-all duration-400 dark:text-white dark:group-hover:text-dark" width="100" viewBox="0 0 24 24"><path d="m21.29 4.1-4.12-2a1.36 1.36 0 0 0-.48-.1h-.08a1.18 1.18 0 0 0-.72.24l-.14.12-7.88 7.19L4.44 7a.83.83 0 0 0-.54-.17.88.88 0 0 0-.53.17l-1.1 1a.8.8 0 0 0-.27.61.84.84 0 0 0 .27.62l3 2.71-3 2.72a.84.84 0 0 0 0 1.23l1.1 1a.89.89 0 0 0 .6.22.93.93 0 0 0 .47-.17l3.43-2.61 7.88 7.19a1.2 1.2 0 0 0 .76.36h.17a1 1 0 0 0 .49-.12l4.12-2a1.25 1.25 0 0 0 .71-1.1V5.23a1.26 1.26 0 0 0-.71-1.13zM17 16.47l-6-4.53 6-4.53z"></path></svg>
                <div class="py-8 px-6">
                  <h3 class="mb-3 block truncate text-xl font-semibold text-dark group-hover:text-white group-hover:scale-105 transition-all duration-500 text-center dark:text-white dark:group-hover:text-dark">
                    Visual Studio
                  </h3>
                  <p class="mb-6 text-base font-medium text-para  dark:text-zinc-400 group-hover:text-white  dark:group-hover:text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat officia beatae quisquam?</p>
                 
                </div>
              </div>
            </div>
         
            <div class="w-full px-4 lg:w-1/2 xl:w-1/4" data-aos="zoom-in-right" data-aos-delay="1000">
              <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800 dark:shadow-slate-600 dark:hover:bg-primary hover:bg-primary dark:hover:text-dark hover:text-white group group-hover:scale-95 transition-all duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-21 h-20 mt-5 mx-auto group-hover:scale-110 transition-all duration-400 dark:text-white dark:group-hover:text-dark" width="100"  viewBox="0 0 24 24"><path d="M18 7c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v10c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-3.333L22 17V7l-4 3.333V7zm-1.998 10H4V7h12l.001 4.999L16 12l.001.001.001 4.999z"></path></svg>
                <div class="py-8 px-6">
                  <h3 class="mb-3 block truncate text-xl font-semibold text-dark group-hover:text-white group-hover:scale-105 transition-all duration-500 text-center dark:text-white dark:group-hover:text-dark">
                    Video & Photo Editing
                  </h3>
                  <p class="mb-6 text-base font-medium text-para  dark:text-zinc-400 group-hover:text-white  dark:group-hover:text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat officia beatae quisquam?</p>
                 
                </div>
              </div>
            </div>
         
       
          </div>


       
    </div>
</section>
{{-- akhir akhir --}}

<!-- Contact Section Start -->
<section id="sloth" class="pt-36 pb-32 bg-slate-50 dark:bg-slate-600">
    <div class="container" >
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto mb-16 text-center" data-aos="zoom-in-up">
            <h4 class="text-lg text-primary font-bold mb-2">Contact</h4>
            <h2 class="font-bold text-dark mb-4 text-3xl dark:text-white">Contact Me</h2>
            <p class="text-md text-para font-medium dark:text-zinc-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde inventore molestiae ducimus commodi dignissimos. Dolore?</p>
        </div>

      <form>
        <div class="w-full lg:mx-auto lg:w-2/3">
          <div class="mb-8 w-full px-4">
            <label for="name" class="text-base font-bold text-primary" data-aos-delay="250" data-aos="zoom-in-up" >Name</label>
            <input type="text" id="name" class="w-full rounded-md bg-slate-200 p-3 border-none text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" data-aos-delay="250" data-aos="zoom-in-up" />
          </div>
          <div class="mb-8 w-full px-4">
            <label for="email" class="text-base font-bold text-primary"  data-aos-delay="500" data-aos="zoom-in-up">Email</label>
            <input type="email" id="email" class="w-full rounded-md bg-slate-200 p-3 border-none text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" data-aos-delay="500" data-aos="zoom-in-up"/>
          </div>
          <div class="mb-8 w-full px-4">
            <label for="message" class="text-base font-bold text-primary"  data-aos-delay="750" data-aos="zoom-in-up">Message</label>
            <textarea type="email" id="email" class="h-32 w-full rounded-md bg-slate-200 p-3 border-none text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" data-aos-delay="750" data-aos="zoom-in-up"></textarea>
          </div>
          <div class="w-full px-4">
            <button class="w-full rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-70 hover:shadow-lg" data-aos-delay="1000" data-aos="zoom-in-up">Send</button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- Contact Section End -->

        {{-- awal footer  --}}
        {{-- <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-warp">
                <div class="w-full px-4 mb-12">
                    <h2>H2FL</h2>
                    <h3>Contact Me</h3>
                    <p></p>
                    <p>JL. sekayu</p>
                </div>
            </div>
        </div>
        </footer> --}}
        {{-- akhir footer  --}}

            <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="mb-8 w-full px-4 font-medium text-slate-300 md:w-1/2">
              <h2 class="mb-5 text-4xl font-bold text-white">H2FL</h2>
              <h3 class="mb-2 text-2xl font-bold">Contact Me</h3>
              <p>Udinayat08@gmail.com</p>
              <p>Sekayu</p>
              <p>Musi Banyuasin</p>
            </div>
           
            <div class="mb-8 w-full px-4 md:w-1/2">
              <h3 class="mb-5 text-xl font-semibold text-white">Tautan</h3>
              <ul class="text-slate-300">
                <li>
                  <a href="#lust" class="mb-3 inline-block text-base hover:text-primary">Beranda</a>
                </li>
                <li>
                  <a href="#gluttony" class="mb-3 inline-block text-base hover:text-primary">Tentang Saya</a>
                </li>
                <li>
                  <a href="#envy" class="mb-3 inline-block text-base hover:text-primary">Portfolio</a>
                </li>
                <li>
                  <a href="#greed" class="mb-3 inline-block text-base hover:text-primary">Services</a>
                </li>
                <li>
                  <a href="#sloth" class="mb-3 inline-block text-base hover:text-primary">Contact</a>
                </li>
              </ul>
            </div>
          </div>
  
          <div class="w-full border-t border-slate-700 pt-10">
            <div class="mb-5 flex items-center justify-center">
              <!-- Youtube -->
              <a
                href="#"
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
                href="#"
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
  
              <!-- Twitter -->
              <a
                href="#"
                target="_blank"
                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Twitter</title>
                  <path
                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                  />
                </svg>
              </a>
  
              <!-- fb -->
              <a
                href="#"
                target="_blank"
                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
              <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
              </a>
  
              <!-- LinkedIn -->
              <a
                href="#"
                target="_blank"
                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>LinkedIn</title>
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                  />
                </svg>
              </a>
            </div>
            <p class="text-center text-xs font-medium text-slate-500">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> &nbsp All rights reserved is made by <a href="https://github.com/dins-yats" target="_blank" class="font-bold text-primary">Hayatudin</a>
            </p>
          </div>
        </div>
      </footer>
      <!-- Footer End -->
  
      <a href="#lust" class="fixed z-[9999] bottom-4 right-4 h-10 w-10 p-2 bg-primary rounded-full hover:animate-pulse hidden opacity-90" id="balikatas">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="opacity-50"><path d="M13.0001 7.82843V20H11.0001V7.82843L5.63614 13.1924L4.22192 11.7782L12.0001 4L19.7783 11.7782L18.3641 13.1924L13.0001 7.82843Z"></path></svg>
        </span>
      </a>
      <!-- Back to top Start -->
      {{-- <a href="#lust" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse" id="to-top">
        <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
      </a> --}}
      <!-- Back to top End -->
  

</body>
</html>