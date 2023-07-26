# Assignment 1

1. **What is SQL?**

   > Structured Querry Language (SQL) is a programming language is a programming language for storing and processing information in a relational database. A relational database stores information in a tabular format, with rows and columns representing different data attributes an the various relationships between the data values.
   >
2. **Explain several parts of SQL.**

   > The 3 major components of SQL are :-
   > (i) DDL - Data Definition Lnaguage
   > (ii) DML - Data Modification/Manupulation Language
   > (iii) DCL - Data Control Language
   >
3. **Difference between varchar (n) & varchar2 (n).**

   > The main difference between varchar(n) and varchar2(n) is that varchar(n) is ANSI standard and varchar2(n) is oracle standard.
   >
4. **Difference between Desc `<table name>` & select * from `<table name>`.**

   > The desc `<table name>` command gives the complete information about the table, whereas, select * from `<table name>`  will select all the rows and columns from the table.
   >
5. **Write a query to create a table employee with empno, ename, designation and salary.**

   ```sql
   CREATE TABLE employee(empno number(10), ename varchar2(20), designation varchar2(10), salary number(10));
   ```
6. **Write a query to display the column name and data type of the table employee.**

   ```sql
   desc employee;
   ```
   ![1690353761923](https://github.com/GodPhoenix2003/3rd-Year-Assignments/assets/100948753/c7396480-32fa-4603-9354-513f22a43b54)

7. **Write a query to create a table from an existing table with all the fieds.**

   ```python
   CREATE TABLE newemployee AS SELECT * FROM employee;
   ```
8. **Write a query to create table from an existing table with selected fields.**

   ```python
   CREATE TABLE newempoyee1 AS SELECT empno, salary FROM employee;
   ```
9. **Write a query to create a new table from an existing table without any record.**

   ```python
   CREATE TABLE newemployee2 AS SELECT * FROM employee WHERE 1=0;
   ```
10. **Write a query to Alter the column empno number(4) to empno number(6).**

    ```python
    ALTER TABLE employee MODIFY empno number(6);
    ```
11. **Write a query to Alter the table employee with multiple columns (empno, ename).**

    ```python
    ALTER TABLE employee MODIFY (empno number(20), ename varchar2(20));
    ```
12. **Write a query to add a new column in employee table.**

    ```python
    ALTER TABLE employee ADD phno number(10);
    ```
13. **Write a query to add multiple columns in employee table.**

    ```python
    ALTER TABLE employee ADD (email varchar2(20), address varchar2(50));
    ```
14. **Write a query to drop a column from an existing table employee.**

    ```python
    ALTER TABLE employee DROP COLUMN address;
    ```
15. **Write a query to drop multiple columns from the employee table.**

    ```python
    ALTER TABLE employee DROP (phno, email);
    ```
16. **Write a query to rename table employee to emp.**

    ```python
    ALTER TABLE employee RENAME TO emp;
    ```
