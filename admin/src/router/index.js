import Vue from 'vue'
import Router from 'vue-router'
import Login from '@/views/login/index'

// Containers
import Full from '@/containers/Full'

// Views
import Dashboard from '@/views/Dashboard'
import User from '@/views/user/index'
import CreateUser from '@/views/user_create/index'
import EditUser from '@/views/user_edit/index'
import Product from '@/views/product/index'
import ListProduct from '@/views/product/list/index'
import EditProduct from '@/views/product/edit/index'
import CreateProduct from '@/views/product/create/index'
import Category from '@/views/category/index'

Vue.use(Router)

export default new Router({
  mode: 'history',
  linkActiveClass: 'open active',
  scrollBehavior: () => ({ y: 0 }),
  routes: [
    {
      path: '/',
      redirect: '/dashboard',
      name: 'Home',
      component: Full,
      meta: {
        requiresAuth: true
      },
      children: [
        {
          path: 'dashboard',
          name: 'Dashboard',
          component: Dashboard
        },
        {
          path: 'user/list',
          name: 'List user',
          component: User
        },
        {
          path: 'user/create',
          name: 'Create user',
          component: CreateUser
        },
        {
          path: 'user/edit/:id',
          name: 'Edit user',
          component: EditUser
        },
        {
          path: 'product',
          name: 'product',
          redirect: 'product/list',
          component: Product,
          children: [
            {
              path: 'list',
              name: 'List product',
              component: ListProduct
            },
            {
              path: 'create',
              name: 'Create product',
              component: CreateProduct
            },
            {
              path: 'edit/:id',
              name: 'Edit product',
              component: EditProduct
            }
          ]
        },
        {
          path: 'category',
          name: 'category',
          component: Category
        }
      ]
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    }
  ]
})
