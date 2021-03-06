import Ckeditor from 'vue-ckeditor2'
import {HTTP} from '../../../Helper'
import vueDropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.css'
import PhotoUpload from '../../../components/PhotoUpload'
export default {
  name: 'create',
  components: {Ckeditor, vueDropzone, PhotoUpload},
  props: [],
  data () {
    return {
      image: null,
      dropzoneOptions: {
        addRemoveLinks: true,
        paramName: 'image',
        url: 'https://api.imgur.com/3/image',
        thumbnailWidth: 150,
        maxFilesize: 0.5,
        headers: { 'Authorization': 'Client-ID a22760e87ccf19a', 'Cache-Control': null, 'X-Requested-With': null }
      },
      config: {
        toolbar: [
          [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', 'Table', 'TextColor', 'BGColor', 'Styles', 'Format', 'Font', 'FontSize' ]
        ],
        height: 300
      },
      product: {
        category_id: null,
        image_more: []
      },
      error: {},
      category: [{
        value: null,
        text: 'chọn danh mục'
      }]
    }
  },
  computed: {
  },
  mounted () {
    HTTP.get('/categories').then(res => {
      if (res.status === 200) {
        res.data.forEach(element => {
          element.value = element.id
          element.text = element.name
          this.category.push(element)
        })
      }
    })
  },
  methods: {
    onImageChange (file) {
      this.image = file
    },

    create () {
      const fd = new FormData()
      fd.append('image', this.image)
      fd.append('category_id', this.product.category_id)
      fd.append('name', this.product.name)
      fd.append('price', this.product.price)
      fd.append('info', this.product.info)
      fd.append('image_more', this.product.image_more)
      HTTP.post('/products', fd).then(res => {
        if (res.status === 200) {
          this.$router.push('/product')
        }
      }).catch(e => {
        this.error = e.response.data.errors
      })
    },

    success (file, response) {
      this.product.image_more.push(JSON.parse(file.xhr.response).data.link)
    },

    remove (file, error, xhr) {
      this.product.image_more.forEach((element, index) => {
        if (element === JSON.parse(file.xhr.response).data.link) {
          this.product.image_more.splice(index, 1)
        }
      })
    }
  }
}
