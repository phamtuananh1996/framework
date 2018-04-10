import {HTTP} from '../../Helper'
export default {
  name: 'app-login',
  props: [],
  data () {
    return {
      email: '',
      password: '',
      error: ''
    }
  },
  computed: {

  },
  mounted () {
  },
  methods: {
    login () {
      let data = {
        email: this.email,
        password: this.password
      }
      HTTP.post('/login', data).then(res => {
        if (res.status === 200) {
          localStorage.setItem('token', res.data.token)
          localStorage.setItem('user', JSON.stringify(res.data.user))
          localStorage.setItem('permissions', JSON.stringify(res.data.permissions))
          this.error = ''
          this.$router.push('/')
        } else {
          this.error = res.data
        }
      })
    }
  }
}
