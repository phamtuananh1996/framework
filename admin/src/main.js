// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import App from './App'
import router from './router'
import store from './store/store'
import VueDragAndDropList from 'vue-drag-and-drop-list'
import {HTTP} from './Helper'

Vue.use(VueDragAndDropList)
Vue.use(BootstrapVue)

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    if (localStorage.getItem('token') === null) {
      next({
        path: '/login',
        query: { redirect: to.fullPath }
      })
    } else {
      HTTP.get('/getuser').then(res => {
        next()
      }).catch(e => {
        console.log(e)
        next({
          path: '/login',
          query: { redirect: to.fullPath }
        })
      })
    }
  } else {
    next() // make sure to always call next()!
  }
})

/* eslint-disable no-new */
new Vue({
  el: '#app',
  store,
  router,
  template: '<App/>',
  components: {
    App
  }
})
