SELECT
    *
FROM
    wage;

-- Показать только фио и зп.
SELECT
    FIO,
    ZP
FROM
    wage;

-- Выбрать всех у кого зарплата, больше 5000.
SELECT
    *
FROM
    `wage`
WHERE
    В ZP > 5000;

-- Все заплаты кроме 111
SELECT
    *
FROM
    `wage`
WHERE
    zp <> 111 -- Все залплаты от 12414 до 4123442
SELECT
    *
FROM
    `wage`
WHERE
    zp > 12414
    and zp < 4123442;

-- Зарплата больше ... в WEB.
SELECT
    *
FROM
    `wage`
WHERE
    zp > 1241442421
    and dep = "WEB";

-- Зарплата не больше 1000
SELECT
    *
FROM
    `wage`
WHERE
    not zp > 1000;

-- Зарплаты по возрастанию
SELECT
    *
FROM
    `wage`
Order by
    zp desc;

-- Зарплаты по убыванию
SELECT
    *
FROM
    `wage`
Order by
    zp desc;

--  Отсортировать по депортаментам в алфавитном порядке а по зарплатам в порядке убвывания
SELECT
    *
FROM
    `wage`
Order by
    zp desc,
    dep asc;

-- Переменование столбца zp в зп.
SELECT
    Nom,
    FIO,
    zp as 'зп',
    Dev
FROM
    `wage`;

--ПОсчитать налоги для каждого человека
SELECT
    zp * 0.13,
    as "налог"
FROM
    `wage`;

-- Вывод таблицы с вычетом налоога и переименование на зарплата.
SELECT
    Nom,
    FIO,
    zp - (zp * 0.13) as "зарплата",
    Dep
FROM
    wage;