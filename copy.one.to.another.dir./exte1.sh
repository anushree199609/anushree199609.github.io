#!/bin/bash
srcpath=$1
dstpath=$2

echo $srcpath
echo $dstpath

#if [ !$srcpath ] then

if [ 0 -gt 1 ]
then
     echo "hello"
     exit 1
fi

mkdir -p "$dstpath"
cp -r $srcpath/* $dstpath

for f in *.*; 
do 
    mv -- "$f" "${f%.*}.text"
done



