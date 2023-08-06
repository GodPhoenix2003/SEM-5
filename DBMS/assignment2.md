# Assignment 2

(using Oracle Live SQL)

1. **Create a table employee with attributes emp_id, f_name, l_name, job_type, salary, dept, commission, manager_id.**

   ```python
   CREATE TABLE employee(emp_id number(10), f_name varchar2(10), l_name varchar2(10), job_type varchar2(10), salary number(10), dept varchar2(10), commission number(10), manager_id varchar2(10));
   ```
2. **Make emp_id as the primary key of employee table.**

   ```python
   ALTER TABLE employee ADD CONSTRAINT pk_employee PRIMARY KEY (emp_id);
   ```
3. **Make f_name and salary NOT NULL type.**

   ```python
   ALTER TABLE employee MODIFY(f_name VARCHAR2(10) NOT NULL, salary NUMBER(10) NOT NULL);
   ```
4. **Add a column date_of_joining in the employee table.**

   ```python
   ALTER TABLE employee ADD date_of_joining DATE;
   ```
5. **Create a table department with attribute d_name, d_loc and HOD_id where d_name is primary key.**

   ```python
   CREATE TABLE department(d_name varchar2(10), d_loc varchar2(50), HOD_id number(10));
   ALTER TABLE department ADD CONSTRAINT pk_hod PRIMARY KEY(d_name);
   ```
6. **Create a table location with attributes loc_id, city and contact_no.**

   ```python
   CREATE TABLE location(loc_id number(10), city varchar2(10), contact_no number(10));
   ```
7. **Enhance the size of the ‘city’ attribute by 5, in the location table.**

   ```python
   ALTER TABLE location MODIFY city varchar2(15);
   ```
8. **Delete the contact_no attribute from the location table.**

   ```python
   ALTER TABLE location DROP COLUMN contact_no;
   ```
9. **Make the department attribute of the employee table its foreign key referencing the department table.**
10. **Rename the city attribute to ‘address’ in the location table.**

    ```python
    ALTER TABLE location RENAME COLUMN city TO address;
    ```
11. **Rename the location table name to ‘loc’.**

    ```python
    ALTER TABLE location RENAME TO loc;
    ```
12. **Insert the following rows in ‘loc’ table.**

    ![1690916010510](image/assignment2/1690916010510.png)

    ```python
    INSERT INTO loc VALUES (1, 'Kolkata');
    INSERT INTO loc VALUES (2, 'Mumbai');
    ```
13. **Truncate the table ‘loc’.**

    ```python
    TRUNCATE TABLE loc;
    ```
14. **Drop the table ‘loc’.**

    ```python
    DROP TABLE loc;
    ```
15. **Insert the following rows in the department table:**

    ![1691085372942](image/assignment2/1691085372942.png)

    ```python
    INSERT INTO department VALUES('Sales', 'Kol', 4);
    INSERT INTO department VALUES('Accounts', 'Delhi', 6);
    INSERT INTO department VALUES('Production', 'Kol', 1);
    INSERT INTO department VALUES('Marketing', 'Kol', 2);
    INSERT INTO department VALUES('R&D', 'Marketing', 8);
    ```
16. **Insert the following rows in the employee table:**

    ![1691085402163](image/assignment2/1691085402163.png)

    ```python
    INSERT INTO employee VALUES(1, 'Arun', 'Khan', 'Manager', 90000, 'Production', NULL, NULL, to_date('04-01-1998', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(2, 'Barun', 'Kumar', 'Manager', 80000, 'Marketing', NULL, NULL, to_date('09-02-1998', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(3, 'Chitra', 'Kapoor', 'Engineer', 60000, 'Production', NULL, 1, to_date('08-01-1998', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(4, 'Dheeraj', 'Mishra', 'Manager', 75000, 'Sales', NULL, 4, to_date('27-12-2001', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(5, 'Emma', 'Dutt', 'Engineer', 55000, 'Production', NULL, 1, to_date('20-03-2002', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(6, 'Floki', 'Dutt', 'Accountant', 70000, 'Accounts', NULL, NULL, to_date('16-07-2000', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(7, 'Dheeraj', 'Kumar', 'Clerk', 40000, 'Accounts', NULL, 6, to_date('01-07-2016', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(8, 'Saul', 'Sood', 'Engineer', 60000, 'R&D', NULL, NULL, to_date('06-09-2014', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(9, 'Mou', 'Bhat', 'Clerk', 30000, 'Sales', NULL, 4, to_date('08-03-2018', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(10, 'Sunny', 'Deol', 'Salesman', 20000, 'Marketing', 10000, 2, to_date('31-03-2001', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(11, 'Bobby', 'Deol', 'Engineer', 35000, 'R&D', NULL, 8, to_date('17-10-2017', 'dd-mm-yyyy'));
    INSERT INTO employee VALUES(12, 'Aamir', 'Khan', 'Salesman', 15000, 'Marketing', 5000, 2, to_date('11-01-2013', 'dd-mm-yyyy'));
    ```
17. **Show the values of departmental table.**

    ```python
    SELECT * FROM department;
    ```
    ![1691232384035](image/assignment2/1691232384035.png)
18. **Select the department names and their locations.**

    ```python
    SELECT d_name, d_loc FROM department;
    ```
    ![1691234341609](image/assignment2/1691234341609.png)
19. **Show the employees f_name , l_name , salary and the salary after 1000rs. Bonus.**

    ```python
    ALTER TABLE employee ADD sal_after_bonus number(10);
    UPDATE employee SET sal_after_bonus = salary + 1000;
    SELECT f_name, l_name, salary, sal_after_bonus FROM employee;
    ```
    ![1691235502904](image/assignment2/1691235502904.png)
20. **Show the employees annual salary with a 1000rs. Yearly bonus and the annual salary with a 100rs. Monthly bonus.**

    ```python
    ALTER TABLE employee ADD (annual_sal_yearly_bonus number(10), annual_sal_monthly_bonus number(10));
    UPDATE employee SET annual_sal_yearly_bonus = (salary*12) + 1000;
    UPDATE employee SET annual_sal_monthly_bonus = (salary*12) + (100*12);
    SELECT annual_sal_yearly_bonus, annual_sal_monthly_bonus FROM employee;
    ```
    ![1691241867629](image/assignment2/1691241867629.png)
21. **Show f_name as NAME and annual salary as ANNSAL from the employee table.**

    ```python
    ALTER TABLE employee RENAME COLUMN f_name TO NAME;
    ALTER TABLE employee ADD ANNSAL number(10);
    UPDATE employee SET ANNSAL = salary * 12;
    SELECT NAME, ANNSAL FROM employee;
    ```
    ![1691313870777](image/assignment2/1691313870777.png)
22. **Show the l_name as Last AND 100rs. Incremented salary as NewSal.**

    ```python
    ALTER TABLE employee RENAME COLUMN l_name TO Last;
    ALTER TABLE employee ADD NewSal number(10);
    UPDATE employee SET NewSal = salary + 100;
    SELECT Last, NewSal FROM employee;
    ```
    ![1691321452590](image/assignment2/1691321452590.png)
23. **Show the emp_id, f_name, l_name, job_type of the employee getting highest salary.**

    ```python
    ALTER TABLE employee RENAME COLUMN NAME TO f_name;
    ALTER TABLE employee RENAME COLUMN Last TO l_name;
    SELECT emp_id, f_name, l_name, job_type, salary FROM employee ORDER BY salary DESC FETCH FIRST 1 ROW ONLY;
    ```
    ![1691333102638](image/assignment2/1691333102638.png)
24. **Show the emp_id, f_name, l_name, job_type of the employee getting minimum salary.**

    ```python
    SELECT emp_id, f_name, l_name, job_type, salary FROM employee ORDER BY salary FETCH FIRST 1 ROW ONLY;
    ```
    ![1691334483134](image/assignment2/1691334483134.png)
25. **Show the average salary of employees in the employee table.**

    ```python
    SELECT AVG(salary) AS average_salary FROM employee;
    ```
    ![1691335833610](image/assignment2/1691335833610.png)
26. **Consider the Insurance database given below. The primary keys are underlined and the data types are specified:
    PERSON (driver-id: string, name: string, address: string) CAR (Regno:string,model:string,year:int)
    ACCIDENT (report-number:int,date:date,location:string) OWNS (driver-id:string,regno:string)
    PARTICIPATED (driver-id:string,regno:string,report-number:int,damage-amount:int)
    i. Create the above tables by properly specifying the primary keys and the foreign keys
    ii. Enter atleast five tuples for each relation
    iii. Demonstrate how you a. Update the damage amount for the car with a specific regno in accident with report number 12 to 25000 b. Add a new accident to the database
    iv. Find the total number of people who owned cars that were involved in accidents in 2006.
    v. Find the number of accidents in which cars belonging to a specific model were involved.**
