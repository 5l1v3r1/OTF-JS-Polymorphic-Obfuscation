# OTF Javascript Polymorphic Obfuscation
On-the-fly Javascript obfuscation of served web pages.

This piece works by utilizing PHP's ob_* function set to prossess the served page (HTML/JS/etc) into a block of obfuscated JS. The current obfuscation technique used is pretty simple. It creates a random string and keys the ASCII value of each charictor in the page against the string. You can alter and change this to be a bit more complex with a bit of ease. But as is this is a POC and if anyone uses this for anything of importance I would sugest changing the encryption method up a bit first before production.

Also always keep in mind, security threw obscurity is never a good idea and be careful of that mindset.

creds to Yani for the base
