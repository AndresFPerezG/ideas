<div class=" px-4 py-5 bg-slate-50 sm:p-6">
    <div class="flex flex-col items-center">
        
        @csrf

        <div class="flex flex-col my-4 w-4/5">
            <label for="title" class="block text-md font-bold text-slate-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 px-2 py-2 font-medium text-md block w-full shadow-sm sm:text-sm border border-slate-300 rounded-md" wire:model="title">
            @error('title') <span class="text-red-500 font-medium"> {{ $message }} </span>@enderror
        </div>
        <div class="flex flex-col my-4 w-4/5">
            <label for="author" class="block text-md font-bold text-slate-700">Author</label>
            <input type="text" name="author" id="author" class="mt-1 py-2 px-2 font-medium text-md block w-full shadow-sm sm:text-sm border border-slate-300 rounded-md" wire:model="author">
            @error('author') <span class="text-red-500 font-medium"> {{ $message }} </span>@enderror
        </div>
        <div class="flex flex-col my-4 w-4/5">
            <label for="description" class="block text-md font-bold text-slate-700">Description</label>
            <textarea class="mt-1 py-2 px-2 font-medium text-md block w-full shadow-sm sm:text-sm border border-slate-300 rounded-md" wire:model="description">{{ old('description') }}</textarea>
            @error('description') <span class="text-red-500 font-medium"> {{ $message }} </span>@enderror
        </div>
    </div>
</div>