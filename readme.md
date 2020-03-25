# GP Mega Menu

A plugin to integrate a mega menu as per the info on the GeneratePress website

## Getting Started

Ensure you have GeneratePress installed and know how to create menus within the WordPress environment.
You may also need to enable the CSS Class option in the menu

### Prerequisites

What things you need to install the plugin

```
[GeneratePress Theme](https://wordpress.org/themes/generatepress/)
```

### Installing

A step by step series of examples that tell you how to download and install to your site

* Click on green Clone or download buttn
* Choose Download Zip and download to your computer
* Go into plugins on your websiite and click add new
* Click on Upload Plugin and choose the downloaded zip file
* Activate GP Megamenu from your Plugins page

Alternatively

* Click on green Clone or download buttn
* Choose Download Zip and download to your computer
* Unzip the file on your computer
* Copy the extracted folder to your '/wp-content/plugins/' directory using your favourite method (ftp, sftp,scp, etc...)
* Activate GP Megamenu from your Plugins page

## Using the plugin

Out of the box this will work with GeneratePress' primary menu
For best results, keep the navigation located below the header by going to Customiser > Layout > Primary Navigation > Navigation Location > Below Header
By default it will add mega menu to all parent navigation items with four columns
To disable mega menu on a menu item, add the class 'no-mega-menu' to your item
To change the amount of columns you can add another column class

### Available Classes
* **no-mega-menu** - Disables Mega Menu for menu item
* **mega-menu-col-2** - Two columns
* **mega-menu-col-3** - Three Colums
* **mega-menu-col-4** - Four Columns
* **mega-menu-col-5** - Five Columns

### Cannot Add Classes
* Click on Screen Options arrow in top right hand corner of the menu screen to expand the drop down header menu
* Check the CSS Classes checkbox under Show advanced properties
* Now when editing a menu item you should see a CSS Classes text box to add custom classes


## Reference

* [GeneratePress Mega Menu](https://docs.generatepress.com/article/building-simple-mega-menu/) - The css used
* [Adding Menu Classes](https://docs.generatepress.com/article/using-the-wordpress-menu-builder/#custom-classes)

## Authors

* **Tom Usborne** - *Initial CSS* - [GeneratePress](https://generatepress.com/)
* **Jon Mather** - *Plugin Creation* - [GeneratePress](https://westcoastdigital.com.au/)


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Tom Usborne for the amazing GeneratePress theme
