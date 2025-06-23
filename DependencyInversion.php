<?php

// інтерфейс абстракції:

interface AbstractDataInterface
{
    public function getData();
}


class Mysql implements AbstractDataInterface
{
    public function getData()
    {
        return 'some data from database';
    }
}

class Controller // контролер залежить від інтерфейсу абстракції, а не конкретної реалізації класу Mysql для MySQL
{
    private $abstractData;

    public function __construct(AbstractDataInterface $abstractData)
    {
        $this->abstractData = $abstractData;
    }

    public function getData()
    {
        return $this->abstractData->getData();
    }
}
