<div 
    x-data="{type: 'all',query:@entangle('query')}"
    x-init="

    setTimeout(()=>{
 
     conversationElement = document.getElementById('conversation-'+query);
 
 
     //scroll to the element
 
     if(conversationElement)
     {
 
         conversationElement.scrollIntoView({'behavior':'smooth'});
 
     }
 
     },200);
     "
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

    <main class="overflow-y-scroll overflow-hidden grow h-full relative" style="contain: content">
        {{-- ChatList--}}
        <ul class="p-2 grid w-full space-y-2">

            @if ($conversations)

            @foreach ($conversations as $key => $conversation)

            <li
            id="conversation-{{$conversation->id}}" wire:key="{{$conversation->id}}" 
            class="py-3 hover:bg-gray-50 rounded-2xl dark:hover:bg-gray-700 transition-colors duration-150 flex gap-4 relative w-full cursor-pointer px-2 {{$conversation->id==$selectedConversation?->id ? 'bg-gray-200' : ''}}">
                <a href="#" class="shrink-0">
                    <x-avatar src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png"/>

                </a>

                <aside class="grid grid-cols-12 w-full">
                    <a href="{{route('chat',$conversation->id)}}" class="col-span-11 border-b pb-2 border-gray-200 relative overflow-hidden truncate leading-5 w-full flex-nowrap p-1">
                        
                        {{-- Nombre y datos --}}
                        <div class="flex justify-between w-full items-center">
                            <h6 class="truncate font-medium tracking-wider text-gray-900">
                                {{$conversation->getReceiver()->name}}
                            </h6>

                            <small class="text-gray-700">
                                {{$conversation->messages?->last()?->created_at?->shortAbsoluteDiffForHumans()}}
                            </small>

                        </div>

                        {{-- Cuerpo del mensaje --}}
                        <div class="flex gap-x-2 items-center">
                            {{-- visto --}}
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                  </svg>
                            </span>

                            {{-- No leido --}}
                            {{-- <span >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                  </svg>
                            </span> --}}

                            <p class="grow truncate text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, vel architecto. Accusamus nisi, maxime, aspernatur totam, tempore omnis architecto at consequatur obcaecati iusto reprehenderit maiores modi error. Optio, voluptate iure!
                            </p>

                            {{-- Mensajes sin leer --}}
                            <span class="font-bold p-px px-2 text-xs shrink-0 rounded-full bg-blue-500 text-white">
                                6
                            </span>
                        </div>
                    </a>

                    {{-- Dropdown --}}
                    <div class="col-span-1 flex flex-col text-center my-auto">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex transition duration-150 ease-in-out" tabIndex="-1">
                                    <i class="fa-solid fa-ellipsis-vertical w-7 h-7 text-gray-700"></i>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-full p-1">

                                    {{-- Ver perfil--}}
                                    <button class="items-center gap-3 flex w-full px-4 py-2 text-left text-sm leading-5 text-gray-500 hover:bg-gray-100 transition-all duration-150 ease-in-out focus:outline-none focus:bg-gray-100">
                                        <span>
                                            <i class="fa-solid fa-circle-user"></i>
                                        </span>

                                        Ver perfil
                                    </button>

                                    {{-- Borrar--}}
                                    <button class="items-center gap-3 flex w-full px-4 py-2 text-left text-sm leading-5 text-gray-500 hover:bg-gray-100 transition-all duration-150 ease-in-out focus:outline-none focus:bg-gray-100">
                                        <span>
                                            <i class="fa-solid fa-trash text-red-500"></i>
                                        </span>

                                        Borrar
                                    </button>
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </aside>
            </li>

            @endforeach

            @else

            @endif
        </ul>
    </main>
</div>
