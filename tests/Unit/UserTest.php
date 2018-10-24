<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{


    public function testExample()
    {

        $user = User::inRandomOrder()->first();
        $this->assertInternalType('int',$user->id);

    }

    public function testInstance()
    {

        $user = User::inRandomOrder()->first();
        $this->assertInstanceOf('App\User',$user);
    }



        public function testAttribute()
    {

        $this->assertClassHasAttribute('fillable','App\User');


    }




}

