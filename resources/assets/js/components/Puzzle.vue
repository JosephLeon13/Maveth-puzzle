<template>
    <div class="container">
                    
        <ul class="centerLock">
          <li class="secretLock">
            <div :title="key_1" class="lock" @click="ss_1 += 1"></div>
            {{ ss_1 }}
          </li>
          <li class="secretLock">
            <div :title="key_2" class="lock" @click="ss_2 += 1"></div>
            {{ ss_2 }}  
          </li>
          <li class="secretLock">
            <div :title="key_3" class="lock" @click="ss_3 += 1"></div> 
            {{ ss_3 }}
          </li>
        </ul>
        
    
        <div class='lantern' v-if='ss_1 === 6 && ss_2 === 6 && ss_3 === 6'>
            <a :href='login' class="login">Login</a>
        </div>

        <div class="lantern" v-else-if='ss_1 ===13 && ss_2 === 6 && ss_3 === 4'>
            <a :href='register' class="register">Register</a>
        </div>


    </div>
</template>

<script>
    export default {

        data() {
          return {
            ss_1: 0,
            ss_2: 0,
            ss_3: 0,
            login: '/login',
            register: '/register',
            key_1: 'We are the sin in death',
            key_2: 'We are the sin in man',
            key_3: 'We are the sin on earth',
          }
        }
    }
</script>
