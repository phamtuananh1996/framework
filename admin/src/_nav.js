export default {
  items: [
    {
      name: 'Dashboard',
      url: '/dashboard',
      icon: 'icon-speedometer'
    },
    {
      name: 'Quản lý khách hàng',
      url: '/user',
      icon: 'icon-user',
      children: [
        {
          name: 'Danh sách',
          url: '/user/list',
          icon: 'icon-list'
        },
        {
          name: 'Thêm khách hàng',
          url: '/user/create',
          icon: 'icon-pencil'
        }
      ]
    },
    {
      name: 'Quản lý sản phẩm',
      url: '/product',
      icon: 'icon-camera',
      children: [
        {
          name: 'Danh sách',
          url: '/product/list',
          icon: 'icon-list'
        },
        {
          name: 'Thêm sản phẩm',
          url: '/product/create',
          icon: 'icon-pencil'
        }
      ]
    },
    {
      name: 'Quản lý tin tức',
      url: '/news',
      icon: 'fa fa-newspaper-o',
      children: [
        {
          name: 'Danh sách',
          url: '/news/list',
          icon: 'icon-list'
        },
        {
          name: 'Thêm tin tức',
          url: '/news/create',
          icon: 'icon-pencil'
        }
      ]
    },
    {
      name: 'Quản lý danh mục',
      url: '/category',
      icon: 'fa fa-align-justify'
    }
  ]
}
