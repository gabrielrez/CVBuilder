<div class="step hidden">
    <div id="formation-container">
    </div>

    <div id="add-formation" class="mt-6 bg-[#E2EAEF] hover:bg-[#ACC0D1] py-3 rounded-2xl cursor-pointer transition-all">
        <h3 class="text-lg font-medium text-center">Add Formation <i class="fa-solid fa-plus ml-3"></i></h3>
    </div>

    <div class="flex justify-between items-baseline gap-5">
        <a class="prev mt-16 w-max bg-[#E2EAEF] hover:bg-[#ACC0D1] px-10 py-3 rounded-2xl font-[inter] font-normal text-lg text-[#09100d] cursor-pointer transition-all"><i class="fa-solid fa-arrow-right mr-3 rotate-180"></i>Previous</a>
        <a id="submit-btn" class="next my-12 w-max bg-[#68ac99] px-10 py-3 rounded-2xl font-[inter] font-semibold text-lg text-[#09100d] cursor-pointer transition-all bg-[linear-gradient(to_right,#68ac99,#68ac99)] hover:bg-[linear-gradient(to_right,#68ac99,#8592bc)]">Next<i class="fa-solid fa-arrow-right ml-3"></i></a>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const formationContainer = document.getElementById("formation-container");
        const addFormationButton = document.getElementById("add-formation");
        const startYear = 1950;
        const currentYear = new Date().getFullYear();

        addFormationButton.addEventListener("click", function () {
            const formationEntry = document.createElement("div");
            formationEntry.classList.add("experience-entry", "w-full", "border-b-2", "border-[#E2EAEF]", "pb-12", "mb-12");
            formationEntry.innerHTML = `
                <div class="w-full flex items-baseline gap-6">
                    <div class="w-full">
                        <label for="degree_name">Degree Name:</label>
                        <input type="text" name="degree_name[]" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2" required>
                    </div>
                    <div class="w-full">
                        <label for="instituition_name">Institution Name:</label>
                        <input type="text" name="instituition_name[]" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2" required>
                    </div>
                    <div class="w-full">
                        <label for="formation_location">Location:</label>
                        <input type="text" name="formation_location[]" class="border-2 border-[#E2EAEF] px-2 py-2.5 w-full rounded-xl mt-2" required>
                    </div>
                </div>
                <div class="w-full mt-6">
                    <label>Start Date:</label>
                    <div class="flex items-baseline gap-6 mt-2">
                        <select name="formation_start_month[]" class="border-2 border-[#E2EAEF] px-2 py-3 w-full rounded-xl">
                            <option value="">Month</option>
                            ${generateMonthOptions()}
                        </select>
                        <select name="formation_start_year[]" class="border-2 border-[#E2EAEF] px-2 py-3 w-full rounded-xl year-select">
                            <option value="">Year</option>
                        </select>
                    </div>
                </div>
                <div class="w-full mt-6">
                    <label>End Date:</label>
                    <div class="flex items-baseline gap-6 mt-2">
                        <select name="formation_end_month[]" class="border-2 border-[#E2EAEF] px-2 py-3 w-full rounded-xl">
                            <option value="">Month</option>
                            ${generateMonthOptions()}
                        </select>
                        <select name="formation_end_year[]" class="border-2 border-[#E2EAEF] px-2 py-3 w-full rounded-xl year-select">
                            <option value="">Year</option>
                        </select>
                    </div>
                </div>
            `;

            formationContainer.appendChild(formationEntry);
            populateYearSelects(formationEntry.querySelectorAll(".year-select"));
        });

        function generateMonthOptions() {
            const months = [
                "January", "February", "March", "April", "May", "June", 
                "July", "August", "September", "October", "November", "December"
            ];
            return months.map((month, index) => `<option value="${(index + 1).toString().padStart(2, "0")}">${month}</option>`).join("");
        }

        function populateYearSelects(selectElements) {
            selectElements.forEach(select => {
                for (let year = currentYear; year >= startYear; year--) {
                    let option = document.createElement("option");
                    option.value = year;
                    option.textContent = year;
                    select.appendChild(option);
                }
            });
        }

        populateYearSelects(document.querySelectorAll(".year-select"));
    });
</script>
