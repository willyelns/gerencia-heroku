var circularInverso = new Vue({
  el: '#circular-inverso',
  data: {
    proximoInversoHora: '',
    proximoInversoMinuto: '',
    proximoInversoEmpresa: '',
    listaInverso: [
            {hora: '06', minuto: '20', empresa: 'Guanabara'},
            {hora: '06', minuto: '42', empresa: 'Conceição'},
            {hora: '06', minuto: '50', empresa: 'Via Sul'},
            {hora: '06', minuto: '55', empresa: 'Guanabara'},
            {hora: '07', minuto: '14', empresa: 'Conceição'},
            {hora: '07', minuto: '26', empresa: 'Via Sul'},
            {hora: '07', minuto: '30', empresa: 'Guanabara'},
            {hora: '07', minuto: '52', empresa: 'Conceição'},
            {hora: '08', minuto: '09', empresa: 'Via Sul'},
            {hora: '08', minuto: '18', empresa: 'Guanabara'},
            {hora: '09', minuto: '05', empresa: 'Via Sul'},
            {hora: '09', minuto: '25', empresa: 'Conceição'},
            {hora: '09', minuto: '55', empresa: 'Guanabara'},
            {hora: '10', minuto: '10', empresa: 'Conceição'},
            {hora: '10', minuto: '30', empresa: 'Guanabara'},
            {hora: '10', minuto: '45', empresa: 'Conceição'},
            {hora: '10', minuto: '50', empresa: 'Via Sul'},
            {hora: '11', minuto: '12', empresa: 'Guanabara'},
            {hora: '11', minuto: '20', empresa: 'Conceição'},
            {hora: '11', minuto: '25', empresa: 'Via Sul'},
            {hora: '11', minuto: '47', empresa: 'Guanabara'},
            {hora: '11', minuto: '55', empresa: 'Conceição'},
            {hora: '12', minuto: '00', empresa: 'Via Sul'},
            {hora: '12', minuto: '25', empresa: 'Guanabara'},
            {hora: '12', minuto: '35', empresa: 'Conceição'},
            {hora: '12', minuto: '40', empresa: 'Via Sul'},
            {hora: '13', minuto: '12', empresa: 'Guanabara'},
            {hora: '13', minuto: '26', empresa: 'Conceição'},
            {hora: '13', minuto: '33', empresa: 'Via Sul'},
            {hora: '14', minuto: '08', empresa: 'Guanabara'},
            {hora: '14', minuto: '22', empresa: 'Conceição'},
            {hora: '14', minuto: '29', empresa: 'Via Sul'},
            {hora: '15', minuto: '04', empresa: 'Guanabara'},
            {hora: '15', minuto: '18', empresa: 'Conceição'},
            {hora: '15', minuto: '25', empresa: 'Via Sul'},
            {hora: '16', minuto: '00', empresa: 'Guanabara'},
            {hora: '16', minuto: '12', empresa: 'Conceição'},
            {hora: '16', minuto: '18', empresa: 'Via Sul'},
            {hora: '16', minuto: '36', empresa: 'Guanabara'},
            {hora: '16', minuto: '48', empresa: 'Conceição'},
            {hora: '16', minuto: '53', empresa: 'Via Sul'},
            {hora: '17', minuto: '15', empresa: 'Guanabara'},
            {hora: '17', minuto: '25', empresa: 'Conceição'},
            {hora: '17', minuto: '35', empresa: 'Via Sul'},
            {hora: '18', minuto: '00', empresa: 'Conceição'},
            {hora: '18', minuto: '14', empresa: 'Via Sul'},
            {hora: '18', minuto: '50', empresa: 'Via Sul'},
            {hora: '19', minuto: '14', empresa: 'Guanabara'},
            {hora: '19', minuto: '40', empresa: 'Conceição'},
            {hora: '20', minuto: '00', empresa: 'Guanabara'},
            {hora: '20', minuto: '32', empresa: 'Conceição'},
            {hora: '20', minuto: '40', empresa: 'Via Sul'},
            {hora: '21', minuto: '20', empresa: 'Guanabara'},
            {hora: '21', minuto: '50', empresa: 'Via Sul'},
            {hora: '22', minuto: '30', empresa: 'Via Sul'}
    ]
  },
  methods: {
    pegarProximoInverso: function(){
      var proximoHorario = [];
      this.listaInverso.forEach(function(item){
        if(new Date().getHours() == item.hora){
          //console.log(item.hora + ":" + item.minuto);
          if(new Date().getMinutes() <= item.minuto){
            console.log(item.hora + ":" + item.minuto);
            proximoHorario.push(item);
          }
        }
      });
      this.proximoInversoHora = "16"//proximoHorario[0].hora;
      this.proximoInversoMinuto = "00"//proximoHorario[0].minuto;
      this.proximoInversoEmpresa = "Guanabara"//proximoHorario[0].empresa;
      console.log(this.proximoInversoEmpresa);
    }
  },
  beforeMount(){
    this.pegarProximoInverso()
 }
})

var circularDireto = new Vue({
  el: '#circular-direto',
  data: {
    horaAtual: new Date().getHours() + ':' + new Date().getMinutes(),
    proximoDiretoHora: '',
    proximoDiretoMinuto: '',
    proximoDiretoEmpresa: '',
    horaAtualizada: "",
    listaDireto: [
      { hora:'06', minuto:'00', empresa:'Guanabara'},
      { hora:'06', minuto:'10', empresa:'Santa Maria'},
      { hora:'06', minuto:'30', empresa:'Reunidas'},
      { hora:'06', minuto:'35', empresa:'Guanabara'},
      { hora:'06', minuto:'40', empresa:'Guanabara'},
      { hora:'06', minuto:'46', empresa:'Guanabara'},
      { hora:'07', minuto:'00', empresa:'Santa Maria'},
      { hora:'07', minuto:'05', empresa:'Reunidas'},
      { hora:'07', minuto:'10', empresa:'Guanabara'},
      { hora:'07', minuto:'18', empresa:'Guanabara'},
      { hora:'07', minuto:'22', empresa:'Santa Maria'},
      { hora:'07', minuto:'35', empresa:'Cidade Natal'},
      { hora:'07', minuto:'40', empresa:'Reunidas'},
      { hora:'07', minuto:'45', empresa:'Guanabara'},
      { hora:'08', minuto:'00', empresa:'Santa Maria'},
      { hora:'08', minuto:'27', empresa:'Cidade Natal'},
      { hora:'08', minuto:'45', empresa:'Guanabara'},
      { hora:'08', minuto:'55', empresa:'Guanabara'},
      { hora:'09', minuto:'15', empresa:'Cidade Natal'},
      { hora:'09', minuto:'35', empresa:'Guanabara'},
      { hora:'09', minuto:'45', empresa:'Santa Maria'},
      { hora:'10', minuto:'05', empresa:'Reunidas'},
      { hora:'10', minuto:'15', empresa:'Guanabara'},
      { hora:'10', minuto:'20', empresa:'Guanabara'},
      { hora:'10', minuto:'25', empresa:'Santa Maria'},
      { hora:'10', minuto:'35', empresa:'Reunidas'},
      { hora:'10', minuto:'55', empresa:'Guanabara'},
      { hora:'11', minuto:'00', empresa:'Cidade Natal'},
      { hora:'11', minuto:'04', empresa:'Guanabara'},
      { hora:'11', minuto:'08', empresa:'Santa Maria'},
      { hora:'11', minuto:'16', empresa:'Reunidas'},
      { hora:'11', minuto:'30', empresa:'Guanabara'},
      { hora:'11', minuto:'35', empresa:'Cidade Natal'},
      { hora:'11', minuto:'38', empresa:'Guanabara'},
      { hora:'11', minuto:'43', empresa:'Santa Maria'},
      { hora:'11', minuto:'51', empresa:'Reunidas'},
      { hora:'12', minuto:'05', empresa:'Guanabara'},
      { hora:'12', minuto:'10', empresa:'Cidade Natal'},
      { hora:'12', minuto:'15', empresa:'Guanabara'},
      { hora:'12', minuto:'20', empresa:'Santa Maria'},
      { hora:'12', minuto:'30', empresa:'Reunidas'},
      { hora:'12', minuto:'45', empresa:'Guanabara'},
      { hora:'12', minuto:'52', empresa:'Cidade Natal'},
      { hora:'12', minuto:'59', empresa:'Guanabara'},
      { hora:'13', minuto:'06', empresa:'Santa Maria'},
      { hora:'13', minuto:'19', empresa:'Reunidas'},
      { hora:'13', minuto:'40', empresa:'Guanabara'},
      { hora:'13', minuto:'47', empresa:'Cidade Natal'},
      { hora:'13', minuto:'54', empresa:'Guanabara'},
      { hora:'14', minuto:'01', empresa:'Santa Maria'},
      { hora:'14', minuto:'15', empresa:'Reunidas'},
      { hora:'14', minuto:'36', empresa:'Guanabara'},
      { hora:'14', minuto:'43', empresa:'Cidade Natal'},
      { hora:'14', minuto:'50', empresa:'Guanabara'},
      { hora:'14', minuto:'57', empresa:'Santa Maria'},
      { hora:'15', minuto:'11', empresa:'Reunidas'},
      { hora:'15', minuto:'32', empresa:'Guanabara'},
      { hora:'15', minuto:'39', empresa:'Cidade Natal'},
      { hora:'15', minuto:'46', empresa:'Guanabara'},
      { hora:'15', minuto:'53', empresa:'Santa Maria'},
      { hora:'16', minuto:'06', empresa:'Reunidas'},
      { hora:'16', minuto:'24', empresa:'Cidade Natal'},
      { hora:'16', minuto:'30', empresa:'Guanabara'},
      { hora:'16', minuto:'42', empresa:'Reunidas'},
      { hora:'17', minuto:'00', empresa:'Cidade Natal'},
      { hora:'17', minuto:'05', empresa:'Guanabara'},
      { hora:'17', minuto:'10', empresa:'Guanabara'},
      { hora:'17', minuto:'20', empresa:'Reunidas'},
      { hora:'17', minuto:'30', empresa:'Santa Maria'},
      { hora:'17', minuto:'40', empresa:'Cidade Natal'},
      { hora:'17', minuto:'45', empresa:'Guanabara'},
      { hora:'17', minuto:'50', empresa:'Guanabara'},
      { hora:'17', minuto:'55', empresa:'Reunidas'},
      { hora:'18', minuto:'07', empresa:'Santa Maria'},
      { hora:'18', minuto:'21', empresa:'Cidade Natal'},
      { hora:'18', minuto:'29', empresa:'Guanabara'},
      { hora:'18', minuto:'36', empresa:'Guanabara'},
      { hora:'18', minuto:'43', empresa:'Santa Maria'},
      { hora:'18', minuto:'58', empresa:'Cidade Natal'},
      { hora:'19', minuto:'06', empresa:'Guanabara'},
      { hora:'19', minuto:'22', empresa:'Santa Maria'},
      { hora:'19', minuto:'30', empresa:'Reunidas'},
      { hora:'19', minuto:'50', empresa:'Guanabara'},
      { hora:'20', minuto:'08', empresa:'Santa Maria'},
      { hora:'20', minuto:'16', empresa:'Reunidas'},
      { hora:'20', minuto:'24', empresa:'Guanabara'},
      { hora:'20', minuto:'50', empresa:'Guanabara'},
      { hora:'21', minuto:'00', empresa:'Cidade Natal'},
      { hora:'21', minuto:'20', empresa:'Santa Maria'},
      { hora:'21', minuto:'30', empresa:'Reunidas'},
      { hora:'21', minuto:'40', empresa:'Guanabara'},
      { hora:'22', minuto:'05', empresa:'Cidade Natal'},
      { hora:'22', minuto:'15', empresa:'Guanabara'},
      { hora:'22', minuto:'40', empresa:'Cidade Natal'},
      { hora:'22', minuto:'50', empresa:'Guanabara'},
    ]
  },
  methods: {
  	atualizaTempo: function(){
      this.horaAtualizada = this.addZero(new Date().getHours()) + ":" + this.addZero(new Date().getMinutes()) + ":" + this.addZero(new Date().getSeconds());
			setTimeout(this.atualizaTempo,1000);		    
		},
    addZero: function(number){
    	if(number < "10"){
      	return number = "0"+ number;
      }
    },
    pegarProximoDireto: function(){
      var proximoHorario = [];
      this.listaDireto.forEach(function(item){
        if(new Date().getHours() == item.hora){
          //console.log(item.hora + ":" + item.minuto);
          if(new Date().getMinutes() <= item.minuto){
            console.log(item.hora + ":" + item.minuto);
            proximoHorario.push(item);
          }
        }
      });
      this.proximoDiretoHora = proximoHorario[0].hora;
      console.log("hora " + this.proximoDiretoHora);
      this.proximoDiretoMinuto = proximoHorario[0].minuto;
      console.log("Minuto " + this.proximoDiretoMinuto);
      this.proximoDiretoEmpresa = proximoHorario[0].empresa;
    }
  },
  beforeMount(){
    this.pegarProximoDireto()
    this.atualizaTempo()
 }
});
