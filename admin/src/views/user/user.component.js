import Paginate from 'vuejs-paginate'
export default {
  components: { paginate: Paginate },
  name: 'user',
  props: {
    caption: {
      type: String,
      default: 'User'
    }
  },
  mounted: function () {
    this.$store.commit('getUser')
  },
  computed: {
    fields () {
      return this.$store.state.User.fields
    },
    users () {
      return this.$store.state.User.users
    }
  },
  data: () => {
    return {
    }
  },
  methods: {
    destroy: function (user) {
      this.$store.dispatch('destroyUser', user)
    },
    clickCallback: function (pageNum) {
      console.log(pageNum)
    }
  }
}
