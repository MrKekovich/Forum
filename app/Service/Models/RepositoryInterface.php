<?php

namespace App\Service\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): Model|Collection|null;

    public function store(array $data): Model|null;

    public function update(Model $model, array $data): Model|null;

    public function destroy(Model $model): bool;
}
