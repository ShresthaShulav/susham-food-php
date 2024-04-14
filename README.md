# Susham Foods

To run the project, first you need to install Xampp.

Go to [this link](https://www.apachefriends.org/download.html), download and install the relevant version of the Xampp.

Go to the directory where Xampp is installed (eg. D:/Xampp). Navigate to `xampp/htdocs` and clone the repository there.

Then, open the Xampp control panel and start Apache and MySQL.

Now go to the web browser and open: http://localhost/phpmyadmin/

There, create a database named `ecommerceweb`.

Go to the `Import` tab. Import `ecommerceweb_1.sql` from `./DATABASE FILE`.

Now, to build the tailwindcss, run this command from the project directory:
`./tailwindcss -i ./assets/css/input.css -o ./assets/css/output.css`

Finally, go to `localhost/susham-food-php` to use the website. 