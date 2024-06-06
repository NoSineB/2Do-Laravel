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
        <div class="w-[650px] shadow-lg rounded-xl flex justify-between items-center">
            <input id="todo" name="todo" type="text" placeholder="Add your todo" required autocomplete="off"
                   class=" p-4 focus-visible:outline-0 flex-1" >
            <button class="me-2 p-2 h-[40px] w-[40px] text-3xl bg-gray-100 flex justify-center items-center rounded-lg hover:border-2">+</button>
        </div>
    </form>
    <div class="p-4">
        <h2 class="text-lg font-bold">To-Do</h2>
        <ul>
            @foreach($todos as $todo)
                <li class="mt-2">{{$todo->title}}</li>
            @endforeach
        </ul>
    </div>
    <form action="/logout" method="post" id="logout-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
