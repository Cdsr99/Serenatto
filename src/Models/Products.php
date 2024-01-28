<?php

class Products
{

    private int $id;
    private string $type;
    private string $name;
    private string $description;
    private string $imagem;
    private float $price;


    public function __construct($id, $type, $name, $description, $imagem, $price)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->description = $description;
        $this->imagem = $imagem;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getPriceFormated(): string
    {
        return "R$ " . number_format($this->price, 2);
    }
}
