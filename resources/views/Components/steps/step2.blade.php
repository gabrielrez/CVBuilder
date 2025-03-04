<div x-show="step === 2">
    <label for="personal_description">Description:</label>
    <textarea name="personal_description" id="personal_description" cols="30" rows="10" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2 resize-none">Tell about yourself...</textarea>
    {{-- <input type="te" name="email" class="w-full p-2 border border-gray-300 rounded mt-2"> --}}
    
    <div class="flex justify-between items-baseline gap-5">
        <button type="button" class="mt-16 w-max bg-[#E2EAEF] hover:bg-[#ACC0D1] px-10 py-3 rounded-2xl font-[inter] font-normal text-lg text-[#09100d] cursor-pointer transition-all" @click="prevStep()"><i class="fa-solid fa-arrow-right mr-3 rotate-180"></i>Previous</button>
        <button type="button" class="my-12 w-max bg-[#68ac99] px-10 py-3 rounded-2xl font-[inter] font-semibold text-lg text-[#09100d] cursor-pointer transition-all bg-[linear-gradient(to_right,#68ac99,#68ac99)] hover:bg-[linear-gradient(to_right,#68ac99,#8592bc)]" @click="nextStep()">Next <i class="fa-solid fa-arrow-right ml-3"></i></button>
    </div>
</div>
