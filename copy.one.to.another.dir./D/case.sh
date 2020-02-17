#shell script to illustrate the use case of 'case' command
#!/bin/sh
clear
echo "Menu of choices"
echo"1: who am I?"
echo"2: who is logged on?"
echo"3: date"
echo"4: calendar"
echo"Enter your choice"
read n
case $n in
1) who am i ;;
2) who ;;
3) date ;;
4) cal ;;
esac
