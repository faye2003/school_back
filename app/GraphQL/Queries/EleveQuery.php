<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;
use App\Models\Eleves;
use App\GraphQl\Types\EleveType;

class EleveQuery extends Query
{
    protected $attributes = [
        'name' => 'eleves',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQl::type('Eleve'));
    }

    public function args(): array
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

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        // $fields = $getSelectFields();
        // $select = $fields->getSelect();
        // $with = $fields->getRelations();

        return Eleves::All();
    }
}
