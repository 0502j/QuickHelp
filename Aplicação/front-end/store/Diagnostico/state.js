export default {

    symtomps: [
        { value: "headache", name: "Dor de cabeça", id: "s_21" },
        { value: "nausea", name: "náuseas", id: "s_156" },
        { value: "Dizziness", name: "Tonturas ", id: "s_370" },
    ],

    modal: false,
    list: [],
    choices:[
        {name:"Sim", value:"present"},
        {name:"Não", value:"absent"},
        {name:"Não Sei", value:"unknown"}
        ],

    evidence: 
        {
            "id": "s_21",
            "choice_id": "present",
            "source": "initial"
        },
    diagnostic: []
          
}