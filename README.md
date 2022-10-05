# Official SP-Healthcare Website

The website is built using the [Kirby CMS](https://getkirby.com/), [Bootstrap 3](https://getbootstrap.com/docs/3.4/), and jQuery. 

To build and bundle its CSS and JavaScript assets, the site uses [Vite](https://vitejs.dev/) and SCSS.

## Development Setup

To simplify the development process, the project uses NodeJS and a package.json file. It includes all relevant scripts. 

To get started with development, you need to have Node installed. Then, simply run `npm install` to install Vite and SCSS. 

**Important:** For the logged-in area as well as the contact form to work, you need to have the secrets.php file in _./site/controllers/_.
Checkout the secrets.example.php file to see the format of the secrets.php file.

## CSS & JavaScript Assets

Run `npm assets:build` to build and bundle all CSS and JavaScript files.

**You need to do this step every time you change something about the CSS or JavaScript!**

## Development Server

To run the Kirby development server locally, simply run `npm run serve`.

## Deployment

To deploy simply upload the entire project folder via FTP to the server.

## Upgrading Kirby

To upgrade Kirby to a newer version simply replace the _kirby_ folder with the newer version folder.

## Using Kirby plugins

The project currently doesn't use any plugins. But in case plugins are needed later:

Install composer to manage plugins locally. On Mac with Homebrew installed, simply run `brew install composer`.
