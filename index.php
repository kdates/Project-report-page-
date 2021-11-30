<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> CSI 3660 Project Report Webpage</title>
    <link rel="stylesheet" href="style.css" type="text/css">
	<style>
		.container {
		  max-width: 960px;
		  margin: 0 auto;
		  background: #f9f9f9;
		  font-size: 24px;
		  padding: 25px;
		}
		.navbar{
		  height: 130px;
		  width: 100%;
		  background: rgba(0,0,0,0.4);
		}
		.logo{
		  width: 140px;
		  height: 130px;
		  padding: 0px;
		}
		.navbar ul{
		  float: right;
		  margin-right: 20px;
		}
		/* Removes bulleted list format */
		.navbar ul li{
		  list-style: none;
		  margin: 0 8 px;
		  display: inline-block;
		  line-height: 80px;
		}
		.navbar ul li a{
		  text-decoration: none;
		  color: white;
		  font-size: 25px;
		  padding: 6px 13px;
		  font-family: Georgia, 'Times New Roman', Times, serif;
		}
		.navbar ul li a:hover{
		  background-color: #964b00;
		}
		/* .navbar  ul li a.active,
		.navbar  ul li a:hover{
		  background: #964b00;
		  border-radius: 2px;
		} */
		
		
		.parallax-0{
		  background: url('https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80') no-repeat center;
		  background-size: cover;
		  background-attachment: fixed;
		  height: 300px;
		}
		.parallax-1{
		  background: url('https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=1000&q=60') no-repeat center;
		  background-size: cover;
		  background-attachment: fixed;
		  height: 300px;
		}
		.parallax-2{
		  background: url('https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80') no-repeat center;
		  background-size: cover;
		  background-attachment: fixed;
		  height: 300px;
		}
	</style>
	
   
  </head>
  <body style="background-color: #87aa4c">
    <div class="container">
      <nav class=navbar>
      
        <img class="logo" src='https://i.imgur.com/UyWbw8A.png'>
        <ul>
          <li><a href="http://rhwebsite.com/">Visit Recipe Hub</a></li>
        </ul>
      </nav>
        <h2>Project Summary</h2>
         <p>The purpose of this project is to develop a file storage server for a web application titled "Recipehub" (see project overview section for more information).
          This file server routinely performs backups of large image files in order to accomodate for new versions of Recipehub (incase previous versions must be restored)
          and logs memory consumption as each iteration of this project grows substantially (backups of these files are only available for 30 days before they are removed).
          It is important to keep track of how much storage the project files consume- this information can be found after running log scripts found in the project directory located in /var/www/html.  
          The files for this project are backed up and hosted on Google Cloud Virtual Machine.</p> 
      <div class="parallax-0">

      </div>
      <h2>Background</h2>
          <p>Recipehub is super simple to use and free. As long as you have a working knowledge of web browsers and webpage navigation, 
            then this application is for you. No log in necessary. This application is only supported on desktop and requires an internet connection to access.

          </p>
      <div class="parallax-1">
    
    </div>
    <h2>Project Overview</h2>
        <p>This service is a recipe and food tracking application that enables users to access
          a variety of easy to use and helpful tools via the webpage.
          These tools include: 
            <li>A favorites page to create bookmarks that link to external recipe websites. These bookmarks are saveable and deletable.</li>  
            <li>A personal recipes page that allows users to create recipes and download the text files for them on to their personal computer.</li> 
            <li>A premade recipes page that enables users to search from over 40,000 different recipes (as well as access premade grocery lists and utilites).</li>
            <li>A grocery list page that allows users to make simple grocery lists as well as search for grocery stores near them.</li>
            <li>A meal tracker page that allows users to track meals throughout the day, week, or month.</li>

            <ul>To use this service simply click the "Visit Recipe Hub" link located at the top right of this page. 
 			</ul>
      </p>
    <div class="parallax-2">
    
    </div>
    <h2>Group Members</h2>
      <p>Web development and research for this project was conducted by fellow CSI 2999 group members: 
        <ul>
            <li>Scrum Master: Kamryn Dates (CSI 3660)</li>
            <li>Product Owner: Valeria Hernandez</li>
            <li>Development Team: Salena Youhana and Lauren Broski</li>
        </ul>
      </p>

      <!-- screenshots -->
      <h2>Screenshots</h2> 
      <img src="https://i.imgur.com/mjgZD4S.jpg" alt="Meal-tracker" width="400" height="300">
      <img src="https://i.imgur.com/OjG3VgO.jpg" alt="Favorites" width="400" height="300">
      <img src="https://i.imgur.com/nDH6tab.jpg" alt="Personal-recipes" width="400" height="300">
      <img src="https://i.imgur.com/YiEu9Ob.jpg" alt="Search-recipes" width="400" height="300">

      <h4>References</h4>
      <div class="references" style="background-color: #F5F5DC">
        <p>Backup tutorial: 
          https://iq.opengenus.org/automated-backup-in-linux-using-shell-scripting-and-crontab-scheduler/
          <br>
          <br>How to log memory consumption in linux: 
          https://iq.opengenus.org/automated-backup-in-linux-using-shell-scripting-and-crontab-scheduler/
          </br>
          <br>How to manage permissions: 
          https://www.redhat.com/sysadmin/manage-permissions
          </br>
          <br> Stock images for report page: 
          https://unsplash.com/s/photos/food
          </br>
          <br>Set up webhosting with Google Cloud VM using Apache:
          https://dev.to/brandonbrown4792/setting-up-a-simple-web-server-with-google-cloud-platform-mkb
          </br></p>
  </div>  
  
  </body>
</html>

