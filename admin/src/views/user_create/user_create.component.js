import {HTTP} from '../../Helper'
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
      HTTP.post('/users', this.user).then(res => {
        if (res.status === 200) {
          this.$router.push('/user/list')
        }
      }).catch(err => {
        if(err.response.status===422){
          this.error = err.response.data.errors
        }
      })
    }
  }
}
