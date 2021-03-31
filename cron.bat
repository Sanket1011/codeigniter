@echo off

set "PATH=%PATH%;C:\xampp\htdocs\codeigniter"

call C:

call cd xampp\htdocs\codeigniter

:loop

call php index.php Tools

@REM PING 1.1.11 -n 3 -w 10000 >NUL

@REM goto :loop

pause