<x-layout>
    <section id="section-1" class="bg-green p-5 w-full lg:h-screen md:h-screen h-full">
        <div class="bg-black w-full h-full">
            <header class="container mx-auto lg:px-0 md:px-0 px-4">
                <nav class="flex flex-row justify-between items-center">
                    <img class="w-24" src="{{ asset('images/logo/triadLogo.webp') }}"
                        alt="Logo of triad advertasing agency, webP format">
                    <div class="text-green text-text-small border-b border-b-green py-2">
                        <a href="#section-3-contact">Chcem feedback</a>
                    </div>
                </nav>
            </header>
            <div
                class="container mx-auto flex lg:flex-row md:flex-row flex-col lg:h-full md:h-full items-center justify-center lg:-my-20 md:-my-20 py-10  lg:px-16 md:px-16 px-8">
                <div class="lg:w-1/2 md:w-1/2 pl-2 lg:pl-0 md:pl-0">
                    <h1 data-text="Review"
                        class="lg:text-title-large md:text-title-large text-title-large-mobile text-green text-stacked">
                        Review
                    </h1>
                    <h1
                        class="lg:text-title-large md:text-title-large text-title-large-mobile text-green lg:mt-20 md:mt-20 mt-10">
                        ktoré ťa posunie</h1>
                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full flex flex-row items-start lg:gap-5 md:gap-5 gap-2 lg:pt-0 md:pt-0 pt-4">
                    <img src="{{asset('images/quoatas.svg')}}" alt="">
                    <div class="flex flex-col lg:items-start md:items-start items-center w-full">
                        <h3 class="lg:text-title-small md:text-title-small text-text-large text-cream">Vždy si túžil po
                            feedbacku, ktorý ťa posunie? Tento
                            ťa môže poslať na kávu s Wosom, alebo <span class="text-green">
                                až do Devína.</span></h3>
                        <div class="lg:pt-28 md:pt-28 pt-10 relative lg:w-60 lg:h-60 md:w-60 md:h-60 h-32 w-32">
                            <img class="absolute w-32 lg:w-64 md:w-64 koľajnica z-50"
                                src="{{ asset('images/kolajnice.svg') }}" alt="Koľajnica">
                            <img class="absolute -mt-2 -ml-10 w-20 lg:w-32 md:w-32 animate-vozik z-50"
                                src="{{ asset('images/vozik.svg') }}" alt="Vozík">
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:flex md:flex justify-center -mt-36 hidden">
                <img src="{{ asset('images/scrolluj.svg') }}" alt="">
            </div>
        </div>
    </section>
    <section id="section-2"
        class="flex lg:flex-row md:flex-row flex-col w-full lg:h-screen md:h-screen h-auto py-10 px-4">
        <div
            class="container mx-auto flex lg:flex-row md:flex-row flex-col items-center justify-center h-full lg:gap-10 md:gap-10 gap-4">
            <div class="lg:w-1/2 md:w-1/2">
                <div class="max-w-lg">
                    <h2
                        class="lg:text-title-medium md:text-title-medium text-title-small-mobile text-cream text-balance">
                        <span class="circled-text">Opíš</span> nám svoju prácu, s ktorou si fakt spokojný 🙌
                    </h2>
                    <p class="lg:text-text-large md:text-text-large text-text-large-mobile text-cream pt-10">
                        <strong>Najskôr ti ju okomentuje naše AI vytrénované</strong> na svetových
                        prácach. A
                        kým si urobíš čaj, môže prísť
                        pozvanie na kávu od nás.
                    </p>
                    <div class="flex justify-center">
                        <img class="lg:pt-16 md:pt-16 lg:w-12 md:w-12 w-3" src="{{ asset('images/arrow.svg') }}"
                            alt="Scribed Arrow">
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 md:w-1/2 lg:-mr-20 md:-mr-20 max-w-xl lg:pr-2 md:pr-2 px-2">
                <div class="flex lg:flex-row md:flex-row flex-col gap-4 items-center">
                    <img class="lg:w-64 md:w-64 w-28" src="{{ asset('images/wosa-background.webp') }}"
                        alt="CEO of Triad Wosa">
                    <div class="flex flex-col lg:gap-10 md:gap-10 gap-4">
                        <h2 class="lg:text-title-medium md:text-title-medium text-title-small-mobile text-balance"><span
                                class="text-green ">Wosa</span> ti dá
                            feedback</h2>
                        <p class="text-text-small"><strong>Chief Creative and Strategy Officer</strong> pre
                            slovenský a český TRIAD. </p>
                    </div>
                </div>
                <p class="text-text-large lg:pt-16 md:pt-16 pt-4">
                    Držtieľ ocenenia Filip, <strong>majiteľ stoviek ocenení</strong> od slovenských grand prix, cez
                    New York až po
                    globálne ocenenia na Warc, Effie a Saber
                </p>
                <div
                    class="text-black text-text-small border-b border-b-black lg:py-2 md:py-2 w-fit lg:pt-20 md:pt-20 pt-10">
                    <a href="#section-3-contact">Poď si po feedback od AI Wosu</a>
                </div>
            </div>
            <div>
            </div>
        </div>
    </section>
    <section id="section-3-contact" class="w-full lg:h-auto md:h-auto h-auto lg:py-20 md:py-20 py-10">
        <x-form />
    </section>
    <section id="section-4" class="bg-cream lg:pb-20 md:pb-20 pb-10">
        <div class="container mx-auto">
            <header class="container mx-auto px-4 lg:px-0 md:px-0">
                <nav class="flex flex-row justify-end items-center">
                    <div class="text-green text-text-small border-b border-b-green py-2 mt-14">
                        <a href="#section-3-contact">Chcem feedback</a>
                    </div>
                </nav>
            </header>
            <div class="flex lg:flex-row md:flex-row flex-col items-center pt-10">
                <div class="lg:w-1/2 md:w-1/2  flex justify-center px-4 lg:px-0 md:px-0">
                    <div class="max-w-lg">
                        <h1 class="lg:text-title-large md:text-title-large text-title-large-mobile text-balance">
                            Toto sme my, <span class="text-green">TRIAD</span>
                        </h1>
                        <p class="text-text-large mt-10"><strong>Už takmer dekádu sme špička slovenskej reklamy.
                                Sme
                                trojnásobná agentúra roka</strong> a pracujeme pre
                            klientov, ako sú: O2, VÚB, Fun Rádio, Rádio Vlna, LIDL, Martinus, Slido, Corwin či mnohí
                            ďalší.
                        </p>
                        <div class="flex flex-row items-start lg:gap-5 md:gap-5 gap-2 lg:mt-16 md:mt-16 mt-10">
                            <img src="{{asset('images/quoatas.svg')}}" alt="">
                            <p class="text-text-small"><strong>Baví nás</strong> robiť svetovú prácu ale popri tom
                                <strong>si ulietať aj na
                                    humore na hrane či láskavej
                                    šikane.</strong> V TRIADe žijeme reklamou priamo pri hrade v malebnom Devíne ale
                                čochvíľa team,
                                kam hľadáme ideamakra, bude užívať nie len krásy domčeka, ale časť týždna aj nové
                                moderné priestory v Eurovea2.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 md:w-1/2 flex justify-center lg:pt-0 md:pt-0 pt-10">
                    <div
                        class="work relative block lg:w-[456px] lg:h-[546px] md:w-[456px] md:h-[546px] w-[300px] h-[430px]">
                        <img class="clone1 z-[5] absolute top-0 left-0 transform -translate-x-[1vw] -translate-y-[1vw] opacity-0 transition-opacity duration-200 ease-in-out pointer-events-none"
                            src="{{ asset('images/triad-people.webp') }}" alt="Triad workers">
                        <img class="clone0 z-[4] absolute top-0 left-0 transform -translate-x-[2vw] -translate-y-[2vw] opacity-0 transition-opacity duration-200 ease-in-out pointer-events-none"
                            src="{{ asset('images/triad-people.webp') }}" alt="Triad workers">
                        <img class="relative z-[10] w-full block front" src="{{ asset('images/triad-people.webp') }}"
                            alt="Triad workers">
                    </div>
                </div>
            </div>
            <div class="flex lg:flex-row md:flex-row flex-col justify-between lg:items-end lg:px-10 md:px-10 px-4">
                <div class="lg:pt-20 md:pt-20 pt-0">
                    <img class="w-20" src="{{ asset('images/logo/logo2.webp') }}"
                        alt="Logo od Triad Marketing Agency SVG">
                    <ul
                        class="flex lg:flex-row md:flex-row flex-col lg:text-text-large md:text-text-large text-text-large-mobile text-nowrap">
                        <li class="text-green"><a class="flex flex-row lg:items-center" href="">Triad is a
                                member
                                of <span class="underline px-2 flex flex-row items-center">DevinBrand<img
                                        class="px-1" src="{{ asset('images/arrowRight.svg') }}"
                                        alt=""></span></a></li>
                        <li class="text-green"><a class="flex flex-row items-center" href="">We use<span
                                    class="underline px-2 flex flex-row items-center"> Allfred<img class="px-1"
                                        src="{{ asset('images/arrowRight.svg') }}" alt=""></span>for agency
                                management</a></li>
                    </ul>
                    <div class="mt-6 lg:mt-0 md:mt-0">
                        <form id="newsletter" action="" class="flex flex-col">
                            <label for="newsletter" class="text-text-large font-bold ">
                                Try our super useful newsletter!
                            </label>
                            <div class="flex flex-row gap-5">
                                <input type="email" id="newsletter" name="newsletter"
                                    class="border-none px-2 py-2 bg-transparent text-black font-bold text-lg placeholder-black placeholder:text-text-large focus:outline-none focus:ring-0 focus:border-transparent w-44"
                                    placeholder="your@email.here">
                                <button type="submit"
                                    class="underline text-green font-bold border-none bg-none text-text-large">Sign me
                                    up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col mt-6 lg:mt-0 md:mt-0">
                    <ul
                        class="flex flex-wrap lg:flex-nowrap md:flex-nowrap lg:text-nowrap md:text-nowrap flex-row text-text-large text-black space-x-1 mb-2 lg:mb-0">
                        <li><a href="#">Home,</a></li>
                        <li><a href="#">About,</a></li>
                        <li><a href="#">Services,</a></li>
                        <li><a href="#">Contact,</a></li>
                        <li><a href="#">Kariéra,</a></li>
                        <li><a href="#">Blog,</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                    <ul
                        class="flex flex-wrap lg:flex-nowrap md:flex-nowrap lg:text-nowrap md:text-nowrap flex-row text-text-large text-green space-x-1">
                        <li><a href="#">Instagram,</a></li>
                        <li><a href="#">Facebook,</a></li>
                        <li><a href="#">YouTube,</a></li>
                        <li><a href="#">Spotify,</a></li>
                        <li><a href="#">LinkedIn,</a></li>
                        <li><a href="#">TikTok,</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    </main>
</x-layout>
