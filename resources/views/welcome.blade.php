<x-layout>
    <div class="absolute top-5 right-20">
        <button form="logout-form" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
            </svg>
        </button>
    </div>
    <header class="p-4 flex justify-center items-center h-[30vh]">
        <div class="flex flex-col justify-between items-center">
            <div class="text-gray-800">
                <h1 class="text-8xl">2Do</h1>
                <h2 class="text-center">Organise Yourself</h2>
            </div>
        </div>
    </header>
    <form action="/todos" class="mb-20" method="post">
        @csrf
        <div class="w-[650px] shadow-lg rounded-xl flex justify-between items-center bg-white/60">
            <input id="todo" name="todo" type="text" placeholder="Add your todo" required autocomplete="off"
                   class=" p-4 rounded-xl focus-visible:outline-0 flex-1 bg-white/60" >
            <button class="me-2 p-0 h-[30px] w-[30px] text-3xl bg-gray-100 flex flex-col justify-center items-center rounded-lg hover:border-2 text-gray-500">+</button>
        </div>
    </form>
    <div class="p-4 mx-20 w-5/6 h-svh bg-white rounded-t-2xl shadow-md">
        <ul class="w-4/6 mx-auto">
            @foreach($todos as $todo)
                <li class="mt-2 px-2 pb-1.5 border-b-2 border-gray-100 flex justify-between group">{{$todo->title}}<a href="/todos/{{$todo->id}}" class="text-white group-hover:text-black/60">Edit</a></li>
            @endforeach
        </ul>
    </div>
    <form action="/logout" method="post" id="logout-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
