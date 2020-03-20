<template>
  <div class="border border-gray-200 rounded-lg h-full bg-gray-100 flex flex-col justify-between">
    <div class="w-full h-32 flex justify-center">
      <img
        :src="imagem"
        :alt="imagemAlt"
        style="height: 100%; width: 100%;"
      />
    </div>
    <div class="w-full p-5">
      <p class="text-3xl font-bold border-b border-gray-200 pb-2 mb-2">
        {{ title }}
      </p>
      <p class="text-2xl">
      </p>
    </div>
    <div class="flex justify-end mt-6 p-5">
      <a :href="url">
        <button
          class="px-6 py-3 border-2 rounded-r-full rounded-l-full border-gray-700 text-gray-700 hover:shadow hover:text-white hover:boder-gray-700 hover:bg-gray-700 text-2xl"
          type="button"
        >
          Ver mais
        </button>
      </a>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'PostReposta',
    props: {
      title: {
        default: ''
      },
      imagem: {
        default: ''
      },
      imagemAlt: {
        default: ''
      },
      url: {
        default: ''
      }
    }
  }
</script>

<style scoped>

</style>
