<!doctype html>
<html lang="nl">
    <head data-enhance="false">
        @include('meta')
        @include('styles')
    </head>
    <body>
        <!-- VUE WRAPPER -->
        <div id="vue" class="overflow-hidden bg-white flex flex-col justify-center laptop:justify-start items-center min-h-screen">

            <!-- BG IMAGE -->
            <img src="{{ asset('/assets/background.jpg') }}" class="animated fadeIn z-10 fixed top-0 left-0 object-cover h-screen w-screen">

            <!-- LOGO & WEATHER INFORMATION -->
            <div class="w-11/12 flex-shrink white overflow-hidden flex flex-row bg-white laptop:bg-transparent laptop:shadow-none justify-center laptop:p-0 laptop:justify-between my-5 rounded-lg shadow-lg tablet-landscape:p-0">

                <!-- LOGO -->
                <img src="{{ asset('/assets/logo.png') }}" class="animated fadeIn delay-1s p-5 laptop:h-20 laptop:w-1/4 tablet-portrait:w-full tablet-portrait:p-5 tablet-portrait:h-24 tablet-landscape:h-24 desktop:shadow-md desktop:w-1/4 desktop:p-5 desktop:m-5 laptop:p-5 bg-white z-20 animated fadeIn z-10 p-0 tablet-portrait:px-10 object-contain overflow-hidden rounded-lg">

                <!-- WEATHER INFORMATION -->
                <div id="weather-information" class="animated fadeIn delay-1s text-setservices-blue desktop:p-10 desktop:m-5 laptop:px-10 hidden laptop:h-20 laptop:flex tablet-landscape:flex-row tablet-landscape:justify-center tablet-landscape:items-center rounded-lg z-20 shadow-lg animated fadeIn m-10 laptop:m-0 bg-white p-5 text-1rem raleway tracking-2px leading-none">
                    weather information
                </div>

            </div>

            <!-- LOGIN FORM -->
            <form class="w-11/12 laptop:w-1/3 outline-none rounded-lg animated fadeInUp shadow-xl z-20 flex-center bg-white flex flex-col py-6 px-12 desktop:py-12" action=" {{url('/store') }}" method="post">

                {{ csrf_field() }}

                <!-- TITLE -->
                <div class="delay-1s animated fadeIn w-full flex flex-row justify-center items-center mb-5">
                    <h1 class="whitespace-no-wrap text-setservices-blue text-2rem tablet-portrait:text-4rem tablet-landscape:text-3rem laptop:text-2.5rem desktop:text-4rem raleway px-5">connect wifi</h1>
                    <img src="{{ asset('/assets/wifi.svg') }}" class="w-12 tablet-portrait:w-20 laptop:w-12 h-full mr-2" alt="wifi-icon">
                </div>

                <!-- FIRSTNAME, LASTNAME, EMAIL. -->
                <input class="delay-1s animated fadeIn text-setservices-blue outline-none shadow-md rounded-lg w-full h-16 tablet-landscape:h-12 p-5 tablet-landscape:p-8 text-1.25rem tablet-portrait:text-1.5rem desktop:text-1.5rem text-red-600" type="text" placeholder="first name" name="firstname"><br>
                <input class="delay-1s animated fadeIn text-setservices-blue outline-none shadow-md rounded-lg w-full h-16 tablet-landscape:h-12 p-5 tablet-landscape:p-8 text-1.25rem tablet-portrait:text-1.5rem desktop:text-1.5rem text-red-500" type="text" placeholder="last name" name="lastname"><br>
                <input class="delay-1s animated fadeIn text-setservices-blue outline-none shadow-md rounded-lg w-full h-16 tablet-landscape:h-12 p-5 tablet-landscape:p-8 text-1.25rem tablet-portrait:text-1.5rem desktop:text-1.5rem text-red-500" type="email" placeholder="email" name="email" required><br>

                <!-- ACCEPT TERMS -->
                <div class="delay-1s animated fadeIn flex flex-col items-center justify-center w-full mb-5">
                    <div class="checkbox-wrapper flex flex-row justify-between items-center text-setservices-green accept-terms">
                        <input checked="checked" name="consent1" type="checkbox" value=1 class="mr-2 w-6 border-b-2">
                        <label for="consent1">accept terms</label>
                    </div>
                    <div class="checkbox-wrapper flex flex-row justify-between items-center text-setservices-green">
                        <input checked="checked" name="consent2" type="checkbox" value=1 class="mr-2 w-6">
                        <label for="consent2">sign up to newsletter</label>
                    </div>
                </div>

                <!-- SUBMIT -->
                <input class="delay-1s animated fadeIn leading-none tracking-3px outline-none rounded-lg transition-all-250ms hover:text-white hover:bg-setservices-green shadow-md w-full h-20 tablet-landscape:h-16 p-5 text-1.5rem tablet-portrait:text-1.5rem border border-setservices-green bg-white text-setservices-green uppercase roboto cursor-pointer"  type="submit" value="Submit">

            </form>

            <!-- COPYRIGHT -->
            <div class="animated fadeIn delay-1s text-setservices-blue w-11/12 laptop:justify-end laptop:absolute laptop:bottom-0 laptop:right-0 laptop:m-10 laptop:w-auto laptop:px-10 laptop:py-5 z-20 my-5 shadow-lg rounded-lg p-5 bg-white flex flex-row justify-center items-center raleway">
                &copy; <span class="ml-1 text-1.25rem tracking-1px leading-none"> 2019 built - BerryNodes</span>
            </div>

            <!-- OVERLAY -->
            <div class="fixed top-0 left-0 z-50 hidden overlay flex flex-row justify-center items-center w-screen h-screen p-5 text-1rem leading-loose tracking-2px bg-setservices-blue text-white">
                <div class="close-terms absolute top-0 right-0 m-10 h-12 w-12">x</div>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare molestie elit vitae semper. Nulla facilisi. Aliquam convallis et orci nec tincidunt. Suspendisse quis dui volutpat, mollis dui a, suscipit diam. Nullam sodales libero orci, mattis blandit felis fermentum in. Nam sollicitudin quam ligula, id sodales libero venenatis vel. Nullam sodales tellus vel sapien commodo hendrerit. In mollis rutrum purus, et tincidunt libero imperdiet vel. Nam id nisl ac lectus bibendum rutrum suscipit vitae nibh. Mauris quis ante non velit volutpat tempor in eget urna. Nam risus metus, accumsan vel dolor a, vehicula ultrices augue.

            </div>
        </div>
        @include('scripts')
    </body>
</html>
