<div
    x-init="
        height= conversationElement.scrollHeight;
        $nextTick(()=>{
            conversationElement.scrollTop = height;
            document.getElementById('message-' + {{ $loadedMessages?->last()?->id }}).scrollIntoView();
        });
    "
    class="w-full overflow-hidden">
    <div class="border-b flex flex-col overflow-y-scroll grow h-full "> {{-- h-full para q se vaya pa bajo --}}


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
                    {{ $selectedConversation->getReceiver()->name }}
                </h6>
            </div>

        </header>

        {{-- Body --}}
        <main
            {{-- Cuando se sube hasta arriba el scroll, cargamos mas mensajes --}}
            @scroll="
                scropTop = $el.scrollTop;
                if(scropTop <= 0){
                    @this.call('loadMore');
                }
            "   

            @update-chat-height.window="

                newHeight = $el.scrollHeight

                oldHeight = height;
                $el.scrollTop = newHeight - oldHeight;

                height = newHeight;
                "
            id="conversartion"
            class="flex flex-col gap-3 p-2.5 overflow-y-auto flex-grow overscroll-contain overflow-x-hidden w-full my-auto">

            @if($loadedMessages)

            @php
                $previousMessage = null;
            @endphp

            @foreach ($loadedMessages as $key=> $message)
                
            {{-- Tener a la mano el mensaje anterior--}}
            @if($key > 0)
                @php
                    $previousMessage = $loadedMessages->get($key - 1);
                @endphp
            @endif

            <div @class([
                'max-w-[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2',
                'ml-auto' => $message->sender_id == auth()->id(),
                ])>
            
                {{-- Avatar --}}
                <div @class(['
                    shrink-0',
                    'invisible' => $previousMessage?->sender_id == $message->sender_id,
                    'hidden' => $message->sender_id == auth()->id(),
                    ])>

                    <x-avatar />

                </div>

                {{-- Cuerpo del mensaje --}}
                <div id="message-{{$message->id}}" 
                    @class([
                    'flex flex-wrap text-[15px] rounded-xl p-2.5 flex flex-col text-black bg-[#f6f6f8fb]',
                    'rounded-bl-none border border-gray-200/40' => !($message->sender_id == auth()->id()),
                    'rounded-br-none bg-blue-500/80 text-white' => $message->sender_id == auth()->id(),
                ])>

                    <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                        {{ $message->body }}
                    </p>

                    <div class="ml-auto flex gap-2">

                        <p @class([
                            'text-xs', 
                            'text-gray-500' => !($message->sender_id == auth()->id()),
                            'text-white' => $message->sender_id == auth()->id(),
                            ])>
                            {{ $message->created_at->format('g:i a') }}
                        </p>

                        {{-- Status del mensaje, solo se muestra si pertenece al usuario autenticado --}}

                        @if($message->sender_id == auth()->id())

                            <div>
                                {{-- doble tick --}}
                                @if ($message->isRead())
                                    <span @class('text-white')>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                            <path
                                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                        </svg>
                                    </span>
                                @else
                                    {{-- tick sola --}}
                                    <span @class('text-white')>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </span> 
                                @endif



                            </div>
                        @endif
                    </div>

                </div>
            </div>
            
            @endforeach
            @endif
        </main>

        {{-- Send message --}}
        <footer class="shrink-0 bg-white inset-x-0">
            <div class="p-2 border-t">
                <form 
                    x-data="{body: @entangle('body')}"
                    @submit.prevent="$wire.sendMessage"
                    method="POST"
                    autocapitalize="off">
                    @csrf

                    <input type="hidden" autocomplete="false" style="display: none;">

                    <div class="grid grid-cols-12">
                        <input 
                            x-model="body"
                            type="text" 
                            autocomplete="off" 
                            autofocus 
                            placeholder="Escribe un mensaje" 
                            maxlength="1700"
                            class="col-span-10 bg-gray-100 border-0 outline-0 focus:border-0 focus:ring-0 hover:ring-0 rounded-lg focus:outline-none">

                        <button
                            x-bind:disabled="!body.trim()" 
                            type="submit" 
                            class="col-span-2">
                            Enviar
                        </button>
                    </div>
                </form>

                @error('body')
                    <p>{{ $message }}</p>
                @enderror
            </div>
        </footer>

    </div>

    <script>
        //Para que se vayya al ultimo mensaje al cargar la pagina
        window.onload = function() {
            var conversationElement = document.getElementById('conversation');
            var lastMessageId = 'message-' + {{ $loadedMessages?->last()?->id }};
            var lastMessageElement = document.getElementById(lastMessageId);

            if (lastMessageElement) {
                lastMessageElement.scrollIntoView();
            }
        }
    </script>
</div>
