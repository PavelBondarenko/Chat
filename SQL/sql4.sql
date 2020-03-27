--найти фамилию продавца из лондона с самыми маленькими коммисионными
SELECT  sname
FROM `salespeople`
WHERE city= "London" and COMM =  (SELECT  min(comm) from salespeople where city = 'London');

--Найти средний рейтинг покупателей в каждом городе
select CITY,
 (AVG(RATING))
FROM `customers`
GROUP by CITY

--
SELECT *
from salespeople, orders, customers
where salespeople.SNUM =  orders.snum and orders.cnum = customers.CNUM

-- рассчитать средний рейтинг покупателя для каждого продовца
SELECT
    sname,
    AVG(rating)
FROM
    salespeople,
    orders,
    customers
WHERE
    salespeople.SNUM = orders.snum
     AND
     orders.cnum = customers.CNUM
GROUP BY
    sname

--найти среднюю сумму заказов для каждого продовца на каждую дату и количество заказов
SELECT
    sname,
    odate,
    AVG(AMT),
    COUNT(amt)
FROM
    `salespeople`,
    orders
WHERE
    salespeople.SNUM = orders.snum
GROUP BY
    sname,
    ODATE;

--средняя сумма заказов на каждое число
SELECT 
    round(avg(amt), 2), odate
    FROM orders
GROUP BY odate;

