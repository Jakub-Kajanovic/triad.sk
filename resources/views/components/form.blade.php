<form id="jobApplicationForm" action="{{ route('submit') }}" method="POST" enctype="multipart/form-data"
    class="container mx-auto flex lg:flex-row md:flex-row flex-col lg:items-start md:items-start h-full px-4 lg:px-0 md:px-0">
    @csrf
    @method('POST')
    <div class="lg:w-1/2 md:w-1/2 lg:mt-16 md:mt-16 mt-4 px-2">
        <div class="flex flex-row justify-center items-center gap-3">
            <img src="{{ asset('images/number1.svg') }}" alt="SVG ICON of Number 1 scribbed">
            <h2 class="text-cream lg:text-title-medium md:text-title-medium title-small-mobile">Nahraj CV</h2>
        </div>
        <div class="flex flex-col items-center max-w-xl mx-auto lg:mt-36 md:mt-36 mt-10">
            <div class="space-y-4 w-full">
                <label class="text-cream/60 text-xs" for="name">NAPÍŠ NÁM AKO SA VOLÁŠ</label>
                <input type="text" name="name" id="name"
                    class="px-3 py-5 rounded-[0.63rem] text-sm text-cream w-full bg-transparent border-2 focus:ring-green focus:border-green focus:shadow-triad focus:shadow-green"
                    placeholder="Meno a priezvisko">
            </div>
            <div class="space-y-4 pt-10 w-full">
                <label class="text-cream/60 text-xs" for="email">KONTAKT NA TEBA</label>
                <input type="email" name="email" id="email"
                    class="px-3 py-5 rounded-[0.63rem] text-sm text-cream w-full bg-transparent border-2 focus:ring-green focus:border-green focus:shadow-triad focus:shadow-green"
                    placeholder="E-mail">
            </div>
            <div
                class="flex lg:flex-row md:flex-row flex-col lg:gap-10 md:gap-5 lg:mt-20 md:mt-20 mt-10 items-center lg:justify-start md:justify-start justify-center w-full">
                <label for="cv" class="cursor-pointer border-b-2 border-green text-green py-2 text-text-large">
                    Nahraj Svoje CV
                </label>
                <input type="file" name="cv" id="cv" class="hidden" />
                <span class="text-xs italic text-cream/60 lg:pt-0 md:pt-0 pt-2">PDF, JPG, PNG, DOC</span>
                <div id="cvFilename" class="text-cream mt-2"></div> <!-- Zobrazenie názvu súboru -->
                <div id="cvError" class="text-red-500 text-xs italic mt-2"></div>
            </div>
        </div>
    </div>
    <div class="lg:h-[66%] border w-full lg:w-0 md:w-0 border-white/10 lg:mt-60 md:mt-60 my-10 lg:flex md:flex"></div>
    <div class="lg:w-1/2 md:w-1/2 lg:mt-16 mt-4 px-2">
        <div class="flex flex-row justify-center items-center gap-3">
            <img src="{{ asset('images/number2.svg') }}" alt="SVG ICON of Number 2 scribbed">
            <h2 class="text-cream lg:text-title-medium md:text-title-medium title-small-mobile">Opíš prácu</h2>
        </div>
        <div class="flex flex-col items-center max-w-xl mx-auto lg:mt-36 md:mt-36 mt-10 ">
            <div class="space-y-4 w-full">
                <label class="text-cream/60 text-xs" for="message">OPIS PRÁCE</label>
                <textarea rows="14" name="message" id="message"
                    class="px-3 py-5 rounded-[0.63rem] text-sm text-cream w-full bg-transparent border-2 focus:ring-green focus:border-green focus:shadow-triad focus:shadow-green"
                    placeholder="Sem opíš svoju prácu, ktorú máš rád, alebo chceš vylepšiť"></textarea>
            </div>
            <div class="flex lg:flex-row md:flex-row flex-col lg:gap-0 md:gap-0 gap-4 items-center w-full pt-10">
                <div class="flex flex-row w-full">
                    <label class="flex items-center cursor-pointer relative" for="check-2">
                        <input type="checkbox"
                            class="peer h-5 w-5 cursor-pointer appearance-none rounded border border-green/20 bg-transparent checked:bg-transparent checked:border-green/20 focus:outline-none focus:ring-green focus:border-green focus:shadow-triad focus:shadow-green focus:bg-transparent active:bg-transparent text-green"
                            id="check-2" name="consent" />
                        <span
                            class="absolute text-green opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                fill="currentColor" stroke="currentColor" stroke-width="1">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </label>
                    <label class="cursor-pointer ml-2 text-cream text-sm" for="check-2">
                        Súhlasím so spracovaním <a class="underline text-green" href="">osobných údajov</a>
                    </label>
                </div>
                <div class="w-auto">
                    <button type="submit"
                        class="text-black text-nowrap px-5 py-3.5 bg-green rounded font-bold text-text-large w-full">Odošli
                        a
                        vyhodnoť</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const messageInput = document.getElementById('message');
        const cvInput = document.getElementById('cv');
        const consentInput = document.getElementById('check-2');
        const cvFilename = document.getElementById('cvFilename');
        const cvError = document.getElementById('cvError');
        cvInput.addEventListener('change', function() {
            const file = cvInput.files[0];
            if (file) {
                cvFilename.textContent = file.name;
                cvError.textContent = ''; 
            } else {
                cvFilename.textContent = ''; 
                cvError.textContent = 'Musíš nahrať svoje CV.';
            }
        });

        form.addEventListener('submit', function(event) {
            event.preventDefault(); 

            clearErrors();

            let hasErrors = false;

            if (nameInput.value.trim() === '') {
                showError(nameInput, 'Meno je povinné.');
                hasErrors = true;
            }

            if (!validateEmail(emailInput.value)) {
                showError(emailInput, 'Neplatná emailová adresa.');
                hasErrors = true;
            }

            if (messageInput.value.trim() === '') {
                showError(messageInput, 'Správa je povinná.');
                hasErrors = true;
            }

            if (!cvInput.files.length) {
                showError(cvInput, 'Musíš nahrať svoje CV.');
                hasErrors = true;
            } else {
                const file = cvInput.files[0];
                const validTypes = ['application/pdf', 'image/jpeg', 'image/png', 'application/msword'];
                if (!validTypes.includes(file.type)) {
                    cvError.textContent = 'Podporované formáty sú: PDF, JPG, PNG, DOC.';
                    hasErrors = true;
                }
            }


            if (!consentInput.checked) {
                showError(consentInput, 'Musíš súhlasiť so spracovaním osobných údajov.');
                hasErrors = true;
            }

            if (!hasErrors) {
                form.submit();
            }
        });

        function showError(input, message) {
            const errorElement = document.createElement('div');
            errorElement.className = 'text-red-500 text-xs italic mt-1';
            errorElement.innerText = message;
            input.closest('.space-y-4').appendChild(errorElement);
        }

        function clearErrors() {
            const errorElements = document.querySelectorAll('.text-red-500');
            errorElements.forEach(element => element.remove());
            cvError.textContent = ''; 
        }

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    });
</script>
