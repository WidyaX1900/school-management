<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Management System</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>

<body>
    {{-- Sidebar --}}
    <aside class="fixed top-0 left-0 w-1/5 h-full p-5 bg-blue-950 text-slate-200">
        <h1 class="text-center text-xl font-semibold">School Management System</h1>
        <ul class="mt-8">
            <x-navlink href="/">
                <span class="material-icons -translate-y-0.5 me-1">
                    home
                </span>
                Dashboard
            </x-navlink>
            <x-navlink href="/student">
                <span class="material-icons -translate-y-0.5 me-1">
                    group
                </span>
                Students
            </x-navlink>
        </ul>
    </aside>

    {{-- Navbar --}}
    <nav class="fixed top-0 right-0 w-4/5 px-3 py-4 flex justify-between items-center text-blue-950 bg-white">
        <div class="cursor-pointer">
            <span class="material-icons font-bold">
                menu
            </span>
        </div>
        <div class="flex items-center me-4 cursor-pointer">
            <div class="w-10 h-10 rounded-[50%] overflow-hidden me-2">
                <img src="https://placehold.co/400" alt="profile-picture" class="w-full h-full object-cover">
            </div>
            <a href="#" class="text-blue-950">Hi, Rangga</a>
        </div>
    </nav>

    {{-- Content --}}
    <div class="ms-64 mt-28 px-3">
        {{ $slot }}
    </div>
</body>

</html>
