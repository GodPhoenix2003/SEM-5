# Assignment 2

(using Oracle Live SQL)

---

1. **Create a table employee with attributes emp_id, f_name, l_name, job_type, salary, dept, commission, manager_id.**

   ```sql
   CREATE TABLE employee(emp_id number(10), f_name varchar2(10), l_name varchar2(10), job_type varchar2(10), salary number(10), dept varchar2(10), commission number(10), manager_id varchar2(10));
   ```

---

2. **Make emp_id as the primary key of employee table.**

   ```sql
   ALTER TABLE employee ADD PRIMARY KEY (emp_id);
   ```

---

3. **Make f_name and salary NOT NULL type.**

   ```sql
   ALTER TABLE employee MODIFY(f_name VARCHAR2(10) NOT NULL, salary NUMBER(10) NOT NULL);
   ```

---

4. **Add a column date_of_joining in the employee table.**

   ```sql
   ALTER TABLE employee ADD date_of_joining DATE;
   ```

---

5. **Create a table department with attribute d_name, d_loc and HOD_id where d_name is primary key.**

   ```sql
   CREATE TABLE department(d_name varchar2(10), d_loc varchar2(50), HOD_id number(10));
   ALTER TABLE department ADD PRIMARY KEY(d_name);
   ```

---

6. **Create a table location with attributes loc_id, city and contact_no.**

   ```sql
   CREATE TABLE location(loc_id number(10), city varchar2(10), contact_no number(10));
   ```

---

7. **Enhance the size of the ‘city’ attribute by 5, in the location table.**

   ```sql
   ALTER TABLE location MODIFY city varchar2(15);
   ```

---

8. **Delete the contact_no attribute from the location table.**

   ```sql
   ALTER TABLE location DROP COLUMN contact_no;
   ```

---

9. **Make the department attribute of the employee table its foreign key referencing the department table.**

   ```sql
   ALTER TABLE employee ADD FOREIGN KEY (dept) REFERENCES department(d_name);
   ```

---

10. **Rename the city attribute to ‘address’ in the location table.**

    ```sql
    ALTER TABLE location RENAME COLUMN city TO address;
    ```

---

11. **Rename the location table name to ‘loc’.**

    ```sql
    ALTER TABLE location RENAME TO loc;
    ```

---

12. **Insert the following rows in ‘loc’ table.**

    | loc_id | address |
    | ------ | ------- |
    | 1      | Kolkata |
    | 2      | Mumbai  |

    ```sql
    INSERT INTO loc VALUES (1, 'Kolkata');
    INSERT INTO loc VALUES (2, 'Mumbai');
    ```

---

13. **Truncate the table ‘loc’.**

    ```sql
    TRUNCATE TABLE loc;
    ```

---

14. **Drop the table ‘loc’.**

    ```sql
    DROP TABLE loc;
    ```

---

15. **Insert the following rows in the department table:**

    | d_name     | d_loc     | HOD_id |
    | ---------- | --------- | ------ |
    | Sales      | Kol       | 4      |
    | Accounts   | Delhi     | 6      |
    | Production | Kol       | 1      |
    | Marketing  | Kol       | 2      |
    | R&D        | Marketing | 8      |

    ```sql
    INSERT INTO department VALUES('Sales', 'Kol', 4);
    INSERT INTO department VALUES('Accounts', 'Delhi', 6);
    INSERT INTO department VALUES('Production', 'Kol', 1);
    INSERT INTO department VALUES('Marketing', 'Kol', 2);
    INSERT INTO department VALUES('R&D', 'Marketing', 8);
    ```

---

16. **Insert the following rows in the employee table:**

    | Emp_id | f_name  | l_name | Job_Type   | Salary | Commission | Dept       | Manager_id | DOJ         |
    | ------ | ------- | ------ | ---------- | ------ | ---------- | ---------- | ---------- | ----------- |
    | 1      | Arun    | Khan   | Manager    | 90000  |            | Production |            | 04-Jan-1998 |
    | 2      | Barun   | Kumar  | Manager    | 80000  |            | Marketing  |            | 09-Feb-1998 |
    | 3      | Chitra  | Kapoor | Engineer   | 60000  |            | Production | 1          | 08-Jan-1998 |
    | 4      | Dheeraj | Mishra | Manager    | 75000  |            | Sales      | 4          | 27-Dec-2001 |
    | 5      | Emma    | Dutt   | Engineer   | 55000  |            | Production | 1          | 20-Mar-2002 |
    | 6      | Floki   | Dutt   | Accountant | 70000  |            | Accounts   |            | 16-Jul-2000 |
    | 7      | Dheeraj | Kumar  | Clerk      | 40000  |            | Accounts   | 6          | 01-Jul-2016 |
    | 8      | Saul    | Sood   | Engineer   | 60000  |            | R&D        |            | 06-Sep-2014 |
    | 9      | Mou     | Bhat   | Clerk      | 30000  |            | Sales      | 4          | 08-Mar-2018 |
    | 10     | Sunny   | Deol   | Salesman   | 20000  | 10000      | Marketing  | 2          | 31-Mar-2001 |
    | 11     | Bobby   | Deol   | Engineer   | 35000  |            | R&D        | 8          | 17-Oct-2017 |
    | 12     | Aamir   | Khan   | Salesman   | 15000  | 5000       | Marketing  | 2          | 11-Jan-2013 |

    ```sql
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

---

17. **Show the values of departmental table.**

    ```sql
    SELECT * FROM department;
    ```

    | D_NAME     | D_LOC     | HOD_ID |
    | ---------- | --------- | ------ |
    | Sales      | Kol       | 4      |
    | Accounts   | Delhi     | 6      |
    | Production | Kol       | 1      |
    | Marketing  | Kol       | 2      |
    | R&D        | Marketing | 8      |

---

18. **Select the department names and their locations.**

    ```sql
    SELECT d_name, d_loc FROM department;
    ```

    | D_NAME     | D_LOC     |
    | ---------- | --------- |
    | Sales      | Kol       |
    | Accounts   | Delhi     |
    | Production | Kol       |
    | Marketing  | Kol       |
    | R&D        | Marketing |

---

19. **Show the employees f_name , l_name , salary and the salary after 1000rs. Bonus.**

    ```sql
    ALTER TABLE employee ADD sal_after_bonus number(10);
    UPDATE employee SET sal_after_bonus = salary + 1000;
    SELECT f_name, l_name, salary, sal_after_bonus FROM employee;
    ```

    | F_NAME  | L_NAME | SALARY | SAL_AFTER_BONUS |
    | ------- | ------ | ------ | --------------- |
    | Arun    | Khan   | 90000  | 91000           |
    | Barun   | Kumar  | 80000  | 81000           |
    | Chitra  | Kapoor | 60000  | 61000           |
    | Dheeraj | Mishra | 75000  | 76000           |
    | Emma    | Dutt   | 55000  | 56000           |
    | Floki   | Dutt   | 70000  | 71000           |
    | Dheeraj | Kumar  | 40000  | 41000           |
    | Saul    | Sood   | 60000  | 61000           |
    | Mou     | Bhat   | 30000  | 31000           |
    | Sunny   | Deol   | 20000  | 21000           |
    | Bobby   | Deol   | 35000  | 36000           |
    | Aamir   | Khan   | 15000  | 16000           |

---

20. **Show the employees annual salary with a 1000rs. Yearly bonus and the annual salary with a 100rs. Monthly bonus.**

    ```sql
    ALTER TABLE employee ADD (annual_sal_yearly_bonus number(10), annual_sal_monthly_bonus number(10));
    UPDATE employee SET annual_sal_yearly_bonus = (salary*12) + 1000;
    UPDATE employee SET annual_sal_monthly_bonus = (salary*12) + (100*12);
    SELECT annual_sal_yearly_bonus, annual_sal_monthly_bonus FROM employee;
    ```

    | ANNUAL_SAL_YEARLY_BONUS | ANNUAL_SAL_MONTHLY_BONUS |
    | :---------------------: | :----------------------: |
    |         1081000         |         1081200          |
    |         961000          |          961200          |
    |         721000          |          721200          |
    |         901000          |          901200          |
    |         661000          |          661200          |
    |         841000          |          841200          |
    |         481000          |          481200          |
    |         721000          |          721200          |
    |         361000          |          361200          |
    |         241000          |          241200          |
    |         421000          |          421200          |
    |         181000          |          181200          |

---

21. **Show f_name as NAME and annual salary as ANNSAL from the employee table.**

    ```sql
    ALTER TABLE employee RENAME COLUMN f_name TO NAME;
    ALTER TABLE employee ADD ANNSAL number(10);
    UPDATE employee SET ANNSAL = salary * 12;
    SELECT NAME, ANNSAL FROM employee;
    ```

    | NAME    | ANNSAL  |
    | ------- | ------- |
    | Arun    | 1080000 |
    | Barun   | 960000  |
    | Chitra  | 720000  |
    | Dheeraj | 900000  |
    | Emma    | 660000  |
    | Floki   | 840000  |
    | Dheeraj | 480000  |
    | Saul    | 720000  |
    | Mou     | 360000  |
    | Sunny   | 240000  |
    | Bobby   | 420000  |
    | Aamir   | 180000  |

---

22. **Show the l_name as Last AND 100rs. Incremented salary as NewSal.**

    ```sql
    ALTER TABLE employee RENAME COLUMN l_name TO Last;
    ALTER TABLE employee ADD NewSal number(10);
    UPDATE employee SET NewSal = salary + 100;
    SELECT Last, NewSal FROM employee;
    ```

    | LAST   | NEWSAL |
    | ------ | ------ |
    | Khan   | 90100  |
    | Kumar  | 80100  |
    | Kapoor | 60100  |
    | Mishra | 75100  |
    | Dutt   | 55100  |
    | Dutt   | 70100  |
    | Kumar  | 40100  |
    | Sood   | 60100  |
    | Bhat   | 30100  |
    | Deol   | 20100  |
    | Deol   | 35100  |
    | Khan   | 15100  |

---

23. **Show the emp_id, f_name, l_name, job_type of the employee getting highest salary.**

    ```sql
    ALTER TABLE employee RENAME COLUMN NAME TO f_name;
    ALTER TABLE employee RENAME COLUMN Last TO l_name;
    SELECT emp_id, f_name, l_name, job_type, salary FROM employee ORDER BY salary DESC FETCH FIRST 1 ROW ONLY;
    ```

    | EMP_ID | F_NAME | L_NAME | JOB_TYPE | SALARY |
    | ------ | ------ | ------ | -------- | ------ |
    | 1      | Arun   | Khan   | Manager  | 90000  |

---

24. **Show the emp_id, f_name, l_name, job_type of the employee getting minimum salary.**

    ```sql
    SELECT emp_id, f_name, l_name, job_type, salary FROM employee ORDER BY salary FETCH FIRST 1 ROW ONLY;
    ```

    | EMP_ID | F_NAME | L_NAME | JOB_TYPE | SALARY |
    | ------ | ------ | ------ | -------- | ------ |
    | 12     | Aamir  | Khan   | Salesman | 15000  |

---

25. **Show the average salary of employees in the employee table.**

    ```sql
    SELECT AVG(salary) AS average_salary FROM employee;
    ```

    | AVERAGE_SALARY |
    | -------------- |
    | 52500          |

---

26. Consider the Insurance database given below. The primary keys are underlined and the data types are specified:

    PERSON (driver-id: string, name: string, address: string) <br>
    CAR (Regno:string,model:string,year:int)<br>
    ACCIDENT (report-number:int,date:date,location:string)<br>
    OWNS (driver-id:string,regno:string) <br>
    PARTICIPATED (driver-id:string,regno:string,report-number:int,damage-amount:int)

    i. Create the above tables by properly specifying the primary keys and the foreign keys. <br>

    ```sql
    CREATE TABLE PERSON (
    driver_id VARCHAR2(20) PRIMARY KEY,
    name VARCHAR2(50),
    address VARCHAR2(100)
    );

    CREATE TABLE CAR (
        regno VARCHAR2(20) PRIMARY KEY,
        model VARCHAR2(50),
        year NUMBER
    );

    CREATE TABLE ACCIDENT (
        report_number NUMBER PRIMARY KEY,
        date DATE,
        location VARCHAR2(100)
    );

    CREATE TABLE OWNS (
        driver_id VARCHAR2(20),
        regno VARCHAR2(20),
        PRIMARY KEY (driver_id, regno),
        FOREIGN KEY (driver_id) REFERENCES PERSON(driver_id),
        FOREIGN KEY (regno) REFERENCES CAR(regno)
    );

    CREATE TABLE PARTICIPATED (
        driver_id VARCHAR2(20),
        regno VARCHAR2(20),
        report_number NUMBER,
        damage_amount NUMBER,
        PRIMARY KEY (driver_id, regno, report_number),
        FOREIGN KEY (driver_id, regno) REFERENCES OWNS(driver_id, regno),
        FOREIGN KEY (report_number) REFERENCES ACCIDENT(report_number)
    );
    ```

    ii. Enter atleast five tuples for each relation.<br>

    ```sql
    INSERT INTO PERSON VALUES ('D001', 'John Smith', '123 Main St');
    INSERT INTO PERSON VALUES ('D002', 'Jane Doe', '456 Elm St');

    INSERT INTO CAR VALUES ('C001', 'Toyota Camry', 2020);
    INSERT INTO CAR VALUES ('C002', 'Honda Civic', 2018);

    INSERT INTO ACCIDENT VALUES (12, TO_DATE('2023-08-01', 'YYYY-MM-DD'), 'Intersection A');
    INSERT INTO ACCIDENT VALUES (15, TO_DATE('2023-07-20', 'YYYY-MM-DD'), 'Highway B');

    INSERT INTO OWNS VALUES ('D001', 'C001');
    INSERT INTO OWNS VALUES ('D002', 'C002');

    INSERT INTO PARTICIPATED VALUES ('D001', 'C001', 12, 1500);
    INSERT INTO PARTICIPATED VALUES ('D002', 'C002', 15, 3000);
    ```

    iii. Demonstrate how you a. Update the damage amount for the car with a specific regno in accident with report number 12 to 25000 b. Add a new accident to the database. <br>

    ```sql
    UPDATE PARTICIPATED
    SET damage_amount = 25000
    WHERE regno = 'C001' AND report_number = 12;

    INSERT INTO ACCIDENT VALUES (20, TO_DATE('2023-08-10', 'YYYY-MM-DD'), 'Street C');
    ```

    iv. Find the total number of people who owned cars that were involved in accidents in 2006.<br>

    ```sql
    SELECT COUNT(DISTINCT driver_id) AS total_owners
    FROM OWNS
    WHERE regno IN (
        SELECT regno
        FROM PARTICIPATED p
        JOIN ACCIDENT a ON p.report_number = a.report_number
        WHERE EXTRACT(YEAR FROM a.date) = 2006
    );

    ```

    v. Find the number of accidents in which cars belonging to a specific model were
    involved.

    ```sql
    SELECT COUNT(*) AS num_accidents
    FROM PARTICIPATED p
    JOIN CAR c ON p.regno = c.regno
    WHERE c.model = 'Toyota Camry';
    ```
