@extends('layouts.app')

@section('content')
    <section class="w-full relative h-screen bg-image text-white" style="background-image: url({{ url('/images/banner.jpg') }})">
        <div class="container h-full mx-auto flex flex-col items-center content-center justify-center self-center">
            <p class="text-center pin-t absolute mt-12">
                <span class="inline-block">
                    <img class="w-24" src="{{ url('/images/logo_w.png') }}">
                </span>
            </p>

            <h1 class="text-5xl text-center w-3/4 mx-auto">Hi, I'm James. Full stack developer with 5 years experience.</h1>

            <p class="text-center pt-12">
                <button class="btn btn-hero">
                    Hire Me
                </button>
            </p>

            <p class="text-center pin-b absolute mb-12">
                <a href="#more" class="text-white">
                    <span class="inline-block w-full mb-2">Learn more about what I do</span>
                    <i class="inline-block material-icons">keyboard_arrow_down</i>
                </a>
            </p>
        </div>
    </section>

    <section id="more" class="container mx-auto pt-32 pb-32 px-4 flex flex-col items-center content-center justify-center self-center">
        <div class="flex flex-wrap w-full">
            <div class="box text-center md:w-1/3">
                <i class="box-icon text-green material-icons">lightbulb_outline</i>
                <h3 class="box-title">Consultancy</h3>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a nisl dolor. Mauris ac varius lorem. Proin viverra, dui eu pellentesque elementum, ipsum erat volutpat neque, quis interdum elit odio in dolor.</p>
            </div>

            <div class="box text-center md:w-1/3">
                <i class="box-icon text-blue material-icons">desktop_windows</i>
                <h3 class="box-title">Design</h3>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a nisl dolor. Mauris ac varius lorem. Proin viverra, dui eu pellentesque elementum, ipsum erat volutpat neque, quis interdum elit odio in dolor.</p>
            </div>

            <div class="box text-center md:w-1/3">
                <i class="box-icon text-red material-icons">code</i>
                <h3 class="box-title">Code</h3>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a nisl dolor. Mauris ac varius lorem. Proin viverra, dui eu pellentesque elementum, ipsum erat volutpat neque, quis interdum elit odio in dolor.</p>
            </div>
        </div>
    </section>

    <section class="bg-off-white text-center pt-24 pb-32 px-24">
        <div class="container mx-auto">
            <h1 class="mb-24 text-3xl">What I've Worked On</h1>

            <div class="flex flex-wrap">
                <div class="md:w-1/2 text-left">
                    <h2 class="mb-2">ARCOMM</h2>
                    <p class="w-2/3 leading-normal text-grey-lightest">
                        Built using Laravel, this website handles their gaming community's management and provides a clean and amodern hub for their memberbase.
                        <h4 class="mt-4 text-grey-lighter font-medium">Notable Features</h4>
                        <ul class="inline-block w-2/3 px-4 text-grey-lightest">
                            <li class="p-1 leading-normal">Decoding of game files to create a seamless interface for browsing playable scenarios.</li>
                            <li class="p-1 leading-normal">Application system for new members, from the form to the acceptance email.</li>
                            <li class="p-1 leading-normal">Quality control; testers can discuss each scenario and sign off on it to be played.</li>
                        </ul>
                    </p>
                </div>

                <div class="md:w-1/2 text-right">
                    <img src="{{ url('/images/work/arcomm2.png') }}">
                </div>
            </div>

            <div class="flex flex-wrap mt-32">
                <div class="md:w-1/2 text-left">
                    <img src="{{ url('/images/work/mars.png') }}">
                </div>

                <div class="md:w-1/2 text-left pl-12">
                    <h2 class="mb-2">MARS</h2>
                    <p class="w-2/3 leading-normal text-grey-lightest">
                        Documentation site for a game addon that brings absolute strategy and customisation to a first-person military simulator.
                        <h4 class="mt-4 text-grey-lighter font-medium">Notable Features</h4>
                        <ul class="inline-block w-2/3 px-4 text-grey-lightest">
                            <li class="p-1 leading-normal">Built using the static-site engine, Jekyll.</li>
                            <li class="p-1 leading-normal">Recursive documentation with automated contents.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto pt-32 pb-32 px-4 flex flex-col items-center content-center justify-center self-center">
        <h1 class="mb-12 text-3xl">Personal Projects</h1>
        <div class="flex flex-wrap w-full">
            <div class="box text-center md:w-1/2 px-8">
                <h3 class="box-title">Laravel Mentions</h3>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a nisl dolor. Mauris ac varius lorem. Proin viverra, dui eu pellentesque elementum, ipsum erat volutpat neque, quis interdum elit odio in dolor.</p>
            </div>

            <div class="box text-center md:w-1/2 px-8">
                <h3 class="box-title">Laravel References</h3>
                <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a nisl dolor. Mauris ac varius lorem. Proin viverra, dui eu pellentesque elementum, ipsum erat volutpat neque, quis interdum elit odio in dolor.</p>
            </div>
        </div>
    </section>

    <section class="relative pt-32 pb-32 px-4 bg-brand text-center text-white">
        <div class="container mx-auto">
            <h1 class="mb-8 text-3xl">Let's Work Together</h1>
            <p class="text-xl leading-normal">I'm accepting new projects and would love to hear about yours.</p>
            <p class="text-xl leading-normal">Please take a few minutes to tell me about it.</p>
            <p class="mt-8 leading-normal">
                <button class="btn btn-hero">Get Started</button>
            </p>
        </div>

        <p class="absolute pin-b pin-l pin-r mb-8 text-transparent-1/2 text-center">
            <small>&copy; Small Stone {{ date('Y') }}</small>
        </p>
    </section>
@endsection
