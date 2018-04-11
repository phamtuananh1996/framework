import PhotoUpload from '../../../components/PhotoUpload'
import {HTTP} from '../../../Helper'
import Ckeditor from 'vue-ckeditor2'
export default {
  name: 'edit',
  components: {PhotoUpload, Ckeditor},
  props: [],
  data () {
    return {
      config: {
        toolbar: [
          [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ]
        ],
        height: 300
      },
      news: {
        title: ''
      },
      image: null,
      error: {}
    }
  },
  computed: {

  },
  mounted () {
    HTTP.get('/news/' + this.$route.params.id).then(res => {
      this.news = res.data
    }).catch(err => {
      console.log(err)
    })
  },
  methods: {
    onImageChange (file) {
      this.image = file
    },
    edit () {
      const fd = new FormData()
      fd.append('image', this.image)
      fd.append('title', this.news.title)
      fd.append('content', this.news.content)
      fd.append('_method', 'PUT')
      HTTP.post('/news/' + this.news.id, fd).then(res => {
        if (res.status === 200) {
          this.$router.push('/news')
        }
      }).catch(e => {
        this.error = e.response.data.errors
      })
    }
  }
}
