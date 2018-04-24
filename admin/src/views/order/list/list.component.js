import Paginate from 'vuejs-paginate'
import {HTTP} from '../../../Helper'
import swal from 'sweetalert'
export default {
  name: 'list',
  components: {Paginate},
  props: [],
  data () {
    return {
      caption: 'News',
      orders: [],
      page: 0
    }
  },
  computed: {
    fields () {
      return [
        'id',
        'name',
        'email',
        'address',
        'phone',
        'status',
        'action'
      ]
    }
  },
  mounted () {
    HTTP.get('/orders').then(res => {
      if (res.status === 200) {
        this.orders = res.data.data
        this.page = res.data.last_page
      }
    })
  },
  methods: {
    clickCallback: function (pageNum) {
      HTTP.get('/news?page=' + pageNum).then(res => {
        if (res.status === 200) {
          this.products = res.data.data
        }
      })
    },
    destroy: function (news, index) {
      swal({
        title: 'Are you sure?',
        text: 'Once deleted, you will not be able to recover this imaginary file!',
        icon: 'warning',
        buttons: true,
        dangerMode: true
      })
        .then((willDelete) => {
          if (willDelete) {
            HTTP.delete('/news/' + news.id).then(res => {
              if (res.status === 200) {
                window.scroll(0, 0)
                this.newss.splice(index, 1)
                swal('delete success')
              }
            })
          } else {
            swal('Your imaginary file is safe!')
          }
        })
    },

    view: function (order) {
      this.$router.push('detail/' + order.id)
    }
  }
}
