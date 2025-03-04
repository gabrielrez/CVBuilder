<div x-show="step === 3">
    <div x-data="experienceForm">
        <template x-for="(experience, index) in experiences" :key="index">
            <div class="experience-entry w-full border-b-2 border-[#E2EAEF] pb-12 mb-12">
                <div class="w-full flex items-baseline gap-6">
                    <div class="w-full">
                        <label>Job Title:</label>
                        <input type="text" x-model="experience.jobTitle" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2">
                    </div>
                    <div class="w-full">
                        <label>Job Location:</label>
                        <input type="text" x-model="experience.jobLocation" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2">
                    </div>
                    <div class="w-full">
                        <label>Company Name:</label>
                        <input type="text" x-model="experience.companyName" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2">
                    </div>
                </div>
                <div class="w-full mt-6">
                    <label>Start Date:</label>
                    <div class="flex items-baseline gap-6 mt-2">
                        <select x-model="experience.startMonth" class="border-2 border-[#E2EAEF] px-2 py-3 w-full rounded-xl">
                            <option value="">Month</option>
                            <template x-for="(month, index) in getMonths()" :key="index">
                                <option :value="index + 1" x-text="month"></option>
                            </template>
                        </select>
                        <select x-model="experience.startYear" class="border-2 border-[#E2EAEF] px-2 py-3 w-full rounded-xl">
                            <option value="">Year</option>
                            <template x-for="year in getYears()" :key="year">
                                <option :value="year" x-text="year"></option>
                            </template>
                        </select>
                    </div>
                </div>
                <div class="w-full mt-6">
                    <label>End Date:</label>
                    <div class="flex items-baseline gap-6 mt-2">
                        <select x-model="experience.endMonth" class="border-2 border-[#E2EAEF] px-2 py-3 w-full rounded-xl">
                            <option value="">Month</option>
                            <template x-for="(month, index) in getMonths()" :key="index">
                                <option :value="index + 1" x-text="month"></option>
                            </template>
                        </select>
                        <select x-model="experience.endYear" class="border-2 border-[#E2EAEF] px-2 py-3 w-full rounded-xl">
                            <option value="">Year</option>
                            <template x-for="year in getYears()" :key="year">
                                <option :value="year" x-text="year"></option>
                            </template>
                        </select>
                    </div>
                </div>
            </div>
        </template>
        <div class="mt-6 bg-[#E2EAEF] hover:bg-[#ACC0D1] py-3 rounded-2xl cursor-pointer transition-all" @click="addExperience()">
            <h3 class="text-lg font-medium text-center">Add Experience <i class="fa-solid fa-plus ml-3"></i></h3>
        </div>
    </div>
    <div class="flex justify-between items-baseline gap-5">
        <button type="button" class="mt-16 w-max bg-[#E2EAEF] hover:bg-[#ACC0D1] px-10 py-3 rounded-2xl font-[inter] font-normal text-lg text-[#09100d] cursor-pointer transition-all" @click="prevStep()"><i class="fa-solid fa-arrow-right mr-3 rotate-180"></i>Previous</button>
        <button type="button" class="my-12 w-max bg-[#68ac99] px-10 py-3 rounded-2xl font-[inter] font-semibold text-lg text-[#09100d] cursor-pointer transition-all bg-[linear-gradient(to_right,#68ac99,#68ac99)] hover:bg-[linear-gradient(to_right,#68ac99,#8592bc)]" @click="nextStep()">Next <i class="fa-solid fa-arrow-right ml-3"></i></button>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('experienceForm', () => ({
            experiences: [],
            startYear: 1950,
            currentYear: new Date().getFullYear(),

            addExperience() {
                this.experiences.push({
                    jobTitle: '',
                    jobLocation: '',
                    companyName: '',
                    startMonth: '',
                    startYear: '',
                    endMonth: '',
                    endYear: ''
                });
            },

            getMonths() {
                return [
                    'January', 'February', 'March', 'April', 'May', 'June', 
                    'July', 'August', 'September', 'October', 'November', 'December'
                ];
            },

            getYears() {
                let years = [];
                for (let year = this.currentYear; year >= this.startYear; year--) {
                    years.push(year);
                }
                return years;
            }
        }));
    });
</script>