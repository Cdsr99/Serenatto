<?php

class SearchProducts
{
    private PDO $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    #region Getting Coffee Options
    public function getCoffeeOptions(): array
    {
        //Searching for coffee
        $select =  'select * from products where type = "Coffee" order by price;';
        $statement = $this->pdo->query($select);
        $productsCoffee = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dataCoffee = array_map(function ($coffee) {
            return new Products(
                $coffee['id'],
                $coffee['type'],
                $coffee['name'],
                $coffee['description'],
                $coffee['imagem'],
                $coffee['price']
            );
        }, $productsCoffee);

        return $dataCoffee;
    }
    #endregion

    #region Getting Lunch Options
    public function getLunchOptions(): array
    {
        //Searching for coffee
        $select =  'select * from products where type = "Lunch" order by price;';
        $statement = $this->pdo->query($select);
        $productsCoffee = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dataCoffee = array_map(function ($coffee) {
            return new Products(
                $coffee['id'],
                $coffee['type'],
                $coffee['name'],
                $coffee['description'],
                $coffee['imagem'],
                $coffee['price']
            );
        }, $productsCoffee);

        return $dataCoffee;
    }
    #endregion

    #region Getting All Options
    public function getAll(): array
    {
        //Searching for coffee
        $select =  'select * from products order by price;';
        $statement = $this->pdo->query($select);
        $productsCoffee = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dataCoffee = array_map(function ($coffee) {
            return new Products(
                $coffee['id'],
                $coffee['type'],
                $coffee['name'],
                $coffee['description'],
                $coffee['imagem'],
                $coffee['price']
            );
        }, $productsCoffee);

        return $dataCoffee;
    }
    #endregion
}
