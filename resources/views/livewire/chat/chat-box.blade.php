<div>
    {{-- Header --}}
    <header class="w-full sticky inset-x-0 flex py-2.5 top-0 z-10 bg-white border-b">

        <div class="flex w-full items-center px-2 lg:px-4 gap-2 md:gap-5">

            <a href="#" class="shrink-0 lg:hidden">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            {{-- Avatar --}}
            <div class="flex-shrink-0">
                <x-avatar class="h-9 w-9 lg:w-11 lg:h-11" />
            </div> 

            <h6 class="font bold truncate">
                Juanillo
            </h6>
        </div>

    </header>

    {{-- Body --}}
    <main class="flex flex-col gap-3 p-2.5 overflow-y-auto flex-grow overscroll-contain overflow-x-hidden w-full my-auto">

        <div @class([
            'max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2'
        ])>

        {{-- Avatar --}}
        <div @class(['shrink-0'])>

            <x-avatar />

        </div>

            {{-- Cuerpo del mensaje --}}
            <div @class(['flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col text-black bg-[#f6f6f8fb]',
                          'rounded-bl-none border border-gray-200/40' => false,
                          'rounded-br-none bg-blue-500/80 text-white' => true
            ])>

            <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatem incidunt pariatur dignissimos, nihil eius maxime possimus? Praesentium ratione necessitatibus esse reiciendis provident quia. Et culpa voluptas nisi provident obcaecati.
            </p>

            <div class="ml-auto flex gap-2">

                <p @class([
                    'text-xs',
                    'text-gray-500' => false,
                    'text-white' => true
                ])>
                    4:20 am
                </p>

                {{-- Status del mensaje, solo se muestra si pertenece al usuario autenticado --}}
                <div>
                    {{-- doble tick --}}
                    <span @class('text-gray-500')>
                        <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                            <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                          </svg>
                    </span>

                    {{-- tick sola --}}
                    {{-- <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                          </svg>
                    </span> --}}
                </div>
            </div>

            </div>
        </div>
    </main>

    {{-- Footer --}}
</div>
