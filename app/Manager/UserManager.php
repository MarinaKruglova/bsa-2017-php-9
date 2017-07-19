<?php

namespace App\Manager;

use App\Request\Contract\SaveUserRequest;
use App\Entity\User;
use Illuminate\Support\Collection;
use App\Manager\Contract\UserManager as UserManagerContract;

class UserManager implements UserManagerContract
{

        public function findAll(): Collection
        {
            return User::all();
        }

        public function findById(int $id)
        {
             return User::find($id);
        }

        public function findActive(): Collection
        {

        }

        public function saveUser(SaveUserRequest $request): User
        {

        }

        public function deleteUser(int $userId)
        {

        }
}
