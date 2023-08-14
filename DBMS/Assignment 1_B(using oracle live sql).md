# ASSIGNMENT 1_B

(using oracle live sql)

1. **Create a table BTech_2nd with attributes E_no, Year, Sec, C_Roll, Name, DOB having E_no as primary key using constraint.**

   ```python
   CREATE TABLE BTech_2nd(E_no number(10), Year number(4), Sec varchar2(1), C_Roll number(10), Name varchar2(20), DOB DATE);
   ALTER TABLE BTech_2nd ADD CONSTRAINT pk_eno PRIMARY KEY(E_no);
   ```
2. **Add the columns Mob_No, DOA (date of admission) to the 1st table.**

   ```python
   ALTER TABLE BTech_2nd ADD(Mob_No number(10), DOA DATE);
   ```
3. **Create an empty table BTech_3rd from the above existing table.**

   ```python
   CREATE TABLE BTech_3rd AS SELECT * FROM BTech_2nd WHERE 1=0;
   ```
4. **Drop the columns Mob_No, DOA (date of admission) to the 2nd table.**

   ```python
   ALTER TABLE BTech_3rd DROP(Mob_No, DOA);
   ```
5. **Make C_roll and DOA as not null in the 1st table.**

   ```python
   ALTER TABLE BTech_2nd MODIFY(C_Roll number(10) NOT NULL, DOA DATE NOT NULL);
   ```
6. **Change the length of the Year and name attribute in the 2nd table.**

   ```python
   ALTER TABLE BTech_3rd MODIFY(Year number(5), Name varchar2(50));
   ```
