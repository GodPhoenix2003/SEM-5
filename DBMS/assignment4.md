# ASSIGNMENT 4

(using oracle live sql)

1. **Show the use of upper and lower function.**

   ```
   CREATE TABLE employee(emp_id number(10), name varchar2(20), phno number(10));
   INSERT INTO employee VALUES(1, 'Sagnik Chatterjee', 1234567890);
   SELECT name AS original_name, UPPER(name) AS uppercase_name, LOWER(name) AS lowercase_name FROM employee;
   ```
   ![1](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/0eb9f091-3063-41f6-8cef-f9ce25ad887c)

2. **Show the use of concat, instr and length function.**

   ```
   CREATE TABLE items(name varchar2(10), det varchar2(10));
   INSERT INTO items VALUES('Reynolds', 'Pen');
   SELECT name, det, CONCAT(name, det), INSTR(name, 'old'), LENGTH(CONCAT(name, det)) AS total_length FROM items;
   ```
   ![2](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/191ba3da-5313-4160-9230-a707ce056a46)

3. **Show the use of the following functions on numeric values:
   a. Sqrt()
   b. Power()
   c. Ceil()
   d. Substr()
   e. Max()
   f. min()
   g. Round()
   h. avg()
   i. count()
   j. Exp()
   k. mod()**

   ```
   CREATE TABLE numbers(num1 number(10), num2 number(10), num3 number(10, 5));
   INSERT INTO numbers VALUES(9, 4, 3.8);
   INSERT INTO numbers VALUES(9, 3, 3.1);
   INSERT INTO numbers VALUES(25, 3, 6.7);
   INSERT INTO numbers VALUES(16, 2, 5.3);
   SELECT num1, num2, num3, SQRT(num1), POWER(num1, num2), CEIL(num3), ROUND(num3), EXP(num2), MOD(num1, num2) FROM numbers;
   SELECT MAX(num1), MIN(num2), AVG(num1), COUNT(num2) FROM numbers;
   ```
   ![3a](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/ed1724c0-e64d-4f19-9169-0e12c468f645)
   ![3b](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/507b2dd2-d2f4-4d2b-853a-48d870bff300)

4. **Solve the following queries:
   a. Find the ceiling and floor value of 14.887.
   b. Find out the round-off 17.49989.
   c. Calculate 8^7.**

   ```
   CREATE TABLE num(num number);
   INSERT into num VALUES(1);
   SELECT CEIL(14.887), FLOOR(14.887), ROUND(117.49989), POWER(8, 7) FROM num;
   ```
   ![4](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/788c781f-7be5-466d-b69c-1dffcee5690a)

5. **Show the current date.**

   ```
   CREATE TABLE dates(d1 DATE);
   INSERT INTO dates VALUES(to_date('01-01-1111', 'dd-mm-yyyy'));
   SELECT SYSDATE AS current_date FROM dates;
   ```
   ![5](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/77b73f22-e81f-41f3-902c-54172649033c)

6. **Find the total experience of the employees in weeks who works in Sales department.**

   ```
   CREATE TABLE employees(emp_id number, dept varchar(10), doj DATE);
   INSERT INTO employees VALUES(1, 'Production', to_date('25-04-2023', 'dd-mm-yyyy'));
   INSERT INTO employees VALUES(2, 'Sales', to_date('22-01-2023', 'dd-mm-yyyy'));
   INSERT INTO employees VALUES(3, 'R&D', to_date('13-06-2023', 'dd-mm-yyyy'));
   INSERT INTO employees VALUES(4, 'Sales', to_date('12-03-2023', 'dd-mm-yyyy'));
   ALTER TABLE employees ADD total_working_weeks number(10, 2);
   UPDATE employees SET total_working_weeks = ROUND((SYSDATE - doj)/7, 2);
   SELECT * FROM employees WHERE dept = 'Sales';
   ```
   ![6](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/1729d4a1-6bf3-49ff-a1c2-bf0ec425575b)

7. **Display the use of the following functions on date:
   a. Months_between
   b. Add_months
   c. Next_day
   d. Last_day
   e. Round
   f. Trunc
   g. To_char**

   ```
   CREATE TABLE dates(d1 DATE);
   INSERT INTO dates VALUES(to_date('25-04-2023', 'dd-mm-yyyy'));
   INSERT INTO dates VALUES(to_date('22-01-2023', 'dd-mm-yyyy'));
   INSERT INTO dates VALUES(to_date('13-06-2023', 'dd-mm-yyyy'));
   INSERT INTO dates VALUES(to_date('12-03-2023', 'dd-mm-yyyy'));
   SELECT d1, MONTHS_BETWEEN(SYSDATE, d1) AS months_diff, ADD_MONTHS(d1, 6) AS six_months_later, NEXT_DAY(d1, 'FRIDAY') AS next_friday, LAST_DAY(d1) AS last_day_of_month, TO_CHAR(d1, 'YYYY-MM-DD') FROM dates;
   SELECT d1, ROUND(d1, 'DD'), ROUND(d1, 'MM'), ROUND(d1, 'YYYY') FROM dates;
   SELECT d1, TRUNC(d1, 'DAY'), TRUNC(d1, 'MONTH'), TRUNC(d1, 'YEAR') FROM dates;
   ```
   ![7a](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/4f96c670-3e98-4322-8690-2d06a88af22f)
   ![7b](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/3dd5f837-48a8-4fe5-8cc7-73de67746959)
   ![7c](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/ca316eba-4850-4af3-a682-e204a14a196a)

8. **Show the employee details with a revised salary. The salary is incremented in the following way:
   a. 10% for sales department
   b. 20% for marketing department
   c. No increment for others**

   ```
   CREATE TABLE employee(emp_id number, dept varchar2(10), salary number(10));
   INSERT INTO employee VALUES(1, 'Sales', 100000);
   INSERT INTO employee VALUES(2, 'Marketing', 150000);
   INSERT INTO employee VALUES(3, 'Production', 200000);
   ALTER TABLE employee ADD revised_salary number(10);
   UPDATE employee SET revised_salary = salary + (0.1 * salary) WHERE dept = 'Sales';
   UPDATE employee SET revised_salary = salary + (0.2 * salary) WHERE dept = 'Marketing';
   UPDATE employee SET revised_salary = salary WHERE dept != 'Sales' and dept != 'Marketing';
   SELECT * FROM employee;
   ```
   ![8](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/63a123d0-4ee4-44fc-87e2-2c8a4cb37d5a)

9. **Determine the tax for each employee in production department based on the monthly salary. The tax rate are as per the following data:**

   ![9q](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/a10cbd2e-47a2-4f80-9844-8cd21fb0f3dc)

   ```
   CREATE TABLE production_dept(emp_id number, salary number(10));
   INSERT INTO production_dept VALUES(1, 10000);
   INSERT INTO production_dept VALUES(2, 30000);
   INSERT INTO production_dept VALUES(3, 50000);
   INSERT INTO production_dept VALUES(4, 70000);
   INSERT INTO production_dept VALUES(5, 90000);
   ALTER TABLE production_dept ADD tax number(10, 2);
   UPDATE production_dept SET tax = 0 WHERE salary BETWEEN 0 and 19999;
   UPDATE production_dept SET tax = salary * 0.09 WHERE salary BETWEEN 20000 and 39999;
   UPDATE production_dept SET tax = salary * 0.20 WHERE salary BETWEEN 40000 and 59999;
   UPDATE production_dept SET tax = salary * 0.30 WHERE salary BETWEEN 60000 and 79999;
   UPDATE production_dept SET tax = salary * 0.45 WHERE salary >= 80000;
   SELECT * FROM production_dept;
   ```
   ![9](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/03a352a8-fce7-4134-8299-817853fa62e9)

11. **Find the Cartesian product between Employee and Department table.**

    ```
    CREATE TABLE employee(emp_id number, salary number(10), dept_id number);
    CREATE TABLE department(dept_id number, dept_name varchar2(20));
    INSERT INTO employee VALUES(1, 85000, 1);
    INSERT INTO employee VALUES(2, 55000, 2);
    INSERT INTO employee VALUES(3, 20000, 3);
    INSERT INTO department VALUES(1, 'Administration');
    INSERT INTO department VALUES(2, 'Production');
    INSERT INTO department VALUES(3, 'Sales');
    SELECT e.emp_id, e.salary, d.dept_id, d.dept_name FROM employee e CROSS JOIN department d WHERE e.dept_id = d.dept_id;
    ```
    ![10](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/7740c930-24ea-405b-8cdb-a3c9c4f994c6)

12. **Show the employee names and the respective department location.**

    ```
    CREATE TABLE employee(emp_name varchar2(50), dept_id number);
    CREATE TABLE department(dept_id number, dept_name varchar2(20), dept_loc varchar2(20));
    INSERT INTO employee VALUES('Sagnik Chatterjee', 1);
    INSERT INTO employee VALUES('Bristi Roy', 2);
    INSERT INTO employee VALUES('Sneha Sarkar', 3);
    INSERT INTO department VALUES(1, 'Administration', 'Kolkata');
    INSERT INTO department VALUES(2, 'Production', 'Balurghat');
    INSERT INTO department VALUES(3, 'Sales', 'Siliguri');
    SELECT e.emp_name, e.dept_id, d.dept_name, d.dept_loc FROM employee e CROSS JOIN department d WHERE e.dept_id = d.dept_id;
    ```
    ![11](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/6c698db0-7e3c-464b-b25e-8d59500d302c)

13. **Give an example of the following joins considering employee and department tables.
    a. Natural join
    b. Inner join
    c. Left outer join
    d. Right outer join
    e. Full outer join**

    ```
    CREATE TABLE employee(emp_name varchar2(50), dept_id number);
    CREATE TABLE department(dept_id number, dept_name varchar2(20));
    INSERT INTO employee VALUES('Sagnik Chatterjee', 1);
    INSERT INTO employee VALUES('Bristi Roy', 2);
    INSERT INTO employee VALUES('Sneha Sarkar', 3);
    INSERT INTO department VALUES(1, 'Administration');
    INSERT INTO department VALUES(2, 'Production');
    INSERT INTO department VALUES(3, 'Sales');
    ```
    (a)

    ```
    SELECT * FROM employee NATURAL JOIN department;
    ```
    ![12a](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/007b619d-257a-420f-80bf-6357935fa9be)

    (b)

    ```
    SELECT * FROM employee e INNER JOIN department d ON e.dept_id = d.dept_id;
    ```
    ![12b](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/b3d431ff-5a25-40d6-8e71-d77a8f622e14)

    (c)

    ```
    SELECT * FROM employee e LEFT OUTER JOIN department d ON e.dept_id = d.dept_id;
    ```
    ![12c](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/de810656-70a2-43e7-a192-0f2fd76654b8)

    (d)

    ```
    SELECT * FROM employee e RIGHT OUTER JOIN department d ON e.dept_id = d.dept_id;
    ```
    ![12d](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/f5efb020-e1d2-41f1-838a-6b13598d4b33)

    (e)

    ```
    SELECT * FROM employee e FULL OUTER JOIN department d ON e.dept_id = d.dept_id;
    ```
    ![12e](https://github.com/GodPhoenix2003/SEM-5/assets/100948753/6353ea28-3230-4c0f-b967-0f2d8a4ec80b)
