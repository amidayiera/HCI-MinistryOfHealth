For the Script to work python 3.8 should be installed and all the libraries installed in the python interpreter.

Once all is setup the laravel server can be started(php artisan serve) and then the script can be run using python scrapper.py

The script will scrape news information in two websites and return the necessary data i.e the news headline,the news link(which in this case is an external link and the image src link

It will then pass the data to the api(which we intergrated with the main project for ease and then send the data to the database

From the database the data is then added to the carousel

Note the script run "forever" until you stop it though ctrl^C and it makes a request to the various websites after three hours
which basically refreshes the database with latest news(if any) every 3 hours

 Hope this helps. if you have any concern please feel free to ask me for clarification
