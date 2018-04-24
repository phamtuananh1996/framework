import {HTTP} from '../../../Helper'
export default {
  name: 'detail',
  components: {},
  props: [],
  data () {
    return {
      order: {}
    }
  },
  computed: {
  },
  mounted () {
    HTTP.get('/orders/' + this.$route.params.id + '/details').then(res => {
      if (res.status === 200) {
        this.order = res.data
      }
    })
  },
  methods: {
    edit () {
      HTTP.put('/orders/' + this.$route.params.id).then(res => {
        if (res.status === 200) {
          this.$router.go(-1)
        }
      })
    }

  }
}
