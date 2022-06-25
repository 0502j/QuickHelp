export default {

    symtomps: [
        { value: "headache", name: "Dor de cabeça", id: "s_21" },
        { value: "nausea", name: "náuseas", id: "s_156" },
        { value: "Dizziness", name: "Tonturas ", id: "s_370" },
        { value: "Agitação ", name: "Agitação  ", id: "s_145" },
        { value: "Síndrome de abstinência de álcool", name: "Síndrome de abstinência de álcool ", id: "s_818" },
        { value: "Ataque de ansiedade", name: "Ataque de ansiedade ", id: "s_582" },
        { value: "Dor nas costas", name: "Dor nas costas ", id: "s_1190" },
        { value: "Inchaço ", name: "Inchaço  ", id: "s_309" },

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