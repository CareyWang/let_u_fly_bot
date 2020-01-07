<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Telegram\Bot\Api;
use Telegram\Bot\Laravel\Facades\Telegram;

class LetUFlyBotController extends Controller
{
    const BOT_NAME = 'let_u_fly_bot';
}
