import Ckeditor from 'vue-ckeditor2'
import Helper from '../../../Helper'
export default {
  name: 'create',
  components: {Ckeditor},
  props: [],
  data () {
    return {
      config: {
        toolbar: [
          [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript' ]
        ],
        height: 300
      },
      product: {
        category_id: null
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
    Helper.api('/categories').then(res => {
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
    create () {
      Helper.api('/products', 'POST', this.product).then(res => {
        console.log(res.data)
        console.log(this.product)
        if (res.status === 200) {
          console.log(res.data)
        }
        if (res.status === 422) {
          this.error = res.data.errors
        }
      })
    }
  }
}
