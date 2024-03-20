const { createApp } = Vue;

createApp({

    data() {
        return{

            albums: [],

        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            
            this.albums = res.data;
            // console.log("1", this.albums);
            // test

        });

    },

}).mount('#app');