<?php

namespace Islambey\RSMQ;

class Util
{
    public function makeID(int $length): string
    {
        $text = '';
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        for ($i = 0; $i < $length; $i++) {
            $text .= $chars[rand(0, strlen($chars) - 1)];
        }

        return $text;
    }

    public function formatZeroPad(int $num, int $count): string
    {
        return substr(pow(10, $count) + $num, 1);
    }

}