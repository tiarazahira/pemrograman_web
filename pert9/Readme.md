OPEN POWERSHELL RUN ADMINISTRATOR
```php
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))
```
INSTALL CHOCO
```php
choco install mkcert
```

```php
cd C:\Users\djamb\Documents\>
mkdir ssl
cd ssl
mkcert -install
mkcert pemweb.test
```

ADD HOSTS IN WINDOWS
PS C:\Users\djamb\Documents\ssl> Add-Content -Path "C:\Windows\System32\drivers\etc\hosts" -Value "`n127.0.0.1 pemweb.test"
```php
Add-Content -Path "C:\Windows\System32\drivers\etc\hosts" -Value "`n127.0.0.1 pemweb.test"
```
TO REMOVE POINTING HOSTS WITH POWERSHELL (TIDAK DILAKUKAN)
```php
(Get-Content "$env:windir\System32\drivers\etc\hosts") | Where-Object { $_ -notmatch 'pemweb\.dev' } | Set-Content -Force "$env:windir\System32\drivers\etc\hosts"

```
ADD HOST IN WSL
```php
nano /etc/hosts
```
```php
127.0.0.1 pemweb.test
```
(UNTUK KELUAR DAN SIMPAN) CTRL + x Y enter

ADDED IN WSL
```php
nano /root/.zshrc
```
```php
alias dcm='docker exec -it $(docker ps --format "{{.Image}} {{.Names}}" | grep "_php:latest" | head -n 1 | awk "{print \$2}") art'
```
(UTK KELUAR DAN SIMPAN) CTRL + x Y enter

```php
source /root/.zshrc
```
