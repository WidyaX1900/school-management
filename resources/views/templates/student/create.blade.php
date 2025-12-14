<x-layout>
    <h1 class="font-bold text-2xl">Add New Students</h1>
    <form id="addStudentForm" class="flex mt-5 gap-32 items-center">
        @csrf

        {{-- Upload photo element --}}
        <div class="flex flex-col items-center gap-3">
            <input type="file" name="photo" id="photo" accept="image/*" hidden>
            <h3>Upload Student's Photo</h3>
            <div id="photoPlaceholder">
                <div
                    class="w-44 h-44 bg-gray-100 border-4 border-blue-950 flex flex-col justify-center items-center rounded-[50%] mb-2 overflow-hidden">
                    <div class="material-icons text-8xl text-gray-500">
                        person
                    </div>
                </div>
            </div>
            <button type="button"
                class="w-44 py-2.5 bg-blue-100 text-blue-800 rounded-3xl transition-transform duration-75 active:scale-75">
                Upload Photo
            </button>
            <p>Format: JPG, JPEG, PNG, WEBP</p>
        </div>

        {{-- Form input element --}}
        <div class="flex flex-col gap-5 w-2/4">
            <div class="relative">
                <input type="text" id="name" name="name" placeholder=" "
                    class="peer block w-full appearance-none bg-transparent rounded outline-none focus:ring-2 focus:ring-blue-950 focus:outline-none">

                <label for="name" id="name-label"
                    class="absolute left-2 bg-white px-3 top-2 origin-left -translate-y-1/2 text-gray-500 transition-all duration-200
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
                    class="absolute left-2 bg-white px-3 top-2 origin-left -translate-y-1/2 text-gray-500 transition-all duration-200
                 peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:translate-y-0
                 peer-focus:top-0 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-blue-950
                 peer-[:not(:placeholder-shown)]:top-0 peer-[:not(:placeholder-shown)]:-translate-y-4 peer-[:not(:placeholder-shown)]:scale-75">
                    Email
                </label>
            </div>
            <div class="relative">
                {{-- Dropdown --}}
                <button type="button"
                    class="js-dropdown-btn w-full block text-left rounded border border-gray-500 p-2 cursor-pointer bg-white"
                    data-target="majorDropdown">
                    --- Select a Major ---
                </button>
                <div id="majorDropdown"
                    class="js-dropdown absolute top-11 left-0 w-full rounded border border-gray-500 p-3 bg-white flex flex-col gap-2 hidden z-50">
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
                    class="js-dropdown-btn w-full block text-left rounded border border-gray-500 p-2 cursor-pointer bg-white"
                    data-target="classDropdown">
                    --- Select a Class ---
                </button>
                <div id="classDropdown"
                    class="js-dropdown absolute top-11 left-0 w-full rounded border border-gray-500 p-3 bg-white flex flex-col gap-2 hidden z-50">
                    <label for="ab156"
                        class="flex items-center justify-between hover:bg-gray-300 p-2.5 rounded cursor-pointer">
                        AB156
                        <input type="radio" id="ab156" name="major" value="1">
                    </label>
                </div>
            </div>
            <div class="flex items-center">
                <x-mycomponents.primary-button class="w-44 px-5 py-2.5 font-medium text-center">
                    Add Student
                </x-mycomponents.primary-button>
            </div>
        </div>
    </form>
</x-layout>

@vite(['resources/js/student/front-end/dropdown.js'])
