<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <link href="./assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <header>
      <nav class="bg-black border-gray-200 px-4 lg:px-6 py-2.5">
        <div
          class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl"
        >
          <a href="https://flowbite.com" class="flex items-center">
            <img
              src="./assets/images/soulsurf_logo_white.svg"
              class="mr-3 h-6 sm:h-9"
              alt="Flowbite Logo"
            />
          </a>
          <div class="flex items-center justify-center lg:order-2">
            <!-- lang -->
            <div class="flex">
              <div
                type="button"
                data-modal-target="crypto-modal"
                data-modal-toggle="crypto-modal"
                class="text-white cursor-pointer font-medium text-sm text-center inline-flex items-center dark:text-white"
              >
                <div class="hidden lg:flex">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6 mr-1"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"
                    />
                  </svg>

                  En
                  <span class="ml-2">USD</span>
                </div>
              </div>

              <!-- Main modal -->
              <div
                id="crypto-modal"
                tabindex="-1"
                aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
              >
                <div class="relative w-full max-w-6xl max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow">
                    <button
                      type="button"
                      class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                      data-modal-hide="crypto-modal"
                    >
                      <svg
                        class="w-3 h-3"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 14 14"
                      >
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                        />
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                    <!-- Modal header -->
                    <div class="px-6 py-4 border-b rounded-t">
                      <h3
                        class="text-base font-semibold text-black lg:text-xl dark:text-black"
                      >
                        Change language & currency
                      </h3>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6">
                      <div class="flex flex-wrap gap-4">
                        <button
                          type="button"
                          class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2"
                        >
                          <img class="mr-2" src="./assets/icons/en-flag.svg" />
                          English
                        </button>
                        <button
                          type="button"
                          class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2"
                        >
                          <img class="mr-2" src="./assets/icons/de-flag.svg" />
                          Deutsch
                        </button>
                        <button
                          type="button"
                          class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2"
                        >
                          <img class="mr-2" src="./assets/icons/nl-flag.svg" />
                          Nederlands
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- end -->

              <a
                href="#"
                class="hidden lg:block text-white bg-primary-700 hover:bg-primary-800 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                >Register As School</a
              >
              <a
                href="#"
                class="hidden lg:flex justify-center items-center w-[142px] h-10 bg-sky-950 rounded-md w-11 text-white text-base font-bold"
                >Log in</a
              >
            </div>
            <button
              data-collapse-toggle="mobile-menu-2"
              type="button"
              class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
              aria-controls="mobile-menu-2"
              aria-expanded="false"
            >
              <span class="sr-only">Open main menu</span>
              <svg
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <svg
                class="hidden w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
          </div>
          <div
            class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
            id="mobile-menu-2"
          >
            <ul
              class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0"
            >
              <li>
                <a
                  href="#"
                  class="text-white text-base font-normal"
                  aria-current="page"
                  >Surfs</a
                >
              </li>
              <li>
                <a href="#" class="text-white text-base font-normal">Yoga</a>
              </li>
              <li>
                <a href="#" class="text-white text-base font-normal"
                  >About Us</a
                >
              </li>
              <li>
                <a href="#" class="text-white text-base font-normal">FAQ</a>
              </li>
            </ul>
            <div class="flex lg:hidden">
              <div
                type="button"
                data-modal-target="crypto-modal"
                data-modal-toggle="crypto-modal"
                class="text-white cursor-pointer font-medium text-sm text-center inline-flex items-center dark:text-white"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6 mr-1"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"
                  />
                </svg>

                En
                <span class="ml-2">USD</span>
              </div>

              <a
                href="#"
                class="text-white bg-primary-700 hover:bg-primary-800 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                >Register As School</a
              >
              <a
                href="#"
                class="flex justify-center items-center w-[142px] h-10 bg-sky-950 rounded-md w-11 text-white text-base font-bold"
                >Log in</a
              >
            </div>
          </div>
        </div>
      </nav>
    </header>

    <section class="bg-center h-full xl:h-[780px] bg-black">
      <div
        class="px-4 mx-auto text-center py-20 lg:py-56 mx-auto max-w-screen-xl"
      >
        <h1
          class="custom-font mb-4 text-left text-4xl font-normal font-400 tracking-tight leading-none text-white md:text-5xl lg:text-6xl"
        >
          It's Time For New Experince
        </h1>
        <p
          class="mb-8 text-base text-left font-normal text-gray-300 lg:text-base"
        >
          "Ride the Waves of Excitement: Join our surf site for expert guidance
          and tailored programs that cater to all skill levels. Embrace the
          thrill of surfing in breathtaking locations while prioritizing safety
          and creating lifelong memories."
        </p>
        <div
          class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4"
        >
          <a
            href="#"
            class="inline-flex justify-center hover:text-gray-900 items-center py-2 px-10 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400"
          >
            Explore
          </a>
        </div>
      </div>
      <!-- filter -->
      <div class="mx-auto max-w-screen-xl px-4">
        <div>
          <h1
            class="text-base text-normal Helvetica text-center text-white mb-8"
          >
            Why Should You Choose Us?
          </h1>
          <div class="flex justify-center items-center gap-10 flex-wrap">
            <div class="flex items-center justify-center">
              <img class="mr-4" src="./assets/icons/surficon.svg" />
              <span class="text-base text-normal Helvetica text-white"
                >Exceptional Surfing Expertise</span
              >
            </div>
            <div class="flex items-center justify-center">
              <img class="mr-4" src="./assets/icons/safe.svg" />
              <span class="text-base text-normal Helvetica text-white"
                >Exceptional Surfing Expertise</span
              >
            </div>
            <div class="flex items-center justify-center">
              <img class="mr-4" src="./assets/icons/community.svg" />
              <span class="text-base text-normal Helvetica text-white"
                >Exceptional Surfing Expertise</span
              >
            </div>
            <div class="flex items-center justify-center">
              <img class="mr-4" src="./assets/icons/surfprogram.svg" />
              <span class="text-base text-normal Helvetica text-white"
                >Exceptional Surfing Expertise</span
              >
            </div>
          </div>
          <div
            class="filters grid grid-cols-1 gap-5 sm:gap-0 sm:grid-cols-3 justify-between items-center mt-5"
          >
            <div class="date relative">
              <label
                for="countries"
                class="hidden block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Select an option</label
              >
              <div
                class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="19"
                  height="19"
                  viewBox="0 0 19 19"
                  fill="none"
                >
                  <g opacity="0.5">
                    <path
                      d="M14.5382 13.7464L9.5 18.7845L4.46186 13.7464C1.67938 10.9639 1.67938 6.4526 4.46186 3.67012C7.24435 0.88763 11.7556 0.88763 14.5382 3.67012C17.3206 6.4526 17.3206 10.9639 14.5382 13.7464ZM9.5 10.2916C10.3745 10.2916 11.0833 9.58273 11.0833 8.70825C11.0833 7.8338 10.3745 7.12492 9.5 7.12492C8.62552 7.12492 7.91667 7.8338 7.91667 8.70825C7.91667 9.58273 8.62552 10.2916 9.5 10.2916Z"
                      fill="black"
                    />
                  </g>
                </svg>
              </div>
              <select
                id="countries"
                class="filter-color pl-10 selector bg-white border border-gray-300 text-sm rounded-lg rounded-r-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
              >
                <option selected>Choose a country</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
              </select>
            </div>
            <div class="price relative">
              <label
                for="countries"
                class="hidden block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Select Price Per Package</label
              >
              <div
                class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <g opacity="0.5">
                    <path
                      d="M12.0049 22.0029C6.48204 22.0029 2.00488 17.5258 2.00488 12.0029C2.00488 6.48008 6.48204 2.00293 12.0049 2.00293C17.5277 2.00293 22.0049 6.48008 22.0049 12.0029C22.0049 17.5258 17.5277 22.0029 12.0049 22.0029ZM8.50488 14.0029V16.0029H11.0049V18.0029H13.0049V16.0029H14.0049C15.3856 16.0029 16.5049 14.8836 16.5049 13.5029C16.5049 12.1222 15.3856 11.0029 14.0049 11.0029H10.0049C9.72874 11.0029 9.50488 10.7791 9.50488 10.5029C9.50488 10.2268 9.72874 10.0029 10.0049 10.0029H15.5049V8.00293H13.0049V6.00293H11.0049V8.00293H10.0049C8.62417 8.00293 7.50488 9.12222 7.50488 10.5029C7.50488 11.8836 8.62417 13.0029 10.0049 13.0029H14.0049C14.281 13.0029 14.5049 13.2268 14.5049 13.5029C14.5049 13.7791 14.281 14.0029 14.0049 14.0029H8.50488Z"
                      fill="black"
                    />
                  </g>
                </svg>
              </div>
              <select
                id="prices"
                class="filter-color pl-10 selector bg-white border border-gray-300 text-sm rounded-lg rounded-r-none rounded-l-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
              >
                <option selected>Select Price Per Package</option>
                <option value="100">100</option>
                <option value="200">200</option>
                <option value="300">300</option>
                <option value="400">400</option>
              </select>
            </div>
            <div class="relative sm:max-w-sm">
              <div
                class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none"
              >
                <svg
                  class="w-4 h-4 text-gray-500 dark:text-gray-400"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                  />
                </svg>
              </div>

              <input
                datepicker
                datepicker-orientation="bottom right"
                type="text"
                class="bg-white border rounded-l-none border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                placeholder="Select date"
              />

              <div
                class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <g opacity="0.5">
                    <path d="M12 16L6 10H18L12 16Z" fill="black" />
                  </g>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end -->
    </section>

    <div class="mx-auto max-w-screen-xl p-4">
      <!-- Top country -->
      <div class="flex flex-col justify-center items-center mt-10">
        <h1 class="text-black text-base font-normal text-center mt-24 mb-16">
          Top Country
        </h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          <div
            class="max-w-[292px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/australia.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
          <div
            class="max-w-[292px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/australia.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
          <div
            class="max-w-[292px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/australia.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
          <div
            class="max-w-[292px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/australia.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
          <div
            class="max-w-[396px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/morocco.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
          <div
            class="max-w-[396px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/morocco.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
          <div
            class="max-w-[396px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/morocco.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
          <div
            class="max-w-[292px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/australia.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
          <div
            class="max-w-[292px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/australia.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
          <div
            class="max-w-[292px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/australia.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
          <div
            class="max-w-[292px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/australia.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
          <div
            class="max-w-[396px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/morocco.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
          <div
            class="max-w-[396px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/morocco.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
          <div
            class="max-w-[396px] h-[152px] rounded-[10px] flex flex-col gap-2 justify-center items-center bg-center bg-no-repeat bg-[url('./assets/morocco.png')]"
          >
            <h1 class="text-white text-base font-bold">Australia</h1>
            <p
              class="text-white opacity-80 text-center text-xs font-normal px-6"
            >
              Famous for its long coastline and consistent waves, Australia
              offers numerous surf camps along its eastern and western coasts.
            </p>
          </div>
        </div>
      </div>
      <!-- end -->
      <div class="mx-auto max-w-screen-xl p-4">
        <!-- surf background -->
        <div class="mt-32 p-4 w-full h-auto">
          <img src="./assets/Intersect.png" />
        </div>
        <!-- end -->
        <!-- rectangle images -->
        <div class="flex flex-wrap justify-between items-center mt-24">
          <div class="w-[604px] h-[583px] relative overflow-hidden">
            <div class="top-image">
              <img
                class="w-full h-full object-cover"
                src="./assets/images/Rectangle_top.png"
              />
            </div>
            <div class="mid-image absolute -right-7 bottom-36">
              <img
                class="w-full h-full object-cover"
                src="./assets/images/Rectangle_top.png"
              />
            </div>
            <div class="bottom-img absolute left-6 -bottom-7">
              <img
                class="w-full h-full object-cover"
                src="./assets/images/Rectangle_top.png"
              />
            </div>
          </div>
          <div class="flex w-full xl:w-2/5 flex-col gap-10">
            <h1 class="text-black text-5xl font-bold">
              Catch the Wave of Adventure and Bliss
            </h1>
            <p class="text-black text-xl font-normal leading-7 tracking-tight">
              🌴 Imagine waking up to the gentle sounds of the ocean, the sun
              kissing your skin, and the thrill of riding the perfect wave.
              Welcome to our world – where every day is an opportunity to dive
              into the world of surf, sun, and pure exhilaration.
            </p>
            <button
              class="w-36 h-10 bg-sky-950 rounded-md text-white text-base font-normal leading-normal"
            >
              Discover
            </button>
          </div>
        </div>
        <!-- end -->
        <!-- 📸 Capture the Moments -->
        <h1 class="text-center mt-52 mb-16 text-base Inter">
          📸 Capture the Moments
        </h1>
        <div class="flex items-center gap-6 capture">
          <div class="w-[188px] h-[743px]">
            <img
              class="w-full h-full object-cover"
              src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;h=500&amp;ixid=MnwxfDB8MXxyYW5kb218MHx8bGFuZHNjYXBlfHx8fHx8MTY2MjEyMDE3MQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;utm_campaign=api-credit&amp;utm_medium=referral&amp;utm_source=unsplash_source&amp;w=500"
            />
          </div>
          <div class="w-[188px] h-[659px]">
            <img
              class="w-full h-full object-cover"
              src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;h=500&amp;ixid=MnwxfDB8MXxyYW5kb218MHx8bGFuZHNjYXBlfHx8fHx8MTY2MjEyMDE3MQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;utm_campaign=api-credit&amp;utm_medium=referral&amp;utm_source=unsplash_source&amp;w=500"
            />
          </div>
          <div class="w-[188px] h-[801px]">
            <img
              class="w-full h-full object-cover"
              src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;h=500&amp;ixid=MnwxfDB8MXxyYW5kb218MHx8bGFuZHNjYXBlfHx8fHx8MTY2MjEyMDE3MQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;utm_campaign=api-credit&amp;utm_medium=referral&amp;utm_source=unsplash_source&amp;w=500"
            />
          </div>
          <div class="w-[188px] h-[743px]">
            <img
              class="w-full h-full object-cover"
              src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;h=500&amp;ixid=MnwxfDB8MXxyYW5kb218MHx8bGFuZHNjYXBlfHx8fHx8MTY2MjEyMDE3MQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;utm_campaign=api-credit&amp;utm_medium=referral&amp;utm_source=unsplash_source&amp;w=500"
            />
          </div>
          <div class="w-[188px] h-[659px]">
            <img
              class="w-full h-full object-cover"
              src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;h=500&amp;ixid=MnwxfDB8MXxyYW5kb218MHx8bGFuZHNjYXBlfHx8fHx8MTY2MjEyMDE3MQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;utm_campaign=api-credit&amp;utm_medium=referral&amp;utm_source=unsplash_source&amp;w=500"
            />
          </div>
          <div class="w-[188px] h-[801px]">
            <img
              class="w-full h-full object-cover"
              src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;h=500&amp;ixid=MnwxfDB8MXxyYW5kb218MHx8bGFuZHNjYXBlfHx8fHx8MTY2MjEyMDE3MQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;utm_campaign=api-credit&amp;utm_medium=referral&amp;utm_source=unsplash_source&amp;w=500"
            />
          </div>
        </div>
        <!-- end -->
        <!-- surfs up text -->
        <div class="Inter text-justify my-52 overflow-hidden">
          “🏄‍♀️ Surf's Up: It's time to embrace the thrill of the ocean and
          <img src="./assets/people_2.png" class="inline h-24" /> discover the
          surfer within you. Whether you're a newbie or a seasoned shredder,
          ourcamp offers something for everyone.”<img
            src="./assets/people_1.png"
            class="inline h-24"
          />
        </div>
        <!-- end -->
        <!-- catch wave -->
        <div class="flex mt-32 gap-24 flex-wrap justify-center">
          <div class="flex w-full xl:w-2/5 flex-col gap-10">
            <h1 class="text-black text-5xl font-bold">
              Catch the Wave of Adventure and Bliss
            </h1>
            <p class="text-black text-xl font-normal leading-7 tracking-tight">
              🌴 Imagine waking up to the gentle sounds of the ocean, the sun
              kissing your skin, and the thrill of riding the perfect wave.
              Welcome to our world – where every day is an opportunity to dive
              into the world of surf, sun, and pure exhilaration.
            </p>
            <button
              class="w-36 h-10 bg-sky-950 rounded-md text-white text-base font-normal leading-normal"
            >
              Discover
            </button>
          </div>
          <div class="w-[604px] h-[583px] relative overflow-hidden">
            <div class="top-image">
              <img
                class="w-full h-full object-cover"
                src="./assets/images/Rectangle_top.png"
              />
            </div>
            <div class="mid-image absolute -right-7 bottom-36">
              <img
                class="w-full h-full object-cover"
                src="./assets/images/Rectangle_top.png"
              />
            </div>
            <div class="bottom-img absolute left-6 -bottom-7">
              <img
                class="w-full h-full object-cover"
                src="./assets/images/Rectangle_top.png"
              />
            </div>
          </div>
        </div>
        <!-- end -->
      </div>
    </div>
    <!-- background with text -->
    <section
      class="flex w-full h-[30vh] md:h-[50vh] lg:h-screen justify-end items-end bg-cover bg-center bg-no-repeat bg-[url('./assets/bg.png')] bg-blend-multiply"
    >
      <div class="text-right mr-10 mb-6 lg:mr-72 lg:mb-28">
        <h5 class="mb-4 text-base lg:text-xl text-white">“Seize the Day”</h5>
        <p class="mb-8 Helvetica max-w-[796px] text-white text-lg lg:text-5xl">
          “Adventure awaits, and the waves are calling. It's time to embark on a
          journey that will awaken your spirit and redefine your definition of
          fun”
        </p>
      </div>
    </section>
    <!-- end -->
    <!-- about us -->
    <div class="mx-auto max-w-screen-xl mt-52 p-4">
      <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
        <h1 class="text-6xl md:text-9xl Helvetica font-bold dark-blue">
          About Us
        </h1>
        <p class="LucidaGrande text-justify">
          We love and enjoy surfing, by no means we are professional or advanced
          surfers ourselves, but we truly believe that the best surfer is the
          one who is having the most fun. Here we make it possible to book a
          surf camp and create your own magical surfing experience, days spent
          on the beach are never wasted. Our goal is to make it easy for you to
          start going on surfing holidays or to try new spots you haven't been
          to yet.
        </p>
      </div>
      <div class="flex flex-wrap justify-between mt-14">
        <div class="flex flex-col items-end Helvetica">
          <div class="green text-6xl font-bold">+500</div>
          <div class="color-black font-normal font-base">Surfers</div>
        </div>
        <div class="flex flex-col items-end Helvetica">
          <div class="green text-6xl font-bold">+500</div>
          <div class="color-black font-normal font-base">Surfers</div>
        </div>
        <div class="flex flex-col items-end Helvetica">
          <div class="green text-6xl font-bold">+500</div>
          <div class="color-black font-normal font-base">Surfers</div>
        </div>
        <div class="flex flex-col items-end Helvetica">
          <div class="green text-6xl font-bold">+500</div>
          <div class="color-black font-normal font-base">Surfers</div>
        </div>
      </div>
    </div>
    <!-- end -->
    <!-- faq -->
    <div class="mx-auto max-w-screen-xl p-4">
      <h1 class="text-xl Helvetica font-bold text-center mt-52 mb-6">
        Frequently Asked Questions
      </h1>
      <div
        id="accordion-flush"
        data-accordion="collapse"
        data-active-classes="bg-white dark:bg-white-900 text-white-900 dark:text-black"
        data-inactive-classes="text-gray-500 dark:text-gray-400"
        class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-between w-full"
      >
        <div>
          <h2 id="accordion-flush-heading-1 ">
            <button
              type="button"
              class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
              data-accordion-target="#accordion-flush-body-1"
              aria-expanded="false"
              aria-controls="accordion-flush-body-1"
            >
              <span>What is Flowbite?</span>
              <svg
                data-accordion-icon
                class="w-3 h-3 rotate-180 shrink-0"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div
            id="accordion-flush-body-1"
            class="hidden"
            aria-labelledby="accordion-flush-heading-1"
          >
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
              <p class="mb-2 text-gray-500 dark:text-gray-400">
                Flowbite is an open-source library of interactive components
                built on top of Tailwind CSS including buttons, dropdowns,
                modals, navbars, and more.
              </p>
              <p class="text-gray-500 dark:text-gray-400">
                Check out this guide to learn how to
                <a
                  href="/docs/getting-started/introduction/"
                  class="text-blue-600 dark:text-blue-500 hover:underline"
                  >get started</a
                >
                and start developing websites even faster with components on top
                of Tailwind CSS.
              </p>
            </div>
          </div>
        </div>
        <div>
          <h2 id="accordion-flush-heading-2">
            <button
              type="button"
              class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
              data-accordion-target="#accordion-flush-body-2"
              aria-expanded="false"
              aria-controls="accordion-flush-body-2"
            >
              <span>Is there a Figma file available?</span>
              <svg
                data-accordion-icon
                class="w-3 h-3 rotate-180 shrink-0"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div
            id="accordion-flush-body-2"
            class="hidden"
            aria-labelledby="accordion-flush-heading-2"
          >
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
              <p class="mb-2 text-gray-500 dark:text-gray-400">
                Flowbite is first conceptualized and designed using the Figma
                software so everything you see in the library has a design
                equivalent in our Figma file.
              </p>
              <p class="text-gray-500 dark:text-gray-400">
                Check out the
                <a
                  href="https://flowbite.com/figma/"
                  class="text-blue-600 dark:text-blue-500 hover:underline"
                  >Figma design system</a
                >
                based on the utility classes from Tailwind CSS and components
                from Flowbite.
              </p>
            </div>
          </div>
        </div>
        <div>
          <h2 id="accordion-flush-heading-3">
            <button
              type="button"
              class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
              data-accordion-target="#accordion-flush-body-3"
              aria-expanded="false"
              aria-controls="accordion-flush-body-3"
            >
              <span
                >What are the differences between Flowbite and Tailwind
                UI?</span
              >
              <svg
                data-accordion-icon
                class="w-3 h-3 rotate-180 shrink-0"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div
            id="accordion-flush-body-3"
            class="hidden"
            aria-labelledby="accordion-flush-heading-3"
          >
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
              <p class="mb-2 text-gray-500 dark:text-gray-400">
                The main difference is that the core components from Flowbite
                are open source under the MIT license, whereas Tailwind UI is a
                paid product. Another difference is that Flowbite relies on
                smaller and standalone components, whereas Tailwind UI offers
                sections of pages.
              </p>
              <p class="mb-2 text-gray-500 dark:text-gray-400">
                However, we actually recommend using both Flowbite, Flowbite
                Pro, and even Tailwind UI as there is no technical reason
                stopping you from using the best of two worlds.
              </p>
              <p class="mb-2 text-gray-500 dark:text-gray-400">
                Learn more about these technologies:
              </p>
              <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                <li>
                  <a
                    href="https://flowbite.com/pro/"
                    class="text-blue-600 dark:text-blue-500 hover:underline"
                    >Flowbite Pro</a
                  >
                </li>
                <li>
                  <a
                    href="https://tailwindui.com/"
                    rel="nofollow"
                    class="text-blue-600 dark:text-blue-500 hover:underline"
                    >Tailwind UI</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end -->
    <!-- contact -->
    <div
      class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center mx-auto max-w-screen-xl mt-48 p-4"
    >
      <div class="flex flex-col">
        <h1 class="text-6xl lg:text-9xl font-bold Helvetica text-left">
          Contact
        </h1>
        <p class="Helvetica text-base text-left">
          Feel free to reach out to us at support@soulsurf.io, or talk to us on
          our social media accounts below:
        </p>
        <div class="flex gap-10 mt-10 items-center justify-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
          >
            <path
              d="M13.0281 2.00098C14.1535 2.00284 14.7238 2.00879 15.2166 2.02346L15.4107 2.02981C15.6349 2.03778 15.8561 2.04778 16.1228 2.06028C17.1869 2.10944 17.9128 2.27778 18.5503 2.52528C19.2094 2.77944 19.7661 3.12278 20.3219 3.67861C20.8769 4.23444 21.2203 4.79278 21.4753 5.45028C21.7219 6.08694 21.8903 6.81361 21.9403 7.87778C21.9522 8.14444 21.9618 8.36564 21.9697 8.58989L21.976 8.78397C21.9906 9.27672 21.9973 9.8471 21.9994 10.9725L22.0002 11.7182C22.0003 11.8093 22.0003 11.9033 22.0003 12.0003L22.0002 12.2824L21.9996 13.0281C21.9977 14.1535 21.9918 14.7238 21.9771 15.2166L21.9707 15.4107C21.9628 15.6349 21.9528 15.8561 21.9403 16.1228C21.8911 17.1869 21.7219 17.9128 21.4753 18.5503C21.2211 19.2094 20.8769 19.7661 20.3219 20.3219C19.7661 20.8769 19.2069 21.2203 18.5503 21.4753C17.9128 21.7219 17.1869 21.8903 16.1228 21.9403C15.8561 21.9522 15.6349 21.9618 15.4107 21.9697L15.2166 21.976C14.7238 21.9906 14.1535 21.9973 13.0281 21.9994L12.2824 22.0002C12.1913 22.0003 12.0973 22.0003 12.0003 22.0003L11.7182 22.0002L10.9725 21.9996C9.8471 21.9977 9.27672 21.9918 8.78397 21.9771L8.58989 21.9707C8.36564 21.9628 8.14444 21.9528 7.87778 21.9403C6.81361 21.8911 6.08861 21.7219 5.45028 21.4753C4.79194 21.2211 4.23444 20.8769 3.67861 20.3219C3.12278 19.7661 2.78028 19.2069 2.52528 18.5503C2.27778 17.9128 2.11028 17.1869 2.06028 16.1228C2.0484 15.8561 2.03871 15.6349 2.03086 15.4107L2.02457 15.2166C2.00994 14.7238 2.00327 14.1535 2.00111 13.0281L2.00098 10.9725C2.00284 9.8471 2.00879 9.27672 2.02346 8.78397L2.02981 8.58989C2.03778 8.36564 2.04778 8.14444 2.06028 7.87778C2.10944 6.81278 2.27778 6.08778 2.52528 5.45028C2.77944 4.79194 3.12278 4.23444 3.67861 3.67861C4.23444 3.12278 4.79278 2.78028 5.45028 2.52528C6.08778 2.27778 6.81278 2.11028 7.87778 2.06028C8.14444 2.0484 8.36564 2.03871 8.58989 2.03086L8.78397 2.02457C9.27672 2.00994 9.8471 2.00327 10.9725 2.00111L13.0281 2.00098ZM12.0003 7.00028C9.23738 7.00028 7.00028 9.23981 7.00028 12.0003C7.00028 14.7632 9.23981 17.0003 12.0003 17.0003C14.7632 17.0003 17.0003 14.7607 17.0003 12.0003C17.0003 9.23738 14.7607 7.00028 12.0003 7.00028ZM12.0003 9.00028C13.6572 9.00028 15.0003 10.3429 15.0003 12.0003C15.0003 13.6572 13.6576 15.0003 12.0003 15.0003C10.3434 15.0003 9.00028 13.6576 9.00028 12.0003C9.00028 10.3434 10.3429 9.00028 12.0003 9.00028ZM17.2503 5.50028C16.561 5.50028 16.0003 6.06018 16.0003 6.74943C16.0003 7.43867 16.5602 7.99944 17.2503 7.99944C17.9395 7.99944 18.5003 7.43954 18.5003 6.74943C18.5003 6.06018 17.9386 5.49941 17.2503 5.50028Z"
              fill="black"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
          >
            <path
              d="M12.001 2C6.47813 2 2.00098 6.47715 2.00098 12C2.00098 16.9913 5.65783 21.1283 10.4385 21.8785V14.8906H7.89941V12H10.4385V9.79688C10.4385 7.29063 11.9314 5.90625 14.2156 5.90625C15.3097 5.90625 16.4541 6.10156 16.4541 6.10156V8.5625H15.1931C13.9509 8.5625 13.5635 9.33334 13.5635 10.1242V12H16.3369L15.8936 14.8906H13.5635V21.8785C18.3441 21.1283 22.001 16.9913 22.001 12C22.001 6.47715 17.5238 2 12.001 2Z"
              fill="black"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
          >
            <path
              d="M12.2439 4C12.778 4.00294 14.1143 4.01586 15.5341 4.07273L16.0375 4.09468C17.467 4.16236 18.8953 4.27798 19.6037 4.4755C20.5486 4.74095 21.2913 5.5155 21.5423 6.49732C21.942 8.05641 21.992 11.0994 21.9982 11.8358L21.9991 11.9884V11.9991C21.9991 11.9991 21.9991 12.0028 21.9991 12.0099L21.9982 12.1625C21.992 12.8989 21.942 15.9419 21.5423 17.501C21.2878 18.4864 20.5451 19.261 19.6037 19.5228C18.8953 19.7203 17.467 19.8359 16.0375 19.9036L15.5341 19.9255C14.1143 19.9824 12.778 19.9953 12.2439 19.9983L12.0095 19.9991H11.9991C11.9991 19.9991 11.9956 19.9991 11.9887 19.9991L11.7545 19.9983C10.6241 19.9921 5.89772 19.941 4.39451 19.5228C3.4496 19.2573 2.70692 18.4828 2.45587 17.501C2.0562 15.9419 2.00624 12.8989 2 12.1625V11.8358C2.00624 11.0994 2.0562 8.05641 2.45587 6.49732C2.7104 5.51186 3.45308 4.73732 4.39451 4.4755C5.89772 4.05723 10.6241 4.00622 11.7545 4H12.2439ZM9.99911 8.49914V15.4991L15.9991 11.9991L9.99911 8.49914Z"
              fill="black"
            />
          </svg>
        </div>
      </div>
      <section class="bg-white">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
          <form action="#" class="space-y-8 text-end">
            <div>
              <input
                type="name"
                id="name"
                class="shadow-sm light-blue Helvetica text-sm rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                placeholder="Name / Surname"
                required
              />
            </div>
            <div>
              <input
                type="email"
                id="email"
                class="shadow-sm border-0 light-blue Helvetica text-sm rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                placeholder="Gmail"
                required
              />
            </div>
            <div class="sm:col-span-2">
              <textarea
                id="message"
                rows="6"
                class="block p-2.5 border-0 w-full light-blue Helvetica text-sm text-gray-900 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Leave a comment..."
              ></textarea>
            </div>
            <button
              type="submit"
              class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-dark-blue sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-800"
            >
              Send message
            </button>
          </form>
        </div>
      </section>
    </div>
    <!-- end -->
    <!-- footer -->

    <footer class="bg-dark-blue">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="mb-6 md:mb-0 flex justify-center items-center">
          <a href="https://flowbite.com/" class="flex items-center">
            <img
              src="./assets//footer-logo.svg"
              class="h-8 mr-3 w-[269px] h-[99px] mb-10"
              alt="FlowBite Logo"
            />
          </a>
        </div>
        <div class="flex items-center justify-center mb-10">
          <div class="flex items-center">
            <svg
              class="w-3 h-3 text-yellow-500 mr-1"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 20"
            >
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
              />
            </svg>
            <svg
              class="w-3 h-3 text-yellow-500 mr-1"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 20"
            >
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
              />
            </svg>
            <svg
              class="w-3 h-3 text-yellow-500 mr-1"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 20"
            >
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
              />
            </svg>
            <svg
              class="w-3 h-3 text-yellow-500 mr-1"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 20"
            >
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
              />
            </svg>
            <svg
              class="w-3 h-3 text-yellow-500 mr-1"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 20"
            >
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
              />
            </svg>
            <p class="ml-2 text-xs LucidaGrande font-medium text-white">
              4.95 rating
            </p>
            <span class="ml-2 text-xs LucidaGrande font-medium text-white"
              >124.131 Reviews</span
            >
          </div>
        </div>
        <p
          class="text-2xl text-white font-normal text-center mb-10 LucidaGrande"
        >
          Subscribe to be notified of new activities immediately
        </p>
        <form class="max-w-[705px] m-auto h-[44px] mb-12">
          <label
            for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
            >Search</label
          >
          <div class="relative">
            <div
              class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
            ></div>
            <input
              type="search"
              id="default-search"
              class="block w-full p-4 pl-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 bg-white text-black dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Search Mockups, Logos..."
              required
            />
            <button
              type="submit"
              class="text-white absolute right-2.5 bottom-2.5 bg-dark-blue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Subscribe
            </button>
          </div>
        </form>
        <div class="flex justify-center items-center">
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-14 lg:gap-44 mt-10">
            <div>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://flowbite.com/" class="hover:underline"
                    >Surf</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >About Us</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >FAQ</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Contact Us</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Help Center</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >About SoulSurf</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Log In</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Register As School</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Cookies Settings</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Terms & Conditions</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Privacy And Policy</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Tailwind CSS</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Tailwind CSS</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Tailwind CSS</a
                  >
                </li>
                <li class="mb-10 text-sm text-white Helvetica">
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Tailwind CSS</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr
          class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
        />
        <div class="flex justify-center items-center">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400"
            >© 2023
            <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a
            >. All Rights Reserved.
          </span>
        </div>
      </div>
    </footer>

    <!-- end -->
  </body>
</html>
