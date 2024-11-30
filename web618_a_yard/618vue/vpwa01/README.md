# Instructions.

_____________

22-01-05 22:06:42

```
# make folder first. It will keep user perms after volume mount
mkdir -p code
mkdir -p pwa02

 
dc build
 
dc run --rm  vv vue create pwa01

dc run --rm  vv bash -c "cd pwa01;yarn serve"
 
dc run --rm  vv bash -c "cd pwa01;vue add pwa"

dc run --rm  vv bash -c "cd pwa01;yarn build"


  
=================================================

# make folder first. It will keep user perms after volume mount
mkdir -p pwa02

dc run vv vue create .

git s
git ca vue-create

dc up

git s
git ca dc-up.yarn.serve


dc run --rm  vv bash -c "yarn build"

git s
git ca yarn.build


dc run --rm  vv yarn build

dc run --rm vv bash -c "vue add pwa"

git s
git ca pwa.add

dc run --rm  vv yarn build

git s




=================================================

test user settings:

dc run --rm vv bash -c "npm init"

=================================================


=================================================

albe@racknerd-4f4016:/ap/dkr/dkrcollection617/bmark616h-yard/vuemarks616/vpwa01$ git s
On branch master
Changes not staged for commit:
  (use "git add/rm <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   README.md
        modified:   pwa02/dist/index.html
        deleted:    pwa02/dist/js/app.23c5a6c5.js
        deleted:    pwa02/dist/js/app.23c5a6c5.js.map
        deleted:    pwa02/dist/js/chunk-vendors.7ea2ef8f.js
        deleted:    pwa02/dist/js/chunk-vendors.7ea2ef8f.js.map

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        pwa02/dist/img/icons/
        pwa02/dist/js/app.24908089.js
        pwa02/dist/js/app.24908089.js.map
        pwa02/dist/js/chunk-vendors.b1d76bae.js
        pwa02/dist/js/chunk-vendors.b1d76bae.js.map
        pwa02/dist/manifest.json
        pwa02/dist/precache-manifest.267cf31bca1c4f777f0b278fc05c50e6.js
        pwa02/dist/robots.txt
        pwa02/dist/service-worker.js

no changes added to commit (use "git add" and/or "git commit -a")
albe@racknerd-4f4016:/ap/dkr/dkrcollection617/bmark616h-yard/vuemarks616/vpwa01$

_____________


diff --git a/pwa02/dist/index.html b/pwa02/dist/index.html
index 23f6f54..6662811 100644
--- a/pwa02/dist/index.html
+++ b/pwa02/dist/index.html
@@ -1 +1 @@
-<!DOCTYPE html><html lang=""><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="icon" href="/favicon.ico"><title>pwa02</title><link href="/css/app.fb0c6e1c.css" rel="preload" as="style"><link href="/js/app.23c5a6c5.js" rel="preload" as="script"><link href="/js/chunk-vendors.7ea2ef8f.js" rel="preload" as="script"><link href="/css/app.fb0c6e1c.css" rel="stylesheet"></head><body><noscript><strong>We're sorry but pwa02 doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript><div id="app"></div><script src="/js/chunk-vendors.7ea2ef8f.js"></script><script src="/js/app.23c5a6c5.js"></script></body></html>
\ No newline at end of file
+<!DOCTYPE html><html lang=""><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><!--[if IE]><link rel="icon" href="/favicon.ico"><![endif]--><title>pwa02</title><link href="/css/app.fb0c6e1c.css" rel="preload" as="style"><link href="/js/app.24908089.js" rel="preload" as="script"><link href="/js/chunk-vendors.b1d76bae.js" rel="preload" as="script"><link href="/css/app.fb0c6e1c.css" rel="stylesheet"><link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png"><link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png"><link rel="manifest" href="/manifest.json"><meta name="theme-color" content="#4DBA87"><meta name="apple-mobile-web-app-capable" content="no"><meta name="apple-mobile-web-app-status-bar-style" content="default"><meta name="apple-mobile-web-app-title" content="pwa02"><link rel="apple-touch-icon" href="/img/icons/apple-touch-icon-152x152.png"><link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#4DBA87"><meta name="msapplication-TileImage" content="/img/icons/msapplication-icon-144x144.png"><meta name="msapplication-TileColor" content="#000000"></head><body><noscript><strong>We're sorry but pwa02 doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript><div id="app"></div><script src="/js/chunk-vendors.b1d76bae.js"></script><script src="/js/app.24908089.js"></script></body></html>

_____________




+<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!--[if IE]>
<link rel="icon" href="/favicon.ico">
<![endif]-->
<title>
pwa02</title>
<link href="/css/app.fb0c6e1c.css" rel="preload" as="style">
<link href="/js/app.24908089.js" rel="preload" as="script">
<link href="/js/chunk-vendors.b1d76bae.js" rel="preload" as="script">
<link href="/css/app.fb0c6e1c.css" rel="stylesheet">
<link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#4DBA87">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="pwa02">
<link rel="apple-touch-icon" href="/img/icons/apple-touch-icon-152x152.png">
<link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#4DBA87">
<meta name="msapplication-TileImage" content="/img/icons/msapplication-icon-144x144.png">
<meta name="msapplication-TileColor" content="#000000">
</head>
<body>
<noscript>
<strong>
We're sorry but pwa02 doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
</noscript>
<div id="app">
</div>
<script src="/js/chunk-vendors.b1d76bae.js">
</script>
<script src="/js/app.24908089.js">
</script>
</body>
</html>

