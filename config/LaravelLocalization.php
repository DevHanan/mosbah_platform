<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Supported Locales
    |--------------------------------------------------------------------------
    |
    | The locales supported by your application. You should register all the
    | locales you want to support in this array.
    |
    */

    'supportedLocales' => [
        'en' => ['name' => 'English'],  // Optional: Define the display name for each locale
        'ar' => ['name' => 'العربية (Arabic)'], // Arabic translation
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Locale
    |--------------------------------------------------------------------------
    |
    | The default locale for your application. This locale will be used when no
    | locale is specified in the URL or session.
    |
    */

    'default' => 'en',  // Change this to your default locale (e.g., 'ar' for Arabic)

    /*
    |--------------------------------------------------------------------------
    | Redirect to Fallback Locale
    |--------------------------------------------------------------------------
    |
    | Whether to redirect to the fallback locale when the requested locale is not
    | available.
    |
    */

    'redirect' => true,

    /*
    |--------------------------------------------------------------------------
    | Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale which will be used when the requested locale is not
    | available.
    |
    */

    'fallbackLocale' => 'en',  // Change this to your fallback locale if needed

    /*
    |--------------------------------------------------------------------------
    | Route Prefix
    |--------------------------------------------------------------------------
    |
    | This prefix will be added to the route that handles language switching.
    |
    */

    'routePrefix' => 'language',

    /*
    |--------------------------------------------------------------------------
    | Hidden Prefix
    |--------------------------------------------------------------------------
    |
    | Hide the default locale in the URL.
    |
    */

    'hideDefaultLocaleInURL' => false,  // Change to true if you don't want to show the default locale in the URL

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | The middleware that will be applied to routes that use language localization.
    |
    */

    'middleware' => [
        \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
        \Mcamara\LaravelLocalization\Middleware\LocalizationRedirect::class,
        \Mcamara\LaravelLocalization\Middleware\LocaleViewPath::class,
    ],

];