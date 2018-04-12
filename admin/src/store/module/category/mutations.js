export default {
  create (state, groupCategory) {
    state.groupCategory.push(groupCategory)
  },

  fetch (state, groupCategory) {
    state.groupCategory = groupCategory
  },

  destroy (state, index) {
    state.groupCategory.splice(index, 1)
  },

  selectItem (state, groupCategory) {
    state.select = groupCategory
  },

  editCategory (state, groupCategory) {
    state.groupCategory.forEach(element => {
      if (element.id === groupCategory.id) {
        element.name = groupCategory.name
      }
    })
  }
}
