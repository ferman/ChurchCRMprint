new Vue({
	el: '#app',
	data () {
	  return {
		info: null
	  }
	},
	mounted () {
	  axios
		.get('http://churchcrmprint.local/name.json')
		.then(response => (this.info = response.data))
		.catch(error => {
			console.log(error)
		})
	},
	methods: {
    	print: function (event) {
			// `this` inside methods points to the Vue instance
			fetch("print.php?name=john&id=1")
	    }
    }
});