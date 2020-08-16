<?php

namespace App\Validation\Rules;

use App\Models\User;
use Respect\Validation\Rules\AbstractRule;

final class MatchesPassword extends AbstractRule {
    protected $password;

    public function __construct($password) {
        $this->password = $password;
    }

    public function validate($input): bool {
        return password_verify($input, $this->password);
    }
}

?>