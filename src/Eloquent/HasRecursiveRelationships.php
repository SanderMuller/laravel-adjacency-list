<?php

namespace Staudenmeir\LaravelAdjacencyList\Eloquent;

use Staudenmeir\LaravelAdjacencyList\Eloquent\Traits\HasAdjacencyList;
use Staudenmeir\LaravelCte\Eloquent\QueriesExpressions;

/**
 * @template TDeclaringModel of \Illuminate\Database\Eloquent\Model
 *
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder query()
 */
trait HasRecursiveRelationships
{
    /** @use HasAdjacencyList<TDeclaringModel> */
    use HasAdjacencyList;
    use QueriesExpressions;
}
