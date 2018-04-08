import Helper from '../../../Helper'
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
      Helper.api('/categories', 'POST', this.category).then(res => {
        if (res.status === 200) {
          this.$store.commit('create', res.data)
          this.category = {}
          this.errors = {}
        }
        if (res.status === 422) {
          this.errors = res.data.errors
        }
      })
    }
  }
}
