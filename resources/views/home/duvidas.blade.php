<div class="text-center text-white w-full flex flex-col items-center py-10 px-6 lg:py-16 sm:px-12 bg-esp-orange leading-relaxed mt-16">
    <div class="container">
        <div class="text-2xl sm:text-5xl font-black capitalize mb-10"><h3>DÚVIDAS</h3></div>
        <div class="text-xl sm:text-2xl text-justify">
            <p>
                Profissionais de saúde podem tirar dúvidas e notificar casos suspeitos através do Centro de Informações
                Estratégicas em Vigilância em Saúde
            </p>
        </div>
    </div>

    @php
        $boards = [
            ['icon' => 'phone', 'text' => '+55 85 3101-4860'],
            ['icon' => 'cellphone-iphone', 'text' => '+55 85 98724-0455'],
            ['icon' => 'email', 'text' => 'cievsceara@gmail.com'],
        ];
    @endphp

    <div class="container flex flex-col md:flex-row md:justify-between mt-6">
        @foreach($boards as $board)
            <div class="bg-white rounded-xl flex flex-col items-center lg:items-start w-full my-5 md:mx-4 px-2 lg:px-5 pb-6 pt-8">
                <div class="bg-esp-orange text-white rounded-full w-40 h-40 md:w-20 md:h-20 mb-10 md:mb-5 flex justify-center items-center">
                    <span
                        title="Imagem de um {{$board['icon']}}"
                        class="mdi mdi-{{$board['icon']}} text-7xl md:text-3xl"
                    ></span>
                </div>
                <div class="text-esp-orange text-2xl sm:text-4xl md:text-lg xl:text-2xl lg:self-end font-black"><p>{{$board['text']}}</p></div>
            </div>
        @endforeach
    </div>
</div>
