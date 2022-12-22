<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class BaseRepository
{
    public array $filters = [];

    protected Model $model;
    protected Request $request;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->request = request();
    }

    public function applyFilter(Builder $query)
    {
        foreach ($this->filters as $filter) {
            // created_at#>=to
            // updated_at#<=form
            $filter = explode('#', $filter);
            $name = $filter[0];
            $alias = $filter[2] ?? $name;
            $value = $this->request->get($alias);
            $operator = $this->request->get(str_replace('.', '_', $alias) . '_op', $filter[1] ?? '=');

            if ((is_null($value) && !in_array($operator, ['nullable', 'notNullable'])) || !$this->request->has($alias)) continue;

            elseif ($operator == 'in') {
                $query->whereIn("{$this->model->getTable()}.{$name}", is_array($value) ? $value : explode(',', $value));
            } elseif ($operator == 'notIn') {
                $query->whereNotIn("{$this->model->getTable()}.{$name}", is_array($value) ? $value : explode(',', $value));
            } elseif ($operator == 'nullable') {
                $query->whereNull("{$this->model->getTable()}.{$name}");
            } elseif ($operator == 'notNullable') {
                $query->whereNotNull("{$this->model->getTable()}.{$name}");
            } elseif (in_array($operator, ['between'])) {
                $query->whereBetween("{$this->model->getTable()}.{$name}", is_array($value) ? $value : explode(',', $value));
            } elseif (in_array($operator, ['like', 'ilike', 'rlike'])) {
                $query->where($name, $operator, "%$value%");
            } elseif (is_null($value) && $operator == "notNullable") {
                $query->whereNotNull($name);
            } elseif (is_null($value) && $operator == "nullable") {
                $query->whereNull($name);
            } elseif ($operator == "date") {
                $query->whereDate($name, $operator, $value);
            } elseif ($operator == "day") {
                $query->whereDay($name, $operator, $value);
            } elseif ($operator == "month") {
                $query->whereMonth($name, $operator, $value);
            } elseif ($operator == "year") {
                $query->whereYear($name, $operator, $value);
            } elseif ($operator == "column") {
                $query->whereColumn($name, $operator, $value);
            } elseif ($operator == "time") {
                $query->whereTime($name, $operator, $value);
            }

            $query->where("{$this->model->getTable()}.{$name}", $operator, $value);
        }
    }
}
