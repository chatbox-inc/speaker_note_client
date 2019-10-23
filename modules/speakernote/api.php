<?php

use Illuminate\Http\Request;

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

use Chatbox\SpeakerNote\Http\Actions;

Route::group([
    "prefix" => "spnote"
],function(){

    // メッセージング
    Route::get('/message', Actions\Message\MessageAction::class."@handle");

    // ログイン系の処理を行う
    Route::post('/login', Actions\Login\LoginAction::class."@handle");

    // 登壇情報一覧の取得: Max 100 件
    Route::get('/talks', Hoge::class."@handle");
    // 登壇情報の追加
    Route::post('/talk', Hoge::class."@handle");
    // 登壇情報の編集
    Route::patch('/talk/{key}', Hoge::class."@handle");

    // グループの作成
    //Route::post('/', Hoge::class."@handle");

    // イベントの編集
    Route::get('/team/{series_id}', Actions\Team\GetAction::class."@handle");

    // イベントの編集
    Route::get('/event/{event_id}', Actions\Event\GetAction::class."@handle");
});


