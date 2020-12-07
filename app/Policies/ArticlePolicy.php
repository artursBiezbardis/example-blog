<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\User;

class ArticlePolicy
{
    public function create(User $user)
    {
        return $user->articles()->count() < 50;
    }

    public function update(User $user, Article $article): bool
    {
        return $user->id === (int) $article->user_id;
    }

    public function delete(User $user, Article $article): bool
    {
        return $user->id === (int) $article->user_id;
    }
}
