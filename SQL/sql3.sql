--Найти всех у кого вторая буква в фамилии а.
SELECT
    *
FROM
    people
WHERE
    Name LIKE '_а%';

--Найти всех у кого две последние буквы ий.
SELECT
    *
FROM
    people
WHERE
    Name LIKE '%ий %';

--При группировки все записи в таблице разбираются на группы с одинаковых значением в том поле по которому производится группировка.
--В выводе запроса могут использоваться только те поля по которым производится группировка по остальным полям могут выводиться их групповые характеристики:
--min, max, среднее и тд
-- средняя зп в каждом отделе группировкой
SELECT
    Dep,
    AVG(Salary)
FROM
    `people`
GROUP by
    Dep;

--Найти средний размер коммисионных продавцов в каждом городе
SELECT
    CITY,
    round(AVG(COMM), 2) -- round округление 
FROM
    `salespeople`
GROUP by
    CITY;

-- Условие записанное после ключевого слова where приминяются к каждой записи таблицы в отдельности
--Условия записанные после ключевого слова having приминяются к группам записи поэтому инструкция having не используется без инструкции group by.
--Так как условия записываемые после having приминяются к группам записи это дает возможность использовать в условиях функции агрегирования min max ...
--Вывести список городов которых средний размер коммисионых продавцов больше 0.14
SELECT
    CITY,
    round(AVG(COMM), 2)
FROM `salespeople`
GROUP by CITY
HAVING  avg(comm)> 0.14;
-- Найти средний рейтинг покупателейй в каждом городе
    select CITY, RATING
FROM `customers`
GROUP by CITY

-- Вывести список городов в которых минимальный рейтинг покупателей выше среднего рейтинга всех покупателей
select CITY, MIN(rating)
FROM `customers`
GROUP by CITY
HAVING min(rating) > (select AVg(rating)
                            FROM customers);

--Вложенные запросы возвращаеющие не единственные запросы
-- all
-- any
--some

--Найти покупателей у которых рейтинг выше рейтинга любого покупателя из лондона
SELECT *
from customers
where rating > all (SELECT rating from customers where city = 'London');

--Запрос который выглядет её на экран
SELECT * FROM `customers` 

-- Вывести список заказом на сумму более 1000.
SELECT *
from orders
 where AMT > 1000;

-- Вывести список городов в которых живут покупатели совершившие покупку на сумму более 5000.
SELECT CITY
from customers 
where CNUM in(SELECT  cnum from orders where AMT>5000)


-- Написать запрос который выводит список городов в которых проживают клиенты из результата запроса удалить дублирующие города
-- distunct удаляет дублирующие данные в запросе
SELECT DISTINCT city
from customers;

--Shop.Salespeople.snum
--Объединить две таблци salespeople и orders
SELECT * 
FROM `Salespeople`, orders

--Объединение таблиц customers salespeople
SELECT * 
FROM `customers`, salespeople
where customers.snum =  salespeople.snum;

--Найти общую сумму заказов каждого продовца
SELECT sname, count(*)
FROM `salespeople`, orders
where salespeople.SNUM =  orders.snum
GROUP by sname;

--Посчитать количество заказов у продовца

--Количество и сумма заказов по каждому продавцу и заголовки столбцов подписать по русски
имя сумма количество

SELECT sname as "Имя", count(*) As "количество", sum(AMT) as "сумма"
FROM `salespeople`, orders
where salespeople.SNUM =  orders.snum
GROUP by sname;