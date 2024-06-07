<x-layout>
    <div class="w-[500px] flex flex-col justify-center bg-white p-[40px] rounded-2xl shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-4xl font-semibold">Edit your todo</h1>
            <button type="submit" class="py-2 px-4 rounded-xl bg-gray-100 hover:bg-gray-50 font-semibold text-red-400" form="delete-todo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg>
            </button>
        </div>
        <div class="">
            <form action="/todos/{{$todo->id}}" method="post">
                @csrf
                @method('PATCH')
                <div class="flex mb-4">
                    <input id="todo" name="todo" type="text" placeholder="Edit your todo" required
                           class=" p-4 rounded-xl focus-visible:outline-0 flex-1 bg-gray-50 border-gray-200 border" value="{{$todo->title}}" autocomplete="off">
                    @error('todo')<p class="ms-4 text-sm text-red-500">{{$message}}</p>@enderror
                </div>
                <div class="flex justify-between items-center">
                    <a href="/" class="w-2/5 py-2 px-4 rounded-xl bg-gray-100 hover:bg-gray-50 font-semibold text-black/60 text-center">Cancel</a>
                    <button type="submit" class="w-2/5 py-2 px-4 rounded-xl bg-green-100 hover:bg-green-50 font-semibold text-black/60">Save</button>
                </div>
            </form>
        </div>
    </div>
    <form action="/todos/{{$todo->id}}" method="post" id="delete-todo">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
