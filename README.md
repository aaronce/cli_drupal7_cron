cli_drupal7_cron
================

A single file to aid in running the cron maintenance tasks via CLI in a unix environment.

Note: as always test in a dev environment before deployment...

Instructions
================

1. Configure a cron task in linux (via crontab, or cpanel..) using a command like this: 
"php -q /home/user_dir/public_html/ext_cron.php"

2. change the path variable in ext_cron.php to match the above command.

3. Wait for cron to run, and check the status log in drupal 7 to see if the cron was run successfully.

4. if not, configure the cron command to send an email or save the output to begin debugging.

