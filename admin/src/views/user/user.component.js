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
    this.$store.commit('getUser', 1)
  },
  computed: {
    fields () {
      return this.$store.state.User.fields
    },
    users () {
      return this.$store.state.User.users
    },
    page () {
      return this.$store.state.User.page
    }
  },
  data: () => {
    return {
    }
  },
  methods: {
    edit: function (user) {
      this.$router.push('/user/edit/' + user.id)
    },
    clickCallback: function (pageNum) {
      this.$store.commit('getUser', pageNum)
    }
  }
}
