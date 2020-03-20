<template>
  <div>
    <div class="my-5">
      <filtro-categorias-informacoes-oficiais
        @click="ativo = $event"
        :ativo="ativo"
      />
    </div>

    <div class="my-5 flex flex-wrap items-center">
      <div v-for="n in 3" :key="n" class="w-full lg:w-1/2 p-5">
        <box-informacao-oficial
          imagem-url="https://qualidadeparasaude.com.br/app/uploads/2019/06/qualidade-em-saude.png"
          titulo="Informações para Profissionais de Saúde"
          descricao-imagem="Imagem ilustrativa do coronavírus"
          url="#"
        />
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'TableFilterBaseInformacoesOficiais',
    data () {
      return {
        ativo: 'Todos'
      }
    }
  }
</script>

<style scoped>

</style>
