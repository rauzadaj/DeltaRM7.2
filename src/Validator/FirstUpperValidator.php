<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class FirstUpperValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /* @var $constraint \App\Validator\FirstUpper */

        if (null === $value || '' === $value) {
            return;
        }

        // Validate if the first letter is in uppercase
        if (preg_match('/^[a-z]+/', $value) !== 1) {
            return;
        }

        $this->context->buildViolation($constraint->message)
            ->setParameter('{{ value }}', $value)
            ->addViolation();
    }
}
