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
    <div class="presentation-wrapper">
        <div class="presentation">
            <div class="preview">
                <img :src="preview" alt="Preview">
            </div>
            <div class="body">
                <h3 class="title">{{ title }}</h3>
                <h6 class="info">Created: {{ creationDate }} | last update: {{ lastUpdate }}</h6>
                <h6 class="info">n° slides: {{ slideNumber }}</h6>
                <span :class="is_public_class">{{ this.isPublic ? "public" : "private" }}</span>
            </div>
            <div class="menu-wrapper">
                <v-menu :menu="menu"></v-menu>
            </div>
        </div>
        <hr>
    </div>
</template>

<script>
    import VMenu from "./VMenu";
    export default {
        name: "Presentation",
        components: {VMenu},
        props: {
            preview: {
                type: String,
                required: true
            },
            title: {
                type: String,
                required: true
            },
            creationDate: {
                type: String,
                required: true
            },
            lastUpdate: {
                type: String,
                required: true
            },
            slideNumber: {
                type: Number,
                required: true
            },
            id: {
                type: String,
                required: true
            },
            isPublic: {
                type: Boolean,
                default: true
            }
        },
        data: function() {
            return {
                menu: {
                    class: "rounded-r",
                    items: [
                        {name: "Edit", icon: "edit", url: "#"},
                        {
                            name: "Private",
                            icon: "private",
                            url: "#",

                            altName: "Public",
                            altIcon: "public",
                            altUrl: "#",
                            control: this.isPublic
                        },
                        {name: "Delete", icon: "trash", url: "#"},
                        {name: "Share", icon: "share", url: "#"}
                    ]
                }
            };
        },
        computed: {
            is_public_class: function() {
                return `pill pill-${this.isPublic ? "success" : "info"}`;
            }
        },
        watch: {
            isPublic: function(new_value) {
                this.menu.items[1].control = new_value;
            }
        }
    }
</script>
