import Constants from './Constants'

function api (url, method = 'GET', data = '') {
  let fullPath = Constants.URL_API + url
  let options = {
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    method: method
  }
  if (data) options.body = JSON.stringify(data)
  return fetch(fullPath, options).then(res => res.json().then(data => ({ status: res.status, data }))).catch(error => console.log(error))
}

export default {
  api
}
