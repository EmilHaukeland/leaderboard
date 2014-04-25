Leaderboard
===========
Delivers a basic leaderboard which can be utilized for storing highscores in games etc.

You may use the already live site for free(1) at leaderboard.itoken.no (not quite yet though..)

1) Note about free usage:
Whilst I will do what I can to keep the site online, no one is eligible for any damages, data loss or service outage.
Also: If your load on the service impedes the usage for others, you may be throttled or deactivated.

REQUIREMENTS
------------
1. PHP 5.1
2. Database (testet with MySQL5)
3. Create database "leaderboard" or something else

INSTALLATION
------------
1. Clone git repos
2. composer install
3. Perform config changes for database if necessary
4. ./yiic migrate (answer yes)
5. Create a facebook app
6. Add application id and secret to config/main.php