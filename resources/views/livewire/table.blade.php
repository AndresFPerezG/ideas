<h2 class="text-center text-6xl text-slate-600 underline underline-offset-4 decoration-4 decoration-rose-300 hover:decoration-teal-300 font-bold uppercase leading-loose italic tracking-wide antialiased mb-10">Ideas</h2>

<div class="flex flex-col">
    <table class="table-auto drop-shadow-lg rounded-lg bg-slate-50">
        <thead>
            <tr class="border-b-2">
                <th class="py-2 px-4 text-start">ID</th>
                <th class="py-2 px-4 text-start">Title</th>
                <th class="py-2 px-4 text-start">Description</th>
                <th class="py-2 px-4 text-start">Author</th>
                <th class="py-2 px-4 text-center"></th>

            </tr>
        </thead>
        <tbody>
            @foreach($ideas as $idea)
            <tr class="border-b">
                <td class="py-2 px-4 text-start divide-y">{{ $idea->id}}</td>
                <td class="py-2 px-4 text-start">{{ $idea->title}}</td>
                <td class="py-2 px-4 text-start">{{ $idea->description}}</td>
                <td class="py-2 px-4 text-start">{{ $idea->author}}</td>
                <td class="flex justify-end">
                    <button class="px-4 py-2 bg-teal-400 hover:bg-teal-500 hover:border-2  hover:border-teal-200 rounded-md mx-2 my-2">
                        Edit
                    </button>
                    <button wire:click="destroy({{ $idea->id }})" class="px-4 py-2 border-2 border-rose-200 hover:bg-rose-300 rounded-md mx-2 my-2">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="py-4">
        {{ $ideas->links() }}
    </div>
</div>