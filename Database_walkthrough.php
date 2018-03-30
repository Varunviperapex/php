<?php

echo "STEP 1> create database testdb;<br>";

echo "STEP 2> show databases;<br>";

echo "STEP 3> CREATE TABLE userdata(name VARCHAR(50) NOT NULL,address VARCHAR(255) NOT NULL);<br>";

echo "STEP 4> describe userdata;<br>";

echo "STEP 5> INSERT INTO userdata(name, address) VALUES('VARUN','LPU,Jalandhar,PUNJAB 144411');<br>";

echo "STEP 6> ALTER TABLE userdata ADD/DROP email VARCHAR(50) NOT NULL;<br>";

echo "STEP 7> UPDATE userdata SET email='xyz@gmail.com' WHERE name='Varun';<br>";

echo "<br>";

echo 'DELETE FROM userdata WHERE name ="Varun"<br>';

echo "CREATE USER 'tester99'@'localhost' IDENTIFIED by 'tester99';<br>";

echo "GRANT ALL PRIVILEGES ON testdb.* TO 'tester99'@'localhost' IDENTIFIED BY 'tester99';<br>";

echo "FLUSH PRIVILEGES;";
?>
