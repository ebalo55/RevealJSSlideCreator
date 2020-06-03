<!--
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
  -->

<template>
    <div class="footer-wrapper">
        <footer>
            <a :href="urls[0].href">
                <img :src="urls[0].complete_logo" alt="Logo">
            </a>
            <ul>
                <li v-for="item in urls">
                    <a :href="item.href">{{ item.name }}</a>
                </li>
                <li>
                    <a href="https://raw.githubusercontent.com/ebalo55/RevealJSSlideCreator/master/LICENSE" target="_blank">License</a>
                </li>
            </ul>
        </footer>
        <span class="creator">
            Made with <span class="fas fa-heart text-red-500"></span> by <a href="https://github.com/ebalo55" target="_blank">ebalo</a>
        </span>
    </div>
</template>

<script>
    export default {
        name: "VFooter",
        props: {
            urls: {
                type: Array,
                required: true,
            }
        }
    }
</script>
