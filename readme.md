## Тестовое задание (1 часть - PHP)

### Stack technology

  - PHP 7.2.14
  - Symfony console component

### Installation

Install composer

```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Build

```sh
php composer.phar install
```

### Example commands

#### can
  * can:designer {action}
  * can:developer {action}
  * can:manager {action}
  * can:tester {action}
  
#### user
  * user:designer
  * user:developer
  * user:manager
  * user:tester

### Run command

```sh
php application.php {command_name} ?{attribute}
```

### Todo

 - Write Tests
 
## Тестовое задание (2 часть - MySQL)

<b>a.</b> Для заданного списка товаров получить названия всех категорий, в которых представлены товары. <br/>
Выбираю для нескольких товаров (9, 14, 6, 7, 2);

```sql
SELECT 
    `categories`.`name` as `categoryName`
FROM 
    `products`
JOIN 
    `categories` ON `products`.`category_id` = `categories`.`id` 
WHERE 
    `products`.`id` in (9, 14, 6, 7, 2) 
GROUP BY `categories`.`name`
```

<b>b.</b> Для заданной категории получить список предложений всех товаров из этой категории и ее
дочерних категорий; <br/>
Выбираю все товары из категории компьютеры (id = 2) и подкатегории (3 ноутбуки, 4 планшеты, 5 гибриды);

```sql
SELECT
    `products`.`id` as `productId`,
    `products`.`name` as `productId`,
    `products`.`category_id` as `productCategoryId`,
    `categories`.`name` as `categoryName`
FROM
    `products`
JOIN `categories` ON `categories`.`id` = `products`.`category_id`
WHERE
    `products`.`category_id` = 2 OR `categories`.`parent_id` = 2
```

<b>c.</b> Для заданного списка категорий получить количество предложений товаров в каждой категории; <br/> 
Выбираю количество товаров из категорий 7,8,9

```sql
SELECT
    `products`.`category_id` as `productCategoryId`,
    `categories`.`name` as `categoryName`,
    count(`products`.`category_id`) as `sumProducts`
FROM
    `products`
JOIN `categories` ON `products`.`category_id` = `categories`.`id`
WHERE
    `categories`.`id` IN (7, 8, 9)
GROUP BY
    `categories`.`id`
```

<b>d.</b> Для заданного списка категорий получить общее количество уникальных предложений товара; <br/> 
Выбираю количество уникальных товаров из категорий 3, 4, 5

```sql
SELECT
    `categories`.`name` as `categoryName`,
    count(*) as `count`
FROM
    `products`
JOIN `categories` ON `products`.`category_id` = `categories`.`id`
WHERE
    `categories`.`id` IN (3, 4, 5)
GROUP BY
    `categories`.`name`
```

<b>e.</b> Для заданной категории получить ее полный путь в дереве (breadcrumb, «хлебные крошки»). <br/>
Получаю полный путь для категории 4 уровня

```sql
SELECT
    `c1`.`name` as `deep1`,
    `c2`.`name` as `deep2`,
    `c3`.`name` as `deep3`,
    `c4`.`name` as `deep4`
FROM
    `categories` as `c1`
LEFT JOIN `categories` as `c2` ON
    `c1`.`parent_id` = `c2`.`id`
LEFT JOIN `categories` as `c3` ON
    `c2`.`parent_id` = `c3`.`id`
LEFT JOIN `categories` `c4` ON
    `c3`.`parent_id` = `c4`.`id`
```
