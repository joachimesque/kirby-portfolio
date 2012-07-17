Kirby Portfolio
===============

This theme has been designed with photographers in mind. The structure is simple and the dark minimalistic appearance makes the photographs the main point of focus. This theme is fully responsive and can be seen on tablets and phones.

- Responsive design
- You can select which project is featured on the homepage
- Optional Slideshow for the desktop/large tablet view
- Thumbnails are auto-generated
- ...
- Perfect for photography portfolios!

**Demo** : [Kirby Portfolio](http://joachimesque.com/kirby-portfolio)

## What's Kirby?
[http://getkirby.com/](Kirby) is a flat file CMS developed by [Bastian Allgeier](http://bastianallgeier.com). It's really simple and flexible.

## How to install the theme
After downloading the theme just remove the default **assets**, **content** and **site** folder and replace it with the downloaded ones. Don't forget to tune the **config.php** file in the **site/config** folder. Lastly, make sure the **thumbs** folder is writable.

## How do I select the featured project?

Locate the home.txt file in your content/home folder. You will see a  __Featured__ variable. By default the variable is set to __random__. Here are the possible values:

- __random__ will select a random project in all the categories and display its first image.
- __none__ won't display any featured image.
- __file__ will display the first image in the content/home folder, no link will appear.
- or any URI. E.g. : __cat-1/project-1__ will display the first image of the project named "project-1" from category "cat-1".

## How do I set up the slideshow?

If you use the panel, there's a checkbox which will allow/disallow the display of the slideshow, and it is enabled by default on every new gallery. If you edit the text file, the variable is __Slideshow__. To enable the slideshow, the value must be __on__. To disable it, chnage to __off__.

Additional configuration can be set in the template file **site/snippets/galleryview_call.php**, have a look at the documentation on the (link: http://www.spaceforaname.com/galleryview/index.html text: GalleryView project page).

## Aknowledgements

Kirby Portfolio uses code and images from two projects :
- [GalleryView](https://github.com/jackwanders/GalleryView), by [Jack Anderson](http://www.spaceforaname.com/) ([license](https://github.com/jackwanders/GalleryView/blob/master/LICENSE.txt)), a solid jQuery slideshow.
- [jQuery navigation menu](https://github.com/JoePettersson/jQuery-powered-HTML5-navigation-menu) by [Joe Pettersson](http://www.joepettersson.com/) ([license](http://www.joepettersson.com/licensing/)), a very elegant jQuery & HTML5-powered dropdown menu.

Thank you!

## License
The Kirby Portfolio theme is distributed under a [Creative Commons Attribution 3.0](http://creativecommons.org/licenses/by/3.0/) license, you can use it for free. [Kirby](http://getkirby.com) is a commercial CMS for which a license is required, if you use this theme for a public release, don't forget to **[buy a license](http://getkirby.com/buy)** for Kirby!

## Contact

If you find any bug, or have questions about the inner workings of my theme you can contact me : <joachim.robert@gmail.com>.

If you have questions regarding Kirby, start by looking at [the documentation](http://getkirby.com/docs), then look at [the tutorials](http://getkirby.com/tutorials)... you should have all your answers. If not, there's a forum :)

If you like this theme enough to use/fork/pimp it, please consider supporting me on [flattr: joachim](https://flattr.com/profile/joachim).
