<?php

if (Config::get('apiguard.generateApiKeyRoute')) {
    Route::post('apiguard/api_key', 'Chrisbjr\ApiGuard\ApiKeyController@create');
}