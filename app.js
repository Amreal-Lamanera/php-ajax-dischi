const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        genre: '',
        defGen: 'Genere: ',
        openGen: false,
        focusGen: false,
        ogAlbums: []
    },
    computed: {
        getGenres() {
            const genres = new Array();
            this.ogAlbums.forEach(element => {
                if (!genres.includes(element.genre)) genres.push(element.genre)
            });

            return genres;
        }
    },
    methods: {
        fetchAlbums() {
            axios.get('http://localhost/esercitazioni/php-ajax-dischi/api/')
                .then(res => {
                    // console.log(res.data);
                    const { response } = res.data;
                    this.albums = response;
                    this.ogAlbums = response;
                    console.log(this.albums);
                })
        },
        fetchAlbumsFiltered() {
            axios.get('http://localhost/esercitazioni/php-ajax-dischi/api/indexFiltered.php', {
                params: {
                    genre: this.genre,
                }
            })
                .then(res => {
                    // console.log(res);
                    const { response } = res.data;
                    this.albums = response;
                })
        },
        clickHandlerGen() {
            if (!this.focusGen) {
                this.openGen = !this.openGen;
            }
            else this.focusGen = false;
        },
    },
    created() {
        this.fetchAlbums();
    },
    mounted() {
        // console.log('CIAO VUE');
    },
})