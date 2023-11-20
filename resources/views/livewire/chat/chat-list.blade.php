<div 
    x-data="{type: 'all'}"
    class="flex flex-col transition-all h-full overflow-hidden">
    <header class="px-3 z-10 bg-white sticky top-0 w-full py-2 ">
        <div class="border-b justify-between flex items-center pb-2">
            <div class="flex items-center gap-2">
                <h5 class="font-extrabold text-2xl">
                    Chats
                </h5>
            </div>

            <button>
                <i class="fa-solid fa-filter w-7 h-7"></i>
            </button>

        </div>

        {{-- Filtros --}}
        <div class="flex gap-3 items-center overflow-x-scroll p-2 bg-white">
            <button @click="type='all'" :class="{'bg-blue-100 border-0 text-black':type=='all'}" class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1  lg:py-2.5 border ">
                All
            </button>

            <button @click="type='deleted'" :class="{'bg-blue-100 border-0 text-black':type=='deleted'}" class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1  lg:py-2.5 border ">
                Deleted
            </button>
        </div>
    </header>
</div>
