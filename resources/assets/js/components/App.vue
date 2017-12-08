<template>
    <div  id="el">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <router-link  :to="{ name: 'home' }"><a>Home</a></router-link>
                </div>
            </div>
        </nav>
        <router-view ></router-view>
    </div>
</template>

<script>
    export default {

    }
</script>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity 0.3s
    }
    .fade-enter, .fade-leave-active {
        opacity: 0
    }
    #particles-js {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -10;
    }
    </style>

