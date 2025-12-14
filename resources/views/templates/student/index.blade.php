<x-layout>
    <div class="flex justify-between items-center">
        <h1 class="font-bold text-2xl">Manage Students</h1>
        <a href="/student/create">
            <x-mycomponents.primary-button type="button" class="w-44 py-2.5 font-medium flex justify-center items-center">
                <span class="material-icons mr-1.5">
                    add
                </span>
                New Student
            </x-mycomponents.primary-button>
        </a>
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
                    <a href="#">
                        <x-mycomponents.info-button type="button">
                            <span class="material-icons">
                                <span class="text-[1.1rem]">visibility</span>
                            </span>
                        </x-mycomponents.info-button>
                    </a>
                    <x-mycomponents.warning-button type="button">
                        <span class="material-icons">
                            <span class="text-[1.1rem]">edit</span>
                        </span>
                    </x-mycomponents.warning-button>
                    <x-mycomponents.danger-button type="button">
                        <span class="material-icons">
                            <span class="text-[1.1rem]">delete</span>
                        </span>
                    </x-mycomponents.danger-button>
                </td>
            </tr>
        </tbody>
    </table>
</x-layout>
