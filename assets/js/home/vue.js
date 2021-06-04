import vue from 'vue';

new vue (
	{
		el:'#app',
		delimiters : ['${','}'],
		data: {
			message: 'hello vue'
		}
	}

)