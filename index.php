<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<script src="https://cdn.tailwindcss.com"></script>
<meta charset="UTF-8">
<title>Mateo Šimičić</title>
<link rel="icon" type="image/png" href="slike/favicon.png" sizes="32x32">
<style type="text/tailwindcss">
  @layer utilities {
    .darken-50 {
      filter: brightness(0.5);
    }

    .terminal-text {
      font-family: monospace;
      white-space: pre;
      border-right: 2px solid black;
      padding-right: 5px;
      animation: blink 1s infinite step-end;
    }

    .terminal-textl {
      font-family: monospace;
      white-space: pre;
      text-align: left;
      border-right: 2px solid black;
      padding-right: 5px;
      animation: blink 1s infinite step-end;
    }
    @keyframes blink {
      50% {
        border-color: transparent;
      }
    }
  }
</style>

<div class="bg-white">
  <header class="absolute inset-x-0 top-0 z-70">
    <div class="mx-auto max-w-7xl">
      <div class="px-6 pt-6 lg:max-w-2xl lg:pl-8 lg:pr-0">
        <nav class="flex items-center justify-between lg:justify-start" aria-label="Global">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Mateo Šimičić</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
            </svg>
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 lg:hidden">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
          
        </nav>
      </div>
    </div>
  </header>

  <div class="relative">
    <div class="mx-auto max-w-7xl">
      <div class="relative z-10 pt-24 lg:w-full lg:max-w-2xl">
        <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
          <polygon points="0,0 90,0 50,100 0,100" />
        </svg>

        <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
          <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
            <div id="header-text" class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl terminal-text"></div>
            <p  class="mt-6 text-lg leading-8 text-gray-600">Student at Faculty of Organization and Informatics | Interested in Linux and Windows System Management | Have experience in Networking, Project Management, & Troubleshooting (Technical, Network, Hardware)</p>
            <div class="mt-10 flex items-center gap-x-6">
            <!-- ovdje gumbe planiram stavit -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="relative bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
  <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full" src="slike/hero-slika.jpg" alt="">
  <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-white bg-opacity-90"></div>
</div>

</div>

  </div>
</div>

<div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">This one is about me</h2>
    <p class="mt-6 text-lg leading-8 text-gray-600">Discover more about me in the forthcoming content</p>
  </div>
</div>

<div class="overflow-hidden bg-white py-24 sm:py-24">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
      <div class="lg:ml-auto lg:pl-4 lg:pt-4">
        <div class="lg:max-w-lg">
          <p id="header-text-about-me" class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl terminal-text"></p>
          <p class="mt-6 text-lg leading-8 text-gray-600">I am currently a student at the University of Zagreb, enrolled in the Faculty of Organization and Informatics. My studies are complemented by hands-on experience and skills in both Linux and Windows system management. I have experience as a student intern in networking, project management, and troubleshooting, covering technical issues, network configurations, and hardware problems. This combination of academic knowledge and practical experience equips me with a comprehensive skill set for addressing complex challenges in today’s technology-driven environment. I am eager to leverage these capabilities in my future career and continue expanding my expertise in the field.</p>
          <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
            
          </dl>
        </div>
      </div>
      <div class="flex items-start justify-end lg:order-first">
        <img src="slike/profil1.jpg" alt="Product screenshot" class="w-[36rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[45rem]" width="2432" height="1442">
      </div>
    </div>
  </div>
</div>

<div class="overflow-hidden bg-white py-24 sm:py-24">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
      <div class="lg:pr-4 lg:pt-4">
        <div class="lg:max-w-lg">
          <p id="header-text-about-me-education" class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl terminal-textl"> </p>
          <p class="mt-6 text-lg leading-8 text-gray-600">Explore my educational journey and how it has shaped my development into the professional I am today.</p>
          <div class="mt-8">
          <div class="flow-root">
  <ul role="list" class="-mb-8">
    <li>
      <div class="relative pb-8">
        <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
        <div class="relative flex space-x-3">
          <div>
          <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
              <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
            </span>
          </div>
          <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
            <div>
              <p class="text-sm text-gray-500">Graduated from <a href="#" class="font-medium text-gray-900">Elektrotehnička i ekonomska škola Nova Gradiška</a> as <a href="#" class="font-medium text-gray-900">Computer Technician</a></p>
            </div>
            <div class="whitespace-nowrap text-right text-sm text-gray-500">
              <time datetime="2020-09-20">May 2020</time>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="relative pb-8">
      <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
        <div class="relative flex space-x-3">
          <div>
            <span class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
            <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
              </svg>
            </span>
          </div>
          <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
            <div>
              <p class="text-sm text-gray-500">Applied to <a href="https://www.foi.unizg.hr/" class="font-medium text-gray-900">Faculty of Organization and Informatics</a></p>
            </div>
            <div class="whitespace-nowrap text-right text-sm text-gray-500">
              <time datetime="2020-09-22">Jun 2021</time>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="relative pb-8">
        <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
        <div class="relative flex space-x-3">
          <div>
          <span class="h-8 w-8 rounded-full bg-yellow-500 flex items-center justify-center ring-8 ring-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-white">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
            </svg>
          </span>
          </div>
          <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
            <div>
              <p class="text-sm text-gray-500">Student work at <a href="https://isv.hr/hr" class="font-medium text-gray-900">Informatički servis Vuković </a></p>
            </div>
            <div class="whitespace-nowrap text-right text-sm text-gray-500">
              <time datetime="2020-09-28">May to Aug 2024</time>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="relative pb-8">        
        <div class="relative flex space-x-3">
          <div>
          <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
              <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
            </span>
          </div>
          <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
            <div>
              <p class="text-sm text-gray-500">To be filled from <a href="#" class="font-medium text-gray-900">Faculty of Organization and Informatics</a> as <a href="#" class="font-medium text-gray-900">bacc.inf.</a></p>
            </div>
            <div class="whitespace-nowrap text-right text-sm text-gray-500">
              <time datetime="2020-09-30">Sep 2024</time>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
 </div>

</div>
      </div>
      <img src="slike/foi-slika.jpg" alt="Product screenshot" class="w-[36rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[45rem] md:-ml-4 lg:ml-0" width="2432" height="1442">
    </div>
  </div>
</div>

<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <div>
      <p id="header-text-about-me-skillsets" class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl terminal-textl"> </p>
        <p class="mt-6 text-base leading-7 text-gray-600">Here is an overview of the skill sets and technologies I am knowledgeable about and continually strive to learn more about each day.</p>
      </div>
      <dl class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:gap-y-16">
        <div class="relative pl-9">
          <dt class="font-semibold text-gray-900">
            <svg class="absolute left-0 top-1 h-5 w-5 " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M12 9a1 1 0 0 1-1-1V3c0-.552.45-1.007.997-.93a7.004 7.004 0 0 1 5.933 5.933c.078.547-.378.997-.93.997h-5Z" />
             <path d="M8.003 4.07C8.55 3.994 9 4.449 9 5v5a1 1 0 0 0 1 1h5c.552 0 1.008.45.93.997A7.001 7.001 0 0 1 2 11a7.002 7.002 0 0 1 6.003-6.93Z" />
            </svg>
            ITIL & ITSM
          </dt>
          
          <dd class="mt-2">Understanding of modern organizational operations and the role of IT services, applying ITIL standards effectively. I can comprehend and implement ITIL processes throughout the service lifecycle and am prepared for industry certification in IT service management.</dd>
        </div>
        <div class="relative pl-9">
          <dt class="font-semibold text-gray-900">
            <svg class="absolute left-0 top-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M1 12.5A4.5 4.5 0 0 0 5.5 17H15a4 4 0 0 0 1.866-7.539 3.504 3.504 0 0 0-4.504-4.272A4.5 4.5 0 0 0 4.06 8.235 4.502 4.502 0 0 0 1 12.5Z" />
            </svg>
            Cloud Technologies
          </dt>
          <dd class="mt-2">Foundational understanding of cloud technologies, including key concepts, services, and deployment models. I am familiar with the basics of cloud architecture, providers, and how to leverage cloud solutions for various business needs.</dd>
        </div>
        <div class="relative pl-9">
          <dt class="font-semibold text-gray-900">
            <svg class="absolute left-0 top-1 h-5 w-5 " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M4.464 3.162A2 2 0 0 1 6.28 2h7.44a2 2 0 0 1 1.816 1.162l1.154 2.5c.067.145.115.291.145.438A3.508 3.508 0 0 0 16 6H4c-.288 0-.568.035-.835.1.03-.147.078-.293.145-.438l1.154-2.5Z" />
            <path fill-rule="evenodd" d="M2 9.5a2 2 0 0 1 2-2h12a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Zm13.24 0a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V9.5Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V9.5a.75.75 0 0 0-.75-.75h-.01ZM2 15a2 2 0 0 1 2-2h12a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Zm13.24 0a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z" clip-rule="evenodd" />
            </svg>
            Hardware
          </dt>
          <dd class="mt-2">Solid understanding of both personal computers and servers, including their hardware, operating systems, and configuration. My expertise encompasses troubleshooting, maintenance, and optimizing performance for both types of systems.</dd>
        </div>
        <div class="relative pl-9">
          <dt class="font-semibold text-gray-900">
            <svg class="absolute left-0 top-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M6.28 5.22a.75.75 0 0 1 0 1.06L2.56 10l3.72 3.72a.75.75 0 0 1-1.06 1.06L.97 10.53a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Zm7.44 0a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L17.44 10l-3.72-3.72a.75.75 0 0 1 0-1.06ZM11.377 2.011a.75.75 0 0 1 .612.867l-2.5 14.5a.75.75 0 0 1-1.478-.255l2.5-14.5a.75.75 0 0 1 .866-.612Z" clip-rule="evenodd" />
            </svg>
            HTML & CSS
          </dt>
          <dd class="mt-2">Understanding of HTML and CSS, including the ability to create and style web pages. This includes knowledge of fundamental HTML elements, CSS properties, and how to use them to structure and design websites.</dd>
        </div>
        <div class="relative pl-9">
          <dt class="font-semibold text-gray-900">
            <svg class="absolute left-0 top-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M6.28 5.22a.75.75 0 0 1 0 1.06L2.56 10l3.72 3.72a.75.75 0 0 1-1.06 1.06L.97 10.53a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Zm7.44 0a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L17.44 10l-3.72-3.72a.75.75 0 0 1 0-1.06ZM11.377 2.011a.75.75 0 0 1 .612.867l-2.5 14.5a.75.75 0 0 1-1.478-.255l2.5-14.5a.75.75 0 0 1 .866-.612Z" clip-rule="evenodd" />
            </svg>
            PHP
          </dt>
          <dd class="mt-2">Basic understanding of PHP, including the ability to write simple scripts and integrate PHP with HTML to create dynamic web pages. This includes knowledge of fundamental PHP syntax, variables, and basic control structures.</dd>
        </div>
        <div class="relative pl-9">
          <dt class="font-semibold text-gray-900">
            <svg class="absolute left-0 top-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M3.25 3A2.25 2.25 0 0 0 1 5.25v9.5A2.25 2.25 0 0 0 3.25 17h13.5A2.25 2.25 0 0 0 19 14.75v-9.5A2.25 2.25 0 0 0 16.75 3H3.25Zm.943 8.752a.75.75 0 0 1 .055-1.06L6.128 9l-1.88-1.693a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 0 1-1.06-.055ZM9.75 10.25a.75.75 0 0 0 0 1.5h2.5a.75.75 0 0 0 0-1.5h-2.5Z" clip-rule="evenodd" />
            </svg>
            Windows & Linux
          </dt>
          <dd class="mt-2">Understanding of managing both Windows and Linux systems, including tasks such as installation, configuration, and troubleshooting. This knowledge covers essential commands, system administration practices, and basic scripting for both operating systems.</dd>
        </div>
        
    </div>
  </div>
</div>

<footer class="bg-white">
  <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
    <div class="flex justify-center space-x-6 md:order-2">
      <a href="https://www.linkedin.com/in/mateo-%C5%A1imi%C4%8Di%C4%87-4287a5241/" class="text-gray-400 hover:text-gray-500">
        <span class="sr-only">LinkedIn</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M21,3h-18v18h18zM9,17h-2.523v-7h2.523zM7.694,8.717c-0.771,0 -1.286,-0.514 -1.286,-1.2c0,-0.686 0.514,-1.2 1.371,-1.2c0.771,0 1.286,0.514 1.286,1.2c0,0.686 -0.514,1.2 -1.371,1.2zM18,17h-2.442v-3.826c0,-1.058 -0.651,-1.302 -0.895,-1.302c-0.244,0 -1.058,0.163 -1.058,1.302c0,0.163 0,3.826 0,3.826h-2.523v-7h2.523v0.977c0.325,-0.57 0.976,-0.977 2.197,-0.977c1.221,0 2.198,0.977 2.198,3.174z"></path>
        </svg>
      </a>
      <a href="#" class="text-gray-400 hover:text-gray-500">
        <span class="sr-only">GitHub</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
        </svg>
      </a>
    </div>
    <div class="mt-8 md:order-1 md:mt-0">
      <p class="text-center text-xs leading-5 text-gray-500">&copy; 2024 Mateo Šimičić, All rights reserved.</p>
    </div>
  </div>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const text = '~ Mateo Šimičić';
    let index = 0;
    const speed = 150; 

    function typeEffect() {
      if (index < text.length) {
        document.getElementById('header-text').textContent += text.charAt(index);
        index++;
        setTimeout(typeEffect, speed);
      }
    }

    typeEffect();
  });

  document.addEventListener('DOMContentLoaded', function () {
    const text = '~ Who am i?';
    let index = 0;
    const speed = 150; 

    function typeEffect() {
      if (index < text.length) {
        document.getElementById('header-text-about-me').textContent += text.charAt(index);
        index++;
        setTimeout(typeEffect, speed);
      }
    }

    typeEffect();
  });

  document.addEventListener('DOMContentLoaded', function () {
    const text = '~ Education';
    let index = 0;
    const speed = 150; 

    function typeEffect() {
      if (index < text.length) {
        document.getElementById('header-text-about-me-education').textContent += text.charAt(index);
        index++;
        setTimeout(typeEffect, speed);
      }
    }

    typeEffect();
  });

  document.addEventListener('DOMContentLoaded', function () {
    const text = '~ My skillsets';
    let index = 0;
    const speed = 150; 

    function typeEffect() {
      if (index < text.length) {
        document.getElementById('header-text-about-me-skillsets').textContent += text.charAt(index);
        index++;
        setTimeout(typeEffect, speed);
      }
    }

    typeEffect();
  });
</script>
