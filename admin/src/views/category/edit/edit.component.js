import Helper from '../../../Helper'
export default {
  name: 'edit',
  components: {},
  props: [],
  data () {
    return {}
  },
  computed: {
    category () {
      return this.$store.state.Category.select
    }
  },
  mounted () {},
  methods: {
    doEdit: function () {
      Helper.api('/categories/' + this.category.id, 'PUT', this.category).then(res => {
        if (res.status === 200) {
          this.$store.commit('editCategory', res.data)
        }
      })
    }
  }
}
