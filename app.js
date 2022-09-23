const app = new Vue({
    el: '#app',
    data: {
        albums: []
    },
    methods: {
        fetchAlbums() {
            axios.get('http://localhost/esercitazioni/php-ajax-dischi/api/')
                .then(res => {
                    // console.log(res.data);
                    const { response } = res.data;
                    this.albums = response;
                    console.log(this.albums);
                })
        },
    },
    created() {
        this.fetchAlbums();
    },
    mounted() {
        // console.log('CIAO VUE');
    },
})