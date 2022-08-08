<div class="flex flex-col text-gray-700">
    <div class="my-6">
        <button class="rounded-md px-4 py-2 text-white font-semibold hover:bg-slate-500 bg-slate-600">Add new Idea</button>
    </div>
    <div>
        @include("livewire.$view")
    </div>
    <h2 class="text-center text-6xl text-slate-600 underline underline-offset-4 decoration-4 decoration-rose-300 hover:decoration-teal-300 font-bold uppercase leading-loose italic tracking-wide antialiased mt-10 mb-10">Ideas</h2>
    <div class="rounded-lg">
        @include('livewire.table')
    </div>
</div>
