import {HTTP} from '../../../Helper'
export default {
  name: 'create',
  components: {},
  props: [],
  data () {
    return {
      errors: {},
      category: {
        parent_id: 0
      }
    }
  },
  computed: {
  },
  mounted () {
  },
  methods: {
    create () {
      HTTP.post('/categories', this.category).then(res => {
        if (res.status === 200) {
          this.$store.commit('create', res.data)
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
