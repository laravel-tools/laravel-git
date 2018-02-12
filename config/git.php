<?php

return [
    'user' => env('GIT_USER', 'laravel-tools'),
    'path' => public_path() . env('GIT_PATH', '/repos')
];