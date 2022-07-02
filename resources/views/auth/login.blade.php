<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="application website logo cloud" />
    <title>Tailus blocks | application website logo cloud</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap"
        rel="stylesheet"
    />
</head>
<body>
<div class="relative py-16">
    <img src="assets/img/bg2.webp" class="fixed inset-0 rotate-0 blur-xl" alt="background" />

    <div class="container relative m-auto px-6 text-gray-500 md:px-12 xl:px-40">
        <div class="m-auto space-y-8 md:w-8/12 lg:w-6/12 xl:w-6/12">
            <img src="assets/img/tailus.svg" loading="lazy" class="ml-4 w-36" alt="tailus logo" />
            <div class="rounded-xl border bg-white bg-opacity-80 shadow-xl backdrop-blur-2xl">
                <div class="p-6 sm:p-16">
                    <h2 class="mb-8 text-2xl font-bold text-cyan-900">Sign in to your account</h2>
                    <form   method="POST" action="{{ route('login') }}" class="space-y-8">
                        @csrf
                        <div class="space-y-2">
                            <label for="email" class="text-gray-700">Email</label>
                            <input
                                type="email" name="email" :value="old('email')" required autofocus
                                class="focus:outline-none block w-full rounded-md border border-gray-800 border-opacity-20
                                 bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2
                                 invalid:ring-red-400 focus:ring-2 focus:ring-cyan-300"
                            />
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="pwd" class="text-gray-700">Password</label>
                                <button class="-mr-2 p-2" type="reset">
                                    <span class="text-sm text-cyan-500">Forgot your password ?</span>
                                </button>
                            </div>
                            <input
                                type="password"
                                name="password"
                                required autocomplete="current-password"
                                class="focus:outline-none block w-full rounded-md border border-gray-800 border-opacity-20
                                 bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2
                                  invalid:ring-red-400 focus:ring-2 focus:ring-cyan-300"
                            />
                        </div>

                        <button
                            type="submit"
                            class="w-full rounded-md bg-cyan-600 py-3 px-6 focus:bg-cyan-700 active:bg-cyan-500"
                        >
                            <span class="text-white">Continue</span>
                        </button>

                        <p class="border-t pt-6 text-sm">
                            Don't have an account ?
                            <a href="#" class="text-cyan-500">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="space-x-4 text-center md:text-white">
                <span>&copy; qcd-link.ru</span>
                <a href="#" class="text-sm hover:text-cyan-100">Contact</a>
                <a href="#" class="text-sm hover:text-cyan-100">Privacy & Terms</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
