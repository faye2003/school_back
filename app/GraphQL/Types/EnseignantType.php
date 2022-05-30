<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class EnseignantType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Enseignant',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [
            'id'                      => ['type' => Type::int()],
            'nom'                     => ['type' => Type::string()],
            'prenom'                  => ['type' => Type::string()],
            'email'                   => ['type' => Type::string()],
            'telephone'               => ['type' => Type::string()],
            'adresse'                 => ['type' => Type::string()],
            'sexe'                    => ['type' => Type::string()],
            'discipline'              => ['type' => Type::string()],

        ];
    }
}
