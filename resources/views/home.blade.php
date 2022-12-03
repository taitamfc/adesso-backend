@extends('layouts.master')
@section('title', 'Home')
@section('content')

<div class="hero w-full ">
    <!-- End Nav -->
    <div class="container mx-auto mt-8 ">
        <!-- Start Hero Content -->
        <div class="py-8 md:py-16 hero__content text-center w-4/5 mx-auto fade-in fade-in-first">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight">Is your child happy?</h1>
            <p class="text-xl pt-4 pb-8 text-gray-700">Measure what is most important and prevent problems at the
                right time!</p>
            <div class="flex justify-center items-center flex-col">
                <a href="{{ url('') }}/talks/start-now"
                    class="button bg-yellow-500 hover:bg-yellow-600 rounded border border-yellow-600 shadow font-semibold px-6 py-2 inline-block transition duration-500 ease-in-out cursor-pointer text-xl"
                    disabled="true">
                    <span class="button__text">Free Signup</span>
                </a>
            </div>
        </div>
        <!-- End Hero Content -->
    </div>
    <!-- End Hero Content -->
</div>

<div class="border-t border-b border-blue-200 py-16 bg-blue-100 my-16 px-4" id="track">
    <div class="container mx-auto">
        <div class="mb-8">
            <div class="w-full lg:w-8/12 text-center mx-auto">
                <h2 class="text-2xl md:text-4xl leading-tight font-bold">Most child suicides are preventable</h2>
                <p class="text-lg py-2 text-gray-700">Parents of children who succumb to pressure wish they had
                    known what their child was feeling. Talk Family is a simple communication channel that
                    encourages your child to talk openly and freely.</p>
            </div>
        </div>
        <div class="my-16 lg:flex">

            <div
                class="my-8 lg:my-0 w-full lg:w-2/6 text-center mt-4 flex flex-col justify-between align-content-start px-4">
                <img src="img/alarm.png"
                    class="lg:w-1/3 lazy self-start mx-auto py-2 md:py-4 w-1/2 md:w-1/3 lg:w-auto"
                    alt="Weekly reminders" />
                <div>
                    <h3 class="font-semibold text-xl md:text-2xl lg:text-xl">Don't leave it to chance</h3>
                    <p class="text-gray-600">Our app will send a weekly reminder to you and your child to talk
                        about everything that is important.</p>
                </div>
            </div>

            <div
                class="my-8 lg:my-0 w-full lg:w-2/6 text-center mt-4  flex flex-col align-content-start justify-between px-4">
                <img src="img/monitor.png"
                    class="lg:w-1/3 lazy self-start mx-auto py-2 md:py-4 w-1/2 md:w-1/3 lg:w-auto"
                    alt="Monitor and track" />
                <div>
                    <h3 class="font-semibold text-xl md:text-2xl lg:text-xl">Monitor and Track</h3>
                    <p class="text-gray-600">You will be able to track how your child is dealing with any issues
                        and proactively help and support her.</p>
                </div>
            </div>

            <div
                class="my-8 lg:my-0 w-full lg:w-2/6 text-center mt-4  flex flex-col align-content-start justify-between px-4">
                <img src="img/child.png"
                    class="lg:w-1/3 lazy self-start mx-auto py-2 md:py-4 w-1/2 md:w-1/3 lg:w-auto"
                    alt="Support your child" />
                <h3 class="font-semibold text-xl md:text-2xl lg:text-xl">Take steps</h3>
                <p class="text-gray-600">Most importantly this open communication will help you address the
                    concerns before they become major issues.</p>
            </div>
        </div>

        <div class=" mt-4">
            <div class="lg:w-1/2 mx-auto text-center mt-4">
                <blockquote class="italic text-lg text-gray-700">
                    “At the end of the day, the most overwhelming key to a child's success is the positive
                    involvement of parents."
                </blockquote>
                <div class="mt-3 flex justify-center content-center items-center">
                    <img src="img/jane.png" class="w-8 lazy self-start" alt="Testimonial Avatar" />
                    <span class="ml-2 font-bold text-gray-900">Jane D Hull, American Politican and Educator</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Features Block -->
<div class="features px-4 md:px-8" id="better">
    <div class="container mx-auto">

        <!-- Start Features -->
        <div class="flex flex-col md:flex-row items-center content-center py-12 lg:pt-16 lg:pb-32">
            <!-- Start Feature Image -->
            <div class="md:w-1/2 text-center mb-4 lg:mb-0 relative">
                <img src="img/device-mobile.png" class="lazy mx-auto z-10 relative w-2/3 md:w-2/5 lg:w-1/3"
                    alt="Mobile Device" />

            </div>
            <!-- End Feature Image -->

            <!-- Start Feature Content -->
            <div class="w-full md:w-1/2 ">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold">Give your child the freedom to talk!</h2>
                <p class="text-md lg:text-lg pt-4 pb-8 text-gray-700">
                    Personal communication and expression can be confusing for a child. Talk.Family makes it simple
                    for the child to convey complex issues to parents.
                </p>
                <ul class="usps">
                    <li class="text-gray-900 py-1">Weekly reviews</li>
                    <li class="text-gray-900 py-1">Analysis and tracking of child's responses</li>
                    <li class="text-gray-900 py-1">Recommendations for improvement</li>
                </ul>
            </div>
            <!-- End Feature Content -->
        </div>
        <!-- End Feature -->
    </div>
</div>
<!-- End Features Block -->


<!-- Start CTA Block -->
<div class="bg-yellow-100 py-16 border-t border-yellow-300 px-4 md:px-16 lg:px-0">
    <div class="container mx-auto py-4">
        <!-- Start Image -->
        <div class=" py-4">
            <div class="lg:w-3/12 col-md-4 mx-auto text-center">
                <img src="img/daughter.png" class="lazy mx-auto w-100 w-1/2 lg:w-full" alt="Make time for family" />
            </div>
        </div>
        <!-- End Image -->

        <!-- Start Content -->
        <div class="">
            <div class="lg:w-3/6 mx-auto text-center">
                <h2 class="text-2xl md:text-4xl lg:text-4xl font-bold">Make time for what's important!</h2>
                <p class="text-md md:text-xl lg:text-lg pt-4 pb-8 text-gray-800">A safe space where you and your
                    child can talk about the things that make all the difference!</p>
                <div class="flex justify-center items-center flex- mb-2">
                    <a
                        class="button bg-yellow-500 hover:bg-yellow-600 rounded border border-yellow-600 hover:border-yellow-700 shadow font-semibold px-4 py-2 inline-block mx-2 cursor-pointer transition duration-500 ease-in-out">
                        <span class="button__text">FREE Signup</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Content -->

        <!-- Start Testimonial -->
        <div class=" mt-8 ">
            <div class="lg:w-1/2 mx-auto mt-4 text-center ">
                <blockquote class="text-gray-700 italic text-sm  lg:text-lg">
                    “It is easier to build strong children than to repair broken men. "
                </blockquote>
                <div class="mt-3 flex justify-center content-center items-center">
                    <img src="img/doughlass.jpeg" class="w-8 lazy self-start" alt="Frederick Douglass" />
                    <span class="ml-2 font-bold text-gray-900">Frederick Douglass, Social reformer</span>
                </div>
            </div>
        </div>
        <!-- End Testimonial -->
    </div>
</div>
<!-- End CTA Block -->
@endsection
