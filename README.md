MyBB - HTML5 Doctype Support
============================

This is a small plugin to support HTML5 Doctype for MyBB


What it does?
============================

What it does is pretty simple to change your doctype from:    
```
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
```   
to:    
```
<!DOCTYPE html>
```

And change the HTML tag from:    
```
<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">
```   
to:   
```
<html>
```


Can't I do that myself?
============================

Actually you can, but not in the templates, cause this is some of the core functions in MyBB 1.6.x.
This plugin does it using hooks, which doesn't change any of the core codes for MyBB.

If you wish to do it yourself you can follow [this guide](http://community.mybb.com/post-1058695.html).

[![advertisement](https://ads.servead.net/i/30bc5d70-d4b2-4620-bad9-fef27a7a2bb1.svg)](https://ads.servead.net/c/30bc5d70-d4b2-4620-bad9-fef27a7a2bb1)
