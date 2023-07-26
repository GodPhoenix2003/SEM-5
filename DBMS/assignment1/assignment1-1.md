# Assignment 1

(using Oracle Live SQL)

---

1. **What is SQL?**

   > Structured Querry Language (SQL) is a programming language for storing and processing information in a relational database. A relational database stores information in a tabular format, with rows and columns representing different data attributes and the various relationships between the data values.`

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

   > The `Desc <table name>` command gives the complete information about the table, whereas, `select \* from <table name>` will select all the rows and columns from the table.

---

5. **Write a query to create a table employee with empno, ename, designation and salary.**

   ```sql
   CREATE TABLE employee(empno number(10), ename varchar2(20), designation varchar2(10), salary number(10));
   ```

---

6. **Write a query to display the column name and data type of the table employee.**

   ```sql
   desc employee;
   ```

   | Column      | Null? | Type         |
   | ----------- | :---: | ------------ |
   | EMPNO       |   -   | NUMBER(10,0) |
   | ENAME       |   -   | VARCHAR2(20) |
   | DESIGNATION |   -   | VARCHAR2(10) |
   | SALARY      |   -   | NUMBER(10,0) |

---

7. **Write a query to create a table from an existing table with all the fieds.**

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
    ALTER TABLE employee MODIFY empno number(6);
    ```

---

11. **Write a query to Alter the table employee with multiple columns (empno, ename).**

    ```sql
    ALTER TABLE employee MODIFY (empno number(20), ename varchar2(20));
    ```

---

12. **Write a query to add a new column in employee table.**

    ```sql
    ALTER TABLE employee ADD phno number(10);
    ```

---

13. **Write a query to add multiple columns in employee table.**

    ```sql
    ALTER TABLE employee ADD (email varchar2(20), address varchar2(50));
    ```

---

14. **Write a query to drop a column from an existing table employee.**

    ```sql
    ALTER TABLE employee DROP COLUMN address;
    ```

---

15. **Write a query to drop multiple columns from the employee table.**

    ```sql
    ALTER TABLE employee DROP (phno, email);
    ```

---

16. **Write a query to rename table employee to emp.**

    ```sql
    ALTER TABLE employee RENAME TO emp;
    ```
