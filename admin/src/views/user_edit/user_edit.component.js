import Helper from '../../Helper'
import swal from 'sweetalert'
export default {
  name: 'user-edit',
  components: {},
  props: [],
  data () {
    return {
      user: {},
      error: {}
    }
  },
  computed: {

  },
  mounted () {
    Helper.api('/users/' + this.$route.params.id).then(res => {
      if (res.status === 200) {
        this.user = res.data
      }
    })
  },
  methods: {
    destroy (id) {
      swal({
        title: 'Are you sure?',
        text: 'Once deleted, you will not be able to recover this imaginary file!',
        icon: 'warning',
        buttons: true,
        dangerMode: true
      })
        .then((willDelete) => {
          if (willDelete) {
            Helper.api('/users/' + this.$route.params.id, 'DELETE').then(res => {
              if (res.status === 200) {
                this.$router.push('/user/list')
                swal('delete success')
              }
            })
          } else {
            swal('Your imaginary file is safe!')
          }
        })
    },
    edit () {
      Helper.api('/users/' + this.$route.params.id, 'PUT', this.user).then(res => {
        if (res.status === 200) {
          this.$router.push('/user/list')
        }
      })
    }
  }
}
