<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;
use App\Models\Disciplines;

class DisciplineQuery extends Query
{
    protected $attributes = [
        'name' => 'disciplines',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQl::type('Discipline'));
    }

    public function args(): array
    {
        return [
            'id'                     => ['type' => Type::int()],
            'designation'            => ['type' => Type::string()],
            'description'            => ['type' => Type::string()],
            'sigle'                  => ['type' => Type::string()],
            'coefficient'            => ['type' => Type::int()],

        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        // $fields = $getSelectFields();
        // $select = $fields->getSelect();
        // $with = $fields->getRelations();

        return Disciplines::all();
    }
}
