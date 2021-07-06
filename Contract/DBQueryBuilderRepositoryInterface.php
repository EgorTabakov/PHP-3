<?php


namespace AbstractFactory\Contract;

use AbstractFactory\Entity\DBQueryBuilder;

interface DBQueryBuilderRepositoryInterface {

    /**
     * @param DBQueryBuilder $DBQueryBuilder
     * @return mixed
     */
    public function insert(DBQueryBuilder $DBQueryBuilder);

    /**
     * @param DBQueryBuilder $DBQueryBuilder
     * @return mixed
     */
    public function create(DBQueryBuilder $DBQueryBuilder);

    /**
     * @param DBQueryBuilder $DBQueryBuilder
     * @return mixed
     */
    public function update(DBQueryBuilder $DBQueryBuilder);

    /**
     * @param DBQueryBuilder $DBQueryBuilder
     * @return mixed
     */
    public function delete(DBQueryBuilder $DBQueryBuilder);
}