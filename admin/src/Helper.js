import Constants from './Constants'
import axios from 'axios'

const api = axios.create({
  baseURL: Constants.URL_API,
  headers: {
    Authorization: 'Bearer ' + localStorage.getItem('token')
  }
})
api.interceptors.response.use(function (response) {
  return response
}, function (error) {
  if (error.response.status === 400) {
    window.location.href = '/login'
  }
  return error
})
export const HTTP = api
