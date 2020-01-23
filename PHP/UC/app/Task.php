<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** string $foo */
    protected $foo;

    public function __construct() {
        $this->foo = 'Haris';
    }

    public function getBar(): string
    {
        return $this->foo;
    }
}
