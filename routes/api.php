<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\GoalController;
use App\Http\Controllers\Api\MyActionController;
use App\Http\Controllers\Api\MyBeatController;
use App\Http\Controllers\Api\MyGoalController;
use App\Http\Controllers\Api\MyNowController;
use App\Http\Controllers\Api\SettingNotificationController;
use App\Http\Controllers\Api\SurveyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Login
 */
Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('api.logout');
Route::post('/register', [AuthController::class, 'register'])->name('api.register');

Route::group([
    'namespace' => 'Api',
    'middleware' => ['auth:api']
], function () {
    // User;
    Route::group(['prefix' => 'users'], function () {
        Route::post('/', [])->name('api.exam.get');
    });

    // My now
    Route::group(['prefix' => 'my-now'], function () {
        Route::post('/update-or-create', [MyNowController::class, 'updateOrCreate'])->name('api.my-now.update-or-create');
        Route::get('/', [MyNowController::class, 'getMyNow'])->name('api.my-now.detail');
    });

    // Setting Notification
    Route::group(['prefix' => 'setting-notifications'], function () {
        Route::post('/', [SettingNotificationController::class, 'store'])->name('api.my-now.store');
    });

    // Survey
    Route::group(['prefix' => 'surveys'], function () {
        Route::get('/', [SurveyController::class, 'index'])->name('api.survey.index');
        Route::get('/{id}/detail', [SurveyController::class, 'detail'])->name('api.survey.detail');
        Route::post('/{id}/answer-questions', [SurveyController::class, 'answerQuestions'])->name('api.survey.answer-questions');
    });

    // My beats
    Route::group(['prefix' => 'my-beats'], function () {
        Route::get('/', [MyBeatController::class, 'getMyBeat'])->name('api.my-beat.getMyBeat');
    });

    // Goals
    Route::group(['prefix' => 'goals'], function () {
        Route::get('/', [GoalController::class, 'index'])->name('api.goal.index');
        Route::get('/{id}/questions', [GoalController::class, 'getQuestionByGoal'])->name('api.goal.getQuestionByGoal');

    });

    // My Heart action
    Route::group(['prefix' => 'my-hearts'], function () {
        Route::get('/', [MyGoalController::class, 'getMyHeartToday'])->name('api.my-heart.today');
    });

    // My goals
    Route::group(['prefix' => 'my-goals'], function () {
        Route::get('/with-date', [MyGoalController::class, 'myGoalWithDate'])->name('api.my-goal.with-date');
        Route::post('/', [MyGoalController::class, 'createMygoal'])->name('api.my-goal.create');
        Route::post('/remove-my-goal', [MyGoalController::class, 'removeMyGoal'])->name('api.my-goal.remove-my-goal');
        Route::get('/in-month', [MyGoalController::class, 'myGoalsInMonth'])->name('api.my-goal.in-month');
        Route::get('/questions/with-date', [MyGoalController::class, 'myGoalsWithQuestionWithDate'])->name('api.my-goal.myGoalsWithQuestionWithDate');
        Route::post('/{id}/answer-questions', [MyGoalController::class, 'answerQuestions'])->name('api.my-goal.answer-questions');
    });

    // My goals
    Route::group(['prefix' => 'my-actions'], function () {
        Route::get('/complete', [MyActionController::class, 'complete'])->name('api.my-actions.complete');
        Route::get('/not-complete', [MyActionController::class, 'notComplete'])->name('api.my-actions.not-complete');
        Route::post('/complete-by-key', [MyActionController::class, 'completeActionByKey'])->name('api.my-actions.complete-by-key');
    });

    // My goals
    Route::group(['prefix' => 'dashboards'], function () {
        Route::get('/', [DashboardController::class, 'show'])->name('api.dashboards.show');
    });
});
