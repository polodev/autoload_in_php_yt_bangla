# autoloading in php using composer    

composer is a dependency manager for php. Beside this, composer can be used to autoload php. In this video, I have shown how can we dump a autoload file using composer. Which actually saves a lot of times and efforts. we followed psr2 coding style     

### How to autoload classes     
in composer.json file 

~~~json
"autoload": {
  "classmap": ["fruits", "flowers"]
}
~~~

if we want to autoload every class of our project just pass root(`./`) as element of classmap array

~~~json
"autoload": {
  "classmap": ["./"]
}
~~~

### How to autoload files
in composer.json file 

~~~json
"autoload": {
  "files": ["db.php"],
}
~~~

### `dump-autoload` or `dumpautoload` command     

for dumping autoload file, cd into our project folder and type `dumpautoload` or `dump-autoload` command. Which will generate autoload folder for us.    


My name in shibu deb polo     
Thanks for watching    
Please subscribe my channel      
Take care     







