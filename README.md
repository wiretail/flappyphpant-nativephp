# flappyphpant-nativephp

### Testing flappyphpant (PHP-GLFW and the VISU framework) + NativePHP Electron

Smushed together with slight modification are: 

* https://github.com/phpgl/flappyphpant
* https://github.com/mario-deluna/php-glfw
* https://github.com/phpgl/visu
* https://nativephp.com (Laravel + Electron)

It's a demo OpenGL graphical game, written in PHP.

<p align="center">
   <img width="640" src="https://github.com/phpgl/flappyphpant/assets/956212/9d32a533-73cb-40e6-b940-7976b765d658" alt="FlappyPHPant 2D PHP Game">
</p>

This is minimal brute-force example to execute php-glfw and electron together.  And the entire Laravel stack to serve a static launch page, for good measure.

To run: run the installer in the latest release

To build:

```bash
git clone https://github.com/wiretail/flappyphpant-nativephp.git
cd flappyphpant-nativephp

composer install

php artisan native:install
# say yes to both questions

php artisan native:serve
# to run it locally again

php artisan native:build
# win-x64 only
# if you get an error popup, say ok, and it will probably build fine anyway
```

If it worked, the installer executable with be in ./dist/flappyphpant-nativephp-1.0.0-setup.exe  Run it to install the electron app -- it may be very slow.  (And it should still work even with an error/popup during the process.)

Note: When the app runs you'll get a demo warning from BoxedApp's Packer.  Click OK.  

This is because NativePHP expects a single "php.exe" file in php-bin's PHP zip, and will fail otherwise. Creating a real static build with GLFW included seems like a "fun" larger project, nor can nativephp/electron handle a zip with multiples files. So the PHP instance used here is a normal minimal many-file version that is then packed with trial version of Packer.  That is then copied over the /vendor/nativephp/php-bin/bin/win/x64/php-8.3.zip file as a post composer install/update command.

One could fork nativephp/php-bin to add the new zip/exe file, and either actually build it statically, or also fork nativephp/electron and update nativephp\electron\resources\js\php.js to handle multiple files in it's currently hardcoded unzip routine.

It's very much a hack though, so...that's how it works right now. And it'll crash if you minimize the game window.

