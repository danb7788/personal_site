@extends('layouts.main') 
@section('content')
<section class="text-center">
    <div class="container">
        <h1>Personal Projects</h1>
        <a target="_blank" href="https://github.com/danb7788/chart">
            <h3>18-month cash burn calculator</h3>
        </a>
        <p style="margin-top:1em">Simple, non-persistent, one-page chart with data inputs. <a target="_blank" href="https://danb7788.github.io/chart/">Demo here</a>.</p> 
        <a target="_blank" href="https://dwightapp.com">
            <h3>Dwight</h3>
        </a>
        <p style="margin-top:1em">Code is proprietary, but feel free to explore the product. Built with Laravel and Vue.js</p> 
        <a target="_blank" href="https://github.com/danb7788/personal_site">
            <h3>This website</h3>
        </a>
        <p style="margin-top:1em">Built with Laravel and Bootstrap 4. Feel free to explore it!</p>
        <a target="_blank" href="https://skeletons2d.com/">
            <h3>Skeletons 2D</h3>
        </a>
        <p style="margin-top:1em">A hand-drawn 2D platformer build with Phaser. <a target="_blank" href="https://skeletons2d.com/">Here's the demo!</a> (It only works on a computer.)</p>
        <a target="_blank" href="https://nasauniverse.com/">
            <h3>NASA Universe</h3>
        </a>
        <p style="margin-top:1em">Some web renderings of different NASA APIs, including the Asteroid Watch one!</p>
    </div>
</section>
@stop