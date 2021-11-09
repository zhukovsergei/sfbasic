<?php

declare(strict_types=1);

namespace App\ReadModel\Category;

use Doctrine\DBAL\Connection;

class BookFetcher
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findAll(): array
    {
        $stmt = $this->connection->createQueryBuilder()
            ->select(
                'id',
                'name'
            )
            ->from('books')
            ->orderBy('name')
            ->executeQuery();

        return $stmt->fetchAllKeyValue();
    }

}

