import axios from 'axios';

const sendSymtomps = function ({ commit, state }, payload) {

    let data = {
        ...payload,
    }
    let array = {}
    console.log(data.symtomps);
    if(data.symtomps == 2){
     array = {
            "sex":"male",
            "age": {
                "value": 30
              },
              "evidence": [
                {
                    "id": data.symtomps[0],
                    "choice_id": "present",
                    "source": "initial"
                },
                {
                    "id": data.symtomps[1],
                    "choice_id": "present",
                    "source": "initial"
                },
              ]
    }
    }else if(data.symtomps == 3){
     array = {
            "sex":"male",
            "age": {
                "value": 30
              },
              "evidence": [
                {
                    "id": data.symtomps[0],
                    "choice_id": "present",
                    "source": "initial"
                },
                {
                    "id": data.symtomps[1],
                    "choice_id": "present",
                    "source": "initial"
                },
                {
                    "id": data.symtomps[2],
                    "choice_id": "present",
                    "source": "initial"
                },
              ]
    }
    }else{
     array = {
            "sex":"male",
            "age": {
                "value": 30
              },
              "evidence": [
                {
                    "id": data.symtomps[0],
                    "choice_id": "present",
                    "source": "initial"
                },
                {
                    "id": data.symtomps[1],
                    "choice_id": "present",
                    "source": "initial"
                },
              ]
    }
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
    console.log(payload.item[0].id);
    let evidences = [{
        "id": payload.item[0].id,
        "choice_id": payload.item[0].choices[0].id,
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
}

const sendSymtomps3 = function ({ commit, state }, payload) {

    let evidences = [{
        "id": payload[0].id,
        "choice_id": payload[0].choices[1].id,
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
}

  const  closeModal = function ({ commit }) {
        commit('SET_MODAL', false)
    }

    const disableAPI = function ({ commit, state }) {
        let diagnostics = $nuxt.$store.state.Diagnostico.diagnostic[0]
        console.log(diagnostics);
        $nuxt.$router.push("/resultado-diagnostico", diagnostics);
    }


    
export default {
    sendSymtomps,
    closeModal,
    sendSymtomps2,
    sendSymtomps3,
    disableAPI
}