Vue.component('file-list',{
    template:`
    <div>
    <h3>File Browser</h3>
        <div>
            <p v-for="(name,id) in names" v-text="name" index=id v-on:click.prevent="changeDir(id)"></p>
        </div>
        <input type="text" id="input" v-model="newName">
        <button v-on:click="addName">Add File or Folder</button>
        <input type="text" id="input1" v-model="myTest">
        <button v-on:click="makeTest">Make a Test</button>
    </div>    
    `,
    data(){
        return {
           names: [],
           newName: '',
           myTest: '',
           url: ''
           
        }
    },
    created: function() {
      this.setDir()
    },
    methods: {
        addName(){
            this.names.push(this.newName);
            url ='/controller';
            axios.post(url, 
                JSON.stringify({name: this.newName, create:'OK' })
               )
               .then(function (response) {
                 alert(response.data);
               })
               .catch(function (error) {
                 console.log(error);
               });
            this.newName = ''
        },
        changeDir(id){
          url ='/controller';
            axios.post(url, 
              JSON.stringify({name: this.names[id] })
              )
              .then( response => { console.log(response)
                if (response.data != 'NOT'){
                  this.names = response.data;
               };
              })
              .catch(function () {
                console.log();
              });
          
        },
        setDir(){
          url ='/controller';
          axios.post(url, JSON.stringify({name: 'start'}))
          .then( response => {console.log(response)
          this.names = response.data} )
          .catch(function () {
            console.log();
          });
        },
        makeTest(){
          url ='/controller';
          axios.post(url, 
            JSON.stringify({name: this.myTest, create:'test' })
           )
           .then(function (response) {
             alert(response.data);
           })
           .catch(function (error) {
             console.log(error);
           });
           this.myTest =''
        }
      },
      computed:{
       
      }
        
    
  })
var app = new Vue({
    el: '#root'
   
});

