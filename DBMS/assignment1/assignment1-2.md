# Assignment 1

(using XAMPP - mysql)

---

1. **What is SQL?**

   > Structured Querry Language (SQL) is a programming language for storing and processing information in a relational database. A relational database stores information in a tabular format, with rows and columns representing different data attributes and the various relationships between the data values.

---

2. **Explain several parts of SQL.**

   > The 3 major components of SQL are :-
   >
   > 1. DDL - Data Definition Lnaguage
   > 2. DML - Data Modification/Manupulation Language
   > 3. DCL - Data Control Language

---

3. **Difference between `varchar (n)` & `varchar2 (n)`.**

   > The main difference between `varchar(n)` and `varchar2(n)` is that `varchar(n)` is ANSI standard and `varchar2(n)` is oracle standard.

---

4. **Difference between `Desc <table name>` & `select * from <table name>`.**

   > The `desc <table name>` command gives the complete information about the table, whereas, `select * from <table name>` will select all the rows and columns from the table.

---

5. **Write a query to create a table employee with empno, ename, designation and salary.**

   ```sql
   CREATE TABLE employee(empno int(4), ename varchar(20), designation varchar(10), salary int(10));
   ```

---

6. **Write a query to display the column name and data type of the table employee.**

   ```sql
   SHOW COLUMNS FROM employee;
   ```

   | Field       | Type        | Null | Key | Default | Extra |
   | ----------- | ----------- | ---- | --- | ------- | ----- |
   | empno       | int(4)      | YES  |     | NULL    |       |
   | ename       | varchar(20) | YES  |     | NULL    |       |
   | designation | varchar(10) | YES  |     | NULL    |       |
   | salary      | int(10)     | YES  |     | NULL    |       |

---

7. **Write a query to create a table from an existing table with all the fields.**

   ```sql
   CREATE TABLE newemployee AS SELECT * FROM employee;
   ```

---

8. **Write a query to create table from an existing table with selected fields.**

   ```sql
   CREATE TABLE newempoyee1 AS SELECT empno, salary FROM employee;
   ```

---

9. **Write a query to create a new table from an existing table without any record.**

   ```sql
   CREATE TABLE newemployee2 AS SELECT * FROM employee WHERE 1=0;
   ```

---

10. **Write a query to Alter the column empno number(4) to empno number(6).**

    ```sql
    ALTER TABLE employee MODIFY empno int(6);
    ```

---

11. **Write a query to Alter the table employee with multiple columns (empno, ename).**

    ```sql
    ALTER TABLE employee MODIFY empno int(20), MODIFY ename varchar(20);
    ```

---

12. **Write a query to add a new column in employee table.**

    ```sql
    ALTER TABLE employee ADD phno int(10);
    ```

---

13. **Write a query to add multiple columns in employee table.**

    ```sql
    ALTER TABLE employee ADD email varchar(20), ADD address varchar(50);
    ```

---

14. **Write a query to drop a column from an existing table employee.**

    ```sql
    ALTER TABLE employee DROP COLUMN address;
    ```

---

15. **Write a query to drop multiple columns from the employee table.**

    ```sql
    ALTER TABLE employee DROP COLUMN phno, DROP COLUMN email;
    ```

---

16. **Write a query to rename table employee to emp.**

    ```sql
    ALTER TABLE employee RENAME TO emp;
    ```
