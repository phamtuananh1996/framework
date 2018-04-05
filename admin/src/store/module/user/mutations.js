import Helper from '../../../Helper'
export default {
// api getUser
  getUser: state => {
    Helper.api('/users').then(res => {
      if (res.status === 200) {
        state.users = res.data.data
      } else {
        state.users = []
      }
    })
  },
  // destroyUser
  destroyUser: (state, user) => {
    // Helper.api('/users/' + user.id, 'DELETE').then(res => {
    //   if (res.status === 200) {
    //     state.users.splice(1, 1)
    //   }
    // })
  }
}
