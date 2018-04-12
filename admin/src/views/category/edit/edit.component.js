import {HTTP} from '../../../Helper'
export default {
  name: 'edit',
  components: {},
  props: ['type'],
  data () {
    return {
      errors: {}
    }
  },
  computed: {
    category () {
      return this.$store.state.Category.select
    }
  },
  mounted () {},
  methods: {
    doEdit: function () {
      if (this.type === 'groupCategory') {
        HTTP.put('/groupcategories/' + this.category.id, this.category).then(res => {
          if (res.status === 200) {
            this.$store.commit('edit', res.data)
          }
        })
      } else {
        HTTP.put('/categories/' + this.category.id, this.category).then(res => {
          if (res.status === 200) {
            this.$store.commit('editCategory', res.data)
          }
        })
      }
    }
  }
}
