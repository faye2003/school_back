<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class EleveType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Eleve',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [
            'id'                   => ['type' => Type::int()],
            'nom'                  => ['type' => Type::string()],
            'prenom'               => ['type' => Type::string()],
            'telephone'            => ['type' => Type::string()],
            'classe'               => ['type' => Type::string()],
            'age'                  => ['type' => Type::int()],
            'sexe'                 => ['type' => Type::string()],
            'niveau'               => ['type' => Type::string()],
            'moyenne'              => ['type' => Type::string()],

        ];
    }
}
