import Paginate from 'vuejs-paginate'
import {HTTP} from '../../../Helper'
import swal from 'sweetalert'
export default {
  name: 'list',
  components: {
    paginate: Paginate
  },
  props: [],
  data () {
    return {
      caption: 'Product',
      products: [],
      page: 0
    }
  },
  computed: {
    fields () {
      return [
        'id',
        'name',
        'price',
        'image',
        'category',
        'actor',
        'action'
      ]
    }
  },
  mounted () {
    HTTP.get('/products').then(res => {
      if (res.status === 200) {
        this.products = res.data.data
        this.page = res.data.last_page
      }
    })
  },
  methods: {
    clickCallback: function (pageNum) {
      HTTP.get('/products?page=' + pageNum).then(res => {
        if (res.status === 200) {
          this.products = res.data.data
        }
      })
    },
    destroy: function (product, index) {
      swal({
        title: 'Are you sure?',
        text: 'Once deleted, you will not be able to recover this imaginary file!',
        icon: 'warning',
        buttons: true,
        dangerMode: true
      })
        .then((willDelete) => {
          if (willDelete) {
            HTTP.delete('/products/' + product.id).then(res => {
              if (res.status === 200) {
                window.scroll(0, 0)
                this.products.splice(index, 1)
                swal('delete success')
              }
            })
          } else {
            swal('Your imaginary file is safe!')
          }
        })
    },

    edit: function (product) {
      this.$router.push('edit/' + product.id)
    }
  }
}
