WordPress Init
==============

Bash script to launch a full WordPress boilerplate install and theme ready for dev.
The other stuff in the repo is stuff I like to add to _s

I am sure a whole lot of this could be done much more efficiently, but I am learning as I am going. And, most importantly, it works (for me in my bubble)!


TODO
----

- need salts in wp-config -> better initial config generally
- some stupid readme.html file in root
- use <a href="https://github.com/Team-Sass/modular-scale">Modular Scale</a>?
- replace my break() mixin with <a href="http://breakpoint-sass.com/">breakpoint</a>
- this should be split up into different scripts
	-
- add local remote differentiation stuff
	- local
		- enque pretty js & css
		- acf from database
	- remote
		- enque minified etc.
		- acf export
- Start using Vagrant (like a real developer...)
- add image optimization to theme files
- enque main.js
- acf & Grunt? - https://npmjs.org/package/grunt-acf
	- need to get WP cedintials out of config file & out of Repo

Local Dependencies
------------------

- GIT
- WP-CLI
- MAMP (servers running, MAMP and WP-CLI are a pain to get to play nice)
- Grunt
- Sass
- Compass (for Susy)