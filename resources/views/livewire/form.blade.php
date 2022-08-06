<div class="my-6">
    <div class="drop-shadow-md overflow-hidden rounded-md w-3/6 mx-auto">
        <div class="px-4 py-5 bg-slate-50 sm:p-6">
            <div class="flex flex-col items-center">

                <h2 class="text-center text-3xl text-slate-600 underline underline-offset-4 decoration-4 decoration-rose-300 hover:decoration-teal-300 font-bold uppercase leading-loose italic tracking-wide antialiased mb-10">Make the difference</h2>

                <div class="flex flex-col my-4 w-4/5">
                    <label for="title" class="block text-sm font-medium text-slate-700">Title</label>
                    <input type="text" name="title" id="title" class="mt-1 py-2 block w-full shadow-sm sm:text-sm border border-slate-200 rounded-md" wire:model="title">
                    @error('title') <span class="text-red"> {{ $message }}</span>@enderror
                </div>
                <div class="flex flex-col my-4 w-4/5">
                    <label for="author" class="block text-sm font-medium text-slate-700">Author</label>
                    <input type="text" name="author" id="author" class="mt-1 py-2 block w-full shadow-sm sm:text-sm border border-slate-200 rounded-md" wire:model="author">
                    @error('author') <span class="text-red"> {{ $message }}</span>@enderror
                </div>
                <div class="flex flex-col my-4 w-4/5">
                    <label for="description" class="block text-sm font-medium text-slate-700">Description</label>
                    <textarea class="mt-1 py-2 block w-full shadow-sm sm:text-sm border border-slate-200 rounded-md" wire:model="description"></textarea>
                    @error('description') <span class="text-red"> {{ $message }}</span>@enderror
                </div>

            </div>

            <div class="flex justify-end my-6 w-full">
                <button wire:click="store" class="rounded-md px-6 py-2 bg-teal-400 hover:bg-teal-500">Save</button>
            </div>

        </div>
    </div>          
</div>