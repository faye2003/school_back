<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;

class ProfesseurQuery extends Query
{
    protected $attributes = [
        'name' => 'professeurs',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQl::type('Professeur'));
    }

    public function args(): array
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

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        // $fields = $getSelectFields();
        // $select = $fields->getSelect();
        // $with = $fields->getRelations();

        return Enseignants::all();
    }
}
