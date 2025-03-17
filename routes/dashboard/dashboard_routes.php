<?php

// Admin dashboard routes
use App\Http\Controllers\Dashboard\{AnnouncementController,
    CharacterController,
    DashboardController,
    GamificationController,
    GuildController,
    StatisticsController,
    UserController};

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Dashboard home
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Statistics and analytics
    Route::get('/statistics', [StatisticsController::class, 'index'])->name('admin.statistics');
    Route::get('/statistics/users', [StatisticsController::class, 'users'])->name('admin.statistics.users');
    Route::get('/statistics/characters', [StatisticsController::class, 'characters'])->name('admin.statistics.characters');
    Route::get('/statistics/guilds', [StatisticsController::class, 'guilds'])->name('admin.statistics.guilds');
    Route::get('/statistics/economy', [StatisticsController::class, 'economy'])->name('admin.statistics.economy');

    // User management
    Route::resource('users', UserController::class, ['as' => 'admin']);
    Route::post('/users/update-silk', [UserController::class, 'updateSilk'])->name('admin.users.update-silk');
    Route::post('/users/update-gold', [UserController::class, 'updateGold'])->name('admin.users.update-gold');
    Route::post('/users/rename', [UserController::class, 'renameUser'])->name('admin.users.rename');

    // Character management
    Route::resource('characters', CharacterController::class, ['as' => 'admin']);
    Route::post('/characters/rename', [CharacterController::class, 'renameCharacter'])->name('admin.characters.rename');

    // Guild management
    Route::resource('guilds', GuildController::class, ['as' => 'admin']);

    // Announcements
    Route::resource('announcements', AnnouncementController::class, ['as' => 'admin']);

    // Gamification management
    Route::get('/gamification', [GamificationController::class, 'index'])->name('admin.gamification');
    Route::post('/gamification/award-points', [GamificationController::class, 'awardPoints'])->name('admin.gamification.award');
    Route::post('/gamification/create-achievement', [GamificationController::class, 'createAchievement'])->name('admin.gamification.create-achievement');
    Route::delete('/gamification/delete-achievement/{id}', [GamificationController::class, 'deleteAchievement'])->name('admin.gamification.delete-achievement');
});
