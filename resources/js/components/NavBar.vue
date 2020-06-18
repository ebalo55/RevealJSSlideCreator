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
    <nav class="top-nav">
        <ul>
            <li>
                <a :href="urls[0].href">
                    <img :src="urls[0].path" alt="Logo">
                </a>
            </li>
            <li v-for="item in urls" :class="URLsPositionCheck(item)">
                <a :href="item.href" v-html="item.name"></a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: "NavBar",
        props: {
            urls: {
                type: Array,
                required: true
            }
        },
        methods: {
            URLsPositionCheck: function(url) {
                return url?.col ? `col-start-${url.col}` : null;
            }
        }
    }
</script>
