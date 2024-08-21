<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()
    {
    return view('welcome');
    });

Route::get('/play', function ()
    {
    /**
     *---------------------------------------------------------------
     * Initialize Game
     *---------------------------------------------------------------
     *
     * Starts GLFW, load the game entry point and start the game loop.
     *
     * Copied from ./game/bin/play
     *
     */

    if (!defined('DS'))
        {
        define('DS', DIRECTORY_SEPARATOR);
        }
    $container = require __DIR__ . DS . '..' . DS . 'game' . DS . 'bootstrap.php';

    glfwInit();

// load & start the game
    $game = $container->get('game');
    $game->start();

// clean up glfw
    glfwTerminate();

//show the thanks page
    return view('done');
    });
