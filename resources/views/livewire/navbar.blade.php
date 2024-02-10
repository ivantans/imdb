{{-- Navbar --}}
<nav class="bg-gray-900 sticky top-0">
    {{-- Kolom navbar --}}
    <div class="py-3 px-5 flex flex-col gap-2 max-w-screen-xl mx-auto">
        {{-- Baris navbar --}}
        <div class="flex justify-between items-center">
            {{-- Logo --}}
            <div>
                <a class="text-white text-2xl font-bold" href=""><h1 class="">Movie</h1></a>
            </div>
            {{-- Link --}}
            <div class="hidden text-lg text-white justify-between gap-5 lg:flex">
                <a href="#" class="hover:text-blue-400 hover:scale-105">Terpopuler</a>
                <a href="#" class="hover:text-blue-400 hover:scale-105">Movies</a>
                <a href="#" class="hover:text-blue-400 hover:scale-105">Series</a>
                <a href="#" class="hover:text-blue-400 hover:scale-105">Episode</a>
                <a href="#" class="hover:text-blue-400 hover:scale-105">Character</a>
            </div>       
            {{-- Search bar --}}
            <div class="flex gap-1">
                <input wire:keydown.enter='searchItem' type="text" class="hidden rounded-l-lg w-full px-3 py-1 text-m sm:block focus:outline-blue-950 focus:border-blue-950 focus:ring-blue-950" placeholder="Cari disini...">
                <button wire:click='searchItem' class="hidden items-center bg-green-700 rounded-r-lg p-1 text-base sm:flex"><span class="material-symbols-outlined text-white">send</span></button>

                <button wire:click='searchToggle'class="flex items-center bg-slate-950 rounded-lg p-1 sm:hidden"><span class="material-symbols-outlined text-white">{{ $search?'cancel':'search' }}</span></button>
                <button wire:click='navToggle' class="flex items-center bg-slate-950 rounded-lg p-1 lg:hidden"><span class="material-symbols-outlined text-white">{{ $nav?'cancel':'menu' }}</span></button>
            </div>
        {{-- End baris navbar --}}
        </div>

        {{-- Toggle search--}}
        <div class="{{ $search?'flex items-center gap-2':'hidden' }} sm:hidden">
            <input wire:keydown.enter='searchItem' type="text" class="rounded w-full px-3 py-1 text-sm" placeholder="Cari disini...">
            <button wire:click='searchItem' class="flex items-center bg-green-700 rounded-lg p-1 text-base"><span class="material-symbols-outlined text-white">send</span></button>
        </div>

        {{-- Toggle link --}}
        <div class="{{ $nav?'flex flex-col':'hidden' }} text-white divide-y divide-gray-800 lg:hidden">
            <a href="" class="flex items-center gap-2 py-0.5">
                <span class="material-symbols-outlined">local_fire_department</span><span>Terpopuler</span>
            </a>
            <a href="" class="flex items-center gap-2 py-0.5">
                <span class="material-symbols-outlined">Movie</span><span>Movies</span>
            </a>
            <a href="" class="flex items-center gap-2 py-0.5">
                <span class="material-symbols-outlined">live_tv</span><span>Series</span>
            </a>
            <a href="" class="flex items-center gap-2 py-0.5">
                <span class="material-symbols-outlined">stack</span><span>Episode</span>
            </a>
            <a href="" class="flex items-center gap-2 py-0.5">
                <span class="material-symbols-outlined">groups</span><span>Character</span>
            </a>
        </div>
    {{-- End Kolom navbar --}}
    </div>
</nav>


