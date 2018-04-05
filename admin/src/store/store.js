import Vue from 'vue'
import Vuex from 'vuex'
import Product from './module/product'
import User from './module/user'

Vue.use(Vuex)
export default new Vuex.Store({
  modules: {
    User: User,
    Product: Product
  }
})
