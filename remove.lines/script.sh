#!/bin/bash

for f in *.*
do
 tail -3 $f | sed -i '$d' $f | sed -i '$d' $f | sed -i '$d' $f | echo " processing $f "

done
