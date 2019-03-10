# Styletools

## What is the Styletools ?

Styletools is a little framework I developped for my personnal needs.

This frameworks contains :
* prefabricated stylesheets (including responsive)
* MVC architecture (including routers and .htaccess file)
* HTML template
* webmanifest for progressive web app
* a demo

Originally, I outsourced CSS code of all my projects in one file.

## How does it works ?

### Front developpers (HTML/CSS)

* Copy "dist" and "templates" directories. Dist contains minified CSS and JavaScript, and Templates contains a HTML template.
* Paste these directories on your project directory.
* Complete meta tags on template.html file.
* And you can develop your application on this file

### Back developpers (PHP)

* You will include your project on the Styletools directory. First, you can rename Styletools directory by your project's name.
* You will work on "src" directory. On the "app", you've got the MVC architecture. Controllers directory contains your controllers, Models directory contains your models (database connexion is include), and the Views directory contains your HTML files. A layout is include.
* Libs directory contains routers, but you can add your project's core.
* On the Web directory, you can add your css and js files and your images.
* The index.php file on the root is the main router. In this file, you'll add your routes.

** Important ** :  Styletools stylesheets must be placed first, before all your css files. It's the same for the javascripts files.
