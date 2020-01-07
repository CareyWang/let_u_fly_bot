<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Telegram\Bot\Laravel\Facades\Telegram;


class AboutController extends LetUFlyBotController
{
    public function about()
    {
        try {
            $response = Telegram::getMe();
            $botId = $response->getId();
            $firstName = $response->getFirstName();
            $username = $response->getUsername();

            return Response::json(['botId' => $botId]);
        } catch (\Throwable $t) {

        }
    }
}
