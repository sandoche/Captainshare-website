# Captainshare

* The sharing economy curated directory
* https://captainshare.learn.uno

## Dev
```
php -S localhost:9000 system/router.php
```

## Build static
```
# Run first dev then this command
php bin/plugin blackhole generate http://localhost:9000 --output-url https://captainshare.learn.uno --output-path docs
# then copy the "folder" into "docs/user/themes"
```
