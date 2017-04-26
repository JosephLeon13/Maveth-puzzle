<template>
    <div>
                    
        <h1>
           <div :title="title" class="void" v-on:click="secretSecret = Math.floor(Math.random() * 13) + 1"></div>
           <div class="random">{{ secretSecret }}</div>
        </h1>
        <div class='pt_2' v-if='secretSecret === 13'>
            <h1><a :href="url" :title="title_2" class="six">6</a></h1>
        </div>


    </div>
</template>

<script>
    export default {

        data() {
          return {
            secretSecret: '',
            url: '/welcome_2',
            title: 'I am the spirit of Death',
            title_2: 'I am the sin in man'
            }
        }
    }
</script>
