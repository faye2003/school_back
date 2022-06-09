<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;

class EvaluationQuery extends Query
{
    protected $attributes = [
        'name' => 'evaluations',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQl::type('Evaluation'));
    }

    public function args(): array
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

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        // $fields = $getSelectFields();
        // $select = $fields->getSelect();
        // $with = $fields->getRelations();

        return Evaluations::all();
    }
}
