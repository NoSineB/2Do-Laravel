<x-layout>
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
