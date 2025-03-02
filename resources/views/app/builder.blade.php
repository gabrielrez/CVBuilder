<x-layout>
    <main class="mt-10 max-w-6/12 mx-auto">
        <h1 class="font-[inter] font-bold text-7xl text-center mt-10">Fill in your <span class="bg-gradient-to-r from-[#68ac99] to-[#8592bc] bg-clip-text text-transparent italic">Details</span></h1>
        
        <div class="w-full max-w-xl mx-auto mt-10">
            <div class="w-full bg-gray-300 rounded-full h-2">
                <div class="bg-gradient-to-r from-[#68ac99] to-[#8592bc] h-2 rounded-full w-2"></div>
            </div>
            <p class="text-center mt-3 text-gray-700 font-medium">0% Complete</p>
        </div>

        <form class="mt-12 font-[inter] w-full">
            <div class="flex items-center gap-10 w-full">
                <div class="flex justify-center items-center border-2 border-[#E2EAEF] cursor-pointer w-full max-w-48 h-48 rounded-3xl text-8xl text-[#ACC0D1]">
                    <i class="fa-solid fa-camera"></i>
                </div>
                <div class="w-full">
                    <div class="w-full">
                        <label for="first_name font-[inter]">*First Name:</label>
                        <input type="text" name="first_name" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2" required>
                    </div>
                    <div class="w-full mt-6">
                        <label for="first_name font-[inter]">*Last Name:</label>
                        <input type="text" name="first_name" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2" required>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <div class="w-full flex items-baseline gap-6">
                    <div class="w-full">
                        <label for="first_name font-[inter]">Email:</label>
                        <input type="email" name="first_name" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2">
                    </div>
                    <div class="w-full">
                        <label for="first_name font-[inter]">*Phone number:</label>
                        <input type="text" name="first_name" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2" required>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <div class="w-full flex items-baseline gap-6">
                    <div class="w-full">
                        <label for="first_name font-[inter]">Address:</label>
                        <input type="email" name="first_name" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2">
                    </div>
                    <div class="w-full">
                        <label for="first_name font-[inter]">City:</label>
                        <input type="text" name="first_name" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2">
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-baseline gap-5">
                <a href="https://github.com/gabrielrez/CVMaker" target="_blank" class="mt-16 w-max bg-[#E2EAEF] hover:bg-[#ACC0D1] px-10 py-4 rounded-2xl font-[inter] font-normal text-lg text-[#09100d] cursor-pointer transition-all"><i class="fa-solid fa-arrow-right mr-3 rotate-180"></i>Previous</a>
                <button class="my-12 w-max bg-[#68ac99] px-10 py-4 rounded-2xl font-[inter] font-semibold text-lg text-[#09100d] cursor-pointer transition-all bg-[linear-gradient(to_right,#68ac99,#68ac99)] hover:bg-[linear-gradient(to_right,#68ac99,#8592bc)]">Next<i class="fa-solid fa-arrow-right ml-3"></i></button>
            </div>
        </form>
    </main>
</x-layout>