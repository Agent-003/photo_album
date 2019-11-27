<?php

namespace App\Repositories;

use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * Получить все категории пользователя.
     *
     * @param User $user
     * @return Collection
     */
    public function getUserCategories(User $user): Collection
    {
        return $user->categories()->get();
    }

    /**
     * Получить категорию по ID.
     *
     * @param $id
     * @return Category|null
     */
    public function getCategoryById($id): ?Category
    {
        return Category::find($id);
    }
}
