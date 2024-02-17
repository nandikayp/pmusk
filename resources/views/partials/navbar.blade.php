<nav
    class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 dark:border-gray-600"
>
    <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
    >
        <a
            href="https://flowbite.com/"
            class="flex items-center space-x-3 rtl:space-x-reverse"
        >
            <img
                src="https://flowbite.com/docs/images/logo.svg"
                class="h-8"
                alt="Flowbite Logo"
            />
            <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                >Classroom</span
            >
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button
                type="button"
                data-modal-target="authentication-modal"
                data-modal-toggle="authentication-modal"
                class="text-white bg-blue-700 me-3 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
                Login
            </button>
            <a href="/register">
                <button
                    type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Register
                </button>
            </a>
            <button
                data-collapse-toggle="navbar-sticky"
                type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky"
                aria-expanded="false"
            >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 17 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"
                    />
                </svg>
            </button>
        </div>
        <div
            class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
            id="navbar-sticky"
        >
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
            >
                <li>
                    <a
                        href="#"
                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                        aria-current="page"
                        >Home</a
                    >
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >About</a
                    >
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >Services</a
                    >
                </li>
                <li>
                    <a
                        href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >Contact</a
                    >
                </li>
            </ul>
        </div>
    </div>
</nav>
<div
    id="authentication-modal"
    tabindex="-1"
    aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
>
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div
            class="relative bg-white border-4 border-rose-600 rounded-lg shadow dark:bg-gray-700"
        >
            <button
                type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="authentication-modal"
            >
                <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                    />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3
                    class="mb-4 text-xl font-medium text-rose-500 dark:text-white"
                >
                    Silahkan Login
                </h3>
                @if (session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{ session("error") }}
                </div>
                @endif
                <form
                    action="{{ route('actionlogin') }}"
                    class="space-y-6"
                    method="POST"
                >
                    @csrf
                    <div>
                        <label
                            for="email"
                            class="block mb-2 text-sm font-medium text-slate-500 dark:text-white"
                            >Masukan Email</label
                        >
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="bg-gray-50 border border-rose-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="name@email.com"
                            required
                        />
                    </div>
                    <div>
                        <label
                            for="password"
                            class="block mb-2 text-sm font-medium text-slate-500 dark:text-white"
                            >Masukan Password</label
                        >
                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="••••••••"
                            class="bg-gray-50 border border-rose-700 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required
                        />
                    </div>
                    <button
                        type="submit"
                        class="w-full text-slate-50 bg-rose-700 hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        Login to your account
                    </button>
                    <div
                        class="text-sm font-medium text-slate-900 dark:text-gray-300"
                    >
                        Belum Punya Akun?
                        <a
                            href="/register"
                            class="text-red-600 hover:underline dark:text-blue-500"
                            >buat akun</a
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
