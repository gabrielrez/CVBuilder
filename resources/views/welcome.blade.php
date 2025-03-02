<x-layout>
    <main class="max-w-9/12 mx-auto grid grid-cols-2 items-center gap-20 min-h-screen">
        <div class="flex flex-col justify-center">
            <h1 class="font-[inter] font-bold text-7xl">
                Welcome to <span class="bg-gradient-to-r from-[#68ac99] to-[#8592bc] bg-clip-text text-transparent italic underline">
                    CVMaker
                  </span>
                  !
            </h1>
            <p class="mt-8 text-lg font-[inter]">
                Create professional and personalized resumes in minutes!
            </p>
            <div class="flex gap-5">
                <button class="mt-16 w-max bg-[#68ac99] px-10 py-4 rounded-2xl font-[inter] font-semibold text-lg text-[#09100d] cursor-pointer transition-all 
                bg-[linear-gradient(to_right,#68ac99,#68ac99)] hover:bg-[linear-gradient(to_right,#68ac99,#8592bc)]">Create Resume</button>            
                <a href="https://github.com/gabrielrez/CVMaker" target="_blank" class="mt-16 w-max bg-[#E2EAEF] hover:bg-[#ACC0D1] px-10 py-4 rounded-2xl font-[inter] font-normal text-lg text-[#09100d] cursor-pointer transition-all">
                    <i class="fa-brands fa-github mr-2"></i> Repository
                </a>
            </div>
        </div>
        <img src="{{asset('img/resume.svg')}}" alt="resume example" class="w-full">
    </main>
    
</x-layout>