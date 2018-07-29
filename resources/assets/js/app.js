
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue'

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#post__markdown',
    data: {
      input: '# sample'+"\n"+'```'+"\n"+'<div>sample</div>'+"\n"+'```'
    },
    computed: {
      compiledMarkdown: function() {
        return marked(this.input, { sanitize:true })
      }
    },
    methods: {
      update: _.debounce(function(e) {
        this.input = e.target.value
      }, 300)
    },
    components: {
      // app:ExampleComponent,
    }
})
marked.setOptions({
  lnagPrefix: '',
  highlight: function(code, lang) {
    return hljs.highlightAuto(code, [lang]).value;
  }
});
