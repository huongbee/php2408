attrib -r %WINDIR%\system32\drivers\etc\hosts
@ECHO OFF
IF "%OS%"=="Windows_NT" (
SET HOSTFILE=%windir%\system32\drivers\etc\hosts
) ELSE (
SET HOSTFILE=%windir%\hosts
)
ECHO 127.0.0.1 www.techsmith.com>> %HOSTFILE%
ECHO 127.0.0.1 activation.cloud.techsmith.com>> %HOSTFILE%
ECHO 127.0.0.1 oscount.techsmith.com>> %HOSTFILE%
ECHO 127.0.0.1 updater.techsmith.com>> %HOSTFILE%
ECHO 127.0.0.1 camtasiatudi.techsmith.com>> %HOSTFILE%
ECHO 127.0.0.1 tsccloud.cloudapp.net>> %HOSTFILE%
ECHO 127.0.0.1 assets.cloud.techsmith.com>> %HOSTFILE%
attrib +r %WINDIR%\system32\drivers\etc\hosts
IPCONFIG -flushdns
CLS
ECHO all sites have been added to your hosts file
ECHO.
ECHO Provided by: SadeemPC.com
ECHO.
PAUSE