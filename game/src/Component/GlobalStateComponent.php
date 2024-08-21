<?php

namespace App\Component;

use GL\Math\Vec2;

class GlobalStateComponent
{
    /**
     * The current tick
     */
    public int $tick = 0;

    /**
     * Boolean to check if the game is paused
     */
    public bool $paused = true;

    /**
     * Boolean if the game is waiting to start
     */
    public bool $waitingForStart = true;

    /**
     * The current score
     * 
     * @var int
     */
    public int $score = 0;

    /**
     * The current highscore
     */
    public int $highScore = 0;

    /**
     * The name of the player sprite
     */
    public string $playerSprite = 'visuphpant3.png';

    /**
     * Are closing pipes always enabled
     */
    public bool $alwaysClosingPipes = false;
    
    /**
     * Closing pipes difficulty modifier (lower is harder)
     */
    public float $closingPipesDifficulty = 1.0;
}
