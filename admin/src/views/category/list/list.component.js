import Create from '../create/index'
import Edit from '../edit/index'
import {HTTP} from '../../../Helper'
import swal from 'sweetalert'
export default {
  name: 'list',
  components: {
    create: Create,
    edit: Edit
  },
  props: [],
  data () {
    return {
      category: {},
      errors: {}
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
    create (index) {
      HTTP.post('/categories', this.category).then(res => {
        if (res.status === 200) {
          var category = res.data
          this.$store.commit('createCategory', {index, category})
          this.category = {}
          this.errors = {}
        }
      }).catch(err => {
        if (err.response.status === 422) {
          this.errors = err.response.data.errors
        }
      })
    }
  }
}
