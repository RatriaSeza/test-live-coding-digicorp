<?php

static $tokens = array();

function generate_token($user)
{
    global $tokens;
    $token = random_string();

    if (key_exists($user, $tokens)) { // check key yang sudah ada
        if (count($tokens[$user]) === 10) { // check jumlah token yang dimiliki
            array_shift($tokens[$user]);
        }
        array_push($tokens[$user], $token);
    } else {
        $tokens[$user] = array($token);
    }

    return $token;
}

$user1 = 'Satria';
$user2 = 'Reza';

generate_token($user1);
generate_token($user1);
generate_token($user1);
generate_token($user1);
generate_token($user1);
generate_token($user1);
generate_token($user1);
generate_token($user1);
generate_token($user1);
generate_token($user1);
generate_token($user1);
generate_token($user1);
$userToken1 = generate_token($user1);

generate_token($user2);
generate_token($user2);

print_r($tokens);

function verify_token($user, $token)
{
    global $tokens;

    if (key_exists($user, $tokens) && in_array($token, $tokens[$user])) {
        $userToken = $tokens[$user];
        $index = array_search($token, $userToken);
        unset($tokens[$user][$index]);
        return true;
    } else {
        return false;
    }
}   

echo (PHP_EOL .verify_token($user1, $userToken1) . PHP_EOL);

echo count($tokens[$user1]); // Token terhdapus jika ditemukan

function random_string()
{
    $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < 20; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}
