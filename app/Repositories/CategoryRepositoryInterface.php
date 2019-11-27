<?php

namespace App\Repositories;

use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface
{
    /**
     * Получить все категории пользователя.
     *
     * @param User $user
     * @return Collection
     */
    public function getUserCategories(User $user): Collection;

    /**
     * Получить категорию по ID.
     * @param $id
     * @return Category|null
     */
    public function getCategoryById($id): ?Category;

}
