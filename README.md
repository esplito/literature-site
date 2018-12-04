# literature-site

## About
Group project for the course Information Systems B: E-services and Web Programming at Uppsala University. The purpose of this assignment was to document and develop a prototype for an e-service, based on the following criteria:

- The e-service should be able to connect people
- You should be able to register and login
	- Users should be able to have different levels of authority (admin, moderator, reader etc.)
- You should be able to search and filter content on the site
- The owners/admins of the e-service should be able to delete/review content

Our group consisted of four people, all with different levels of experience within web development. Our idea was to create a venue for honest discussion about course litterature. A website were students can discuss course litterature and read/write reviews. We took inspiration from sites like goodreads.com and IMDB. 


A design proposal was done in Sketch by esplito (Emil Esplund), before we proceeded with the coding of the website.
We planned to use BEM to structure the CSS: http://getbem.com/naming/
The site is built with HTML, CSS, JavaScript, php and SQL.

##Screenshots

**Home Page**
![Home Page](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/start_page.png)

**Search Result Page**
![Search Result Page](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/search_result_page.PNG)

**Book Page - not logged in**
![Book Page - not logged in](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/book_page.PNG)

**Register Form Overlay**
![Register Form Overlay](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/register_view.png)

**Login Form Overlay**
![Login Form Overlay](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/login_view.png)

**Book Page - logged in**
![Book Page - logged in](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/book_page_loggedin.PNG)

**Add Book Review - logged in**
![Add Book Review - logged in](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/add_review_book.PNG)

**Discuss Book Overlay - logged in**
![Discuss Book Overlay - logged in](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/discuss_view.PNG)

**Profile Page**
![Profile Page](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/profile_page.PNG)

**Add Book Overlay**
![Add Book Overlay](https://raw.githubusercontent.com/esplito/literature-site/master/screenshots/add_book.PNG)

##Other stuff
**Desired page structure**
*(this was written down before we started coding)*
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
		
