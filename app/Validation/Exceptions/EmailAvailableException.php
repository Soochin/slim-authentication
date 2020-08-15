<?php

namespace App\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;


final class EmailAvailableException extends ValidationException {
    protected $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => 'Email is already in use.',
        ],
    ];
}

?>