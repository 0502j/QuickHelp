import axios from 'axios';

const sendSymtomps = function ({ commit, state }, payload) {

    let data = {
        ...payload,
    }
    console.log(data.symtomps);
    axios.get("https://ghibliapi.herokuapp.com/films")
        .then(res => {
            console.log(res.data);
            commit('SET_LIST', res.data),
                commit('SET_MODAL', true)

        })
        .catch(e => {
            catchError(e);
        })
},

    closeModal = function ({ commit }) {
        commit('SET_MODAL', false)
    }

export default {
    sendSymtomps,
    closeModal
}