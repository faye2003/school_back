<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class EvaluationType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Evaluation',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [
            'id'                                    => ['type' => Type::int()],
            'designation'                           => ['type' => Type::string()],
            'description'                           => ['type' => Type::string()],
            'surveillant'                           => ['type' => Type::string()],
            'duree'                                 => ['type' => Type::string()],
            'salle'                                 => ['type' => Type::string()],
        ];
    }
}
