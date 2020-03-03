-------------------------------------------------------------------------------------------------------------------------------
### 01-03-2020
# setting up Jekyll Theme step by step

I have created jekyll theme with the help of following link.

[Link1](https://medium.com/@tordable/github-pages-as-blogging-platform-320524b1fffa)

[Link2](https://onextrapixel.com/start-jekyll-blog-github-pages-free/)

[Link3](https://is.gd/6DB6l8 )
This is my github page-
[Github](https://anushree199609.github.io/jekyll-theme-prologue/)

--------------------------------------------------------------------------------------------------------------------------------
### 28-02-2020
# Setting up SMS Gateway

[link](https://web.archive.org/web/20130928013544/https://www.x11.net/wiki/index.php
/setting_up_an_SMS_Gateway)

Understanding project related concepts:

Setting up an SMS Gateway

1 Introduction

2 Ingredients

2.1 Server

2.2 Cellphone Interface

3 Getting Started

3.1 Installing and configuring

3.2 Sending messages

4 Pitfalls and oddities

4.1 Duplicates

4.2 libmysql.so

5 Security

5.1 Basic security

5.2 Consider your users' privacy

6 Uses for an SMS gateway


------------------------------------------------------------------------------------------------------------------------------
### 27-02-2020
# SMS over HTTP

# I have prepare project synopsis of SMS over HTTP.
# Keypoints of synopsis

1. INTRODUCTION
  SMS over HTTP is a Mobile technology that allows you to request and receive information from your student account on your        mobile phone via short message service (SMS).
 - How SMS Works

- Data  Minning in SMS

2.OBJECTIVES

1.To make an Auto Display system over  SMS.

2.To display HTTP interface to fetch details.

3.To use AI to generate reports.

3.FEASIBILITY STUDY

4.LITERATURE REVIEW

5.METHODOLOGY & pROBLEM FORMULATION

6.REQUIREMENT ANALYSIS

7.FUTURE  SCOPE

1. This project will be very effective for future use.
2.This project will be useful not only in academics but in many fields like medicals, airlines, any booking systems etc.

8. REFERENCES

------------------------------------------------------------------------------------------------------------------------
### 21-02-2020
# SoftwareCarpentery Bash Script
I have read  the concept software carpentry script.

It has made me clear number of unix shell concept.

[Unix Shell](https://swcarpentry.github.io/shell-novice/)

------------------------------------------------------------------------------------------------------------------------------
### 19-02-2020
# How to remove last three line from multiple files?

Script.sh
 

#!/bin/bash

for f in *.txt 


do

 #tail command display the last 3 line and sed is used for delete the last line of the file

tail -3 $f | sed -i ‘$d’ $f | sed -i ‘$d’ $f | sed -i ‘$d’ $f ; 

done

----------------------------------------------------------------------------------------------------------------------------


### 18-02-2020 
# How to change multiple file extension?
 
Script.sh

#!/bin/bash

srcpath=$1

dstpath=$2  

echo $srcpath                     #print source directory name

echo $dstpath                     #print destination directory name

mkdir -p "$dstpath"               #Make a directory

cp -r $srcpath/* $dstpath         #Copy source file into destination file

for srcpath                       #check the source directory

 do
 
  for files in $(ls $dstpath/*.*);                    #check the all file with in destination directory  
     
   do
     
 echo  $(mv -v $files  ${files%.*}.txt)                  #remove the extension  into another extension
 
 done
 
   done  
   
--------------------------------------------------------------------------------------------------------------------------
### 10-02-2020
# How to mysql install from command line step by step


Today I have Finished Install the mysql.

   Install the MySQL database server package. You can use the Yum tool to install MySQL on Oracle Linux: sudo apt install mariadb-server

   Start the MySQL service: sudo service mysql start

   Launch the MySQL Command-Line Client: mysql -u root -p The -p option is needed only if a root password is defined for MySQL. Enter the password when prompted.

   Create a user (for example, amc2) and a strong password: mysql> create user ‘amc2’ identified by ‘amc2’;

To restrict the access to a machine (for example, to localhost for a user) create the user as follows:

   mysql> create user ‘amc2’@’localhost’ identified by ‘amc2’;

Create the database (for example, amc2) and grant all access to the user, for example, amc2 as follows:

   
  mysql> create database amc2;

   mysql> grant all on amc2.* to ‘amc2’;

Configure your MySQL installation to handle large BLOB entries, such as MSI binaries. To handle BLOB entries, edit the my.cnf file. You can find the my.cnf file in one of the following locations:

/etc/my.cnf

/etc/mysql/my.cnf

$MYSQL_HOME/my.cnf

[datadir]/my.cnf

Set the options max_allowed_packet and innodb_log_file-size in the [mysqld] section to the values shown: [mysqld] max_allowed_packet=300M innodb_log_file_size=768M

------------------------------------------------------------------------------------------------------------------------------
### 29-1-2020 
# How to install the kali linux 2020.1 step by step
# [Kali-Linux](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=11&cad=rja&uact=8&ved=2ahUKEwjes-iAuOznAhVv63MBHY0hBm0QFjAKegQIAhAB&url=https%3A%2F%2Fwww.hackingarticles.in%2Fhow-to-install-kali-linux-step-by-step-guide%2F&usg=AOvVaw191RziHDy1A8XHNXEqcrDA)
------------------------------------------------------------------------------------------------------------------------
