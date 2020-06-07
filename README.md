# SunandanAdhikary.github.io
-My research group Website
-Usually static/html websites are hosted by git but this is a php/dynamic website so won't be accessed using [SunandanAdhikary.github.io](https://SunandanAdhikary.github.io).
## How to set up
#### 1. Install WAMP/XAMP/MAMP based on your OS i.e. Win/Linux/MAC
#### 2. Clone/pull this project insite www or htdocs folder of your  WAMP/XAMP/MAMP/LAMP installation directory
> whole website folder should be in www folder eg. *C:/wamp64/www/Hiprc_website/* and this will be your **website server root**.
#### 3. Start all services in WAMP/XAMP/MAMP/LAMP
> just run it, you can access it in your system tray (beside notifications/shutdown menu) in Win/Linux/MAC.
#### 4. Open your localhost on browser 
> just type [localhost](http://localhost/) in browser url placeholder. *Don't forget to add localhost to bypass proxy if you are behind a proxy network.*
#### 5. In your localhost page go to *add vhosts or add virtual hosts* option or in *httpd-vhosts.conf* file in apache folder(inside XAMP/LAMP) and add your project folder path with a *virtual Host Name Alias*. Apache serves the folder you want to access with mentioned alias name.
> -for example **in WAMP** if *C:/wamp64/www/Hiprc_website/* is your project folder and you want to add as virtualhost and *hiprc* be alias(vhost name) you want to access it with then add them in corresponding spaces in add [virtualhosts page](http://localhost/add_vhost.php?lang=english) (add virtual host option will be at left down corner of your localhost page I guess). 
- **in LAMP/XAMP** it should be accessible with [localhost/your_project_folder_name] if stylesheet is not linked when you open your webpage then you need to add virtualhost alias manually i.e. in LAMP/XAMP insider apache/extra/ folder edit the **httpd-vhosts.conf** file and uncomment the section starting with 
`NameVirtualHost*:80`.You will have to add both *localhost* and your project vhost alias. After adding it should look like 
```
<VirtualHost *:80>
	ServerName hiprc
	DocumentRoot "f:/wamp64/www/hiprc_webpage_new"
	<Directory  "f:/wamp64/www/hiprc_webpage_new/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
```
**Edit it there, don't copy n paste**.
With this you can access the website just typing [hiprc](http://hiprc/) in your browser, just like [localhost](http://localhost/).
##### PS: If you are still unable to open the project properly search on internet how to add virtual host by name in corresponding server application.
#### 6. Restart all your services offered by WAMP/XAMP/MAMP and done.


