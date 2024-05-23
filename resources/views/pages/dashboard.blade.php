<x-header>
</x-header>

<button data-drawer-target="cta-button-sidebar" data-drawer-toggle="cta-button-sidebar" aria-controls="cta-button-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="cta-button-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#0c0932] dark:bg-gray-800">
        <ul class="space-y-2 font-medium">

            <li>
                <a href="#"
                    class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg width="136" height="32" viewBox="0 0 136 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.97133 5.42738C2.97278 4.67879 3.27089 3.9613 3.80035 3.4321C4.32981 2.90289 5.04744 2.60513 5.79603 2.60404H26.5379C27.2865 2.60513 28.0042 2.90289 28.5336 3.4321C29.0631 3.9613 29.3612 4.67879 29.3626 5.42738V10.4313L31.9667 7.84503V5.42738C31.9649 3.98827 31.3923 2.60864 30.3745 1.59116C29.3568 0.573684 27.977 0.00145067 26.5379 0L5.79603 0C4.35716 0.00181333 2.97774 0.574207 1.9603 1.59165C0.94286 2.60908 0.370466 3.9885 0.368652 5.42738V20.8159L2.9727 18.2119L2.97133 5.42738Z"
                            fill="white" />
                        <path d="M17.8405 16.3547H14.8665V19.3288H17.8405V16.3547Z" fill="white" />
                        <path d="M21.5573 16.215H18.5833V19.1891H21.5573V16.215Z" fill="white" />
                        <path d="M17.8405 20.0717H14.8665V23.0457H17.8405V20.0717Z" fill="white" />
                        <path d="M21.5573 20.0717H18.5833V23.0457H21.5573V20.0717Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M37.5531 3.08373L34.1075 4.06778L35.8892 5.7933L27.5042 14.1249L18.0255 5.01757L12.2692 10.7739V8.54948H9.29096V13.7576L0 23.0458L0.22477 27.2822L2.22989 25.2757V26.1679C2.2317 27.6068 2.80409 28.9862 3.82153 30.0036C4.83897 31.0211 6.21839 31.5935 7.65726 31.5953H28.3964C29.8353 31.5935 31.2147 31.0211 32.2322 30.0036C33.2496 28.9862 33.822 27.6068 33.8238 26.1679V11.3947L37.5914 7.4407L39.258 9.05384L40.1297 5.57676L41 2.09967L37.5531 3.08373ZM31.2211 26.1679C31.2204 26.917 30.9226 27.6352 30.3931 28.1649C29.8635 28.6947 29.1455 28.9929 28.3964 28.994H7.65452C6.90546 28.9929 6.18741 28.6947 5.65787 28.1649C5.12833 27.6352 4.83054 26.917 4.82982 26.1679V22.6744L18.2119 9.29232L27.5042 18.0282L31.2211 14.1262V26.1679Z"
                            fill="white" />
                        <path
                            d="M56.936 11.4977H50.264V16.2497H54.752V18.4097H50.264V25.2977H48.2V9.33767H56.936V11.4977ZM65.2471 14.4257L63.2551 15.6017C62.8951 15.4337 62.5351 15.3377 62.2231 15.3377C61.6231 15.3377 61.0471 15.5777 60.6391 16.0097C60.2311 16.4417 59.9671 17.0177 59.9671 17.6657V25.2977H57.9031V17.6657C57.9031 15.9137 58.8631 14.4017 60.3751 13.6097C60.9271 13.3457 61.5271 13.2017 62.2231 13.2017C63.2551 13.2017 64.1671 13.5377 65.2471 14.4257ZM76.9081 25.2977H74.7481V23.4737C73.7641 24.6257 72.3721 25.4177 70.8361 25.4177C69.1321 25.4177 67.6681 24.7457 66.5641 23.6657C65.4601 22.5857 64.7881 21.0497 64.7881 19.3937C64.7881 17.7377 65.4601 16.2017 66.5641 15.0977C67.6681 13.9937 69.1321 13.3457 70.8361 13.3457C72.3721 13.3457 73.7881 14.0177 74.7481 15.1697V13.5857H76.9081V25.2977ZM70.8361 15.4817C69.7561 15.4817 68.7481 15.9137 68.0521 16.6097C67.3561 17.3057 66.9241 18.3137 66.9241 19.3937C66.9241 20.4737 67.3561 21.4577 68.0521 22.1537C68.7481 22.8497 69.7561 23.2817 70.8361 23.2817C71.9161 23.2817 72.9001 22.8497 73.5961 22.1537C74.2921 21.4577 74.7241 20.4737 74.7241 19.3937C74.7241 18.3137 74.2921 17.3057 73.5961 16.6097C72.9001 15.9137 71.9161 15.4817 70.8361 15.4817ZM84.6408 30.4097C82.7208 30.4097 81.0408 29.4977 79.6968 27.8657L81.5928 26.7377C82.4568 27.7457 83.4648 28.2497 84.6408 28.2497C85.7208 28.2497 86.7048 27.7937 87.4008 27.0737C88.0968 26.3537 88.5288 25.3697 88.5288 24.2897V23.7137C87.4728 24.8897 86.1528 25.5377 84.6168 25.5377C82.9608 25.5377 81.4248 24.7937 80.3448 23.6177C79.2648 22.4657 78.5928 20.9057 78.5928 19.2737C78.5928 17.6177 79.2888 16.1057 80.3688 15.0257C81.4488 13.9697 82.9608 13.2977 84.6168 13.2977C86.5608 13.2977 87.9528 14.4017 88.5288 15.1697V13.5137H90.6888V24.2897C90.6888 25.9937 89.9928 27.5057 88.9128 28.6097C87.8328 29.7137 86.2968 30.4097 84.6408 30.4097ZM84.6168 15.4817C83.5368 15.4817 82.5528 15.9137 81.8568 16.6337C81.1608 17.3537 80.7048 18.3617 80.7048 19.4417C80.7048 20.5217 81.1608 21.5297 81.8568 22.2257C82.5528 22.9217 83.5368 23.3777 84.6168 23.3777C85.6968 23.3777 86.6808 22.9217 87.3768 22.2257C88.0728 21.5297 88.5048 20.5217 88.5048 19.4417C88.5048 18.3617 88.0728 17.3537 87.3768 16.6337C86.6808 15.9137 85.6968 15.4817 84.6168 15.4817ZM104.339 13.2977L99.6108 25.2977H97.5708L92.8428 13.2977H95.1228L98.6028 22.0577L102.059 13.2977H104.339ZM116.843 20.2097H107.123C107.123 21.0497 107.843 21.9617 108.515 22.4657C109.163 22.9697 109.979 23.2577 110.867 23.2577C112.307 23.2577 113.459 22.5617 114.347 21.1937L116.171 22.2737C114.947 24.2657 113.075 25.4177 110.867 25.4177C109.211 25.4177 107.675 24.7217 106.595 23.6417C105.515 22.5617 104.819 21.0257 104.819 19.3697C104.819 17.7137 105.515 16.1777 106.595 15.0737C107.675 13.9697 109.211 13.3217 110.867 13.3217C112.523 13.3217 114.059 13.9697 115.139 15.0737C116.507 16.4657 117.131 18.2657 116.843 20.2097ZM110.867 15.2897C108.851 15.2897 107.123 16.7777 107.123 18.3617H114.611C114.611 16.7777 112.907 15.2897 110.867 15.2897ZM124.889 16.8737C124.841 16.5857 124.745 16.3217 124.577 16.0577C123.977 15.0257 122.225 15.2177 121.673 15.4337C120.521 15.8897 120.425 17.0897 121.049 17.7377C121.313 18.0257 121.697 18.1937 122.369 18.2177C125.273 18.3617 126.977 18.9377 127.049 21.7457C127.073 22.7537 126.689 23.5937 125.969 24.2897C125.297 24.9377 124.337 25.4177 123.257 25.4177H122.897C121.625 25.4177 120.593 25.0577 119.801 24.3137C119.153 23.7137 118.769 22.9457 118.601 21.8177H120.737C120.833 22.2737 121.001 22.5377 121.217 22.7537C121.721 23.2337 122.489 23.3297 123.137 23.2577C124.289 23.1857 124.937 22.5377 124.937 21.7457C124.937 21.1697 124.793 20.8097 124.409 20.6177C124.025 20.4257 123.353 20.3537 122.369 20.3537C120.833 20.3537 119.945 19.7297 119.465 19.1537C118.817 18.4097 118.553 17.4017 118.673 16.3697C118.937 14.2577 120.473 13.1537 122.849 13.1537C123.809 13.1537 124.577 13.3937 125.153 13.7297C125.705 14.0657 126.089 14.5217 126.353 14.9297C126.713 15.5057 126.881 16.1057 126.977 16.8497L126.929 16.8737H124.889ZM134.6 15.4577H132.8V25.2977H130.76V15.4577H128.96V13.2977H130.76V9.33767H132.8V13.2977H134.6V15.4577Z"
                            fill="white" />
                    </svg>


                </a>
            </li>

            <li>
                <a href="#"
                    class="flex items-center p-2 mt-10 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Leads</span>
                    {{--  <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>  --}}
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Resources</span>
                    {{--  <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>  --}}
                </a>
            </li>


        </ul>

</aside>

<div class="p-8 sm:ml-64">


    <nav class="bg-white border-gray-200 dark:bg-gray-900 border-b-2">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">

                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Dashboard</span>
            </a>
            <div class="flex md:order-2">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false"
                    class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden md:block">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">
                </div>
                {{--  <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>  --}}
            </div>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                        alt="user photo">

                </button>

                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                <button type="submit"
                                    class="block w-full px-4 py-2 text-sm text-gray-700 text-start hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                    Sign out
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="items-center justify-end hidden w-full md:flex md:w-auto md:order-1 ml-[%50]"
                id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">

                </div>

            </div>

        </div>



    </nav>

    <div class="mt-5">
        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-4 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif
    </div>

</div>


<div class="p-8  sm:ml-64">
    @include('components.cards')


</div>

<div class="p-8 sm:ml-64">
    @include('components.leads')

</div>

</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dateDisplay = document.querySelector('.date-display');
        let lastSelectedDate = ''; // Store the last selected date

        flatpickr(".date-display", {
            dateFormat: "d M y",
            onClose: function(selectedDates, dateStr, instance) {
                if (selectedDates.length > 0) {
                    dateDisplay.textContent =
                        dateStr; // Update date display only if a date is selected
                    lastSelectedDate = dateStr;
                }
            },
            onReady: function(selectedDates, dateStr, instance) {
                const todayButton = document.querySelector('.flatpickr-day.today');
                todayButton.addEventListener('click', function() {
                    const todayDate = instance.formatDate(new Date(), 'd M y');
                    dateDisplay.textContent = todayDate +
                        ' Today'; // Update date display with "Today"
                    lastSelectedDate = todayDate;
                });
            }
        });

        // Revert to last selected date when closing without selection
        document.querySelector('.date-display').addEventListener('click', function() {
            if (lastSelectedDate) {
                dateDisplay.textContent = lastSelectedDate;
            }
        });

        $(document).on('change', '.date-display', function() {
            var selectedDate = $(this).text().trim();

            $.ajax({
                url: '/get_total_calls',
                type: 'GET',
                data: {
                    date: selectedDate
                },
                success: function(response) {
                    var totalColdCalls = response.totalColdCalls;
                    var target = 300;

                    $('#callsMadeCount').text(totalColdCalls);

                    var percentage_count = (totalColdCalls / target) * 100;
                    $('#percentage_count').text(percentage_count.toFixed(2) + '%');

                    $('#target').text('Target = ' + target);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });

            $.ajax({
                url: '/get_leads',
                type: 'GET',
                data: {
                    date: selectedDate
                },
                success: function(response) {
                    if (response.message) {
                        $('#leadsContainer').html(
                            '<div class="py-10"><h1 class="font-bold text-red-700">No leads generated today</h1></div>'
                            );
                    } else {
                        alert("There are leads");
                        $.each(response, function(index, lead) {

                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });


    });




    jQuery(document).ready(function($) {
        var $total = $('#totalColdCalls'),
            $value = $('.input_value');

        $value.on('input', function(e) {
            var total = 0;
            $value.each(function(index, elem) {
                var value = parseFloat($(elem).val());
                if (!isNaN(value)) {
                    total += value;
                }
            });
            $total.val(total.toFixed(2));
        });
    });
</script>

</body>

</html>
