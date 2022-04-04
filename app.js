const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    created() {
        axios.get("./albums.php").then((res) => {
            this.albums = res.data;
        });
    }
})