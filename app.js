new Vue({
	el: '#app',
	data () {
	  return {
		info: null
	  }
	},
	mounted () {
	  axios
		.get('http://localhost/churchcrm/api/persons/search/john')
		.then(response => (this.info = response.data))
		.catch(error => {
			console.log(error)
		})
	}
});