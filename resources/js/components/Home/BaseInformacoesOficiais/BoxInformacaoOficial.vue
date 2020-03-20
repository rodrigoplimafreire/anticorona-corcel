<template>
  <a :href="url">
    <div class="flex flex-col w-full">
      <div class="w-full border border-gray-600 rounded-t-xl rounded-b-lg">
        <div
          class="rounded-t-xl h-40 sm:h-64 flex justify-center items-center bg-cover bg-center"
          :style="`background-image: url(${imagemUrl})`"
        ></div>
        <div class="text-lg font-bold py-2 px-4">
          {{ titulo }}
        </div>
        <div class="text-right w-full px-4 py-2">
          <span class="text-lg font-bold border-b border-black">Saiba mais</span>
        </div>
      </div>
    </div>
  </a>
</template>

<script>
  export default {
    name: 'BoxInformacaoOficial',
    props: {
      imagemUrl: {
        required: true,
        type: String
      },
      descricaoImagem: {
        required: true,
        type: String
      },
      titulo: {
        required: true,
        type: String
      },
      url: {
        required: true,
        type: String
      }
    }
  }
</script>

<style scoped>

</style>
