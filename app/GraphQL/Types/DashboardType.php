<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class DashboardType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Dashboard',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [
            'nombre_eleves'                 => ['type' => Type::int()],
            'nombre_profs'                  => ['type' => Type::int()],
            'nombre_disciplines'            => ['type' => Type::int()],
            'nombre_cours'                  => ['type' => Type::int()],
            'meilleur_eleves'               => ['type' => Type::string()],
            'taux_reussite'                 => ['type' => Type::float()],
            'surveillants'                  => ['type' => Type::string()],
        ];
    }
}
