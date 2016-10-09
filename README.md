# grunt-wp-boilerplate

> Create a WordPress plugin with grunt-init based on the [WordPress Plugin Boilerplate](https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate)

[grunt-init]: http://gruntjs.com/project-scaffolding

## Installation
If you haven't already done so, install grunt-init:

```
npm install -g grunt-init
```

Once grunt-init is installed, place this template in your `~/.grunt-init/` directory. It's recommended that you use git to clone this template into that directory, as follows:

### Linux/Mac Users

```
git clone https://github.com/alvaromartinezmajado/grunt-wp-boilerplate.git ~/.grunt-init/wp-boilerplate
```

### Windows Users

```
git clone https://github.com/alvaromartinezmajado/grunt-wp-boilerplate.git %USERPROFILE%/.grunt-init/wp-boilerplate
```
(Not tested, but should work)

## Usage

1. At the command-line, create a new directory in wp-content/plugins
2. cd into an empty directory
3. run the following command and follow the prompts

```
grunt-init wp-boilerplate
```
_Note that this template will generate files in the current directory, so be sure to change to a new directory first if you don't want to overwrite existing files._

## Screenshots

![Example Command Line](https://raw.github.com/fooplugins/grunt-wp-boilerplate/master/example-command-line.png "Example Command Line")

![Output Folder Structure](https://raw.github.com/fooplugins/grunt-wp-boilerplate/master/output-folder-structure.png "Output Folder Structure")

![Output Plugin In WP](https://raw.github.com/fooplugins/grunt-wp-boilerplate/master/output-plugin-screen.png "Output Plugin In WP")

## Credit

Original credits from [grunt-wp-plugin](https://github.com/10up/grunt-wp-plugin) were: "Most of this is copied from [grunt-wp-plugin](https://github.com/10up/grunt-wp-plugin) by 10up, so thanks to them!"

Forked from [fooplugins/grunt-wp-boilerplate](https://github.com/fooplugins/grunt-wp-boilerplate) by [@alvaromartinezmajado](http://github.com/alvaromartinezmajado) to update included [Devin Vinson's WordPress Plugin Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate) to latest version ([923fbaf](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate/commits/master), Dec 11, 2015), to add some sanitization, to allow customization of copyright year and to add this note in the credits.