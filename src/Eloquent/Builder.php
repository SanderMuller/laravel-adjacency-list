<?php

namespace Staudenmeir\LaravelAdjacencyList\Eloquent;

use Illuminate\Database\Eloquent\Builder as Base;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Traits\BuildsAdjacencyListQueries;

/**
 * @template TModel of \Illuminate\Database\Eloquent\Model
 *
 * @extends Base<TModel>
 *
 * @mixin \Staudenmeir\LaravelCte\Query\Builder
 */
class Builder extends Base
{
    /** @use BuildsAdjacencyListQueries<TModel> */
    use BuildsAdjacencyListQueries;

    /**
     * @return \Staudenmeir\LaravelAdjacencyList\Eloquent\Graph\Collection<int, TModel>|\Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, TModel>
     */
    public function get($columns = ['*'])
    {
        /**
         * @var \Staudenmeir\LaravelAdjacencyList\Eloquent\Graph\Collection<int, TModel>|\Staudenmeir\LaravelAdjacencyList\Eloquent\Collection<int, TModel> $collection
         */
        $collection = parent::get();

        return $collection;
    }
}
