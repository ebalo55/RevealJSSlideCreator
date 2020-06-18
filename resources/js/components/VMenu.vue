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
    <menu :class="menu_class">
        <div v-for="(item, index) of items" class="menu-item"
            :key="index">
            <a :href="itemCheck(item, 'url', 'altUrl')">
                <span :class="itemCheck(item, 'icon', 'altIcon')"></span>
                <span class="text">{{ itemCheck(item, 'name', 'altName') }}</span>
            </a>
            <hr v-if="index < items.length -1">
        </div>
    </menu>
</template>

<script>
    export default {
        name: "VMenu",
        props: {
            menu: {
                type: Object,
                required: true
            }
        },
        data: function() {
            return {
                class: null,
                items: []
            }
        },
        methods: {
            itemCheck: function(item, passed, rejected) {
                if(item?.control === undefined) {
                    item.control = true;
                }

                return item.control ? item[passed] : item[rejected];
            }
        },
        computed: {
            menu_class: function() {
                return `menu ${this.class}`;
            }
        },
        mounted() {
            this.class = this.menu?.class;
            this.items = this.menu?.items;
        }
    }
</script>
