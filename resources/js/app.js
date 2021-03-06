import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'

Vue.use(ElementUI)
InertiaProgress.init()

createInertiaApp({
  resolve: (name) => import(`./Pages/${name}`),
  setup({ el, app, props }) {
    new Vue({
      render: (h) => h(app, props),
    }).$mount(el)
  },
})
