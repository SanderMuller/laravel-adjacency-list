<?php

namespace Staudenmeir\LaravelAdjacencyList\Eloquent;

use Staudenmeir\LaravelAdjacencyList\Eloquent\Traits\HasGraphAdjacencyList;
use Staudenmeir\LaravelCte\Eloquent\QueriesExpressions;

/**
 * @method static \Staudenmeir\LaravelAdjacencyList\Eloquent\Builder query()
 */
trait HasGraphRelationships
{
    use HasGraphAdjacencyList;
    use QueriesExpressions;
}
