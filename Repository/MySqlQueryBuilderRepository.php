<?php


namespace AbstractFactory\Repository;

use AbstractFactory\Contract\DBQueryBuilderRepositoryInterface;
use AbstractFactory\Entity\DBQueryBuilder;

class MySqlQueryBuilderRepository extends MySQLRepository
    implements DBQueryBuilderRepositoryInterface
{

    /**
     * @param DBQueryBuilder $DBQueryBuilder
     * @return mixed|void
     */
    public function insert(DBQueryBuilder $DBQueryBuilder)
    {
        // TODO: Implement insert() method.
    }

    /**
     * @param DBQueryBuilder $DBQueryBuilder
     * @return mixed|void
     */
    private function create(DBQueryBuilder $DBQueryBuilder)
    {
        // TODO: Implement create() method.
    }

    /**
     * @param DBQueryBuilder $DBQueryBuilder
     * @return mixed|void
     */
    public function update(DBQueryBuilder $DBQueryBuilder)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param DBQueryBuilder $DBQueryBuilder
     * @return mixed|void
     */
    public function delete(DBQueryBuilder $DBQueryBuilder)
    {
        // TODO: Implement delete() method.
    }
}