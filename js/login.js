Vue.component('log-in',{
    template:`
    
    <div class="right">
        
        <form  method='POST'>
            <fieldset class="form-row">
                <label for="userName">UserName</label>
                <input type="text" id="input" v-model="userName">
            </fieldset>
           
            <fieldset class="form-row">
                <label for="Password">Password</label>
                <input type="password" id="input1" v-model="userPassword">
            </fieldset>
            
            <div class="btn">
                <button v-on:click.prevent="checkUser">Log In</button>
            </div>
        </form>
    </div>
</div>   
`,
    data(){
        return {
           userName: '',
           userPassword:''
        }
    },
    methods: {
        checkUser(){
            url ='/check_login';
            axios.post(url, 
               JSON.stringify({userName: this.userName, userPassword: this.userPassword})
               )
               .then( response =>
                 { if (response.data == 'OK'){
                    window.location.href ='/view'
                 }
            
               } )
               .catch(function (error) {
                 console.log(error);
               })
            // this.newName = ''
        }
      
    }
})
var app = new Vue({
    el: '#login',
});
