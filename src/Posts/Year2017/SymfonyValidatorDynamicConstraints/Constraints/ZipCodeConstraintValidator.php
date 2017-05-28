<?php declare(strict_types=1);

namespace Pehapkari\Website\Posts\Year2017\SymfonyValidatorDynamicConstraints\Constraints;

use Pehapkari\Website\Posts\Year2017\SymfonyValidatorDynamicConstraints\IsoCodes\ZipCode;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

final class ZipCodeConstraintValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint): void
    
{

        if (! $value) {
return;
        }

        if (! ZipCode::validate($value, $constraint->country)) {
$this->createViolation($constraint->message);
        }
    }

    private function createViolation(string $message): void
    
{

        $this->context->buildViolation($message)
            ->addViolation();
    }
}
