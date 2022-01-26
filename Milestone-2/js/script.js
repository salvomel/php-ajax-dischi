
Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        albums: []
    },
    methods: {
        getApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/Milestone-2/server.php')
            .then((response) => {
                this.albums = response.data;
            });
        }
    },
    created: function() {
        this.getApi();
    }
});