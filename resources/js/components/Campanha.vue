<template>
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="#" alt="" width="72" height="72">
        <h2>Criar Campanha</h2>
        <p class="lead">Escreva aqui um breve texto explicando como realizar o preenchiemnto da campanha motivando e salientando as principais observações. .</p>
      </div>

      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Dados da Campanha</h4>

          <form class="needs-validation" @submit.prevent="formSubmit" >

            <div class="mb-3">
              <label for="categoria_id">Categoria</label>
                <select class="form-control" name="categoria_id" v-model="campanha.categoria_id">
                    <option value="1">Pedido de Ajuda</option>
                    <option value="2">Cotinha</option>
                    <option value="3">Sonho</option>
                    <option value="4">Casamento</option>
                </select>
            </div>

            <div class="mb-3">
              <label for="titulo">Titulo</label>
              <input class="form-control"  type="text" name="titulo" v-model="campanha.titulo" >
            </div>

            <div class="mb-3">
              <label for="vlr_meta">Meta em R$</label>
              <input class="form-control"  type="text" name="vlr_meta" v-model="campanha.vlr_meta" >
            </div>

            <div class="mb-3">
              <label for="vlr_atingido">VAtingido provisorio</label>
              <input class="form-control"  type="text" name="meta" v-model="campanha.vlr_atingido" >
            </div>

            <div class="mb-3">
              <label for="dt_final">Finaliza em: </label>
               <input class="form-control" type="date"  name="dt_final"  v-model="campanha.dt_final">
            </div>

            <div class="mb-3">
              <label for="link_video">Link do Vídeo </label>
               <input class="form-control" type="text"  name="link_video" v-model="campanha.link_video">
            </div>

            <div class="mb-3">
               <input
               type="file"
               class="d-none"
               ref="input"
               accept="image/*"
               @change="handleFile($event)">

               <button type="button" class="btn-primary btn-lg btn-block"
               @click="openFileDialog"
               >Adicionar Imagem</button>
               <div class="mt-2" v-if="campanha.img">
                   {{campanha.img}}
                    <button
                      type="button"
                      class="btn-primary btn-lg btn-block"
                      @click="campanha.img = ''"
                    ><i class="material-icons md-18">delete</i></button>
               </div>
            </div>

            <div class="mb-3">
              <label for="descricao">Descrição</label>
              <textarea class="form-control" rows="5"  name="descricao" v-model="campanha.descricao" ></textarea>
            </div>


            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Criar Campanha</button>
          </form>
        </div>
      </div>
    </div>


</template>

<script>

  export default {
        mounted() {
            console.log("montado");
        },

      data() {
          return {
            campanha:{
              titulo: "Nome",
              descricao:'',
              vlr_meta:0,
              vlr_atingido:0,
              dt_final:'',
              img:'',
              link_video:'',
              categoria_id:0
            }
          }
      },

      methods: {
          formSubmit(){
              console.log(this.campanha);
            let uri='http://localhost:8000/api/campanha/store';
            axios.post(uri , this.campanha).then((response)=>{
            }).catch(error =>{
                console.log("Erro:"+ error)
            });
          },

          openFileDialog(){
              this.$refs.input.value = null
              this.$refs.input.click()

          },

          handleFile(evt){
              this.campanha.img = evt.target.files[0].name;
              console.log(this.campanha.img);
          }
    },

  }
</script>
