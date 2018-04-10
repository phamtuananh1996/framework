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
    }
  },
  computed: {
    categories () {
      return this.$store.state.Category.category
    }
  },
  mounted () {
    HTTP.get('/categories').then(res => {
      if (res.status === 200) {
        this.$store.commit('fetch', res.data)
      }
    })
  },
  methods: {
    destroy (index, category) {
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
                this.$store.commit('destroy', index)
              }
            })
          } else {
            swal('Your imaginary file is safe!')
          }
        })
    },
    edit (index, category) {
      HTTP.get('/categories/' + category.id).then(res => {
        if (res.status === 200) {
          this.$store.commit('selectItem', res.data)
        }
      })
    }
  }
}
