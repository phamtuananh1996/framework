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

  edit (state, groupCategory) {
    state.groupCategory.forEach(element => {
      if (element.id === groupCategory.id) {
        element.name = groupCategory.name
      }
    })
  },
  createCategory (state, data) {
    state.groupCategory[data.index].categories.push(data.category)
  },
  destroyCategory (state, data) {
    state.groupCategory[data.indexGroup].categories.splice(data.index, 1)
  },
  editCategory (state, category) {
    state.groupCategory.forEach(element => {
      if (element.id === parseInt(category.parent_id)) {
        element.categories.forEach(e => {
          if (e.id === category.id) {
            e.name = category.name
          }
        })
      }
    })
  }
}
