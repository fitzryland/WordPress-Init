WordPress Init
==============

Bash script to launch a full WordPress boilerplate install and theme ready for dev.
The other stuff in the repo is stuff I like to add to _s

I am sure a whole lot of this could be done much more efficiently, but I am learning as I am going. And, most importantly, it works (for me in my bubble)!


TODO
----

### Initialization
- paramitarize url so that everthing insalls correctly if installing in a subdirectory
- need salts in wp-config -> better initial config generally
- some stupid readme.html file in root
- use <a href="https://github.com/Team-Sass/modular-scale">Modular Scale</a>?
- Start using Vagrant (like a real developer...)
- add new sublime text project
	- open it
- add all of project to proj (bash script project launcher)
- add acf-export.php to inc directory
- _s files to remove
	- inc/customizer.php -> and reference from functions.php
- a new default screenshot.png

### Grunt
- add image optimization to theme files
- acf & Grunt? - https://npmjs.org/package/grunt-acf
	- need to get WP cedintials out of config file & out of Repo

### Configuration
- add local remote differentiation stuff
	- local
		- enque pretty js & css
		- acf from database
	- remote
		- enque minified etc.
		- acf export
- this should be split up into different scripts
- enque main.js

### Sass
- replace my break() mixin with <a href="http://breakpoint-sass.com/">breakpoint</a>
- add sass map functions -> color etc

Local Dependencies
------------------

- GIT
- WP-CLI
- MAMP (servers running, MAMP and WP-CLI are a pain to get to play nice)
- Grunt
- Sass 3.3
- Compass (for Susy.. or at least it used to be...)
