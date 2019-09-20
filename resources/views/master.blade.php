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
                <img src="{{ asset('/assets/logo.png') }}" class="p-5 laptop:h-20 laptop:w-1/4 tablet-portrait:w-full tablet-portrait:p-5 tablet-portrait:h-24 tablet-landscape:h-24 desktop:shadow-md desktop:w-1/4 desktop:p-5 desktop:m-5 laptop:p-5 bg-white z-20 animated fadeIn z-10 p-0 tablet-portrait:px-10 object-contain overflow-hidden rounded-lg">

                <!-- WEATHER INFORMATION -->
                <div id="weather-information" class="desktop:p-10 desktop:m-5 laptop:px-10 hidden laptop:h-20 laptop:flex tablet-landscape:flex-row tablet-landscape:justify-center tablet-landscape:items-center rounded-lg z-20 shadow-lg animated fadeIn m-10 laptop:m-0 bg-white p-5 text-1rem text-red-500 raleway tracking-2px leading-none">
                    weather information here.
                </div>

            </div>

            <!-- LOGIN FORM -->
            <form class="w-11/12 laptop:w-1/3 outline-none rounded-lg animated fadeInUp shadow-xl z-20 flex-center bg-white flex flex-col py-6 px-12 desktop:py-12" action=" {{url('/store') }}" method="post">

                {{ csrf_field() }}

                <!-- TITLE -->
                <h1 class="text-2rem tablet-portrait:text-4rem tablet-landscape:text-3rem dekstop:text-4rem text-red-600 raleway px-5 mb-5">connect wifi</h1>

                <!-- FIRSTNAME, LASTNAME, EMAIL. -->
                <input class="outline-none shadow-md rounded-lg w-full h-16 tablet-landscape:h-12 p-5 tablet-landscape:p-8 text-1.25rem tablet-portrait:text-1.5rem desktop:text-1.5rem text-red-600" type="text" placeholder="first name" name="firstname"><br>
                <input class="outline-none shadow-md rounded-lg w-full h-16 tablet-landscape:h-12 p-5 tablet-landscape:p-8 text-1.25rem tablet-portrait:text-1.5rem desktop:text-1.5rem text-red-500" type="text" placeholder="last name" name="lastname"><br>
                <input class="outline-none shadow-md rounded-lg w-full h-16 tablet-landscape:h-12 p-5 tablet-landscape:p-8 text-1.25rem tablet-portrait:text-1.5rem desktop:text-1.5rem text-red-500" type="email" placeholder="email" name="email" required><br>

                <!-- ACCEPT TERMS -->
                <div class="flex flex-col w-full">
                    <div class="checkbox-wrapper flex flex-row justify-between items-center text-red-600">
                        <input checked="checked" name="consent1" type="checkbox" value=1>
                        <span>accept terms</span>
                    </div>
                    <div class="checkbox-wrapper flex flex-row justify-between items-center text-red-600">
                        <input checked="checked" name="consent2" type="checkbox" value=1>
                        <span>email list</span>
                    </div>
                </div>

                <!-- SUBMIT -->
                <input class="leading-none tracking-3px outline-none rounded-lg transition-all-250ms hover:text-red-500 hover:bg-white shadow-md w-full h-20 tablet-landscape:h-16 p-5 text-1.5rem tablet-portrait:text-1.5rem bg-red-500 text-white uppercase roboto cursor-pointer"  type="submit" value="Submit">

            </form>

            <!-- COPYRIGHT -->
            <div class="w-11/12 laptop:justify-end laptop:absolute laptop:bottom-0 laptop:right-0 laptop:m-10 laptop:w-auto laptop:px-10 laptop:py-5 z-20 my-5 shadow-lg rounded-lg p-5 bg-white text-red-500 flex flex-row justify-center items-center raleway">
                &copy; <span class="ml-1 text-1.25rem tracking-1px leading-none"> 2019 built - BerryNodes</span>
            </div>

        </div>
        @include('scripts')
    </body>
</html>
