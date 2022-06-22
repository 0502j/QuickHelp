import axios from 'axios';

const getNews = function ({ commit }) {

    axios.get(" https://newsapi.org/v2/everything?q=health&language=pt&apiKey=58c5548eedff4284adfeb676cc298fa0")
      .then(res => {
          commit('SET_LIST_NEWS', res.data)
      })
      .catch(e => {
          catchError(e.status)
      })

  
  }

export default {
    getNews,
}