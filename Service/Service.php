<?php

namespace AbstractFactory\Service;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\DBRecordRepositoryInterface;
use AbstractFactory\Contract\DBQueryBuilderRepositoryInterface;
use AbstractFactory\Entity\DBRecord;
use AbstractFactory\Entity\DBQueryBuilder;

class Service
{
private $dbRecordRepository;
private $dbQueryBuilderRepository;

    public function __construct(RepositoryFactoryInterface $repositoryFactory)
    {
        $this->dbRecordRepository = $repositoryFactory->createRecordRepository();
        $this->dbQueryBuilderRepository = $repositoryFactory->createDBQueryBuilderRepository();
    }

    public function addRecord(): void {
        $dbRecord = new DBRecord();
        $this->dbRecordRepository->add($dbRecord);
    }

    public function addQueryBuilder(): void {
        $dbQueryBuilder = new DBQueryBuilder();
        $this->dbQueryBuilderRepository->insert($dbQueryBuilder);
    }
}