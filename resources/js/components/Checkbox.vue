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
    <div class="checkbox-wrapper">
        <input type="checkbox" :name="name" :id="id" v-model="currentState"
            @change="$emit('change', currentState)">
        <label :for="id">
            <slot></slot>
        </label>
    </div>
</template>

<script>
    export default {
        name: "Checkbox",
        props: {
            name: {
                type: String,
                default: null
            },
            id: {
                type: String,
                default: null
            },
            state: {
                type: Boolean,
                default: null
            },
        },
        data: function() {
            return {
                currentState: null
            }
        },
        mounted() {
            this.currentState = this.state ?? false;
        }
    }
</script>
