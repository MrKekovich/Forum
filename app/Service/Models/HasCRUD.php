<?php

namespace App\Service\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

trait HasCRUD
{
    public function index(): string
    {
        return $this->getEloquent()
            ->getAll()
            ->toJson();
    }

    public function show(Model $model): string
    {
        return $model
            ->toJson();
    }

    public function getById(int $id): string
    {
        return $this->getEloquent()
            ->getById($id)
            ->toJson();
    }

    public function store(FormRequest $request): string
    {
        return $this->getEloquent()
            ->store($request->validated())
            ->toJson();
    }

    public function update(Model $model, FormRequest $request): string
    {
        return $this->getEloquent()
            ->update($model, $request->validated())
            ->toJson();
    }

    public function destroy(Model $model): string
    {
        return $this->getEloquent()
            ->destroy($model);
    }

    public abstract function getEloquent(): EloquentRepository;
}
