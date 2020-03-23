<header class="container mb-10">
    <div class="flex w-full justify-between items-center py-5 px-5 font-black">
        <div class="text-2xl text-black">
            <h2>CORONAVÍRUS</h2>
        </div>
        <nav class="text-gray-600 text-2xl items-center flex sm:justify-between sm:w-full">
            @if($exibirBusca)
                <div class="flex justify-center w-full">
                    <input-busca/>
                    <span
                        class="mdi mdi-magnify mx-4 visible sm:invisible"
                        title="ícone de busca"
                    ></span>
                </div>
            @endif

            @if($exibirPerfil)
                <div class="invisible sm:visible">
                    <button disabled>Perfil</button>
                </div>
                <div>
                <span
                    class="mdi mdi-account-outline visible sm:invisible"
                    title="ícone de perfil"
                ></span>
                </div>
            @endif
        </nav>
    </div>
</header>
