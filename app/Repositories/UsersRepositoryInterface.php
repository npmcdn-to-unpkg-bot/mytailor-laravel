<?php


namespace MyTailor\Repositories;


interface UsersRepositoryInterface
{
    public function findByEmailOrCreate($userData);

    public function create($data);

}