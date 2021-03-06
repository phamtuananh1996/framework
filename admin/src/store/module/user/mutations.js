import {HTTP} from '../../../Helper'
export default {
  // api getUser
  getUser: (state, page) => {
    HTTP.get('/users?page=' + page).then(res => {
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
    HTTP.delete('/users/' + user.id).then(res => {
      if (res.status === 200) {
        state.users.splice(user, 1)
      }
    })
  }
}
