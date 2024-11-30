:Prepare date and temp folders - http://serverfault.com/questions/147515/need-leading-zero-for-batch-script-using-time-variable
set timea=%TIME: =0%
set ymd=%date:~12,2%%date:~4,2%%date:~7,2%&set dhms=%date:~12,2%%date:~4,2%%date:~7,2%_%timea:~0,2%%timea:~3,2%%timea:~6,2%
c: & md c:\temp\log\"%dhms%"  & cd c:\temp\log\"%dhms%"

:main
rem ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ std2

mkdir c:\temp\rblogs

set sourc1=C:\n\Dropbox\csd\VCS-git\strap179b

set dest1=C:\P2\zwamp\vdrive\web\test\strap179b

: /l to list only...
robocopy %sourc1%  %dest1%  /l /e  /COPY:DT /xd testnobackup /fft /dst /xo /ndl /np /r:0 /w:9 /tee /log:"c:\temp\rblogs\st179b1t-%dhms%-%random%"
robocopy %dest1%  %sourc1%  /l /e  /COPY:DT /xd testnobackup /fft /dst /xo /ndl /np /r:0 /w:9 /tee /log:"c:\temp\rblogs\st179b2t-%dhms%-%random%"

@echo off
@echo .
@echo .
@echo .
@echo .
echo    if you press any key it will copy the files...
@echo .
@echo .
pause
pause

robocopy %sourc1%  %dest1%  /e  /COPY:DT /xd testnobackup /fft /dst /xo /ndl /np /r:0 /w:9 /tee /log:"c:\temp\rblogs\st179b1-%dhms%-%random%"

robocopy %dest1%  %sourc1%  /e  /COPY:DT /xd testnobackup /fft /dst /xo /ndl /np /r:0 /w:9 /tee /log:"c:\temp\rblogs\st179b2-%dhms%-%random%"


timeout 0

rem ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ std2





: offline items ---------------------------------------------------------
goto end
goto end
goto end

this is offline


: offline items ---------------------------------------------------------
:end
pause
