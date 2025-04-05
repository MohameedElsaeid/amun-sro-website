<?php


use App\Http\Controllers\Auth\{LoginController, RegisterController};
use App\Http\Controllers\Website\{
    AccountController,
    AffiliateController,
    BlogController,
    BugReportController,
    CareersController,
    CharacterController,
    ContactUsController,
    DownloadsController,
    EventsController,
    FaqController,
    HelpController,
    HomeController,
    NewsLetterController,
    PaymentController,
    PrivacyController,
    RankingController,
    RulesController,
    GamificationController,
    SystemController,
    TermsController
};

Route::middleware('throttle:60,1')->group(function () {
    Route::group(['as' => 'website.'], function () {

        Route::post('/checkout', [PaymentController::class, 'createCheckoutSession'])->name('checkout.create');
        Route::get('/checkout/success', [PaymentController::class, 'success'])->name('checkout.success');
        Route::get('/checkout/cancel', [PaymentController::class, 'cancel'])->name('checkout.cancel');

        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/downloads', [DownloadsController::class, 'index'])->name('downloads');
        Route::get('/downloads/sbot', [DownloadsController::class, 'sbot'])->name('downloads.sbot');
        Route::get('/downloads/client', [DownloadsController::class, 'client'])->name('downloads.client');
        Route::get('/ranking', [RankingController::class, 'index'])->name('ranking');
        Route::get('/rules', [RulesController::class, 'index'])->name('rules');
        Route::get('/events', [EventsController::class, 'index'])->name('events');
        Route::get('/system', [SystemController::class, 'index'])->name('system');
        Route::get('/account', [AccountController::class, 'index'])->name('account');
        Route::get('/character', [CharacterController::class, 'index'])->name('character');
        Route::get('/change-password', [AccountController::class, 'viewChangePassword'])->name('view.change.password');
        Route::post('/change/password', [AccountController::class, 'changePassword'])->name('change.password');
        Route::get('/update/profile', [AccountController::class, 'viewProfile'])->name('view.profile');
        Route::post('/update', [AccountController::class, 'update'])->name('update.profile');


        //    Route::get('/character', [CharacterController::class, 'index'])->name('character');

        Route::get('/blog', [BlogController::class, 'index'])->name('blog');
        Route::get('/help', [HelpController::class, 'index'])->name('help');
        Route::get('/faq', [FaqController::class, 'index'])->name('faq');
        Route::get('/bug-report', [BugReportController::class, 'index'])->name('bug-report');
        Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
        Route::post('/contact-us', [ContactUsController::class, 'submit'])->name('contact-us.submit');
        Route::get('/terms', [TermsController::class, 'index'])->name('terms');
        Route::get('/careers', [CareersController::class, 'index'])->name('careers');
        Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
        //        Route::get('/recharge', [PaymentController::class, 'index'])->name('donate');

        // Donation routes
        Route::get('/donate', [PaymentController::class, 'index'])->name('donate');
        Route::get('/donate/{currency}', [PaymentController::class, 'currencyPackages'])->name('donate.currency');
        Route::post('/donate/payment-method', [PaymentController::class, 'selectPaymentMethod'])->name('donate.payment-method');
        // Route::post('/donate/process', [PaymentController::class, 'processPayment'])->name('donate.process');

        //AUTH
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        Route::post('/forgot', [LoginController::class, 'login'])->name('forgotPassword');
        Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
        Route::post('news-letter', [NewsLetterController::class, 'subscribe'])->name('newsLetter.subscribe');


        Route::middleware(['auth:web'])->group(function () {
            Route::post('/donation/process', [PaymentController::class, 'processDonation'])->name('donation.process');
            Route::get('/leaderboard', [GamificationController::class, 'index'])->name('leaderboard');
            Route::get('/dashboard', [GamificationController::class, 'dashboard'])->name('gamification.dashboard');
            Route::get('/affiliate', [AffiliateController::class, 'index'])->name('affiliate');
        });

    });
});
