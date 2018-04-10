import {HTTP} from '../../../Helper'
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
      HTTP.put('/categories/' + this.category.id, this.category).then(res => {
        if (res.status === 200) {
          this.$store.commit('editCategory', res.data)
        }
      })
    }
  }
}
