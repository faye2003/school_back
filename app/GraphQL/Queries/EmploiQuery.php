<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;
use App\Models\Emplois;

class EmploiQuery extends Query
{
    protected $attributes = [
        'name' => 'emplois',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQl::type('Emploi'));
    }

    public function args(): array
    {
        return [
            'id'                            => ['type' => Type::int()],
            'titre'                         => ['type' => Type::string()],
            'description'                   => ['type' => Type::string()],

        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        // $fields = $getSelectFields();
        // $select = $fields->getSelect();
        // $with = $fields->getRelations();

        return Emplois::all();
    }
}
