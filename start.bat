@echo off
setlocal
title Rekenen en Wiskunde - lokale applicatie
cd /d "%~dp0"

where php >nul 2>&1
if errorlevel 1 (
    echo PHP is niet gevonden. Installeer PHP en voeg het toe aan je PATH.
    goto :error
)
where npm.cmd >nul 2>&1
if errorlevel 1 (
    echo Node.js / npm is niet gevonden. Installeer Node.js en probeer opnieuw.
    goto :error
)
if not exist "vendor\autoload.php" (
    echo De PHP-afhankelijkheden ontbreken. Voer eerst composer install uit.
    goto :error
)
if not exist ".env" (
    echo Het bestand .env ontbreekt. Volg eerst de installatie in README.md.
    goto :error
)
if not exist "node_modules\vite\bin\vite.js" (
    echo De frontend-afhankelijkheden ontbreken. Voer eerst npm install uit.
    goto :error
)

echo De vormgeving en scripts worden klaargemaakt...
call npm.cmd run build
if errorlevel 1 goto :error

rem Gebruik de gebouwde bestanden, ook na een eerdere Vite-ontwikkelsessie.
if exist "public\hot" del "public\hot"
if exist "public\hot" (
    echo Het bestand public\hot kon niet worden verwijderd.
    goto :error
)

rem Controleer of de poort echt beschikbaar is, ongeacht welke app erop draait.
set "APP_PORT="
for /f "delims=" %%P in ('powershell.exe -NoProfile -Command "for ($candidate = 8000; $candidate -le 8099; $candidate++) { $listener = [System.Net.Sockets.TcpListener]::new([System.Net.IPAddress]::Loopback, $candidate); try { $listener.ExclusiveAddressUse = $true; $listener.Start(); Write-Output $candidate; break } catch {} finally { $listener.Stop() } }"') do set "APP_PORT=%%P"
if not defined APP_PORT (
    echo Er is geen vrije poort gevonden tussen 8000 en 8099.
    goto :error
)
set "APP_LOCAL_URL=http://127.0.0.1:%APP_PORT%"

echo.
echo De applicatie start op %APP_LOCAL_URL%
echo Je browser opent automatisch zodra de server bereikbaar is.
echo Laat dit venster open tijdens het gebruik. Sluit het om te stoppen.
echo.
start "" /b powershell.exe -NoProfile -Command "$ProgressPreference = 'SilentlyContinue'; for ($attempt = 0; $attempt -lt 30; $attempt++) { try { $response = Invoke-WebRequest -Uri '%APP_LOCAL_URL%' -UseBasicParsing -TimeoutSec 1; if ($response.StatusCode -eq 200) { Start-Process '%APP_LOCAL_URL%'; exit } } catch {}; Start-Sleep -Seconds 1 }"
php artisan serve --host=127.0.0.1 --port=%APP_PORT% --tries=1
if errorlevel 1 goto :error
exit /b 0

:error
echo.
echo De applicatie kon niet worden gestart. Bekijk de melding hierboven.
pause
exit /b 1
