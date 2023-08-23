# Assignment 3

> (using oracle live sql)

**Consider the following employee table and execute the queries based on it**

![1692110338696](image/assignment3/1692110338696.png)

1. **Show f_name, l_name and job_type from employees.**

   ```
   CREATE TABLE employee(emp_id number(10), f_name varchar2(10), l_name varchar2(10), job_type varchar2(10), salary number(10), dept varchar2(10), commission number(10), manager_id number(10), DOJ DATE);
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
   SELECT f_name, l_name, job_type FROM employee;
   ```
   ![1692114239052](image/assignment3/1692114239052.png)
2. **Show employee details in the following fashion:
   Employee details
   Arun is a manager**

   ```
   ALTER TABLE employee ADD Employee_Details varchar2(50);
   UPDATE employee SET Employee_Details = f_name || ' is a ' || job_type;
   SELECT Employee_Details FROM employee;
   ```
   ![1692192189750](image/assignment3/1692192189750.png)
3. **Show the monthly salary details in the following fashion:
   Monthly Salary Details
   Arun’s monthly salary is Rs. 90000**

   ```
   ALTER TABLE employee ADD Monthly_Salary_Details varchar2(70);
   UPDATE employee SET Monthly_Salary_Details = f_name || '’s monthly salary is Rs. ' || salary;
   SELECT Monthly_Salary_Details FROM employee;
   ```
   ![1692192972251](image/assignment3/1692192972251.png)

   **Consider the Department table to answer the queries
   ![1692193159151](image/assignment3/1692193159151.png)**
4. **Show the different department names from department table.**

   ```
   CREATE TABLE department(d_name varchar2(10), d_loc varchar2(50), HOD_id number(10));
   INSERT INTO department VALUES('Sales', 'Kol', 4);
   INSERT INTO department VALUES('Accounts', 'Delhi', 6);
   INSERT INTO department VALUES('Production', 'Kol', 1);
   INSERT INTO department VALUES('Marketing', 'Kol', 2);
   INSERT INTO department VALUES('R&D', 'Marketing', 8);
   SELECT d_name from department;
   ```
   ![1692193512564](image/assignment3/1692193512564.png)
5. **Show the employee names who works in ‘Sales’.**

   ```
   SELECT CASE WHEN dept = 'Sales' THEN f_name || ' ' || l_name ELSE NULL END AS "Sales Employee" FROM employee;
   ```
   ![1692194049881](image/assignment3/1692194049881.png)
6. **Show the employee names who gets salary of more than 50000 per month.**

   ```
   SELECT CASE WHEN salary > 50000 THEN f_name || ' ' || l_name ELSE NULL END AS "Employee" FROM employee;
   ```
   ![1692195390309](image/assignment3/1692195390309.png)
7. **Show the details of the employee whose manager id is not 1.**

   ```
   SELECT CASE WHEN manager_id = 1 THEN 'Name:'||f_name||' '||l_name||',Job Type:'||job_type||',Department:'||dept END AS "Employee Details" FROM employee;
   ```
   ![1692469016102](image/assignment3/1692469016102.png)
8. **Show the employee details whose salary ranges between 40000 and 70000.**

   ```
   SELECT CASE WHEN salary > 40000 and salary < 70000 THEN 'Name:'||f_name||' '||l_name||',Job Type:'||job_type||',Department:'||dept END AS "Employee Details" FROM employee;
   ```
   ![1692471398849](image/assignment3/1692471398849.png)
9. **Show the details of the employees who works under the manager having id 1, 6 and 8.**

   ```
   SELECT CASE WHEN manager_id = 1 or manager_id = 6 or manager_id = 8 THEN 'Name:'||f_name||' '||l_name||',Job Type:'||job_type||',Department:'||dept END AS "Employee Details" FROM employee;
   ```
   ![1692518033754](image/assignment3/1692518033754.png)
10. **Select the f_name and salary of those employees whose last name starts with ‘K’.**

    ```
    SELECT f_name, salary FROM employee WHERE l_name LIKE 'K%';
    ```
    ![1692524704601](image/assignment3/1692524704601.png)
11. **Select the f_name and salary of those employees whose last name starts with ‘K’ and ends with ‘r’.**

    ```
    SELECT f_name, salary FROM employee WHERE l_name LIKE 'K%r';
    ```
    ![1692525316637](image/assignment3/1692525316637.png)
12. Show the details of those employees where 3rd letter of l_name is ‘o’.

    ```
    SELECT f_name, l_name, job_type, dept FROM employee WHERE SUBSTR(l_name, 3, 1) = 'o';
    ```
    ![1692526937487](image/assignment3/1692526937487.png)
13. Select the details of those employees who works as an engineer with monthly salary more than 50000.

    ```
    SELECT emp_id, f_name, l_name, salary, dept FROM employee WHERE job_type = 'Engineer' and salary > 50000;
    ```
    ![1692531274086](image/assignment3/1692531274086.png)
14. Select the employees whose department is ‘Production’ or monthly salary is more than 60000 per month.

    ```
    SELECT f_name, l_name, salary, dept FROM employee WHERE dept = 'Production' or salary > 60000;
    ```
    ![1692531903608](image/assignment3/1692531903608.png)
15. **Find the minimum salary, maximum salary, total salary, average salary of the employees who work in ‘Sales’ department.**

    ```
    SELECT MIN(salary) AS min_salary, MAX(salary) AS max_salary, SUM(salary) AS total_salary, AVG(salary) AS avg_salary FROM employee WHERE dept = 'Sales';
    ```
    ![1692533102093](image/assignment3/1692533102093.png)
16. **Find the employee l_name that is first and f_name that is last if they are arranged in an order.**

    ```
    SELECT MIN(l_name) AS first_l_name, MAX(f_name) AS last_f_name FROM employee;
    ```
    ![1692533981573](image/assignment3/1692533981573.png)
17. **Find the number of employees working in each department.**

    ```
    SELECT dept, COUNT(*) AS employee_count FROM employee GROUP BY dept;
    ```
    ![1692534475035](image/assignment3/1692534475035.png)
18. Find the number of departments from employee table.

    ```
    SELECT COUNT(DISTINCT dept) AS dept_count FROM employee;
    ```
    ![1692538706709](image/assignment3/1692538706709.png)
19. **Find the average commission of the employees.**

    ```
    SELECT AVG(commission) AS avg_commission FROM employee;
    ```
    ![1692550394519](image/assignment3/1692550394519.png)
20. **Find the average salaries of the employees department wise.**

    ```
    SELECT dept, AVG(salary) AS avg_salary from employee GROUP BY dept;
    ```
    ![1692555520723](image/assignment3/1692555520723.png)
21. **Find the sum of salary of different job_type according to different departments.**

    ```
    SELECT dept, job_type, SUM(salary) AS total_salary FROM employee GROUP BY dept, job_type;
    ```
    ![1692556253566](image/assignment3/1692556253566.png)
22. **Find the department name and average salaries of those departments whose average salary is greater than 40000.**

    ```
    SELECT dept, avg(salary) AS avg_salary FROM employee GROUP BY dept HAVING AVG(salary) > 40000;
    ```
    ![1692610846820](image/assignment3/1692610846820.png)
23. **Find the department name and maximum salaries of those departments whose maximum salary is greater than 55000.**

    ```
    SELECT dept, MAX(salary) AS max_salary FROM employee GROUP BY dept HAVING MAX(salary) > 55000;
    ```
    ![1692626689255](image/assignment3/1692626689255.png)
24. Display the job_type and total monthly salary for each job_type where total payroll is exceeding 100000.

    ```
    SELECT job_type, SUM(salary) AS total_monthly_salary FROM employee GROUP BY job_type HAVING SUM(salary) > 100000;
    ```
    ![1692638984197](image/assignment3/1692638984197.png)
25. Display the name of the department having maximum average salary.
