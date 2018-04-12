import {HTTP} from '../../../Helper'
export default {
  name: 'create-category',
  components: {},
  props: ['index', 'groupcategory'],
  data () {
    return {
      category: {},
      errors: {}
    }
  },
  computed: {

  },
  mounted () {

  },
  methods: {
    create (index, groupcategory) {
      HTTP.post('/categories', {name: this.category.name, parent_id: groupcategory.id}).then(res => {
        if (res.status === 200) {
          var category = res.data
          this.$store.commit('createCategory', {index, category})
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
