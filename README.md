# []
Copyright 2017 SDCO Partners

1. Getting Started 
  * Folder Structure
  * Starting with [INIT]
  * Initializing New Project
  * Editing Current Project
  * Deploying To Server
  * Updates
  * Feature Documentation
2. Dev Environment
  * Gulp config
  * SASS
  * Javascript 
  * Components & Subcomponents
  * Functions.PHP
3. Known Bugs 
4. Team


## Getting Started

### Folder Structer

```
|--/[INIT]/
|  |
|  |--/assets/
|  |
|  |--/components/
|  |
|  |--/prod/
|  |  └-- script.js
|  |  └-- styles.css
|  |
|  |--/src/
|  |  | 
|  |  |--/js/
|  |  |  └-- a.js
|  |  |
|  |  |--/sass/
|  |  |  └-- _mixins.sass
|  |  |  └-- _reset.sass
|  |  |  └-- _variables.sass
|  |  |  └-- styles.sass
|  |  | 
└-- 404.php
└-- config.php
└-- footer.php
└-- function.php
└-- header.php
└-- index.php
└-- sidebar.php
└-- README.txt
└-- style.css 
```

### Starting With [INIT]
1. CREATE NEW BLANK REPOSITORY
  * [x]  Create new blank repo. Do not initiate with a README file.
  * [x]  Clone repo to local environment 
2. CREATE A INIT REMOTE & PULL DOWN INIT FILES
  * [x]  Run `git remote add init` + INIT repo url
  * [x]  Run `git pull init master`
3. PULL DOWN WORDPRESS SUBMODULE FILES
  * [x]  Run `git submodule update --init`


### Initializing New Project
Follow these steps to configure your install to your specific project.

1. WP-CONFIG.PHP
  * [ ]  set var $local_path 
  * [ ]  set var $table_prefix  
2. LOCAL-CONFIG-EXAMPLE.PHP
  * [ ]  remove '-example' from end of filepath
  * [ ]  set DB_NAME 
  * [ ]  set DB_USER 
  * [ ]  set DB_PASSWORD
3. PACKAGE.JSON
  * [ ]  set 'name' 
  * [ ]  set 'description' 
  * [ ]  set 'url' for both 'repository' and 'bugs'
  * [ ]  set 'homepage' 
4. GULPFILE.JS
  * [ ]  set var uri in line 75
5. .GITIGNORE
  * [ ]  set filepath to inner CONFIG.PHP on line 75
6. THEME FILES & FOLDERS
  * [ ]  rename folder 'INIT' 
  * [ ]  set 'Theme Name' and 'Theme URI' in STYLE.CSS
  * [ ]  set var $GLOBALS['root'] and $GLOBALS['docpath'] in FUNCTIONS.PHP
  * [ ]  set @link and @package notes on all template files.
7. SET UP DUMMY DATABE
  * [ ]  create db and user
  * [ ]  import dummy wordpress db
8. INSTALL DEPENDENCIES 
  * [ ]  Run `npm install`


### Editing Current Project
Follow these steps to edit a current project. This will set up the repository and compile your JS and Sass files for your.

1. In Terminal ...
  * [ ]  Run `git clone` + your repo url
  * [ ]  Run `git submodule update --init`
  * [ ]  Run `npm install` 
  * [ ]  Run `gulp`
2. Get config files/folders from server
  * [ ]  Download `wp-config.php`
  * [ ]  Download `local-config.php`
  * [ ]  Download `config.php`
3. Setup Local Server DB 
  * [ ]  create db and user
5. Install Wordpress
  * [ ]  Follow prompts 
4. Use Migrate DB to fetch content from server
  * [ ]  Follow prompts 

### Deploying to Server
1. In Liquid Web ...
  * [x]  Create account for new site
2. Connect to Server
  * [x]  Upload folder `/wordpress/` to `/public_html/`
  * [x]  Upload folder `/content/` to `/public_html/`
  * [x]  Upload file `wp-config.php` to `/public_html/`
  * [x]  Upload file `local-config.php` to `/public_html/`
  * [x]  Upload file `index.php` to `/public_html/`
  * [ ]  Optional -> Upload file `README.md` to `/public_html/`
3. Adjust Database
  * [x]  Make a copy of the local site db 
  * [ ]  IF USING DATED MYSQL -> Convert to UTF8
  * [x]  Find and replace local path to server path
4. In cPanel ...
  * [x]  Create new db
  * [x]  Create new user 
  * [x]  Add user to db
  * [x]  Upload adjusted local site db to server db
5. Update config files
  * [x]  Update db credentials in `local-config.php`
  * [x]  Set var $local_path to new path in `wp-config.php`
  * [ ]  Turn off debugger in `wp-config.php`
If you choose not to follow these steps, you will be unable to keep the repository up-to-date, and you will have to deal with minified and uglified JS and CSS files. See notes under DEV ENVIRONMENT for more info.


### Updates
If updating SASS files ...
  * Compile files using GULP.
  * Replace the `styles.css` file on server with your compiled file.
If updating JS files ...
  * Compile files using GULP.
  * Replace the `scripts.js` file on server with your compiled file.
For All other files ...
  * Replace server file with your changed file.
  * Git commit and git push to server

### Feature Documentation


## Known Bugs


## Team 
  
  * PROJECT MANAGER   :   
  * UX/UI DESIGNER    :   
  * DEVELOPER         :   

