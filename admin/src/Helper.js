import Constants from './Constants'
import axios from 'axios'

export const HTTP = axios.create({
  baseURL: Constants.URL_API,
  headers: {
    Authorization: 'Bearer ' + localStorage.getItem('token')
  }
})
