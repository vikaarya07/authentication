<x-layouts>

    <section id="home" class="my-20">
        <div
            class="max-w-5xl mx-auto py-20 flex flex-col justify-center space-y-4 bg-sky-100 text-black rounded-lg shadow-sm">
            <div class="flex flex-col items-center space-y-4">
                @auth
                    <h2 class="text-3xl font-bold">Selamat Datang, {{ auth()->user()->name }}</h2>
                    <h1 class="pt-20 text-3xl font-bold">VIKA ARYA PRASETYA</h1>
                    <h3 class="text-2xl font-semibold">Web Developer</h3>
                @endauth
                @guest
                    <h2 class="text-3xl font-bold">Silakan login untuk melanjutkan.</h2>
                @endguest
            </div>
            <div class="pt-20 flex flex-col items-center">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit"
                            class="py-2 px-3 flex space-x-2 text-white bg-red-500 font-semibold rounded-lg hover:bg-red-400">
                            <span>Logout</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                            </svg>
                        </button>
                    </form>
                @endauth
                @guest
                    <a href="/login"
                        class="py-2 px-3 flex space-x-2 text-white bg-sky-500 font-semibold rounded-lg hover:bg-sky-400">
                        <span>Login</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                        </svg>
                    </a>
                @endguest
            </div>
        </div>
        <div class="pt-20 flex flex-col items-center">
            <p>Create with ❤️ by vikaarya07</p>
        </div>
    </section>

</x-layouts>
