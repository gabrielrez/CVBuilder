<x-layout>
    <main class="max-w-9/12 mx-auto grid grid-cols-2 items-center gap-20 min-h-screen opacity-0 transition-opacity duration-1000" id="main-content">
        <div class="flex flex-col justify-center">
            <h1 class="font-[inter] font-bold text-7xl translate-y-10 opacity-0 transition-all duration-1000 delay-200">
                Welcome to <span class="bg-gradient-to-r from-[#68ac99] to-[#8592bc] bg-clip-text text-transparent italic">CVBuilder</span>!
            </h1>
            <p class="mt-8 text-lg font-[inter] translate-y-10 opacity-0 transition-all duration-1000 delay-400">
                Create professional and personalized resumes in minutes!
            </p>
            <div class="flex gap-5">
                <a href="/builder" 
                   class="mt-16 w-max bg-[#68ac99] px-10 py-4 rounded-2xl font-[inter] font-semibold text-lg text-[#09100d] cursor-pointer bg-[linear-gradient(to_right,#68ac99,#68ac99)] hover:bg-[linear-gradient(to_right,#68ac99,#8592bc)] translate-y-10 opacity-0 transition-all duration-1000 delay-600">
                   Create Resume
                </a>            
                <a href="https://github.com/gabrielrez/CVMaker" target="_blank" 
                    class="mt-16 w-max bg-[#E2EAEF] px-10 py-4 rounded-2xl font-[inter] font-normal text-lg text-[#09100d] cursor-pointer hover:bg-[linear-gradient(to_right,#E2EAEF,#ACC0D160)] translate-y-10 opacity-0 transition-all duration-1000 delay-800">
                    <i class="fa-brands fa-github mr-2"></i> Repository
                </a>
            </div>
        </div>
        <img src="{{asset('img/resume.svg')}}" alt="resume example" 
             class="w-full scale-75 opacity-0 transition-all duration-1000 delay-1000">
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const mainContent = document.getElementById("main-content");
            mainContent.classList.remove("opacity-0");

            setTimeout(() => {
                document.querySelectorAll("h1, p, a, img").forEach(el => {
                    el.classList.remove("translate-y-10", "opacity-0", "scale-75");
                });
            }, 100);
        });
    </script>
</x-layout>