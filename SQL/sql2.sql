-- CRUD
-- Добавление нового товара. 
INSERT Into
    goods (Name)
VALUES
    ('beer');

-- Добавление товара auto и его стоимости.
INSERT Into
    goods (Name, Price)
VALUES
    ('auto', '32131');

-- Изменение данных.
UPDATE
    goods
SET
    Price = 2;

-- Изменение ценв в id 5.
UPDATE
    goods
SET
    Price = 22
WHERE
    id = 5;

--Изменение ценв в id 5 или id 2.
UPDATE
    goods
SET
    Price = 22
WHERE
    id = 5
    OR id = 2;

--удаление строки с айди 7.
DELETE FROM
    goods
WHERE
    id = 7;

--для товаров у которых цена больше 100 рублей удалить цену.
UPDATE
    goods
SET
    Price = NULL
WHERE
    Price > 2;

--установить цену для всех coal 20 рублей.
UPDATE
    goods
SET
    Price = 20
WHERE
    Name = 'coal';

--ОПЕРАТОР BETWEEN
SELECT
    *
FROM
    people
WHERE
    Salary >= 100
    AND Salary <= 200;

---------------------------
SELECT
    *
FROM
    people
WHERE
    Salary BETWEEN 3000
    AND 5000;

-- ОПЕРАТОР IN
--Найти всех сотрудников работающих в библиотеке или в администрации
SELECT
    *
FROM
    people
WHERE
    Dep = 'Боксер'
    OR Dep = 'Президент';

--------------------------
SELECT
    *
FROM
    people
WHERE
    Dep IN('Боксер', 'Поле чудес');

--ОПЕРАТОР LIKE  полнотекстового поиска используется два постановочных символа
-- %(любой символ) _(заменяет один любой символ)
SELECT
    *
FROM
    people
WHERE
    Name LIKE 'Якуб%';

--Вывести всех сотрудников которые работают в отделе название которого содержит ровно 5 символов
SELECT
    *
FROM
    people
WHERE
    Dep LIKE '_____';

-- ФУНКЦИИ АГРЕГИРОВАНИЯ:
--COUNT определяет количество строк или значений поля, выбранных посредством запроса и не являющихся NULL-значениями;
--  SUM вычисляет сумму всех выбранных значений данного поля;
-- AVG вычисляет среднее значение для всех выбранных значений данного поля;
-- МАХ вычисляет наибольшее из всех выбранных значений данного поля;
-- MIN вычисляет наименьшее из всех выбранных значений данного поля.
-- фунции агрегирования вычесляют групповые характеристики полей таблицы
SELECT
    MAX(Salary),
    MIN(Salary),
    AVG(Salary),
    SUM(Salary)
FROM
    people;

--колличество строк 
SELECT
    COUNT(Name)
FROM
    people;

-- удаление зарплаты и подсчет количества зарплат
UPDATE
    people
SET
    Salary = NULL
WHERE
    id = 4;

SELECT
    COUNT(Salary)
FROM
    people;

-- подсчёт всех зарплат count(*)
UPDATE
    people
SET
    Salary = NULL
WHERE
    id = 4;

SELECT
    COUNT(*)
FROM
    people -- ВЛОЖЕННЫЕ ЗАПРОСЫ
SELECT
    *
FROM
    `people`
WHERE
    Salary >(
        SELECT
            AVG (salary)
        FROM
            people
    );

-- найти работника с самой большой зарплатой
SELECT
    *
FROM
    `people`
WHERE
    Salary =(
        SELECT
            MAX(Salary)
        FROM
            people
    );

-- с самой маленькой зарлатой
SELECT
    *
FROM
    `people`
WHERE
    Salary =(
        SELECT
            MIN(Salary)
        FROM
            people
    );
-- вывести информацию про сотрудников имеющих зп больше средней зп среди Боксер.
SELECT
    *
FROM
    `people`
WHERE
    Salary >(
        SELECT
            AVG(Salary)
        FROM
            people
        WHERE Dep = 'Боксер'
    );