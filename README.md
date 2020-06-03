# Captainshare

* The sharing economy curated directory
* https://captain.share.learn.uno

## Dev
```
php -S localhost:9000 system/router.php
```

## Build static
```
# Run first dev then this command
php bin/plugin blackhole generate http://localhost:9000 --output-url https://captain.share.learn.uno --output-path docs -f
# then copy the "folder" into "docs/user/themes"
```
