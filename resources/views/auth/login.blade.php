<x-layout>
    <div class="p-2">
       <h1 class="text-4xl mb-4">Login</h1>
        <form action="/login" method="post">
            @csrf
            <div>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="joe@example.com">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>

            <a href="/register" class="me-2 hover:underline">Register Now</a>
            <button type="submit" class="hover:underline">Login</button>
        </form>
    </div>
</x-layout>
