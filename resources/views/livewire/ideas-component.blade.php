<div x-data="{ open: false}" class="flex flex-col text-gray-700">
    <div class="my-6">
        <button x-on:click="open = ! open" class="rounded-md px-4 py-2 text-white font-semibold hover:bg-slate-500 bg-slate-600">Add new Idea</button>
    </div>

    @if ( $successMessage )
        <div class="flex px-3 py-px font-semibold justify-between bg-teal-300 rounded-xl items-center mx-auto w-1/5 tracking-wider">
           <div class="flex items-center">
               <i class="fa-solid fa-check pr-4 font-bold"></i>
               {{ $successMessage }}
           </div>
            <div class="flex">
                <button type="button" wire:click="$set('successMessage', null)" class="font-semibold px-2 py-2 rounded-md hover:bg-teal-200"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>

    @elseif( $deleteMessage )
        <div class="flex px-3 py-px font-semibold justify-between bg-rose-300 rounded-xl items-center mx-auto w-1/5 tracking-wider">
            <div class="flex items-center">
                <i class="fa-solid fa-exclamation pr-4 font-bold"></i>
                {{ $deleteMessage }}
            </div>
            <div class="flex">
                <button type="button" wire:click="$set('deleteMessage', null)" class="font-semibold px-2 py-2 rounded-md hover:bg-rose-200"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>
    @endif

    <div x-show=" open ">
        @include("livewire.$view")
    </div>
    <h2 class="text-center text-6xl text-slate-600 underline underline-offset-4 decoration-4 decoration-rose-300 hover:decoration-teal-300 font-bold uppercase leading-loose italic tracking-wide antialiased mt-10 mb-10">Ideas</h2>
    <div class="rounded-lg">
        @include('livewire.table')
    </div>
</div>
