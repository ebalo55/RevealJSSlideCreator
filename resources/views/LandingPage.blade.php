{{--
  -   Reveal JS Slide Creator
  -   Copyright (C) 2020  ebalo <webdev.ebalo@gmail.com>
  -
  -   This program is free software: you can redistribute it and/or modify
  -   it under the terms of the GNU General Public License as published by
  -   the Free Software Foundation, either version 3 of the License, or
  -   (at your option) any later version.
  -
  -   This program is distributed in the hope that it will be useful,
  -   but WITHOUT ANY WARRANTY; without even the implied warranty of
  -   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  -   GNU General Public License for more details.
  -
  -  You should have received a copy of the GNU General Public License
  -   along with this program.  If not, see <https://www.gnu.org/licenses/>.
--}}

@extends('layouts.app')

@section('title')
    {{ env("APP_NAME") }}
@endsection

@section('content')
    <nav-bar :urls="{{ generateNavigationLink() }}"></nav-bar>
    <banner pic-path="{{ asset("storage/banner/slides.jpg") }}" caption-title="Create your awesome presentation">
        It's easy!<br>
        All you have to do is complete the registration!<br>
        No credit card needed and no ads displayed not now nor ever!
    </banner>
    <main>
        <section>
            <h2>What Slider Online is?</h2>
            <p>
                Slider Online is an open source project released under the GNU GENERAL PUBLIC LICENSE v3.<br>
                It's goal is to provide a free and easy to use way to create animated slideshow online with the usage of the
                <a href="https://revealjs.com/#/" target="_blank">Reveal.js</a> library.
            </p>
        </section>
        <section>
            <h2>How is it built?</h2>
            <p>
                The core of the project is the <a href="https://laravel.com/" target="_blank">Laravel framework</a> which it is based on.
                It is used to provide all the back-end functionalities.<br>
                The front-end of the project is based on the <a href="https://vuejs.org/" target="_blank">Vue.js</a>
                framework while for the creation of the slideshow we use all the power of the <a href="https://revealjs.com/#/" target="_blank">Reveal.js</a> library.
            </p>
        </section>
        <section>
            <h2>How to get started?</h2>
            <p>
                Getting started is as simple as conclude the registration process, we need only a name or username and your email!
            </p>
        </section>
        <section>
            <h2>How does it work?</h2>
            <p>
                The application is really simple, once you have an account and have confirmed your email address you can access to the dashboard.<br>
                There you will be able to create all the presentations you want without space limit nor any expense!<br>
                The only limit we impose are on pictures sizes you can't upload picture larger than 10Mb we hope this limit won't affect your creativity.<br><br>

                You will be provided with a <abbr title="What You See Is What You Get">WYSIWYG</abbr> editor that will guide and help you in the creation of your
                slides
            </p>
        </section>
        <section>
            <h2>Will the pictures I upload be public?</h2>
            <p>
                Your picture won't be ever public unless your slides are public too.
            </p>
        </section>
    </main>
    <v-footer :urls="{{ generateNavigationLink() }}"></v-footer>
@endsection
