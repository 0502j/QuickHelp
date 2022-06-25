import axios from 'axios';

const sendSymtomps = function ({ commit, state }, payload) {

    let data = {
        ...payload,
    }
    console.log(data.symtomps);
    
    let evidence = []

    for (let symptoms of data.symptoms){
        evidence += `
            {
                "id": ${symptoms},
                "choice_id": "present",
                "source": "initial"
            }
        `
    }
    console.log(evidence);
    let array = {
        "sex":"male",
        "age": {
            "value": 30
          },
          "evidence": [
            evidence
          ]
    };


 

  let headers = {
    headers: { 'Content-Type': 'application/json',
    "App-Id":"9b927164",
    "App-Key":"804c2f46520bdea8b344a43d39ab5435",
      }
    };

    axios.post("https://api.infermedica.com/v3/diagnosis", array ,headers)
        .then(res => {
            let questions = res.data.question;
            // console.log(questions);
                commit('SET_LIST',questions),
                commit('SET_MODAL', true)

        })
        .catch(e => {
            catchError(e);
        })
}

const sendSymtomps2 = function ({ commit, state }, payload) {

    let evidences = [{
        "id": payload[0].id,
        "choice_id": payload[0].choices[0].id,
        "source": "initial"
    }]

    let array = {
        "sex":"male",
        "age": {
            "value": 30
          },
          "evidence": evidences
    };
  
  let headers = {
    headers: { 'Content-Type': 'application/json',
    "App-Id":"9b927164",
    "App-Key":"804c2f46520bdea8b344a43d39ab5435",
      }
    };

    axios.post("https://api.infermedica.com/v3/diagnosis", array ,headers)
        .then(res => {
            let questions = res.data.question;
            let diagnostic = res.data.conditions;
            console.log(questions);
                commit('SET_LIST',questions),
                commit('SET_DIAGNOSTIC',diagnostic),
                commit('SET_MODAL', false)
                commit('SET_MODAL', true)

        })
        .catch(e => {
            catchError(e);
        })
},

    closeModal = function ({ commit }) {
        commit('SET_MODAL', false)
    }

    const disableAPI = function ({ commit, state }) {
        let diagnsticos = $nuxt.$store.state.Diagnostico.diagnostic
        console.log(diagnsticos[0].common_name)
    }

export default {
    sendSymtomps,
    closeModal,
    sendSymtomps2,
    disableAPI
}