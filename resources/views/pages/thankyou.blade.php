<x-layout>
    <section id="section-5" class="w-full lg:h-full md:h-full h-auto py-20">
        <div
            class="container mx-auto flex lg:flex-row md:flex-row flex-col lg:px-0 md:px-0 px-4 justify-center items-center h-full">
            <div class="max-w-xl flex flex-col gap-5 lg:w-1/2 md:w-1/2 w-full lg:pr-24 md:pr-24">
                <h2 class="lg:text-title-medium md:text-title-medium text-title-medium-mobile text-green">Ďakujeme za
                    zaslanie
                    popisu tvojej práce.</h2>
                <p class="text-text-large text-cream"><strong>Skutočný Wosa si ju</strong>čoskoro pozrie a možno<br
                        class="hidden lg:flex md:flex">
                    sa ti ozve. Držíme palce.</p>
                <img class="lg:pt-4 md:pt-4 lg:py-24 md:py-24" src="{{ asset('images/scribbedText.svg') }}" alt="">
            </div>
            <div class="lg:pt-0 md:pt-0 pt-40 lg:mt-0 md:mt-0 mt-6">
                <img class="arrow-rotate" src="{{ asset('images/singleArrow.svg') }}" alt="">
            </div>
            <div class="lg:w-1/2 md:w-1/2 w-full flex flex-col max-w-xl lg:pl-24 md:pl-24 pt-10">
                <h3 class="lg:text-title-small md:text-title-small text-title-small-mobile text-center">
                    <span class="text-green">Tvoje slová už letia</span>
                    rýchlosťou internetu<br class="hidden lg:flex md:flex"> do Devína.
                </h3>
                <div class="flex flex-row justify-between lg:pt-0 md:pt-0 pt-6 relative w-full">
                    <img id="panak" class="panak" src="{{ asset('images/panak.svg') }}"
                        alt="Me on my way to Triad">
                    <img class="mr-10 house" src="{{ asset('images/triadHouse.svg') }}"
                        alt="3D representation of Triad Advertasing House in DEVIN">
                </div>

                <div class="flex flex-row ml-4 pt-4 gap-4">
                    <img src="{{ asset('images/loader.svg') }}" alt="">
                    <span class="text-count-text text-darkBlue count">0%</span>
                </div>

                <div class="flex flex-row justify-center items-center pt-32 gap-5">
                    <img class="w-16" src="{{ asset('images/wosa.webp') }}" alt="Head of Chief Triad Creative">
                    <p class="text-text-small font-light">AI Wosa ti o chvíľu povie svoj názor.</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>

<script src="{{asset('js/count.js')}}"></script>