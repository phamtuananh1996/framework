import PhotoUpload from '../../../components/PhotoUpload'
import Ckeditor from 'vue-ckeditor2'
import {HTTP} from '../../../Helper'
export default {
  name: 'create',
  components: {PhotoUpload, Ckeditor},
  props: [],
  data () {
    return {
      value: null,
      news: {
        title: ''
      },
      image: null,
      error: {},
      config: {
        toolbar: [
          [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', 'Table', 'TextColor', 'BGColor', 'Styles', 'Format', 'Font', 'FontSize', 'Image' ]
        ],
        height: 300
      }
    }
  },
  computed: {
  },
  mounted () {

  },
  methods: {
    onImageChange (file) {
      this.image = file
    },
    create () {
      const fd = new FormData()
      fd.append('image', this.image)
      fd.append('title', this.news.title)
      fd.append('content', this.news.content)
      HTTP.post('/news', fd).then(res => {
        if (res.status === 200) {
          this.$router.push('/news')
        }
      }).catch(e => {
        this.error = e.response.data.errors
      })
    }
  }
}
