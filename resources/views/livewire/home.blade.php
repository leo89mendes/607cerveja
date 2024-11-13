<div id="container" class="w-full">
    <header id="header">
        <div class="video-background">
            <video class="gfade grayscale aspect-video" width="100%" autoplay muted loop playsinline>
                <source src="{{ asset('storage/assets/video/video_beer.mp4') }}" type="video/mp4">
                <source src="{{ asset('storage/assets/video/video_beer.mp4') }}" type="video/ogg">                    
            </video>
        </div>
        <div class="h-screen flex items-center flex-col">
            <div class=" z-10 w-full flex justify-center">
                <img class="h-[200px] md:my-8 my-4" src="{{ asset('storage/assets/img/logo_white.png')}}" alt="">
            </div>
            <div class="z-10 h-full flex flex-col items-center w-full md:justify-center sm:justify-normal text-white my-12">
                <cite class="text-[2.5rem] line leading-[3.5rem] text-center md:mx-[8rem] mx-4">
                    "Acreditamos que os momentos mais especiais são vividos juntos. 
                    É por isso que nos empenhamos em oferecer experiências inesquecíveis"
                </cite>
                <a id="top" href="#totop" class="mt-[8rem] max-w-[70px] btn_top bg-[#ffc123] z-10 rounded-full">
                    <div class="arrow p-2 h-[70px] w-[70px]">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            viewBox="0 0 32 32" xml:space="preserve">
                        <g>
                            <g id="arrow_x5F_down">
                                <path style="fill:#030104;" d="M32,16.016l-5.672-5.664c0,0-3.18,3.18-6.312,6.312V0h-8.023v16.664l-6.32-6.32L0,16.016L16,32
                                    L32,16.016z"/>
                            </g>
                        </g>
                        </svg>
                    </div>
                </a>  
            </div>
        </div>
    </header>

    <div id="element_1" class="element flex flex-col md:flex-row justify-center md:mt-[10rem] mt-[5rem]">
        <div class="md:w-6/12 w-full md:p-[3rem] p-[2rem] pb-0 mb-[2rem] md:mb-[3rem] bg-no-repeat flex items-center justify-center" style="background-image: url({{ asset('storage/assets/img/left-tree.png') }}); background-position: -22px -2px">
            <img class="shadow z-40 border-8 border-white" src="{{ asset('storage/assets/img/beer09.jpg')}}" alt="">
        </div>
        <div class="flex flex-col text-white px-[3rem] md:w-6/12 w-full justify-center md:text-left text-center">
            <h1 class="text-[#ffc123] font-semibold text-[2rem]">MEXIRIPA<h1>
            <h3 class="text-[#ffc123] font-semibold text-[1.2rem]">ABV 6,5% | IBU 60</h3>
            <p class="pt-2 pr-15">
                <b>Ingredientes:</b>
                prepared water, wheat malt, hop, yeast, enzyme.
            </p>
            <p class="mt-4">
                <b>Descrição:</b>
                prepared water, wheat malt, hop, yeast, enzyme.
                Lorem ipsum dolor sit amet.
            </p>
            <button class=" mt-4 max-w-[180px] md:mx-0 mx-auto p-4 !cursor-pointer hover:bg-black hover:border-[#ffc123] border-[#ffc123] border hover:text-white  bg-[#ffc123] font-semibold text-black text-[1rem]" >COMPRAR</button>
        </div>
    </div>

    <div id="element_2" class="element flex flex-col md:flex-row  justify-center md:my-[10rem] Z-40 my-[5rem]">
        <div class="md:hidden flex md:w-6/12 w-full md:p-[3rem] p-[2rem] pb-0 mb-[2rem] md:mb-[3rem] h-full bg-no-repeat items-center justify-center" style="background-image: url({{ asset('storage/assets/img/left-tree.png') }}); background-position: -22px -2p">
            <img class="shadow border-8 border-white" src="{{ asset('storage/assets/img/beer01.jpg')}}" alt="">
        </div>
        <div class="flex  flex-col text-white px-[3rem] md:w-6/12 w-full justify-center md:text-left text-center">
            <h1 class="text-[#ffc123] font-semibold text-[2rem]">TRIGO E MEL<h1>
            <h3 class="text-[#ffc123] font-semibold text-[1.2rem]">ABV 6,5% | IBU 60</h3>
            <p class="pt-2 pr-15">
                <b>Ingredientes:</b>
                prepared water, wheat malt, hop, yeast, enzyme.
            </p>
            <p class="mt-4">
                <b>Descrição:</b>
                prepared water, wheat malt, hop, yeast, enzyme.
                Lorem ipsum dolor sit amet.
            </p>
            <button class=" mt-4 max-w-[180px] md:mx-0 mx-auto p-4 !cursor-pointer hover:bg-black hover:border-[#ffc123] border-[#ffc123] border hover:text-white  bg-[#ffc123] font-semibold text-black text-[1rem]" >COMPRAR</button>
        </div>
        <div class="md:flex hidden md:w-6/12 w-full md:p-[3rem] p-[2rem] pb-0 h-full bg-no-repeat items-center justify-center" style="background-image: url({{ asset('storage/assets/img/left-tree.png') }}); background-position: 10px -2px">
            <img class="shadow border-8 border-white" src="{{ asset('storage/assets/img/beer01.jpg')}}" alt="">
        </div>
    </div>

    <div id="element_3" class="element flex flex-col md:flex-row justify-center">
        <div class="md:w-6/12 w-full md:p-[3rem] p-[2rem] pb-0 mb-[2rem] md:mb-[3rem] h-full bg-no-repeat flex items-center justify-center" style="background-image: url({{ asset('storage/assets/img/left-tree.png') }}); background-position: -22px -2px">
            <img class="shadow border-8 border-white" src="{{ asset('storage/assets/img/beer06.jpg')}}" alt="">
        </div>
        <div class="flex flex-col text-white px-[3rem] md:w-6/12 w-full justify-center md:text-left text-center">
            <h1 class="text-[#ffc123] font-semibold text-[2rem]">AMERICAN PORTER<h1>
            <h3 class="text-[#ffc123] font-semibold text-[1.2rem]">ABV 6,5% | IBU 60</h3>
            <p class="pt-2 pr-15">
                <b>Ingredientes:</b>
                prepared water, wheat malt, hop, yeast, enzyme.
            </p>
            <p class="mt-4">
                <b>Descrição:</b>
                prepared water, wheat malt, hop, yeast, enzyme.
                Lorem ipsum dolor sit amet.
            </p>
            <button class=" mt-4 max-w-[180px] md:mx-0 mx-auto p-4 !cursor-pointer hover:bg-black hover:border-[#ffc123] border-[#ffc123] border hover:text-white  bg-[#ffc123] font-semibold text-black text-[1rem]" >COMPRAR</button>
        </div>
    </div>
    <section id="element_4" id="client" class="element w-full bg-center mt-[10rem]" style="background-image: url({{ asset('storage/assets/img/tapbeerjpg.jpg') }}">
        <div class="max-w-screen-xl px-4 py-20 mx-auto text-center lg:py-16 lg:px-6">
            <figure class="max-w-screen-md mx-auto">
                <svg class="h-12 mx-auto mb-3 text-[#ffc123]" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                </svg> 
                <blockquote>
                    <p class="text-2xl font-medium text-white">"Nunca imaginei que uma cerveja artesanal pudesse ter tanto sabor e personalidade! Cada gole é uma viagem aos ingredientes mais frescos e selecionados. Com certeza, virou minha favorita!"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                    <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                        <div class="pr-3 font-medium text-[#ffc123]">Micheal Gough</div>
                        <div class="pl-3 text-sm font-light text-white">CEO at Google</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>
    <section id="element_5" class="element contact shadow mt-[10rem] bg-[#323438] md:py-8 py-4 px-4 rounded-[25px] md:w-6/12 md:mx-auto mx-8">
        <h1 class="text-[#ffc123] px-2 font-semibold text-[2rem]">FALE CONOSCO<h1>
        <form method="POST" action="" id="ContactForm" accept-charset="UTF-8" class="isolate">
            @csrf
            <div class="field ">
                <input class=" focus:outline-[#ffc123] focus:ring-[#ffc123] my-4 w-full rounded-3xl px-8 py-4 font-medium bg-black text-white border-0" autocomplete="name" type="text" id="ContactForm-name" name="name" value="{{ old('name') }}" placeholder="Nome" >
            </div>
            <div class="field">
                <input class="focus:outline-[#ffc123] focus:ring-[#ffc123] my-4 w-full rounded-3xl px-8 py-4 font-medium bg-black text-white border-0" autocomplete="email"  id="ContactForm-email"  name="email" spellcheck="false" autocapitalize="off" value="{{ old('email') }}" aria-required="true" placeholder="E-mail " required="">
            </div>
            <div class="field">
                <input class="focus:outline-[#ffc123] focus:ring-[#ffc123] my-4 w-full rounded-3xl px-8 py-4 font-medium bg-black text-white border-0" type="cel" id="ContactForm-phone"  autocomplete="tel" name="cel" pattern="[0-9\-]*" value="{{ old('cel') }}" placeholder="Celular" required="">
            </div> 
            <div class="field ">
                <textarea class="focus:outline-[#ffc123] focus:ring-[#ffc123] my-4 w-full rounded-3xl px-8 py-4 font-medium bg-black text-white border-0" rows="3" id="ContactForm-body"  name="question" placeholder="Sua Pergunta" required=""></textarea>
            </div>
            <div class="contact__button my-4 md:my-0">
                <button class="text-black py-4 md:mx-4 bg-[#ffc123] rounded-[4rem] w-[12rem]" type="submit" class="button">
                    Enviar
                </button>
            </div>
        </form>
    </section>
    <div id="element_6" class="element social w-full mt-[5rem]">
        <ul class="list-social w-full inline-flex gap-8 justify-center items-center text-center" role="list">
            <li class="list-social__item">
                <a target="_blank" href="https://twitter.com/#" class="text-white link text-social__link hover:text-[#ffc123]">
                    <svg width="35" height="35" viewBox="0 0 19 18" fill="none" class="icon icon-twitter" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0462914 0L7.3819 9.92811L0 18H1.66179L8.1253 10.9338L13.3464 18H19L11.2522 7.51415L18.1236 0.00146392H16.4618L10.5102 6.50992L5.70131 0.00146392H0.0477214L0.0462914 0ZM2.48907 1.23845H5.08663L16.5558 16.7601H13.9582L2.48907 1.23845Z" fill="currentColor"></path>
                    </svg>
                </a>
            </li>
            <li class="list-social__item">
                <a target="_blank" href="https://www.facebook.com/#" class="text-white link text-social__link hover:text-[#ffc123]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-facebook" width="25" height="40" viewBox="0 0 10 22" fill="none">
                        <g clip-path="url(#clip0_423_5411)">
                            <path d="M0 6.23792H9.13208L8.64079 9.65017H0V6.23792ZM1.60489 4.98736C1.60489 1.52449 2.87034 0 6.36 0H9.1291V3.55815H6.45826C6.17539 3.55815 5.96399 3.66534 5.81809 3.87972C5.67219 4.0941 5.60073 4.37101 5.60073 4.71045V21.203H1.60489V4.99034V4.98736Z" fill="currentcolor"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_423_5411">
                            <rect width="9.13208" height="21.2" fill="currentcolor"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </li>
            <li class="list-social__item">
                <a target="_blank" href="https://www.instagram.com/#" class="text-white link text-social__link hover:text-[#ffc123]">
                    <svg width="40" height="40" aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram" viewBox="0 0 18 18">
                        <path fill="currentColor" d="M8.77 1.58c2.34 0 2.62.01 3.54.05.86.04 1.32.18 1.63.3.41.17.7.35 1.01.66.3.3.5.6.65 1 .12.32.27.78.3 1.64.05.92.06 1.2.06 3.54s-.01 2.62-.05 3.54a4.79 4.79 0 01-.3 1.63c-.17.41-.35.7-.66 1.01-.3.3-.6.5-1.01.66-.31.12-.77.26-1.63.3-.92.04-1.2.05-3.54.05s-2.62 0-3.55-.05a4.79 4.79 0 01-1.62-.3c-.42-.16-.7-.35-1.01-.66-.31-.3-.5-.6-.66-1a4.87 4.87 0 01-.3-1.64c-.04-.92-.05-1.2-.05-3.54s0-2.62.05-3.54c.04-.86.18-1.32.3-1.63.16-.41.35-.7.66-1.01.3-.3.6-.5 1-.65.32-.12.78-.27 1.63-.3.93-.05 1.2-.06 3.55-.06zm0-1.58C6.39 0 6.09.01 5.15.05c-.93.04-1.57.2-2.13.4-.57.23-1.06.54-1.55 1.02C1 1.96.7 2.45.46 3.02c-.22.56-.37 1.2-.4 2.13C0 6.1 0 6.4 0 8.77s.01 2.68.05 3.61c.04.94.2 1.57.4 2.13.23.58.54 1.07 1.02 1.56.49.48.98.78 1.55 1.01.56.22 1.2.37 2.13.4.94.05 1.24.06 3.62.06 2.39 0 2.68-.01 3.62-.05.93-.04 1.57-.2 2.13-.41a4.27 4.27 0 001.55-1.01c.49-.49.79-.98 1.01-1.56.22-.55.37-1.19.41-2.13.04-.93.05-1.23.05-3.61 0-2.39 0-2.68-.05-3.62a6.47 6.47 0 00-.4-2.13 4.27 4.27 0 00-1.02-1.55A4.35 4.35 0 0014.52.46a6.43 6.43 0 00-2.13-.41A69 69 0 008.77 0z"></path>
                        <path fill="currentColor" d="M8.8 4a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 7.43a2.92 2.92 0 110-5.85 2.92 2.92 0 010 5.85zM13.43 5a1.05 1.05 0 100-2.1 1.05 1.05 0 000 2.1z"></path>
                    </svg>
                </a>
            </li>
            <li class="list-social__item">
                <a target="_blank" href="https://www.youtube.com/#" class="text-white link text-social__link hover:text-[#ffc123]">
                    <svg width="40" height="40" aria-hidden="true" focusable="false" role="presentation" class="icon icon-youtube" viewBox="0 0 100 70">
                        <path d="M98 11c2 7.7 2 24 2 24s0 16.3-2 24a12.5 12.5 0 01-9 9c-7.7 2-39 2-39 2s-31.3 0-39-2a12.5 12.5 0 01-9-9c-2-7.7-2-24-2-24s0-16.3 2-24c1.2-4.4 4.6-7.8 9-9 7.7-2 39-2 39-2s31.3 0 39 2c4.4 1.2 7.8 4.6 9 9zM40 50l26-15-26-15v30z" fill="currentColor"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <section id="contact" class="flex items-end mt-[5rem] h-[400px] justify-center bg-center bg-no-repeat" style="background-image: url({{ asset('storage/assets/img/beer_footer.png') }})">
        <div class="text-center md:texf-left md:flex px-2 py-2 w-full bg-[#000000] justify-center text-white text-[0.8rem] flex-row">
            Todos os Diretos Reservados à 607 Cerveja Artesanal <span class="mx-1">| Desenvolvido por </span><a class=" cursor-pointer hover:underline" href="https://dreamsintocodes.com" target="_blank"><b>Dreams Into Codes</b></a>
        </div>
    </section> 
</div>
