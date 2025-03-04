<x-layout>
    <main class="mt-10 max-w-6/12 mx-auto" x-data="formHandler()">
        <h1 class="font-[inter] font-bold text-7xl text-center mt-10">
            Fill in your 
            <span class="bg-gradient-to-r from-[#68ac99] to-[#8592bc] bg-clip-text text-transparent italic">Details</span>
        </h1>
        
        <div class="w-full max-w-xl mx-auto mt-10">
            <div class="w-full bg-gray-300 rounded-full h-2">
                <div id="progress-bar" class="bg-gradient-to-r from-[#68ac99] to-[#8592bc] h-2 rounded-full"
                     :style="{ width: progress + '%' }"></div>
            </div>
            <p class="text-center mt-3 text-gray-700 font-medium" x-text="progress + '%'"></p>
        </div>

        <div class="mt-12 font-[inter] w-full">
            <form action="/resume" method="POST">
                @csrf

                <x-steps.step1 />
                <x-steps.step2 />
                <x-steps.step3 />
                <x-steps.step4 />
            </form>
        </div>
    </main>

    <script>
        function formHandler() {
            return {
                step: 1,
                totalSteps: 4,
                get progress() {
                    return Math.floor(((this.step / this.totalSteps) * 100) - (1 / this.totalSteps * 100));
                },
                nextStep() {
                    if (this.step < this.totalSteps){
                        setTimeout(() => {
                            this.step++;                            
                        }, 250);
                    }
                },
                prevStep() {
                    if(this.step <= 1){
                        setTimeout(() => {
                            window.location = '/';
                        }, 250);
                    }

                    if (this.step > 1) {
                        setTimeout(() => {
                            this.step--;
                        }, 250);
                    }
                }
            };
        }
    </script>
</x-layout>
