<?php


namespace AbstractFactory\Contract;


use AbstractFactory\Entity\DBRecord;


interface DBRecordRepositoryInterface
{

    /**
     * @param DBRecord $record
     * @return mixed
     */
    public function add(DBRecord $record);

    /**
     * @param DBRecord $record
     * @return mixed
     */
    public function update(DBRecord $record);

    /**
     * @param DBRecord $record
     * @return mixed
     */
    public function delete(DBRecord $record);
}