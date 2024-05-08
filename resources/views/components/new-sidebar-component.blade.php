<div>
    <div class="fixed inset-0 bg-white p-4 pb-8 z-[999] hidden flex-col justify-between" x-show="toggelMenu"
        :class="toggelMenu ? ' !flex' : ''" x-transition:enter="transition transform ease-out duration-500"
        x-transition:enter-start="opacity-0 rtl:translate-x-full ltr:-translate-x-full"
        x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition transform ease-in duration-500"
        x-transition:leave-start="opacity-100 translate-x-0"
        x-transition:leave-end="opacity-0 rtl:translate-x-full ltr:-translate-x-full">
        <div>
            <div class="text-end flex justify-between items-center">
                <div id="logo">
                    <a href="/"><p class="text-primary font-medium text-[24px]">Be3o</p></a>
                </div>
                <i class="fa-solid fa-x text-xl text-primary cursor-pointer" @click="toggelMenu = false"></i>
            </div>
            <div class="cent gap-5 mt-7">
                <div
                    class="hidden lg:flex justify-center items-center w-9 h-9 rounded-full bg-primary/[0.05] cursor-pointer">
                    <button>
                        <i class="fa-solid fa-magnifying-glass text-primary"></i>
                    </button>
                </div>
            </div>
            <div class="flex flex-col justify-between max-h-[80dvh] overflow-y-auto">
                <!--links-->
                <div class="p-5">
                </div>
            </div>
        </div>
    </div>
</div>
