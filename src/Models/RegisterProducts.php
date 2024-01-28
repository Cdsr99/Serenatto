<?php

class RegisterProducts
{

    private string $name;
    private string $type;
    private string $description;
    private string $price;
    private string $imagem;

    private PDO $pdo;

    public function __construct($pdo, $name, $type, $description, $price, $imagem)
    {
        $this->pdo = $pdo;
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->price = $price;
        $this->imagem = $imagem;
    }


    #region Register products
    public function RegisterProduct()
    {
        $register =  "INSERT INTO `db_serenatto`.`products` (`type`, `name`, `description`, `imagem`, `price`) VALUES ('" . $this->type . "', '" . $this->name . "', '" . $this->description . "', '" . $this->imagem . "', '" . $this->price . "');";
        $this->pdo->query($register);
    }
    #endregion


}
