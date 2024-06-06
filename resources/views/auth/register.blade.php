<x-layout>
    <div class="w-[500px] flex flex-col justify-center bg-white p-[40px]">
        <h1 class="text-4xl font-semibold mb-2">Register Now</h1>
        <h2 class="mb-6 text-black/60">Already have an account? <a href="/login" class="text-blue-500 font-semibold">Log in</a></h2>
        <div class="">
            <form action="/register" method="post">
                @csrf
                <div class="flex mb-4">
                    <input id="name" name="name" type="text" placeholder="Enter your name" required
                           class=" p-4 rounded-xl focus-visible:outline-0 flex-1 bg-gray-50 border-gray-200 border" value="{{old('name')}}">
                    @error('name')<p class="ms-4 text-sm text-red-500">{{$message}}</p>@enderror
                </div>
                <div class="flex mb-4">
                    <input id="email" name="email" type="email" placeholder="Enter your email" required
                           class=" p-4 rounded-xl focus-visible:outline-0 flex-1 bg-gray-50 border-gray-200 border" value="{{old('email')}}">
                    @error('email')<p class="ms-4 text-sm text-red-500">{{$message}}</p>@enderror
                </div>
                <div class="flex mb-4">
                    <input id="password" name="password" type="password" placeholder="Enter your password" required
                           class=" p-4 rounded-xl focus-visible:outline-0 flex-1 bg-gray-50 border-gray-200 border" >
                    @error('password')<p class="ms-4 text-sm text-red-500">{{$message}}</p>@enderror
                </div>
                <div class="flex mb-6">
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Enter your confirmed password" required autocomplete="off"
                           class=" p-4 rounded-xl focus-visible:outline-0 flex-1 bg-gray-50 border-gray-200 border" >
                </div>
                <div class="flex justify-center items-center">
                    <button type="submit" class="w-3/5 py-2 px-4 rounded-xl bg-gray-100 hover:bg-gray-50 mx-auto font-semibold text-black/60">Register Now</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
