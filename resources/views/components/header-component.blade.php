<header class="w-full mx-0">
    <nav class="shadow h-[84px] xl:px-20 lg:px-5 md:20 px-5">
        <div class="flex flex-wrap items-center justify-between w-full mx-auto">
            <a href="https://flowbite.com/" class="flex items-center py-[24px]">
                <p class="text-primaryColorBlue font-medium font-poppins text-[24px]">Be3o</p>
            </a>
            <div class="flex items-center lg:hidden lg:order-2">
                <button type="button"
                    class="flex items-center justify-center px-4 py-2 text-sm font-medium cursor-pointer"
                    id="language-dropdown-menu" aria-expanded="false" data-dropdown-toggle="language-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="mt-[1px] mr-1 lg:hidden text-[18px] font-medium">English</span>
                    <img src="{{ asset('image/usa.svg') }}">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white" id="language-dropdown">
                    <ul class="py-2" aria-labelledby="language-dropdown-menu">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">
                                <div class="inline-flex items-center">
                                    <img src="{{ asset('image/usa.svg') }}" class="mr-1">
                                    <span class="mt-[1px]">En</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">
                                <div class="inline-flex items-center">
                                    <img src="{{ asset('image/usa.svg') }}" class="mr-1">
                                    <span class="mt-[1px]">Ar</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex items-center gap-2 lg:hidden lg:order-2.5">
                <div
                    class="flex justify-center items-center w-[40px] h-[40px] bg-hover rounded-full hover:bg-primaryColorBlue hover:text-whiteTheme">
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex lg:hidden"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div
                    class="flex justify-center items-center w-[40px] h-[40px] bg-hover rounded-full hover:bg-primaryColorBlue hover:text-whiteTheme">
                    <button type="button" class="inline-flex lg:hidden">
                        <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.25 10C13.8467 10 14.419 10.2371 14.841 10.659C15.2629 11.081 15.5 11.6533 15.5 12.25V13C15.5 15.9565 12.71 19 8 19C3.29 19 0.5 15.9565 0.5 13V12.25C0.5 11.6533 0.737053 11.081 1.15901 10.659C1.58097 10.2371 2.15326 10 2.75 10H13.25ZM13.25 11.5H2.75C2.55109 11.5 2.36032 11.579 2.21967 11.7197C2.07902 11.8603 2 12.0511 2 12.25V13C2 15.157 4.148 17.5 8 17.5C11.852 17.5 14 15.157 14 13V12.25C14 12.0511 13.921 11.8603 13.7803 11.7197C13.6397 11.579 13.4489 11.5 13.25 11.5ZM8 0.25C9.09402 0.25 10.1432 0.684597 10.9168 1.45818C11.6904 2.23177 12.125 3.28098 12.125 4.375C12.125 5.46902 11.6904 6.51823 10.9168 7.29182C10.1432 8.0654 9.09402 8.5 8 8.5C6.90598 8.5 5.85677 8.0654 5.08318 7.29182C4.3096 6.51823 3.875 5.46902 3.875 4.375C3.875 3.28098 4.3096 2.23177 5.08318 1.45818C5.85677 0.684597 6.90598 0.25 8 0.25ZM8 1.75C7.30381 1.75 6.63613 2.02656 6.14384 2.51884C5.65156 3.01113 5.375 3.67881 5.375 4.375C5.375 5.07119 5.65156 5.73887 6.14384 6.23116C6.63613 6.72344 7.30381 7 8 7C8.69619 7 9.36387 6.72344 9.85616 6.23116C10.3484 5.73887 10.625 5.07119 10.625 4.375C10.625 3.67881 10.3484 3.01113 9.85616 2.51884C9.36387 2.02656 8.69619 1.75 8 1.75Z"
                                fill="#09537C"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul
                    class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg shadow xl:space-x-8 lg:space-x-7 lg:shadow-none lg:p-0 bg-gray-50 lg:flex-row lg:mt-0 lg:border-0 lg:bg-white">
                    <li>
                        <div class="relative flex h-[40px] rounded my-[20px] xl:w-[475px]">
                            <input type="search"
                                class="relative border border-borderColor w-full flex-row xl:w-[435px] lg:w-[235px] justify-center items-center pt-[9px] pb-[10px] md:pl-6 pl-2 lg:pl-[10px] lg:text-[16px] rounded-l-sm"
                                placeholder="Search for categories & items" aria-label="Search"
                                aria-describedby="button-addon1" />
                            <button
                                class="relative border border-borderColor z-[2] flex items-center bg-hover text-xs w-[40px] rounded-r-sm"
                                type="button" id="button-addon1" data-te-ripple-init data-te-ripple-color="light">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    class="ml-[10px] lg:ml-2" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.125 17L11.125 11" stroke="#09537C" stroke-width="1.7"
                                        stroke-linecap="round"></path>
                                    <path
                                        d="M12.125 6.5C12.125 7.95869 11.5455 9.35764 10.5141 10.3891C9.48264 11.4205 8.08369 12 6.625 12C5.16631 12 3.76736 11.4205 2.73591 10.3891C1.70446 9.35764 1.125 7.95869 1.125 6.5C1.125 5.04131 1.70446 3.64236 2.73591 2.61091C3.76736 1.57946 5.16631 1 6.625 1C8.08369 1 9.48264 1.57946 10.5141 2.61091C11.5455 3.64236 12.125 5.04131 12.125 6.5V6.5Z"
                                        stroke="#09537C" stroke-width="1.7"></path>
                                </svg>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div
                            class="flex lg:justify-between shadow bg-whiteTheme rounded-sm relative w-full h-[40px] border border-borderColor pr-1 my-[20px]">
                            <div class="mt-[11px] ml-3">
                                <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                    class="w-[13px] h-[16px]" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.6796 8.25C15.6796 6.45979 14.9684 4.7429 13.7026 3.47703C12.4367 2.21116 10.7198 1.5 8.9296 1.5C7.13938 1.5 5.4225 2.21116 4.15663 3.47703C2.89075 4.7429 2.1796 6.45979 2.1796 8.25C2.1796 11.019 4.3951 14.628 8.9296 18.951C13.4641 14.628 15.6796 11.019 15.6796 8.25ZM8.9296 21C3.4291 16.0005 0.679596 11.7495 0.679596 8.25C0.679596 6.06196 1.54879 3.96354 3.09597 2.41637C4.64314 0.869194 6.74156 0 8.9296 0C11.1176 0 13.2161 0.869194 14.7632 2.41637C16.3104 3.96354 17.1796 6.06196 17.1796 8.25C17.1796 11.7495 14.4301 16.0005 8.9296 21Z"
                                        fill="#09537c"></path>
                                    <path
                                        d="M8.875 10C9.47174 10 10.044 9.76295 10.466 9.34099C10.8879 8.91903 11.125 8.34674 11.125 7.75C11.125 7.15326 10.8879 6.58097 10.466 6.15901C10.044 5.73705 9.47174 5.5 8.875 5.5C8.27826 5.5 7.70597 5.73705 7.28401 6.15901C6.86205 6.58097 6.625 7.15326 6.625 7.75C6.625 8.34674 6.86205 8.91903 7.28401 9.34099C7.70597 9.76295 8.27826 10 8.875 10V10ZM8.875 11.5C7.88044 11.5 6.92661 11.1049 6.22335 10.4017C5.52009 9.69839 5.125 8.74456 5.125 7.75C5.125 6.75544 5.52009 5.80161 6.22335 5.09835C6.92661 4.39509 7.88044 4 8.875 4C9.86956 4 10.8234 4.39509 11.5267 5.09835C12.2299 5.80161 12.625 6.75544 12.625 7.75C12.625 8.74456 12.2299 9.69839 11.5267 10.4017C10.8234 11.1049 9.86956 11.5 8.875 11.5Z"
                                        fill="#09537c"></path>
                                </svg>
                            </div>
                            <select name="location" id="location"
                                class="pr-[30px] text-[#666666] border-none focus:!ring-0 ">
                                <option value="Alexandria">Alexandria</option>
                                <option value="Cairo">Cairo</option>
                                <option value="Damietta">Damietta</option>
                                <option value="Port Said">Port Said</option>
                                <option value="Ismailia">Ismailia</option>
                                <option value="Aswan">Aswan</option>
                                <option value="Asyut">Asyut</option>
                                <option value="Luxor">Luxor</option>
                                <option value="Red Sea">Red Sea</option>
                                <option value="Gizeh">Gizeh</option>
                                <option value="Beni Suef">Beni Suef</option>
                                <option value="Beni Suef">Beni Suef</option>
                                <option value="South Sina">South Sina</option>
                                <option value="Gizah">Gizah</option>
                                <option value="Dakahlia">Dakahlia</option>
                                <option value="Sohag">Sohag</option>
                                <option value="Suez">Suez</option>
                                <option value="Zagazig">Zagazig</option>
                                <option value="North Sina ">North Sina </option>
                                <option value="Hurghada">Hurghada</option>
                                <option value="Fayyum">Fayyum</option>
                                <option value="Qena">Qena</option>
                                <option value="Kafr el-Sheikh">Kafr el-Sheikh</option>
                                <option value="Marsa Matruh">Marsa Matruh</option>
                                <option value="Menoufia">Menoufia</option>
                                <option value="Minya">Minya</option>
                                <option value="New Valley">New Valley</option>
                            </select>
                        </div>
                    </li>
                    <li class="hidden lg:block py-[20px]">
                        <button type="button"
                            class="flex items-center justify-center py-2 text-sm font-medium cursor-pointer"
                            id="language-dropdown-menu" aria-expanded="false"
                            data-dropdown-toggle="language-dropdown" data-dropdown-placement="bottom">
                            <span class="mt-[1px] mr-1 lg:hidden">English</span>
                            <img src="{{ asset('image/usa.svg') }}">
                            <span class="mt-[1px] ml-1 hidden lg:block">En</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white" id="language-dropdown">
                            <ul class="py-2" aria-labelledby="language-dropdown-menu">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">
                                        <div class="inline-flex items-center">
                                            <img src="{{ asset('image/usa.svg') }}" class="mr-1">
                                            <span class="mt-[1px]">En</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">
                                        <div class="inline-flex items-center">
                                            <img src="{{ asset('image/usa.svg') }}" class="mr-1">
                                            <span class="mt-[1px]">Ar</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="hidden lg:block my-[20px]">
                        <div class="flex justify-between gap-3 lg:gap-2">
                            <div class="flex justify-center items-center w-[40px] h-[40px] bg-hover rounded-full">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20C8.404 20.0022 6.83083 19.6208 5.41301 18.888L1.58701 19.955C1.37355 20.0146 1.14809 20.0163 0.933732 19.9601C0.719374 19.9038 0.523824 19.7916 0.367118 19.6349C0.210412 19.4782 0.0981849 19.2826 0.0419355 19.0683C-0.0143139 18.8539 -0.0125631 18.6285 0.0470083 18.415L1.11501 14.592C0.38036 13.1729 -0.0020688 11.5979 8.41695e-06 10C8.41695e-06 4.477 4.47701 0 10 0ZM10 1.5C7.74567 1.5 5.58366 2.39553 3.9896 3.98959C2.39554 5.58365 1.50001 7.74566 1.50001 10C1.50001 11.47 1.87301 12.883 2.57301 14.137L2.72301 14.407L1.61101 18.391L5.59801 17.279L5.86801 17.429C7.00239 18.0597 8.26614 18.4222 9.56236 18.4888C10.8586 18.5554 12.1528 18.3242 13.3458 17.8131C14.5389 17.3019 15.599 16.5244 16.445 15.54C17.2909 14.5556 17.9002 13.3906 18.2261 12.1343C18.552 10.8779 18.5858 9.56364 18.325 8.29219C18.0643 7.02073 17.5158 5.82589 16.7216 4.79927C15.9275 3.77264 14.9088 2.94152 13.7437 2.36962C12.5786 1.79773 11.2979 1.50025 10 1.5ZM6.75001 11H11.248C11.438 11.0001 11.6209 11.0722 11.7598 11.202C11.8987 11.3317 11.9831 11.5093 11.996 11.6989C12.009 11.8885 11.9495 12.0759 11.8296 12.2233C11.7097 12.3707 11.5383 12.4671 11.35 12.493L11.248 12.5H6.75001C6.55999 12.4999 6.37707 12.4278 6.23822 12.298C6.09937 12.1683 6.01494 11.9907 6.00198 11.8011C5.98903 11.6115 6.04852 11.4241 6.16844 11.2767C6.28836 11.1293 6.45976 11.0329 6.64801 11.007L6.75001 11H11.248H6.75001ZM6.75001 7.5H13.255C13.4449 7.50031 13.6277 7.57267 13.7664 7.70248C13.905 7.83229 13.9893 8.00987 14.0021 8.19938C14.0149 8.38888 13.9553 8.57619 13.8354 8.72349C13.7155 8.8708 13.5442 8.96711 13.356 8.993L13.255 9H6.75001C6.55999 8.99994 6.37707 8.92776 6.23822 8.79803C6.09937 8.6683 6.01494 8.4907 6.00198 8.30112C5.98903 8.11154 6.04852 7.92411 6.16844 7.7767C6.28836 7.62929 6.45976 7.5329 6.64801 7.507L6.75001 7.5H13.255H6.75001Z"
                                        fill="#09537C"></path>
                                </svg>
                            </div>
                            <div class="flex justify-center items-center w-[40px] h-[40px] bg-hover rounded-full">
                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="heart">
                                    <path
                                        d="M11 18C10.872 18.0013 10.7459 17.969 10.6344 17.9062C10.2312 17.6812 0.875 12.3656 0.875 5.625C0.875 4.44441 1.24646 3.29375 1.93676 2.336C2.62707 1.37826 3.60121 0.661992 4.72122 0.288657C5.84122 -0.0846785 7.0503 -0.096152 8.17719 0.255861C9.30408 0.607875 10.2916 1.30553 11 2.25C11.7084 1.30553 12.6959 0.607875 13.8228 0.255861C14.9497 -0.096152 16.1588 -0.0846785 17.2788 0.288657C18.3988 0.661992 19.3729 1.37826 20.0632 2.336C20.7535 3.29375 21.125 4.44441 21.125 5.625C21.125 8.49375 19.4656 11.4375 16.1937 14.3812C14.708 15.7169 13.0903 16.898 11.3656 17.9062C11.2541 17.969 11.128 18.0013 11 18ZM6.5 1.5C5.40598 1.5 4.35677 1.9346 3.58318 2.70818C2.8096 3.48177 2.375 4.53098 2.375 5.625C2.375 10.8 9.3125 15.3469 11 16.3781C12.6875 15.3469 19.625 10.8 19.625 5.625C19.6259 4.6714 19.2963 3.74695 18.6924 3.00894C18.0885 2.27093 17.2476 1.76495 16.3127 1.57708C15.3777 1.38922 14.4066 1.53107 13.5645 1.97851C12.7224 2.42595 12.0613 3.15134 11.6937 4.03125C11.6372 4.16881 11.5411 4.28646 11.4176 4.36926C11.2941 4.45206 11.1487 4.49627 11 4.49627C10.8513 4.49627 10.7059 4.45206 10.5824 4.36926C10.4589 4.28646 10.3628 4.16881 10.3062 4.03125C9.99408 3.27962 9.4656 2.63772 8.7879 2.18703C8.11021 1.73635 7.31387 1.49721 6.5 1.5Z"
                                        fill="#09537C"></path>
                                </svg>
                            </div>
                            <div class="flex justify-center items-center w-[40px] h-[40px] bg-hover rounded-full">
                                <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.25 10C13.8467 10 14.419 10.2371 14.841 10.659C15.2629 11.081 15.5 11.6533 15.5 12.25V13C15.5 15.9565 12.71 19 8 19C3.29 19 0.5 15.9565 0.5 13V12.25C0.5 11.6533 0.737053 11.081 1.15901 10.659C1.58097 10.2371 2.15326 10 2.75 10H13.25ZM13.25 11.5H2.75C2.55109 11.5 2.36032 11.579 2.21967 11.7197C2.07902 11.8603 2 12.0511 2 12.25V13C2 15.157 4.148 17.5 8 17.5C11.852 17.5 14 15.157 14 13V12.25C14 12.0511 13.921 11.8603 13.7803 11.7197C13.6397 11.579 13.4489 11.5 13.25 11.5ZM8 0.25C9.09402 0.25 10.1432 0.684597 10.9168 1.45818C11.6904 2.23177 12.125 3.28098 12.125 4.375C12.125 5.46902 11.6904 6.51823 10.9168 7.29182C10.1432 8.0654 9.09402 8.5 8 8.5C6.90598 8.5 5.85677 8.0654 5.08318 7.29182C4.3096 6.51823 3.875 5.46902 3.875 4.375C3.875 3.28098 4.3096 2.23177 5.08318 1.45818C5.85677 0.684597 6.90598 0.25 8 0.25ZM8 1.75C7.30381 1.75 6.63613 2.02656 6.14384 2.51884C5.65156 3.01113 5.375 3.67881 5.375 4.375C5.375 5.07119 5.65156 5.73887 6.14384 6.23116C6.63613 6.72344 7.30381 7 8 7C8.69619 7 9.36387 6.72344 9.85616 6.23116C10.3484 5.73887 10.625 5.07119 10.625 4.375C10.625 3.67881 10.3484 3.01113 9.85616 2.51884C9.36387 2.02656 8.69619 1.75 8 1.75Z"
                                        fill="#09537C"></path>
                                </svg>
                            </div>
                        </div>
                    </li>
                    <li class="py-[16px] lg:mx-0 mx-auto">
                        <div>
                            <button
                                class="flex gap-[16px] lg:gap-2 lg:w-[140px] xl:w-[196px] w-[196px] lg:h-[40px] lg:mt-1 h-[52px] bg-primaryColorBlue rounded-sm xl:mt-0 xl:py-6 px-6 lg:py-[6px] xl:px-6 px-6 lg:px-[12px] text-center items-center">
                                <img src="{{ asset('image/Vector.png') }}">
                                <p
                                    class="font-poppins font-semibold text-whiteTheme xl:text-xl text-xl lg:text-[16px]">
                                    Post an Ad</p>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="flex w-full shadow h-[51px] bg-whiteTheme xl:px-20 lg:px-5 md:px-5">
        <ul
            class="flex flex-col items-center w-full font-medium text-center md:flex-row lg:gap-[52.6px] xl:gap-[84px] md:gap-4">
            <li>
                <a href="#"
                    class="hidden md:block xl:text-[18px] text-[16px] font-poppins font-medium text-black md:text-primaryColorBlue">Home</a>
            </li>
            <li>
                <a href="#"
                    class="hidden md:block xl:text-[18px] text-[16px] font-poppins font-medium text-black">Vehicles</a>
            </li>
            <li>
                <a href="#"
                    class="hidden md:block xl:text-[18px] text-[16px] font-poppins font-medium text-black">Electronics</a>
            </li>
            <li>
                <a href="#"
                    class="hidden md:block xl:text-[18px] text-[16px] font-poppins font-medium text-black">Clothes</a>
            </li>
            <li>
                <a href="#"
                    class="hidden md:block xl:text-[18px] text-[16px] font-poppins font-medium text-black">Furnitures</a>
            </li>
            <li class="pt-[10px] md:pt-0">
                <a href="#"
                    class="xl:text-[18px] md:text-[16px] text-[12px] font-poppins font-medium text-black">All
                    Categories</a>
            </li>
            <li>
                <a href="#"
                    class="hidden md:block xl:text-[18px] text-[16px] font-poppins font-medium text-black">Contact
                    Us</a>
            </li>
            <li>
                <a href="#"
                    class="hidden md:block xl:text-[18px] text-[16px] font-poppins font-medium text-black">About Us</a>
            </li>
        </ul>
    </nav>

</header>
