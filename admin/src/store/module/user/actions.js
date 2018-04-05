export default {
  // action delete
  destroyUser: (context, user) => {
    context.commit('destroyUser', user)
  }
}
