<x-layout>
    <div class="p-4">
        <h1 class="text-3xl font-bold">
            Hello, {{ auth()->user()->name }}
        </h1>
        <button type="submit" form="logout-form">Logout</button>
    </div>
    <form action="/logout" method="post" id="logout-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
