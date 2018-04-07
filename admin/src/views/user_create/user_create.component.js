import Helper from '../../Helper'
export default {
  name: 'user-create',
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

  },
  methods: {
    create () {
      Helper.api('/users', 'POST', this.user).then(res => {
        if (res.status === 200) {
          this.$router.push('/user/list')
        } else {
          if (res.status === 422) {
            this.error = res.data.errors
            console.log(this.error)
          }
        }
      })
    }
  }
}
