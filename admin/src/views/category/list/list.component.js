import Create from '../create/index'
import CreateCategory from '../create-category'
import Edit from '../edit/index'
import {HTTP} from '../../../Helper'
import swal from 'sweetalert'
export default {
  name: 'list',
  components: {
    create: Create,
    edit: Edit,
    createCategory: CreateCategory
  },
  props: [],
  data () {
    return {
      groupCategory: 'groupCategory',
      category: 'category'
    }
  },
  computed: {
    groupCategories () {
      return this.$store.state.Category.groupCategory
    }
  },
  mounted () {
    HTTP.get('/groupcategories').then(res => {
      if (res.status === 200) {
        this.$store.commit('fetch', res.data)
      }
    })
  },
  methods: {
    destroyGroup (index, groupCategory) {
      swal({
        title: 'Are you sure?',
        text: 'Once deleted, you will not be able to recover this imaginary file!',
        icon: 'warning',
        buttons: true,
        dangerMode: true
      })
        .then((willDelete) => {
          if (willDelete) {
            HTTP.delete('/groupcategories/' + groupCategory.id).then(res => {
              if (res.status === 200) {
                this.$store.commit('destroy', index)
              }
            })
          } else {
            swal('Your imaginary file is safe!')
          }
        })
    },
    editGroup (index, groupCategory) {
      HTTP.get('/groupcategories/' + groupCategory.id).then(res => {
        if (res.status === 200) {
          this.$store.commit('selectItem', res.data)
        }
      })
    },
    edit (index, indexGroup, category) {
      HTTP.get('/categories/' + category.id).then(res => {
        if (res.status === 200) {
          this.$store.commit('selectItem', res.data)
        }
      })
    },
    destroy (index, indexGroup, category) {
      swal({
        title: 'Are you sure?',
        text: 'Once deleted, you will not be able to recover this imaginary file!',
        icon: 'warning',
        buttons: true,
        dangerMode: true
      })
        .then((willDelete) => {
          if (willDelete) {
            HTTP.delete('/categories/' + category.id).then(res => {
              if (res.status === 200) {
                this.$store.commit('destroyCategory', {index, indexGroup})
              }
            })
          } else {
            swal('Your imaginary file is safe!')
          }
        })
    }
  }
}
