<link rel="stylesheet" href="{{ '/styles/tailwind.css' }}">
<link rel="stylesheet" href="{{ '/styles/animate.css' }}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Roboto&display=swap" rel="stylesheet">
<style>

    .delay-1s {
        animation-delay: 1s;
    }

    .delay-1.5s {
        animation-delay: 1.5s;
    }

    /* Change Autocomplete styles in Chrome*/
    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    textarea:-webkit-autofill,
    textarea:-webkit-autofill:hover,
    textarea:-webkit-autofill:focus,
    select:-webkit-autofill,
    select:-webkit-autofill:hover,
    select:-webkit-autofill:focus {
    -webkit-text-fill-color: #011b5c;
    background-color:white;
    transition: background-color 5000s ease-in-out 0s;
    }

    .open-sans {
        font-family: 'Open Sans', sans-serif;
    }

    .roboto {
        font-family: 'Roboto', sans-serif;
    }

    .raleway {
        font-family: 'Raleway', sans-serif;
    }

</style>
@yield('additional-styles')
