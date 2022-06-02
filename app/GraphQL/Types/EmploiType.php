<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class EmploiType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Emploi',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [
            'id'                            => ['type' => Type::int()],
            'titre'                         => ['type' => Type::string()],
            'description'                   => ['type' => Type::string()],
        ];
    }
}
