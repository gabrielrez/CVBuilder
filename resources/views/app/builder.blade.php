<x-layout>
    <main class="mt-10 max-w-6/12 mx-auto">
        <h1 class="font-[inter] font-bold text-7xl text-center mt-10">Fill in your <span class="bg-gradient-to-r from-[#68ac99] to-[#8592bc] bg-clip-text text-transparent italic">Details</span></h1>
        
        <div class="w-full max-w-xl mx-auto mt-10">
            <div class="w-full bg-gray-300 rounded-full h-2">
                <div id="progress-bar" class="bg-gradient-to-r from-[#68ac99] to-[#8592bc] h-2 rounded-full w-2"></div>
            </div>
            <p class="text-center mt-3 text-gray-700 font-medium">0% Complete</p>
        </div>

        <form id="steps-form" class="mt-12 font-[inter] w-full">
            <x-steps.step-1>
            </x-steps.step-1>

            <x-steps.step-2>
            </x-steps.step-2>
        </form>
    </main>
</x-layout>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const steps = document.querySelectorAll('.step');
        const progressBar = document.getElementById("progress-bar");
        const progressText = document.querySelector("p.text-center"); 
        const nextButtons = document.querySelectorAll(".next");
        const prevButtons = document.querySelectorAll(".prev");

        let currentStep = 0;
        let formData = {};
        
        function updateProgressBar() {
            const progress = ((currentStep + 1) / steps.length) * 100 - (1 / steps.length * 100);
            progressBar.style.width = progress + "%";
            progressText.textContent = `${Math.round(progress)}% Complete`;
        }

        function showStep(step) {
            steps.forEach((stepItem, index) => {
                stepItem.style.display = index === step ? "block" : "none";
            });
            updateProgressBar();
        }

        nextButtons.forEach(button => {
            button.addEventListener("click", (event) => {
                event.preventDefault();
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });
        });

        prevButtons.forEach(button => {
            button.addEventListener("click", (event) => {
                event.preventDefault();
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
        });

        showStep(currentStep);
    });
</script>
