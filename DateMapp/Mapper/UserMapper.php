<?php

declare(strict_types=1);

namespace DataMapper\Mapper;

use DataMapper\Contract\StorageAdapterInterface;
use DataMapper\Entity\Role;
use DataMapper\Entity\User;

class UserMapper
{
    /**
     * @var StorageAdapterInterface
     */
    private $storageAdapter;

    /**
     * UserMapper constructor.
     * @param StorageAdapterInterface $storage
     */
    public function __construct(StorageAdapterInterface $storage)
    {
        $this->storageAdapter = $storage;
    }

    public function getById(int $id): ?User
    {
        $result = $this->storageAdapter->find($id);

        if ($result === null) {
            return null;
        }

        return $this->createUser($result);
    }

    public function getByLogin(string $login): ?User
    {
        $result = $this->storageAdapter->findByLogin($login);

        if ($result === null) {
            return null;
        }

        return $this->createUser($result);
    }


    private function createUser(array $user): User
    {
        $role = $user['role'];

        return new User(
            $user['id'],
            $user['name'],
            $user['login'],
            $user['password'],
            new Role($role['id'], $role['title'], $role['role'])
        );
    }

}
