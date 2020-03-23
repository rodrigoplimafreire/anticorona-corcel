<template>
  <div class="flex flex-wrap w-full">
    <div
      v-for="(categoria, index) in categorias"
      :key="index"
      class="flex-1 m-2"
    >
      <button
        @click="$emit('click', categoria)"
        type="button"
        class="text-xl p-2 w-full h-full border rounded-xl hover:bg-orange hover:text-white hover:border-orange hover:shadow"
        :class="{ 'border-b-8 border-orange text-orange': categoria === ativo, 'border-gray-500 text-gray-700' : categoria !== ativo }"
      >
        {{categoria}}
      </button>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'FiltroCategoriasInformacoesOficiais',
    props: {
      ativo: {
        default: 'Todos'
      }
    },
    data () {
      return {
        categorias: [
          'Todos',
          'Artigos e Links',
          'Boletins',
          'Diretrizes',
          'Treinamentos',
          'Vídeos'
        ]
      }
    }
  }
</script>

<style scoped>

</style>
