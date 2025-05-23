<?php

use Illuminate\Support\Str;

return [
    'company' => 'IZOHAN Solutions',
    'active' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'active' : '';
    },
];