<div class="step hidden">
    <div class="flex items-center gap-10 w-full">
        <div class="flex justify-center items-center border-2 border-[#E2EAEF] cursor-pointer w-full max-w-48 h-48 rounded-3xl text-8xl text-[#ACC0D1]">
            <i class="fa-solid fa-camera"></i>
        </div>
        <div class="w-full">
            <div class="w-full">
                <label for="first_name" font-[inter]">*First Name:</label>
                <input type="text" name="first_name" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2" required>
            </div>
            <div class="w-full mt-6">
                <label for="last_name">*Last Name:</label>
                <input type="text" name="last_name" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2" required>
            </div>
        </div>
    </div>
    <div class="mt-6">
        <div class="w-full flex items-baseline gap-6">
            <div class="w-full">
                <label for="email font-[inter]">Email:</label>
                <input type="email" name="email" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2">
            </div>
            <div class="w-full">
                <label for="phone">*Phone number:</label>
                <input type="text" name="phone" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2" required>
            </div>
        </div>
    </div>
    <div class="mt-6">
        <div class="w-full flex items-baseline gap-6">
            <div class="w-full">
                <label for="address">Address:</label>
                <input type="email" name="address" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2">
            </div>
            <div class="w-full">
                <label for="city">City:</label>
                <input type="text" name="city" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2">
            </div>
        </div>
    </div>
    <div class="mt-6">
        <div class="w-full">
            <label for="birthday">Birthday:</label>
            <input type="date" name="birthday" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2">
        </div>
        <div class="w-full mt-6">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2 bg-white">
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>  
            </select>
        </div>        
    </div>
    <div class="flex justify-between items-baseline gap-5">
        <a href="/" class="mt-16 w-max bg-[#E2EAEF] hover:bg-[#ACC0D1] px-10 py-3 rounded-2xl font-[inter] font-normal text-lg text-[#09100d] cursor-pointer transition-all"><i class="fa-solid fa-arrow-right mr-3 rotate-180"></i>Previous</a>
        <button class="next my-12 w-max bg-[#68ac99] px-10 py-3 rounded-2xl font-[inter] font-semibold text-lg text-[#09100d] cursor-pointer transition-all bg-[linear-gradient(to_right,#68ac99,#68ac99)] hover:bg-[linear-gradient(to_right,#68ac99,#8592bc)]">Next<i class="fa-solid fa-arrow-right ml-3"></i></button>
    </div>
</div>