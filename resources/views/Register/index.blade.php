<x-layouts>

    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center items-center">
        <div
            class="max-w-screen-lg m-7 sm:m-10 bg-white shadow xs:rounded-lg flex flex-col md:flex-row justify-center flex-1">

            <div class="w-full bg-red-100 text-center hidden md:flex items-center sm:p-14">
                <div class="w-full">
                    <img src="../img/register.svg" class="w-full object-cover" alt="Login Illustration">
                </div>
            </div>

            <div class="w-full p-7 sm:p-14 my-auto">
                <div class="mb-7 text-center">
                    <h3 class="text-3xl font-bold uppercase">REGISTRATION</h3>
                </div>

                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input
                        class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                        type="text" placeholder="Name" name="name" aria-label="Name"
                        value="{{ old('name') }}" />
                    <p class="mt-1 text-red-600 text-sm">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </p>
                    <input
                        class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                        type="email" placeholder="Email" name="email" aria-label="Email"
                        value="{{ old('email') }}" />
                    <p class="mt-1 text-red-600 text-sm">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </p>
                    <input
                        class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                        type="text" placeholder="Username" name="username" aria-label="Username"
                        value="{{ old('username') }}" />
                    <p class="mt-1 text-red-600 text-sm">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </p>
                    <div class="relative" x-data="{ showPass: false }">
                        <input
                            class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                            :type="showPass ? 'text' : 'password'" type="password" placeholder="Password"
                            name="password" aria-label="Password" />
                        <button type="button" @click="showPass = !showPass"
                            class="absolute right-6 top-6 text-gray-600">
                            <svg x-show="!showPass" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <svg x-show="showPass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                        </button>
                    </div>
                    <p class="mt-1 text-red-600 text-sm transition">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p>

                    <button
                        class="mt-5 font-semibold bg-red-600 text-white w-full py-3 rounded-lg hover:bg-red-500 focus:bg-red-700 focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-200 flex items-center justify-center focus:shadow-outline focus:outline-none">
                        <span class="font-bold">REGISTER</span>
                    </button>

                    <p class="mt-6 text-sm text-gray-600 text-center">
                        Already have an account?
                        <a href="/login" class="font-bold text-red-600 hover:underline">Login</a>
                    </p>
                </form>

            </div>

        </div>
    </div>

</x-layouts>
