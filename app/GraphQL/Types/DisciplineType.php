<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class DisciplineType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Discipline',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [
            'id'                     => ['type' => Type::int()],
            'designation'            => ['type' => Type::string()],
            'description'            => ['type' => Type::string()],
            'sigle'                  => ['type' => Type::string()],
            'coefficient'            => ['type' => Type::int()],
        ];
    }
}
