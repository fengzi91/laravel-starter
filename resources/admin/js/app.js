import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
import Layout from './layouts/Layout'
import store from './store'
Vue.use(ElementUI)
InertiaProgress.init()

createInertiaApp({
  resolve: (name) => {
    const page = require(`./Pages/${name}`).default
    page.layout = page.layout || Layout
    return page
  },
  setup({ el, app, props }) {
    new Vue({
      render: (h) => h(app, props),
      store,
    }).$mount(el)
  },
})
