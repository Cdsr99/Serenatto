<?php

class DeleteProducts
{

    private int $id;
    private PDO $pdo;

    public function __construct($id, $pdo)
    {
        $this->id = $id;
        $this->pdo = $pdo;
    }


    #region Deleting products
    public function DeleteProduct()
    {
        $delete =  'delete from products where id = ' . $this->id . ';';
        $deleteExec = $this->pdo->query($delete);
    }
    #endregion


}
