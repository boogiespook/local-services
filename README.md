# local-services

## Overview
During these strange times, I thought it would be useful to have a place where local communities can share information about businesses which are going above and beyond their usual services to help out others.  

In true Open Source style, please feel free to use this code to create your own instance to help vulnerable and other people within your community.

I have purposely kept it simple - just an easy index page with a gallery of links.

## Pre-requisites
* A webserver & public facing domain
* A Google API (if you want to use the Google Maps functionality)
* A spare email address where people can send you suggestions
* Some pictures.  Take a nice picture of your locality and use it as the header image.  I've included some pictures but these are specifically for my local site

## Usage
Minimal technical skill are required, just a working knowledge of PHP as the variables are pulled in from an ini file 'cus I'm lazy!.  Just update vars.ini to suit your environment.

The index.php page gives and example but you can use template.php as a blank canvas.

For you Linux users out there (hopefully the majority of you!) just grep for "XXXXX" in the code to find out which areas need to be customised.

For the Google Map locations, I use https://developers.google.com/maps/documentation/embed/start to get the place_id.  Nice and easy!

Please feel free to use, edit and distribute this site to help other communities.  Any pull requests for change would be appreciated along with any feedback.

## Example site
Here is the site I created for my local town: http://chrisj.co.uk/carshalton/

## Credits
To get this site up and running as quickly as possible, I used a fair bit of open source 'stuff'! This includes:
* https://unsplash.com/ for pictures
* https://templatemo.com/ for CSS and HTML

## Final Note
Stay safe, stay happy and help your families, neighbours and wider community.  If we work together through this difficult time it will make our daily lives a lot more bearable.

### KEEP CALM AND OPEN SOURCE
