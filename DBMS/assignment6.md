# Assignment 6

(using mysql in xampp)

![1696412396211](image/assignment6/1696412396211.png)

```
CREATE TABLE Worker(worker_id int,first_name varchar(10),last_name varchar(10),salary int(10),joinining_date DATETIME, department varchar(10));
INSERT INTO Worker VALUES(1,'Monika','Arora','100000','2014-02-20 09:00:00', 'HR');
INSERT INTO Worker VALUES(2,'Niharika','Verma','80000','2014-06-11 09:00:00', 'Admin');
INSERT INTO Worker VALUES(3,'Vishal','Singhal','300000','2014-02-20 09:00:00', 'HR');
INSERT INTO Worker VALUES(4,'Amitabh','Singh','500000','2014-02-20 09:00:00', 'Admin');
INSERT INTO Worker VALUES(5,'Vivek','Bhati','500000','2014-06-11 09:00:00', 'Admin');
INSERT INTO Worker VALUES(6,'Vipul','Diwan','200000','2014-06-11 09:00:00', 'Account');
INSERT INTO Worker VALUES(7,'Satish','Kumar','75000','2014-01-20 09:00:00', 'Account');
INSERT INTO Worker VALUES(8,'Geetika','Chouhan','90000','2014-04-11 09:00:00', 'Admin');
```

Sample table: Bonus

![1696482929139](image/assignment6/1696482929139.png)

```
CREATE TABLE Bonus(worker_ref_id int,bonus_date DATETIME,bonus_amount int(10));
INSERT INTO Bonus VALUES(1,'2016-02-20 00:00:00',5000);
INSERT INTO Bonus VALUES(2,'2016-06-11 00:00:00',3000);
INSERT INTO Bonus VALUES(3,'2016-02-20 00:00:00',4000);
INSERT INTO Bonus VALUES(1,'2016-02-20 00:00:00',4500);
INSERT INTO Bonus VALUES(2,'2016-06-11 00:00:00',3500);
```

![1696482947160](image/assignment6/1696482947160.png)

```
CREATE TABLE Title(worker_ref_id int,worker_title varchar(20),affected_from DATETIME);
INSERT INTO Title VALUES(1,'Manager','2016-02-20 00:00:00');
INSERT INTO Title VALUES(2,'Executive','2016-06-11 00:00:00');
INSERT INTO Title VALUES(8,'Executive','2016-06-11 00:00:00');
INSERT INTO Title VALUES(5,'Manager','2016-06-11 00:00:00');
INSERT INTO Title VALUES(4,'Asst. Manager','2016-06-11 00:00:00');
INSERT INTO Title VALUES(7,'Executive','2016-06-11 00:00:00');
INSERT INTO Title VALUES(6,'Lead','2016-06-11 00:00:00');
INSERT INTO Title VALUES(3,'Lead','2016-06-11 00:00:00');
```

1. **Write An SQL Query To Fetch “FIRST_NAME” From Worker Table In Upper Case alias as WORKER_FIRSTNAME.**

   ```
   SELECT first_name AS 'WORKER_FIRSTNAME' FROM Worker;
   ```
   ![1696483199724](image/assignment6/1696483199724.png)
2. **Write An SQL Query To Print The First Three Characters Of FIRST_NAME From Worker Table.**

   ```
   SELECT SUBSTRING(first_name,1,3) FROM Worker;
   ```
   ![1696484038933](image/assignment6/1696484038933.png)
3.
