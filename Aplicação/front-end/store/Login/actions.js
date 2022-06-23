import axios from 'axios';

const submit = function ({ commit, state }, payload) {

    console.log("aqui")

    let data = {
        ...payload,
    }

    axios.post("API DO BACKEND")
        .then(res => {
            if (res.data.id) {
                afterLogin({ commit }, res.data);
            } else {
                alert('Algo deu errado, confira seus dados !!')
            }
                // commit('SET_MODAL', true)

        })
        .catch(e => {
            catchError(e);
        })

    }

    const afterLogin = function ({ commit }, payload) {
        commit('SET_USER', payload)
        // localStorage.setItem("token", payload.token);
        // axios.defaults.headers.common['Authorization'] = `Bearer ${payload.token}`
        // if ($nuxt.$store.state.Cart.closingOrder) {
        //     $nuxt.$router.push({ path: '/carrinho' })
        //     $nuxt.$store.dispatch('Cart/setClosingOrder', false)
        // } else {
        //     $nuxt.$router.push({ path: '/' })
        // }
    }

export default {
    submit
}