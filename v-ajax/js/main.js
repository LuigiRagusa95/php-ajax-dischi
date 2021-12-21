new Vue({
	el: "#root",
	data: {
		albums: null,
	},
	created() {
		this.getAlbums();
	},
	methods: {
		getAlbums() {
			setTimeout(() => {
				axios
					.get("http://localhost/php-ajax-dischi/v-ajax/data/database.php")
					.then((response) => {
						this.albums = response.data;
						console.log(this.albums);
					})
					.catch((error) => console.log(error));
			}, 1000);
		},
	},
});
