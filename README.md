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
### 29-1-2020 
# How to install the kali linux 2020.1 step by step
# [Kali-Linux](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=11&cad=rja&uact=8&ved=2ahUKEwjes-iAuOznAhVv63MBHY0hBm0QFjAKegQIAhAB&url=https%3A%2F%2Fwww.hackingarticles.in%2Fhow-to-install-kali-linux-step-by-step-guide%2F&usg=AOvVaw191RziHDy1A8XHNXEqcrDA)
------------------------------------------------------------------------------------------------------------------------
