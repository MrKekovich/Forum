<?php

namespace App\Service\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

trait HasCRUD
{
    public function index(): Collection
    {
        return $this->getEloquent()->getAll();
    }

    public function show(Model $model): Model|null
    {
        return $model;
    }

    public function getById(int $id): Model|null
    {
        return $this->getEloquent()->getById($id);
    }

    public function store(FormRequest $request): Model|null
    {
        return $this->getEloquent()->store($request->validated());
    }

    public function update(Model $model, FormRequest $request): Model|null
    {
        return $this->getEloquent()->update($model, $request->validated());
    }

    public function destroy(Model $model): bool
    {
        return $this->getEloquent()->destroy($model);
    }

    public abstract function getEloquent(): EloquentRepository;
}
