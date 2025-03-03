<x-layout>
    <main class="mt-10 max-w-6/12 mx-auto">
        <h1 class="font-[inter] font-bold text-7xl text-center mt-10">Fill in your <span class="bg-gradient-to-r from-[#68ac99] to-[#8592bc] bg-clip-text text-transparent italic">Details</span></h1>
        
        <div class="w-full max-w-xl mx-auto mt-10">
            <div class="w-full bg-gray-300 rounded-full h-2">
                <div id="progress-bar" class="bg-gradient-to-r from-[#68ac99] to-[#8592bc] h-2 rounded-full w-0"></div>
            </div>
            <p class="text-center mt-3 text-gray-700 font-medium">0% Complete</p>
        </div>

        <form action="/resume" method="POST" id="steps-form" class="mt-12 font-[inter] w-full">
            @csrf
            
            @foreach ($steps as $step)
                @component("components.steps.step-$step")
                @endcomponent
            @endforeach
        </form>
    </main>
</x-layout>

<style>
    #progress-bar {
        transition: width 0.75s ease-in-out;
    }
</style>

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

            progressText.style.opacity = 0;
            setTimeout(() => {
                progressText.style.opacity = 1;
            }, 200);
        }

        function showStep(step) {
            steps.forEach((stepItem, index) => {
                stepItem.style.display = index === step ? "block" : "none";
            });
            updateProgressBar();
        }

        function saveFormData() {
            const inputs = steps[currentStep].querySelectorAll("input, select, textarea");
            inputs.forEach(input => {
                formData[input.name] = input.value;
            });
        }

        async function submitForm() {
            try {
                const response = await fetch("/resume", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                    },
                    body: JSON.stringify(formData),
                });

                const result = await response.json();
                console.log("Success:", result);
            } catch (error) {
                console.error("Error:", error);
            }
        }

        nextButtons.forEach(button => {
            button.addEventListener("click", (event) => {
                event.preventDefault();
                saveFormData();
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                } else {
                    console.log(formData);
                    submitForm();
                }
            });
        });

        prevButtons.forEach(button => {
            button.addEventListener("click", (event) => {
                event.preventDefault();
                if (currentStep > 0) {
                    setTimeout(() => {
                        currentStep--;
                        showStep(currentStep);
                    }, 250);
                }
                if (currentStep === 0) {
                    window.location = '/';
                }
            });
        });

        showStep(currentStep);
    });
</script>