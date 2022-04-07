import App from './App.svelte';

const app = new App({
	target: document.querySelector('#svelte'),
	props: {
		name: 'world'
	}
});

export default app;
