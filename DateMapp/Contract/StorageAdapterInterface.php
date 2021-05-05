<?php

declare(strict_types=1);

namespace DataMapper\Contract;

interface StorageAdapterInterface
{
    public function getDataFromSource($search): ?array;
    
}