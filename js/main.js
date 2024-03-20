const { createApp } = Vue;

createApp({

    data() {
        return{

            albums: [],

            currentAlbum: [],

        }
    },

    methods: {

        showCardInfo(index) {
            axios.get('./server.php?actualIndex=' + index).then(res => {
                
                this.currentAlbum = res.data;
                // console.log(this.currentAlbum);
                // test
    
            });
        },

    },

    mounted() {

        axios.get('./server.php').then(res => {
            
            this.albums = res.data;

        });

    },

}).mount('#app');