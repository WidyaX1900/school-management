<x-layout>
    <div class="flex justify-between items-center">
        <h1 class="font-bold text-2xl">Manage Students</h1>
        <x-mycomponents.primary-button type="button" id="addStudentBtn" class="w-44 py-2.5 font-medium flex justify-center items-center">
            <span class="material-icons mr-1.5">
                add
            </span>
            New Student
        </x-mycomponents.primary-button>
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

{{-- Modal --}}
<x-mycomponents.modal id="addStudentModal" class="flex justify-center items-start pt-5">
    <h2 class="text-xl font-bold mb-5">Add Student</h2>
    <form id="addStudentForm" class="flex flex-col gap-5">
        @csrf
        <div class="relative">
            <input type="text" id="name" name="name" placeholder=" "
                class="peer block w-full appearance-none bg-transparent rounded outline-none focus:ring-2 focus:ring-blue-950 focus:outline-none">

            <label for="name" id="name-label"
                class="absolute left-2 bg-slate-50 px-3 top-2 origin-left -translate-y-1/2 text-gray-500 transition-all duration-200
             peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:translate-y-0
             peer-focus:top-0 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-blue-950
             peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:-translate-y-4 peer-[:not(:placeholder-shown)]:scale-75">
                Full Name
            </label>
        </div>
        <div class="relative">
            <input type="text" id="email" name="email" placeholder=" "
                class="peer block w-full appearance-none bg-transparent rounded outline-none focus:ring-2 focus:ring-blue-950 focus:outline-none"
                inputmode="email">

            <label for="email" id="email-label"
                class="absolute left-2 bg-slate-50 px-3 top-2 origin-left -translate-y-1/2 text-gray-500 transition-all duration-200
             peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:translate-y-0
             peer-focus:top-0 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-blue-950
             peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:-translate-y-4 peer-[:not(:placeholder-shown)]:scale-75">
                Email
            </label>
        </div>
        <div class="relative">
            {{-- Dropdown --}}
            <button type="button"
                class="js-dropdown-btn w-full block text-left rounded border border-gray-500 p-2 cursor-pointer bg-slate-50"
                data-target="majorDropdown">
                --- Select a Major ---
            </button>
            <div id="majorDropdown"
                class="js-dropdown absolute top-11 left-0 w-full rounded border border-gray-500 p-3 bg-slate-50 flex flex-col gap-2 hidden z-50">
                <label for="computer-science"
                    class="flex items-center justify-between hover:bg-gray-300 p-2.5 rounded cursor-pointer">
                    Computer Science
                    <input type="radio" id="computer-science" name="major" value="1">
                </label>
                <label for="accounting"
                    class="flex items-center justify-between hover:bg-gray-300 p-2.5 rounded cursor-pointer">
                    Accounting
                    <input type="radio" id="accounting" name="major" value="2">
                </label>
                <label for="psychology"
                    class="flex items-center justify-between hover:bg-gray-300 p-2.5 rounded cursor-pointer">
                    Psychology
                    <input type="radio" id="psychology" name="major" value="3">
                </label>
                <label for="chemistry"
                    class="flex items-center justify-between hover:bg-gray-300 p-2.5 rounded cursor-pointer">
                    Chemistry
                    <input type="radio" id="chemistry" name="major" value="4">
                </label>
            </div>
        </div>
        <div class="relative">
            {{-- Dropdown --}}
            <button type="button"
                class="js-dropdown-btn w-full block text-left rounded border border-gray-500 p-2 cursor-pointer bg-slate-50"
                data-target="classDropdown">
                --- Select a Class ---
            </button>
            <div id="classDropdown"
                class="js-dropdown absolute top-11 left-0 w-full rounded border border-gray-500 p-3 bg-slate-50 flex flex-col gap-2 hidden z-50">
                <label for="ab156"
                    class="flex items-center justify-between hover:bg-gray-300 p-2.5 rounded cursor-pointer">
                    AB156
                    <input type="radio" id="ab156" name="major" value="1">
                </label>
            </div>
        </div>
        <div>
            <label for="photo">Upload Student's Photo</label>
            <input type="file" name="photo" id="photo" class="hidden">
            <button type="button" id="photoUploadBtn"
                class="w-full h-28 rounded flex flex-col justify-center items-center bg-gray-300 border-4 border-gray-400 text-gray-400">
                <span class="material-icons text-5xl">
                    image
                </span>
                Click or drag photo
            </button>
        </div>
        <div class="flex justify-end items-center">
            <button type="button" id="dismissStudentModalBtn" class="text-blue-950 mr-5 cursor-pointer transition-transform duration-75 active:scale-75">Cancel</button>
            <x-mycomponents.primary-button class="font-medium flex items-center px-5 py-2">
                Save
            </x-mycomponents.primary-button>
        </div>
    </form>
</x-mycomponents.modal>

@vite([
    'resources/js/student/front-end/dropdown.js',
    'resources/js/student/front-end/add-student-modal.js',
])
