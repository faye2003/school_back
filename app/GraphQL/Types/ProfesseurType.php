<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;

class ProfesseurType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Professeur',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [

        ];
    }
}
