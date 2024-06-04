<x-layout>
    <div class="p-2">
        <h1 class="text-4xl mb-4">Login</h1>
        <form action="/register" method="post">
            @csrf
            <div>
                <label for="name">Your Name</label>
                <input id="name" name="name" type="text" placeholder="Joe" value="{{old('name')}}" required>
                @error('name')<p class="ms-4 text-sm text-red-500">{{$message}}</p>@enderror
            </div>
            <div>
                <label for="email">Your Email</label>
                <input id="email" name="email" type="email" placeholder="joe@example.com" required value="{{old('email')}}">
                @error('email')<p class="ms-4 text-sm text-red-500">{{$message}}</p>@enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')<p class="ms-4 text-sm text-red-500">{{$message}}</p>@enderror
            </div>
            <div>
                <label for="password_confirmation">Confirm Your Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                @error('password_confirmation')<p class="ms-4 text-sm text-red-500">{{$message}}</p>@enderror
            </div>

            <a href="/login" class="me-2 hover:underline">Login</a>
            <button type="submit" class="hover:underline">Register Now</button>
        </form>
    </div>
</x-layout>
