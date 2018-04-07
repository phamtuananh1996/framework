import Helper from '../../../Helper'
export default {
  // api getUser
  getUser: (state, page) => {
    Helper.api('/users?page=' + page).then(res => {
      if (res.status === 200) {
        state.users = res.data.data
        state.page = res.data.last_page
        window.scroll(0, 0)
      } else {
        state.users = []
      }
    })
  },
  // destroyUser
  destroyUser: (state, user) => {
    Helper.api('/users/' + user.id, 'DELETE').then(res => {
      if (res.status === 200) {
        state.users.splice(user, 1)
      }
    })
  }
}
