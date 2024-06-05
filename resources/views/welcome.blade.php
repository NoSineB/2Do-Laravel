<x-layout>
    <header class="p-4">
        <h1 class="text-3xl font-bold">
            Hello, {{ auth()->user()->name }}
        </h1>
        <button type="submit" form="logout-form">Logout</button>
    </header>
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
