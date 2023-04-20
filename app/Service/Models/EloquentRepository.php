<?php

namespace App\Service\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class EloquentRepository implements RepositoryInterface
{
    public function getAll(): Collection
    {
        return $this->getModel()->orderByDesc('id')->get();
    }

    public function getById(int $id): Model|Collection|null
    {
        return $this->getModel()->find($id);
    }

    public function store(array $data): Model
    {
        return $this->getModel()->create($data);
    }

    public function update(Model $model, array $data): Model
    {
        return tap($model)->update($data);
    }

    public function destroy(Model $model): bool
    {
        return $model->delete();
    }
    public abstract function getModel(): Model;
}
