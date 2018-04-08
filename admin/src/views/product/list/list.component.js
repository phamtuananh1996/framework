import Paginate from 'vuejs-paginate'
import Helper from '../../../Helper'
export default {
  name: 'list',
  components: {
    paginate: Paginate
  },
  props: [],
  data () {
    return {
      caption: 'Product'
    }
  },
  computed: {
    fields () {
      return [
        'id',
        'name',
        'price',
        'image',
        'category',
        'Active',
        'action'
      ]
    },
    products () {
      Helper.api('/products').then(res => {
        if (res.status === 200) {
          return res.data
        }
      })
    }
  },
  mounted () {

  },
  methods: {
    clickCallback: function (pageNum) {
      this.$store.commit('getUser', pageNum)
    }
  }
}
