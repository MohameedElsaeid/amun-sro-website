<?php


use App\Http\Controllers\Auth\{LoginController, RegisterController};
use App\Http\Controllers\Website\{AccountController,
    BlogController,
    BugReportController,
    CareersController,
    CharacterController,
    ContactUsController,
    DonationController,
    DownloadsController,
    EventsController,
    FaqController,
    HelpController,
    HomeController,
    PrivacyController,
    RankingController,
    RulesController,
    SystemController,
    TermsController};

Route::group(['as' => 'website.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/downloads', [DownloadsController::class, 'index'])->name('downloads');
    Route::get('/downloads/sbot', [DownloadsController::class, 'sbot'])->name('downloads.sbot');
    Route::get('/ranking', [RankingController::class, 'index'])->name('ranking');
    Route::get('/rules', [RulesController::class, 'index'])->name('rules');
    Route::get('/events', [EventsController::class, 'index'])->name('events');
    Route::get('/system', [SystemController::class, 'index'])->name('system');
    Route::get('/character', [CharacterController::class, 'index'])->name('character');
    Route::get('/account', [AccountController::class, 'index'])->name('account');


    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/help', [HelpController::class, 'index'])->name('help');
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    Route::get('/bug-report', [BugReportController::class, 'index'])->name('bug-report');
    Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
    Route::get('/terms', [TermsController::class, 'index'])->name('terms');
    Route::get('/careers', [CareersController::class, 'index'])->name('careers');
    Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
    Route::get('/donate', [DonationController::class, 'index'])->name('donate');



    //AUTH
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::post('/forgot', [LoginController::class, 'login'])->name('forgotPassword');

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


});
