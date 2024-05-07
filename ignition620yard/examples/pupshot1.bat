
:: take screenshots of public dashboards to display on tv screens
:: David Gleba 2019-01-29

c:
cd \crib\puppeteermb


REM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

node c:\crib\puppeteermb\triprod-pupshot.js

REM Add file timestamp to picture
set fdir=//csd-server/Strat Common/CI/Common/DigitalSignage/pages/
set file=trilobe-prod.jpg
echo "%fdir%nots_%file%"
for %%a in ("%fdir%nots_%file%") do set FileDate=%%~ta
echo %FileDate%
magick convert "%fdir%nots_%file%"  -pointsize 11  -gravity north -annotate +0+30 "%FileDate%" "%fdir%%file%"
      

      
      
REM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


node c:\crib\puppeteermb\triscrap-pupshot.js

set fdir=//csd-server/Strat Common/CI/Common/DigitalSignage/pages/
set file=trilobe-scrap.jpg
echo "%fdir%nots_%file%"
for %%a in ("%fdir%nots_%file%") do set FileDate=%%~ta
echo %FileDate%
magick convert "%fdir%nots_%file%"  -pointsize 11  -gravity north -annotate +0+30 "%FileDate%" "%fdir%%file%"


REM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


node c:\crib\puppeteermb\tri-cd-hour-pupshot.js

REM Add file timestamp to picture
set fdir=//csd-server/Strat Common/CI/Common/DigitalSignage/pages/
set file=trilobe-cd-hourly.jpg
echo "%fdir%nots_%file%"
for %%a in ("%fdir%nots_%file%") do set FileDate=%%~ta
echo %FileDate%
magick convert "%fdir%nots_%file%"  -pointsize 11  -gravity north -annotate +0+40 "%FileDate%" "%fdir%%file%"



REM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


node c:\crib\puppeteermb\tri-cn-hour-pupshot.js

REM Add file timestamp to picture
set fdir=//csd-server/Strat Common/CI/Common/DigitalSignage/pages/
set file=trilobe-cn-hourly.jpg
echo "%fdir%nots_%file%"
for %%a in ("%fdir%nots_%file%") do set FileDate=%%~ta
echo %FileDate%
magick convert "%fdir%nots_%file%"  -pointsize 11  -gravity north -annotate +0+40 "%FileDate%" "%fdir%%file%"

REM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


node c:\crib\puppeteermb\10r-n-hour-pupshot.js

REM Add file timestamp to picture
set fdir=//csd-server/Strat Common/CI/Common/DigitalSignage/pages/
set file=10R-n-hourly.jpg
echo "%fdir%nots_%file%"
for %%a in ("%fdir%nots_%file%") do set FileDate=%%~ta
echo %FileDate%
magick convert "%fdir%nots_%file%"  -pointsize 11  -gravity north -annotate +0+40 "%FileDate%" "%fdir%%file%"


REM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

node c:\crib\puppeteermb\10r-d-hour-pupshot.js

REM Add file timestamp to picture
set fdir=//csd-server/Strat Common/CI/Common/DigitalSignage/pages/
set file=10R-d-hourly.jpg
echo "%fdir%nots_%file%"
for %%a in ("%fdir%nots_%file%") do set FileDate=%%~ta
echo %FileDate%
magick convert "%fdir%nots_%file%"  -pointsize 11  -gravity north -annotate +0+40 "%FileDate%" "%fdir%%file%"

REM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


node c:\crib\puppeteermb\10r-a-hour-pupshot.js

REM Add file timestamp to picture
set fdir=//csd-server/Strat Common/CI/Common/DigitalSignage/pages/
set file=10R-a-hourly.jpg
echo "%fdir%nots_%file%"
for %%a in ("%fdir%nots_%file%") do set FileDate=%%~ta
echo %FileDate%
magick convert "%fdir%nots_%file%"  -pointsize 11  -gravity north -annotate +0+40 "%FileDate%" "%fdir%%file%"

REM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~




REM ===================================================
REM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Rem end of file
timeout 23
REM ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

