<template>
  <a
    :href="url"
    target="_blank"
    class="hover:border hover:border-orange"
  >
    <div class="w-full flex md:flex-col xl:flex-row">
      <div class="w-1/3 md:w-full xl:w-1/3 py-2 flex items-center">
        <div
          :data-message="imagemAlt"
          :title="imagemAltResumido"
          class="w-full h-full md:h-24 xl:h-full bg-cover bg-center shadow rounded-lg shadow-lg"
          :style="`background-image: url(${imagemUrl})`"
        ></div>
      </div>

      <div class="w-2/3 md:w-full xl:w-2/3 p-2 pl-4">
        <div class="text-esp-orange font-black text-xl uppercase">
          <h3>{{titulo}}</h3>
        </div>
        <div
          class="text-lg md:text-2xl overflow-hidden"
          style="text-overflow: ellipsis;"
        >
          <p>
            {{descricao}}
          </p>
        </div>
      </div>
    </div>
  </a>
</template>

<script>
  export default {
    name: 'ItemDestaque',
    props: {
      url: {
        required: true,
        type: String
      },
      imagemUrl: {
        required: true,
        type: String
      },
      imagemAlt: {
        required: true,
        type: String
      },
      imagemAltResumido: {
        required: true,
        type: String
      },
      titulo: {
        required: true,
        type: String
      },
      descricao: {
        required: true,
        type: String
      }
    }
  }
</script>

<style scoped>

</style>
