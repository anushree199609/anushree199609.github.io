#!/bin/bash
srcpath=$1
dstpath=$2

echo $srcpath
echo $dstpath


mkdir -p "$dstpath"
cp -r $srcpath/* $dstpath


for srcpath
do
    for files in $(ls $dstpath/*.*); do
        echo  $(mv -v $files  ${files%.*}.txt)
    done
done


