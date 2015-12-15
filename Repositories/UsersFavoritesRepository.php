<?php namespace authentication\Repositories;

use App\userFavorites;

class UserFavoritesRepository {
    protected $model;

    public function __construct(userFavorites $favorites){
        $this->model = $favorites;
    }
}
?>