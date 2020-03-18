@extends('layouts.tailwind.app')

<div class="flex flex-col w-full items-center">
    @include('question-answer.header')
    @include('question-answer.canihelpyou')
    <div class="container mt-10">
        <p class="w-full text-2xl">
            Dúvidas mais frequentes:
        </p>
        <div class="flex flex-wrap justify-between w-full">
            @for($a=0; $a < 3; $a++)
                <div class="p-4 w-1/2">
                    <div class="border border-gray-200 rounded-lg">
                        <div class="w-full h-32 flex justify-center">
                            <img
                                src="https://i0.wp.com/guiadafarmacia.com.br/wp-content/uploads/2020/03/shutterstock_526821535.jpg?resize=702%2C459&ssl=1"
                                alt="imagem-ciringa-teste-vacina-coronavirus"
                                style="height: 100%; width: 100%;"
                            />
                        </div>
                        <div class="w-full bg-gray-100 p-5">
                            <p class="text-3xl font-bold border-b border-gray-200 pb-2 mb-2">Vacinas para o corona</p>
                            <p class="text-2xl">
                                Para evitar aglomerações de idosos nas Unidades Básicas de Saúde (UBSs) durante a...
                            </p>
                            <div class="flex justify-end mt-6">
                                <button
                                    class="px-6 py-3 border-2 rounded-r-full rounded-l-full border-gray-700 text-gray-700 hover:shadow hover:text-white hover:boder-gray-700 hover:bg-gray-700 text-2xl"
                                    type="button"
                                >Ver mais
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
