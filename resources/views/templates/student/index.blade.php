<x-layout>
    <div class="flex justify-between items-center">
        <h1 class="font-bold text-2xl">Manage Students</h1>
        <button type="button"
            class="w-44 py-2.5 bg-blue-950 text-slate-50 rounded font-medium flex justify-center items-center transition-transform duration-75 active:scale-75 shadow-xl shadow-blue-950/25 active:shadow-transparent">
            <span class="material-icons mr-1.5">
                add
            </span>
            New Student
        </button>
    </div>
    <table class="mt-14 w-full">
        <thead class="border-b text-left">
            <th class="font-normal">#</th>
            <th class="font-normal">Photo</th>
            <th class="font-normal">Name</th>
            <th class="font-normal">Email</th>
            <th class="font-normal">Action</th>
        </thead>
        <tbody>
            <tr class="border-b">
                <td>1</td>
                <td class="py-3">
                    <div class="w-10 h-10 rounded-[50%] overflow-hidden">
                        <img src="https://placehold.co/400" alt="profile-picture" class="w-full h-full object-cover">
                    </div>
                </td>
                <td>Rangga Widya</td>
                <td>ranggawidyasastra@email.com</td>
                <td class="flex mt-4">
                    <a href="#" class="rounded bg-sky-400 px-2 transition-transform duration-75 active:scale-75">
                        <span class="material-icons">
                            <span class="text-[1.1rem]">visibility</span>
                        </span>
                    </a>
                    <button type="button"
                        class="rounded bg-amber-500 px-2 mx-5 transition-transform duration-75 active:scale-75">
                        <span class="material-icons">
                            <span class="text-[1.1rem]">edit</span>
                        </span>
                    </button>
                    <button type="button"
                        class="rounded bg-red-600 text-slate-100 px-2 transition-transform duration-75 active:scale-75">
                        <span class="material-icons">
                            <span class="text-[1.1rem]">delete</span>
                        </span>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</x-layout>
