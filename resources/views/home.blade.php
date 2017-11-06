@extends('layouts.app')

@section('content')
    <section class="w-full relative h-screen bg-image text-white" style="background-image: url({{ url('/images/banner.jpg') }})">
        <div class="container h-full mx-auto flex flex-col items-center content-center justify-center self-center">
            <p class="text-center pin-t absolute mt-12">
                <span class="inline-block">
                    <img alt="Logo" class="w-12 md:w-24" src="{{ url('/images/logo.png') }}">
                </span>
            </p>

            <h1 class="md:text-5xl text-center w-3/4 mx-auto">Hi, I'm James. Full stack developer with 5 years experience.</h1>

            <p class="text-center pt-12">
                <button class="btn btn-hero" @click.prevent="getStarted">
                    Hire Me
                </button>
            </p>

            <p class="text-center pin-b absolute mb-12">
                <a href="#more" class="text-white">
                    <span class="inline-block w-full mb-2">Learn more about me</span>
                    <i class="inline-block material-icons">keyboard_arrow_down</i>
                </a>
            </p>
        </div>
    </section>

    <section id="more" class="container mx-auto pt-12 md:pt-32 pb-12 md:pb-24 px-4 flex flex-col items-center content-center justify-center self-center">
        <div class="flex flex-wrap w-full">
            <div class="box text-center w-full lg:w-1/3 mb-12 lg:mb-0">
                <i class="box-icon material-icons">lightbulb_outline</i>
                <h2 class="box-title text-3xl">Consultancy</h2>
                <p class="box-text">Just need advice on the technicals of your project?<br />I can set you up with all the information you need to better understand your project's requirements; from the front-end design to the back-end server.</p>
            </div>

            <div class="box text-center w-full lg:w-1/3 mb-12 lg:mb-0">
                <i class="box-icon material-icons">desktop_windows</i>
                <h2 class="box-title text-3xl">Design</h2>
                <p class="box-text">Need a re-design of your website? I can help transform it into a modern, clean and intuitive site.<br />I can provide a robust and configurable design that we can fine-tune to fit your brand.</p>
            </div>

            <div class="box text-center w-full lg:w-1/3">
                <i class="box-icon material-icons">code</i>
                <h2 class="box-title text-3xl">Code</h2>
                <p class="box-text">I love finding elegant solutions to complex problems. I have experience in many areas, such as accountancy, media, payments and lots more. No matter the scope of your project, I'm sure I can help.</p>
            </div>
        </div>
    </section>

    <section class="container pt-12 md:pt-0 mx-auto px-4 text-center">
        <p class="text-2xl font-medium mb-4">
            <i class="material-icons flip-x">format_quote</i>
            Jack of all trades
            <i class="material-icons">format_quote</i>
        </p>

        <div class="w-2/3 md:w-1/2 mx-auto mb-12 md:mb-24">
            @foreach (['PHP', 'Laravel', 'ColdFusion', 'Python', 'MySQL', 'JavaScript', 'Vue', 'React', 'SCSS', 'HTML5'] as $skill)
                <span class="inline-block p-4 text-brand font-medium">{{ $skill }}</span>
            @endforeach
        </div>
    </section>

    <section class="bg-off-white text-center pt-12 md:pt-24 pb-24 md:pb-32 xl:px-24 lg:px-12 md:px-8 px-8">
        <div class="container mx-auto">
            <h1 class="mb-12 md:mb-24 text-3xl">What I've Worked On</h1>

            <div class="flex flex-wrap">
                <div class="lg:w-1/2 md:w-full md:mb-8 text-left">
                    <h2 class="mb-2">EPOS</h2>
                    <p class="xl:w-2/3 lg:w-full leading-normal text-grey-lightest">
                        A fully configurable, extensible web-based point-of-sale system designed for brick and mortar stores.
                        <h3 class="text-base mt-4 text-grey-lighter font-medium">Notable Features</h3>
                        <ul class="inline-block xl:w-2/3 lg:w-full px-4 text-grey-lightest">
                            <li class="p-1 leading-normal">Designed to be modified using its elegant framework written on top of Laravel.</li>
                            <li class="p-1 leading-normal">Supports different receipt printers and payment providers.</li>
                        </ul>
                    </p>
                </div>

                <div class="lg:w-1/2 md:w-full text-right">
                    <img alt="EPOS" src="{{ url('/images/work/epos.png') }}">
                </div>
            </div>

            <div class="flex flex-wrap mt-12 md:mt-32">
                <div class="lg:w-1/2 md:w-full hidden lg:block text-left">
                    <img alt="ARCOMM" src="{{ url('/images/work/arcomm.png') }}">
                </div>

                <div class="lg:w-1/2 md:w-full md:mb-8 text-left lg:pl-12">
                    <h2 class="mb-2">ARCOMM</h2>
                    <p class="xl:w-3/4 lg:w-full leading-normal text-grey-lightest">
                        Built using Laravel, this website handles their gaming community's management and provides a clean and modern hub for their memberbase.
                        <h3 class="text-base mt-4 text-grey-lighter font-medium">Notable Features</h3>
                        <ul class="inline-block xl:w-2/3 lg:w-full px-4 text-grey-lightest">
                            <li class="p-1 leading-normal">Decoding of game files to create a seamless interface for browsing playable scenarios.</li>
                            <li class="p-1 leading-normal">Application system for new members, from the form to the acceptance email.</li>
                            <li class="p-1 leading-normal">Quality control; testers can discuss each scenario and sign off on it to be played.</li>
                        </ul>
                    </p>
                </div>

                <div class="lg:w-1/2 md:w-full lg:hidden block text-left">
                    <img alt="ARCOMM" src="{{ url('/images/work/arcomm.png') }}">
                </div>
            </div>

            <div class="flex flex-wrap mt-12 md:mt-32">
                <div class="lg:w-1/2 md:w-full md:mb-8 text-left">
                    <h2 class="mb-2">MARS</h2>
                    <p class="xl:w-2/3 lg:w-full leading-normal text-grey-lightest">
                        Documentation site for a game addon that brings absolute strategy and customisation to a first-person military simulator.
                        <h3 class="text-base mt-4 text-grey-lighter font-medium">Notable Features</h3>
                        <ul class="inline-block xl:w-2/3 lg:w-full px-4 text-grey-lightest">
                            <li class="p-1 leading-normal">Built using the static-site engine, Jekyll.</li>
                            <li class="p-1 leading-normal">Recursive documentation with automated contents.</li>
                        </ul>
                    </p>
                </div>

                <div class="lg:w-1/2 md:w-full text-right">
                    <img alt="MARS" src="{{ url('/images/work/mars.png') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto pt-12 md:pt-32 pb-12 md:pb-32 px-4 flex flex-col items-center content-center justify-center self-center">
        <h1 class="mb-12 text-3xl">Personal Projects</h1>

        <div class="flex flex-wrap w-full">
            <div class="box text-center md:w-1/2 px-8 pb-8 md:pb-0">
                <h3 class="box-title text-xl md:text-3xl">Laravel Mentions</h3>
                <p class="box-text">
                    Provides an easy way to setup mentions for Eloquent models. It provides the front-end for inserting mentions into content-editable elements, the back-end for associating mentions with models and lastly an elegant way to notify the mentioned models that they have been mentioned.
                </p>
            </div>

            <div class="box text-center md:w-1/2 px-8">
                <h3 class="box-title text-xl md:text-3xl">Laravel References</h3>
                <p class="box-text">
                    Provides a quick and simple way to add unique references to models that can be resolved via route model binding. You usually don't want to expose your primary keys to the client, and without a unique reference such as a username or slug, you can't quickly build a RESTful API.
                </p>
            </div>
        </div>
    </section>

    <section class="relative pt-32 pb-32 px-4 bg-brand text-center text-white">
        <div class="container mx-auto">
            <h1 class="mb-8 text-3xl">Let's Work Together</h1>
            <p class="text-xl leading-normal">If you're interested in working together,<br />please take a few minutes to tell me about your project.</p>
            <p class="mt-8 leading-normal">
                <button class="btn btn-hero" @click.prevent="getStarted">Get Started</button>
            </p>
        </div>

        <p class="absolute pin-b pin-l pin-r mb-8 text-transparent-1/2 text-center">
            <small>&copy; Small Stone {{ date('Y') }}</small>
        </p>
    </section>

    <contact-form></contact-form>
@endsection
