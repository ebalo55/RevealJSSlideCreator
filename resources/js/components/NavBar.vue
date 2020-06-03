<template>
    <nav class="top-nav">
        <ul>
            <li>
                <a :href="urls[0].href">
                    <img :src="urls[0].path" alt="Logo">
                </a>
            </li>
            <li v-for="item in urls" :class="URLsPositionCheck(item)">
                <a :href="item.href">{{ item.name }}</a>
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
