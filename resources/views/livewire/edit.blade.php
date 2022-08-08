<div class="flex flex-col">
    <div class="shadow-xl shadow-teal-500/30 border border-t border-teal-400 bg-slate-50 overflow-hidden rounded-md w-3/6 mx-auto mb-10">
        <div>
            <h2 class="text-center text-3xl text-slate-600 underline underline-offset-4 decoration-4 decoration-rose-300 hover:decoration-teal-300 font-bold uppercase leading-loose italic tracking-wide antialiased mt-6">Edit your idea</h2>

            @include('livewire.form')
        </div>
        <div class="flex justify-end">
            <div class="flex justify-end mr-6 my-6 w-5/4">
                <button wire:click="update" class="px-4 py-2 font-medium bg-teal-400 hover:bg-teal-300 rounded-md mx-2 my-2">Update</button>
            </div>
            <div class="flex justify-end mr-6 my-6 w-5/4 bg-slate-50">
                <button wire:click="default" class="px-4 py-2 font-medium border-2 border-rose-200 hover:bg-rose-300 rounded-md mx-2 my-2">Cancel</button>
            </div>
        </div>
    </div>
</div>