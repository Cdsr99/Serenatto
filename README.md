## Serenatto - Coffee Shop
This is a project written in php to make the class at Alura.

To get start it, you will need php (8.2.1 preferably) and also MySQL

1) Downloading Php
```shell
sudo apt-get install php8.1 php-mysql -y
```
2) MySQL
```shell
sudo apt-get install mysql-server-8.0 -y
```

3) Create a database and the table with the following script

```shell
CREATE DATABASE db_serenatto;
```
Create the table

```shell
CREATE TABLE `db_serenatto`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(90) NOT NULL,
  `imagem` VARCHAR(80) NOT NULL,
  `price` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`id`));
```

4) Inserting the datas in the table

```shell
INSERT INTO `db_serenatto`.`products` (`type`, `name`, `description`, `imagem`, `price`) VALUES ('Coffee', 'Creamy Coffee ', 'Irresistibly smooth, creamy coffee that envelops your taste buds', 'cafe-cremoso.jpg', '5.00');

INSERT INTO `db_serenatto`.`products` (`type`, `name`, `description`, `imagem`, `price`) VALUES ('Coffee', 'Coffee with milk', 'The perfect harmony of Coffee and milk, a comforting experience', 'cafe-com-leite.jpg', '2.00');

INSERT INTO `db_serenatto`.`products` (`type`, `name`, `description`, `imagem`, `price`) VALUES ('Coffee', 'Cappuccino', 'Smooth coffee, creamy milk and a hint of sweet flavor', 'cappuccino.jpg', '7.00');

INSERT INTO `db_serenatto`.`products` (`type`, `name`, `description`, `imagem`, `price`) VALUES ('Coffee', 'Coffee Gelado', 'Refreshing iced coffee, sweetened and with subtle notes of vanilla or caramel.', 'cafe-gelado.jpg', '3.00');

INSERT INTO `db_serenatto`.`products` (`type`, `name`, `description`, `imagem`, `price`) VALUES ('Lunch', 'Bife', 'Bife, arroz com feijão e uma deliciosa batata frita', 'bife.jpg', '27.90');
INSERT INTO `db_serenatto`.`products` (`type`, `name`, `description`, `imagem`, `price`) VALUES ('Lunch', 'Filé de peixe', 'Filé de peixe salmão assado, arroz, feijão verde e tomate.', 'prato-peixe.jpg', '24.99');
INSERT INTO `db_serenatto`.`products` (`type`, `name`, `description`, `imagem`, `price`) VALUES ('Lunch', 'Frango', 'Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante', 'prato-frango.jpg', '23.00');
INSERT INTO `db_serenatto`.`products` (`type`, `name`, `description`, `imagem`, `price`) VALUES ('Lunch', 'Fettuccine', 'Prato italiano autêntico da massa do fettuccine com peito de frango grelhado', 'fettuccine.jpg', '22.50');
```


