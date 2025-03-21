<?php

namespace Tecgdcs;

use JetBrains\PhpStorm\NoReturn;

class Response
{
    #[NoReturn]
    public static function abort(): void
    {
        die('Un problème technique est survenu suite à votre requête');
    }

    #[NoReturn]
    public static function redirect($url): void
    {
        header('location' . $url);
        exit;
    }

    #[NoReturn]
    public static function back(): void
    {
        self::redirect($_SERVER['HTTP_REFERER']);

    }
}