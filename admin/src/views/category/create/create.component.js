import {HTTP} from '../../../Helper'
export default {
  name: 'create',
  components: {},
  props: [],
  data () {
    return {
      errors: {},
      groupCategory: {}
    }
  },
  computed: {
  },
  mounted () {
  },
  methods: {
    create () {
      HTTP.post('/groupcategories', this.groupCategory).then(res => {
        if (res.status === 200) {
          this.$store.commit('create', res.data)
          this.groupCategory = {}
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
