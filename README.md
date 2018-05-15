# literature-site
Web project at Uppsala University.

We are planning to use BEM to structure the CSS: http://getbem.com/naming/

Page structure
- index.php (Starting page. Search/Filter function and showcase of reviewed books)
	- assets (folder)
		- images (folder)
			- example.jpg 
		- styles (folder)
			- base (folder)
				- _global.css
				- etc.
			- modules (folder)
				- _header.css
				- _wrapper.css
				- etc.
			- styles.css (main css file)
		- scripts (folder)
			- script.js
	- pages (folder)
		- profile-page.php
		- book-page.php 
	- views (folder)
		- inbox.php
		- message.php
		
![Home Page](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/start_page.png)